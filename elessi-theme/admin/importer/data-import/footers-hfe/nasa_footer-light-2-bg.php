<?php
function nasa_hfe_footer_light_2_bg() {
    $imgs_url_1 = elessi_import_upload('/wp-content/uploads/2023/09/farm-footer-bg.png', '3319', array(
        'post_title' => 'farm-footer-bg',
        'post_name' => 'farm-footer-bg',
    ));
    $imgs_url_src_1 = $imgs_url_1 ? wp_get_attachment_image_url($imgs_url_1, 'full') : 'https://via.placeholder.com/1377x160?text=1377x160';
    
    return array(
        'post' => array(
            'post_title' => 'HFE Footer Light 2 With BG',
            'post_name' => 'hfe-footer-light-2-bg'
        ),
        
        'post_meta' => array(
            '_elementor_data' => '[{"id":"2f1d74f1","elType":"section","settings":{"gap":"no","structure":"30","background_background":"classic","background_image":{"id":3319,"url":' . json_encode($imgs_url_src_1) . '},"background_position":"bottom center","background_repeat":"no-repeat","padding":{"unit":"px","top":"60","right":"0","bottom":"0","left":"0","isLinked":false},"css_classes":" footer-light-2 allow-col-breaks","background_color":"#FFFFFF","padding_tablet":{"unit":"px","top":"40","right":"0","bottom":"0","left":"0","isLinked":false}},"elements":[{"id":"212d7159","elType":"column","settings":{"_column_size":33,"_inline_size":null,"css_classes":"nasa-width-50","padding":{"unit":"px","top":"0","right":"0","bottom":"0","left":"10","isLinked":false}},"elements":[{"id":"2e587dcb","elType":"section","settings":{"structure":"20","layout":"full_width"},"elements":[{"id":"3becd6e4","elType":"column","settings":{"_column_size":50,"_inline_size":null,"padding":{"unit":"px","top":"10","right":"0","bottom":"0","left":"0","isLinked":false},"margin_mobile":{"unit":"px","top":"0","right":"0","bottom":"20","left":"0","isLinked":false},"padding_mobile":{"unit":"px","top":"10","right":"0","bottom":"0","left":"10","isLinked":false}},"elements":[{"id":"4b1b4d22","elType":"widget","settings":{"wp":{"image":"1703","alt":"","link_text":"#","link_target":"","align":"","hide_in_m":"","el_class":"skip-lazy"},"_background_background":"classic","_css_classes":"margin-bottom-0"},"elements":[],"widgetType":"wp-widget-nasa_image"},{"id":"2b580ca2","elType":"widget","settings":{"html":"<ul class=\"contact-information\"><li class=\"media\"><div class=\"contact-text\">Calista Wise 7292 Dictum Av.\nAntonio, Italy.<\/div><\/li><li class=\"media\"><div class=\"contact-text\">(+01)-800-3456-88<\/div><\/li><li class=\"media\"><div class=\"contact-text\"><a href=\"mailto:admin@mail.com\" title=\"Email\">admin@mail.com<\/a><\/div><\/li><li class=\"media\"><div class=\"contact-text\"><a href=\"https:\/\/yourdomain.com\" title=\"yourdomain.com\">yourdomain.com<\/a><\/div><\/li><\/ul>"},"elements":[],"widgetType":"html"}],"isInner":true},{"id":"7a4b68f1","elType":"column","settings":{"_column_size":50,"_inline_size":null},"elements":[{"id":"298dc600","elType":"widget","settings":{"_css_classes":"margin-bottom-0"},"elements":[],"widgetType":"wp-widget-nasa_follow"},{"id":"2310e300","elType":"widget","settings":{"wp":{"title":"","menu":"information","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_menu_sc"}],"isInner":true}],"isInner":true}],"isInner":false},{"id":"b481fa5","elType":"column","settings":{"_column_size":33,"_inline_size":null,"css_classes":"nasa-width-50","padding":{"unit":"px","top":"0","right":"10","bottom":"0","left":"0","isLinked":false},"padding_mobile":{"unit":"px","top":"0","right":"10","bottom":"0","left":"10","isLinked":false}},"elements":[{"id":"6de07ccf","elType":"section","settings":{"layout":"full_width"},"elements":[{"id":"48de7","elType":"column","settings":{"_column_size":100,"_inline_size":null,"padding":{"unit":"px","top":"5","right":"0","bottom":"0","left":"0","isLinked":false},"css_classes":"footer-contact"},"elements":[{"id":"1869ac25","elType":"widget","settings":{"shortcode":"[contact-form-7 id=\"210\" title=\"Elessi Newsletter Footer\"]","_margin":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":false}},"elements":[],"widgetType":"shortcode"}],"isInner":true}],"isInner":true},{"id":"58ac8fe6","elType":"section","settings":{"structure":"20","layout":"full_width","gap":"no"},"elements":[{"id":"353ea37b","elType":"column","settings":{"_column_size":50,"_inline_size":44.88,"padding":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":true},"padding_mobile":{"unit":"px","top":"0","right":"0","bottom":"0","left":"10","isLinked":false}},"elements":[{"id":"563f9cb0","elType":"widget","settings":{"wp":{"title":"","menu":"customer-care","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_menu_sc"}],"isInner":true},{"id":"613595ca","elType":"column","settings":{"_column_size":50,"_inline_size":55.12,"padding":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":false},"padding_mobile":{"unit":"px","top":"0","right":"0","bottom":"0","left":"10","isLinked":false}},"elements":[{"id":"75b83544","elType":"widget","settings":{"html":"<ul class=\"nasa-opening-time\"><li><span class=\"nasa-day-open\">Monday - Friday<\/span><span class=\"nasa-time-open\">08:00 - 20:00<\/span><\/li><li><span class=\"nasa-day-open\">Saturday<\/span><span class=\"nasa-time-open\">09:00 - 21:00<\/span><\/li><li><span class=\"nasa-day-open\">Sunday<\/span><span class=\"nasa-time-open\">13:00 - 22:00<\/span><\/li><\/ul>","_padding":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":true},"_css_classes":"margin-bottom-0 margin-top-0"},"elements":[],"widgetType":"html"},{"id":"46bb3216","elType":"widget","settings":{"wp":{"image":"1698","alt":"","link_text":"","link_target":"","align":"right","hide_in_m":"","el_class":"margin-top-30"}},"elements":[],"widgetType":"wp-widget-nasa_image"}],"isInner":true}],"isInner":true}],"isInner":false},{"id":"5adf8d95","elType":"column","settings":{"_column_size":33,"_inline_size":null,"content_position":"center","css_classes":"nasa-width-100","padding":{"unit":"px","top":"0","right":"0","bottom":"20","left":"10","isLinked":false}},"elements":[{"id":"75bec2ce","elType":"section","settings":{"structure":"20","margin":{"unit":"px","top":"0","right":0,"bottom":"0","left":0,"isLinked":false},"css_classes":"nasa-footer-bottom nasa-transparent","background_background":"classic","margin_mobile":{"unit":"px","top":"30","right":0,"bottom":"0","left":0,"isLinked":false}},"elements":[{"id":"5e0a3a23","elType":"column","settings":{"_column_size":50,"_inline_size":38,"content_position":"center","padding":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":false},"margin_mobile":{"unit":"px","top":"0","right":"0","bottom":"10","left":"0","isLinked":false}},"elements":[{"id":"7d153fba","elType":"widget","settings":{"editor":"<p style=\"padding-bottom: 0;\">\u00a9 ' . date('Y') . ' - All Right reserved!<\/p>","align":"left","text_color":"#333333","align_tablet":"left","typography_line_height":{"unit":"em","size":0,"sizes":[]},"align_mobile":"center"},"elements":[],"widgetType":"text-editor"}],"isInner":true},{"id":"a81aefb","elType":"column","settings":{"_column_size":50,"_inline_size":62,"content_position":"center","text_align":"right","padding":{"unit":"px","top":"0","right":"10","bottom":"0","left":"0","isLinked":false}},"elements":[{"id":"48120870","elType":"widget","settings":{"wp":{"title":"","menu":"reserved-menu","el_class":"nasa-menu-inline"}},"elements":[],"widgetType":"wp-widget-nasa_menu_sc"}],"isInner":true}],"isInner":true}],"isInner":false}],"isInner":false}]',
            
            '_elementor_css' => 'a:6:{s:4:"time";i:1649562521;s:5:"fonts";a:0:{}s:5:"icons";a:0:{}s:20:"dynamic_elements_ids";a:0:{}s:6:"status";s:4:"file";i:0;s:0:"";}',
        ),

        'css' => '.elementor-[inserted_id] .elementor-element.elementor-element-2f1d74f1:not(.elementor-motion-effects-element-type-background), .elementor-[inserted_id] .elementor-element.elementor-element-2f1d74f1 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#FFFFFF;background-image:url("' . $imgs_url_src_1 . '");background-position:bottom center;background-repeat:no-repeat;}.elementor-[inserted_id] .elementor-element.elementor-element-2f1d74f1{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:60px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-2f1d74f1 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-[inserted_id] .elementor-element.elementor-element-212d7159 > .elementor-element-populated{padding:0px 0px 0px 10px;}.elementor-[inserted_id] .elementor-element.elementor-element-3becd6e4 > .elementor-element-populated{padding:10px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-b481fa5 > .elementor-element-populated{padding:0px 10px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-48de7 > .elementor-element-populated{padding:5px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-1869ac25 > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-353ea37b > .elementor-element-populated{padding:0px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-613595ca > .elementor-element-populated{padding:0px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-75b83544 > .elementor-widget-container{padding:0px 0px 0px 0px;}.elementor-bc-flex-widget .elementor-[inserted_id] .elementor-element.elementor-element-5adf8d95.elementor-column .elementor-widget-wrap{align-items:center;}.elementor-[inserted_id] .elementor-element.elementor-element-5adf8d95.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center;}.elementor-[inserted_id] .elementor-element.elementor-element-5adf8d95 > .elementor-element-populated{padding:0px 0px 20px 10px;}.elementor-[inserted_id] .elementor-element.elementor-element-75bec2ce{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:0px;margin-bottom:0px;}.elementor-[inserted_id] .elementor-element.elementor-element-75bec2ce > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-bc-flex-widget .elementor-[inserted_id] .elementor-element.elementor-element-5e0a3a23.elementor-column .elementor-widget-wrap{align-items:center;}.elementor-[inserted_id] .elementor-element.elementor-element-5e0a3a23.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center;}.elementor-[inserted_id] .elementor-element.elementor-element-5e0a3a23 > .elementor-element-populated{padding:0px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-7d153fba{text-align:left;color:#333333;}.elementor-bc-flex-widget .elementor-[inserted_id] .elementor-element.elementor-element-a81aefb.elementor-column .elementor-widget-wrap{align-items:center;}.elementor-[inserted_id] .elementor-element.elementor-element-a81aefb.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center;}.elementor-[inserted_id] .elementor-element.elementor-element-a81aefb > .elementor-element-populated{text-align:right;padding:0px 10px 0px 0px;}@media(min-width:768px){.elementor-[inserted_id] .elementor-element.elementor-element-353ea37b{width:44.88%;}.elementor-[inserted_id] .elementor-element.elementor-element-613595ca{width:55.12%;}.elementor-[inserted_id] .elementor-element.elementor-element-5e0a3a23{width:38%;}.elementor-[inserted_id] .elementor-element.elementor-element-a81aefb{width:62%;}}@media(max-width:1024px){.elementor-[inserted_id] .elementor-element.elementor-element-2f1d74f1{padding:40px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-7d153fba{text-align:left;}}@media(max-width:767px){.elementor-[inserted_id] .elementor-element.elementor-element-3becd6e4 > .elementor-element-populated{margin:0px 0px 20px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:10px 0px 0px 10px;}.elementor-[inserted_id] .elementor-element.elementor-element-b481fa5 > .elementor-element-populated{padding:0px 10px 0px 10px;}.elementor-[inserted_id] .elementor-element.elementor-element-353ea37b > .elementor-element-populated{padding:0px 0px 0px 10px;}.elementor-[inserted_id] .elementor-element.elementor-element-613595ca > .elementor-element-populated{padding:0px 0px 0px 10px;}.elementor-[inserted_id] .elementor-element.elementor-element-75bec2ce{margin-top:30px;margin-bottom:0px;}.elementor-[inserted_id] .elementor-element.elementor-element-5e0a3a23 > .elementor-element-populated{margin:0px 0px 10px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-[inserted_id] .elementor-element.elementor-element-7d153fba{text-align:center;}}'
    );
}
