<?php
/**
 * Display single product reviews (comments)
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  NasaTheme
 * @package Elessi-theme/WooCommerce
 * @version 4.3.0
 */
if (!defined('ABSPATH')) :
    exit; // Exit if accessed directly.
endif;

if (!comments_open()) :
    return;
endif;

global $product;

$ratings = $product->get_rating_count();
$rating_item = array(
    5 => $product->get_rating_count(5),
    4 => $product->get_rating_count(4),
    3 => $product->get_rating_count(3),
    2 => $product->get_rating_count(2),
    1 => $product->get_rating_count(1)
);

$count = $product->get_review_count();

$reviewForm = (get_option('woocommerce_review_rating_verification_required') === 'no' || wc_customer_bought_product('', get_current_user_id(), $product->get_id())) ? true : false;

$classStatistic = 'nasa-statistic-ratings';
if (!$reviewForm) :
    $classStatistic .= ' fullwidth';
endif;

?>
<div id="reviews" class="woocommerce-Reviews">
    <!-- Show statistic Ratings -->
    <div class="<?php echo esc_attr($classStatistic); ?>">
        <?php /* h2>
            <?php echo esc_html__('Customer reviews', 'elessi-theme'); ?>
        </h2 */?>
        <div class="nasa-avg-rating">
            <span class="avg-rating-number">
                <?php echo 0 < $count ? $product->get_average_rating() : '0.00'; ?>
            </span>
            <div class="star-rating">
                <span style="width: <?php echo 0 < $count ? esc_attr($product->get_average_rating()/5 * 100) : 0; ?>%"></span>
            </div>
            
            <?php echo sprintf(esc_html__('%s reviews', 'elessi-theme'), $count); ?>
        </div>

        <table class="nasa-rating-bars">
            <tbody>
                <?php for ($i = 5; $i >= 1; $i--): ?>
                    <?php
                    echo '<!-- ' . $i . ' stars -->';
                    $per = ($ratings > 0 && isset($rating_item[$i])) ? round($rating_item[$i] / $ratings * 100, 2) : 0;
                    ?>

                    <tr class="nasa-rating-bar">
                        <td class="star-rating-wrap">
                            <span>
                                <?php echo $i; ?>
                                <svg height="17" width="17" viewBox="0 0 24 24" ><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                            </span>
                        </td>
                        <td class="nasa-rating-per-wrap">
                            <div class="nasa-rating-per">
                                <span style="width: <?php echo esc_attr($per); ?>%" class="nasa-per-content"></span>
                            </div>
                        </td>
                        <td class="nasa-ratings-number text-center rtl-text-left">
                            <?php echo $rating_item[$i]; ?>
                        </td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>

    <?php if ($reviewForm) : ?>
        <div id="review_form_wrapper">
            <a class="ns-form-close nasa-stclose close-review-form" href="javascript:void(0);" rel="nofollow"></a>
            <div id="review_form">
                <?php
                $commenter = wp_get_current_commenter();

                $comment_form = array(
                    /* translators: %s is product title */
                    'title_reply' => have_comments() ? sprintf(__('Add a review &ldquo;%s&rdquo;', 'elessi-theme'),get_the_title()) : sprintf(__('Be the first to review &ldquo;%s&rdquo;', 'elessi-theme'), get_the_title()),
                    /* translators: %s is product title */
                    'title_reply_to' => __('Leave a Reply to %s', 'elessi-theme'),
                    'title_reply_before' => '<span class="nasa-error nasa-message"></span><span class="nasa-success nasa-message"></span><span id="reply-title" class="comment-reply-title">',
                    'title_reply_after' => '</span>',
                    'comment_notes_after' => '',
                    'fields' => array(
                        'author' => '<p class="comment-form-author"><label for="author">' . esc_html__('Name', 'elessi-theme') . '&nbsp;<span class="required">*</span></label> ' .
                        '<input id="author" name="author" type="text" placeholder="' . esc_html__('Name *', 'elessi-theme') . '" value="' . esc_attr($commenter['comment_author']) . '" size="30" required /></p>',
                        'email' => '<p class="comment-form-email"><label for="email" data-valid-alert="' . esc_html__('Please enter a valid email address', 'elessi-theme') . '" data-required-alert="' . esc_html__('Email', 'elessi-theme') . '">' . esc_html__('Email', 'elessi-theme') . '&nbsp;<span class="required">*</span></label> ' .
                        '<input id="email" name="email" type="email" placeholder="' . esc_html__('Email *', 'elessi-theme') . '" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" required /></p>',
                    ),
                    'label_submit' => __('Submit', 'elessi-theme'),
                    'id_submit' => 'nasa-submit',
                    'logged_in_as' => '',
                    'comment_field' => '',
                );

                $account_page_url = wc_get_page_permalink('myaccount');
                if ($account_page_url) :
                    /* Redirect back product after logged in */
                    $account_page_url = add_query_arg('redirect_to', $product->get_permalink(), $account_page_url);
                    
                    /* translators: %s opening and closing link tags respectively */
                    $comment_form['must_log_in'] = '<p class="must-log-in">' . sprintf(esc_html__('You must be %1$slogged in%2$s to post a review.', 'elessi-theme'), '<a href="' . esc_url($account_page_url) . '">', '</a>') . '</p>';
                    
                    global $nasa_opt;
                    
                    $login_ajax = !NASA_CORE_USER_LOGGED && (!isset($nasa_opt['login_ajax']) || $nasa_opt['login_ajax'] == 1) ? true : false;
                    
                    if ($login_ajax) :
                        echo '<a class="hidden-tag nasa-login-register-ajax" data-enable="1" href="' . esc_url($account_page_url) . '" rel="nofollow"></a>';
                    endif;
                    
                endif;

                if (wc_review_ratings_enabled()) {
                    $comment_form['comment_field'] = '<div class="comment-form-rating"><label for="rating">' . esc_html__('Your rating', 'elessi-theme') . '&nbsp;<span class="required">*</span></label><select name="rating" id="rating" required>' .
                        '<option value="">' . esc_html__('Rate&hellip;', 'elessi-theme') . '</option>' .
                        '<option value="5">' . esc_html__('Perfect', 'elessi-theme') . '</option>' .
                        '<option value="4">' . esc_html__('Good', 'elessi-theme') . '</option>' .
                        '<option value="3">' . esc_html__('Average', 'elessi-theme') . '</option>' .
                        '<option value="2">' . esc_html__('Not that bad', 'elessi-theme') . '</option>' .
                        '<option value="1">' . esc_html__('Very poor', 'elessi-theme') . '</option>' .
                    '</select></div>';
                }

                $comment_form['comment_field'] .= '<p class="comment-form-comment"><label for="comment">' . esc_html__('Your review', 'elessi-theme') . '&nbsp;<span class="required">*</span></label><textarea id="comment" name="comment" placeholder="' . esc_html__('Your review *', 'elessi-theme') . '" cols="45" rows="8" required></textarea></p>';

                comment_form(apply_filters('woocommerce_product_review_comment_form_args', $comment_form));
                ?>
            </div>
        </div>
        <div class="nasa_reviewed_images_wrap">

            <?php /*h2><?php esc_html_e('Customer photos', 'elessi-theme'); ?></h2*/?>
            <div class="nasa_reviewed_images slick-slider"></div>
            <a class="button btn-add-new-review" href="javascript:void(0);" rel="nofollow"><?php echo(have_comments() ? __('Write a review', 'elessi-theme') : sprintf(__('Be the first to review &ldquo;%s&rdquo;', 'elessi-theme'), get_the_title())); ?></a>
        </div>
        
    <?php else : ?>
        <p class="woocommerce-verification-required"><?php esc_html_e('Only logged in customers who have purchased this product may leave a review.', 'elessi-theme'); ?></p>
    <?php endif; ?>

    <div class="nasa-clear-both"></div>
    
    <div id="comments">
        <h2 class="woocommerce-Reviews-title">
            <?php
            if ($count && wc_review_ratings_enabled()) :
                /* translators: 1: reviews count 2: product name */
                $reviews_title = sprintf(esc_html(_n('%1$s review for %2$s', '%1$s reviews for %2$s', $count, 'elessi-theme')), esc_html($count), '<span>' . get_the_title() . '</span>');
                echo apply_filters('woocommerce_reviews_title', $reviews_title, $count, $product); // WPCS: XSS ok.
            else :
                esc_html_e('Reviews', 'elessi-theme');
            endif;
            ?>
        </h2>

        <?php if (have_comments()) : ?>
            <ol class="commentlist">
                <?php wp_list_comments(apply_filters('woocommerce_product_review_list_args', array('callback' => 'woocommerce_comments'))); ?>
            </ol>
            
            <?php
            if (get_comment_pages_count() > 1 && get_option('page_comments')) :
                echo '<nav class="woocommerce-pagination">';

                paginate_comments_links(
                    apply_filters('woocommerce_comment_pagination_args', array(
                        'prev_text' => '<svg width="35" height="35" viewBox="0 0 32 32" fill="currentColor"><path d="M12.792 15.233l-0.754 0.754 6.035 6.035 0.754-0.754-5.281-5.281 5.256-5.256-0.754-0.754-3.013 3.013z"/></svg>',
                        'next_text' => '<svg width="35" height="35" viewBox="0 0 32 32" fill="currentColor"><path d="M19.159 16.767l0.754-0.754-6.035-6.035-0.754 0.754 5.281 5.281-5.256 5.256 0.754 0.754 3.013-3.013z"/></svg>',
                        'type' => 'list'
                    ))
                );

                echo '</nav>';
            endif;
            ?>
        <?php else : ?>
            <p class="woocommerce-noreviews"><?php esc_html_e('There are no reviews yet.', 'elessi-theme'); ?></p>
        <?php endif; ?>
    </div>

    <div class="clear"></div>
</div>
