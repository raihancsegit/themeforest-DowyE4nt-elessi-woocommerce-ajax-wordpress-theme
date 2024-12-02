<?php
defined('ABSPATH') || exit;

$attachment_ids = get_comment_meta($comment->comment_ID, 'nasa_review_images', true);
$svg = '<svg fill="currentColor" width="18" height="18" viewBox="0 0 32 32">
            <path d="M11.202 4.271v-1.066h-7.997v7.997h1.066v-6.177l7.588 7.588 0.754-0.754-7.588-7.588z"/>
            <path d="M20.798 3.205v1.066h6.177l-7.588 7.588 0.754 0.754 7.588-7.588v6.177h1.066v-7.997z"/>
            <path d="M11.859 19.387l-7.588 7.588v-6.177h-1.066v7.997h7.997v-1.066h-6.177l7.588-7.588z"/>
            <path d="M27.729 26.975l-7.588-7.588-0.754 0.754 7.588 7.588h-6.177v1.066h7.997v-7.997h-1.066z"/>
        </svg>';

$svg1 = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none">
        <path d="M4.02693 18.329C4.18385 19.277 5.0075 20 6 20H18C19.1046 20 20 19.1046 20 18V14.1901M4.02693 18.329C4.00922 18.222 4 18.1121 4 18V6C4 4.89543 4.89543 4 6 4H18C19.1046 4 20 4.89543 20 6V14.1901M4.02693 18.329L7.84762 14.5083C8.52765 13.9133 9.52219 13.8482 10.274 14.3494L10.7832 14.6888C11.5078 15.1719 12.4619 15.1305 13.142 14.5865L15.7901 12.4679C16.4651 11.9279 17.4053 11.8856 18.1228 12.3484C18.2023 12.3997 18.2731 12.4632 18.34 12.5302L20 14.1901M11 9C11 10.1046 10.1046 11 9 11C7.89543 11 7 10.1046 7 9C7 7.89543 7.89543 7 9 7C10.1046 7 11 7.89543 11 9Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>';
$urls = [];
if (!empty($attachment_ids)) :
    foreach ($attachment_ids as $attachment_id){
        $urls[] = wp_get_attachment_url($attachment_id, 'full');
    }

    $first_attachment_id = reset($attachment_ids);
    $type_file = get_post_mime_type($first_attachment_id);
    $url = wp_get_attachment_url($first_attachment_id, 'full');
    
    if(!$url) {
        return;
    }

    if (in_array($type_file, array("image/jpg", "image/jpeg", "image/bmp", "image/png", "image/gif", "image/webp"))) {
        $media = wp_get_attachment_image($first_attachment_id, apply_filters('nasa_reivew_product_thumbnail_size', 'thumbnail'), false, array('class' => 'skip-lazy attachment-thumbnail size-thumbnail'));
    } else {
        $media = '<video src="' . esc_url($url) . '"></video>';
    }
    
    if ($media) :
?>
    <div class="nasa-wrap-review-thumb nasa-flex" id="nasa-wrap-review-<?php echo esc_attr($comment->comment_ID); ?>" data-img-review="<?php echo esc_attr__(json_encode($urls))?>">
        <a title="<?php echo esc_attr__('Review Product by Images', 'elessi-theme'); ?>" data-li-id="<?php echo 'li-comment-' . esc_attr($comment->comment_ID); ?>" class="nasa-item-review-thumb" href="<?php echo esc_url($url); ?>">
            <?php echo apply_filters('nasa_reivew_product_thumbnail_html', $media, $first_attachment_id); ?>
            <span class="svg-wrap">
                <?php echo($svg)?>
            </span>
            <span class="ns-review-img-count"><?php echo(count($attachment_ids) . $svg1)?></span>
        </a>
    </div>
<?php
    endif;
endif;
