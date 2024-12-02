<?php
function nasa_elm_bag() {
    $imgs_1 = elessi_import_upload('/wp-content/uploads/2018/12/bag-testimonial-bg-2.jpg', '0', array(
        'post_title' => 'bag-testimonial-bg-2',
        'post_name' => 'bag-testimonial-bg-2',
    ));
    $imgs_1_src = $imgs_1 ? wp_get_attachment_image_url($imgs_1, 'full') : 'https://via.placeholder.com/1920x778';
    
    $brand_1 = elessi_import_upload('/wp-content/uploads/2017/09/brand-1.jpg', '3074', array(
        'post_title' => 'Brand IMG 1',
        'post_name' => 'brand-1',
    ));
    $brand_2 = elessi_import_upload('/wp-content/uploads/2017/09/brand-2.jpg', '3074', array(
        'post_title' => 'Brand IMG 2',
        'post_name' => 'brand-2',
    ));
    $brand_3 = elessi_import_upload('/wp-content/uploads/2017/09/brand-3.jpg', '3074', array(
        'post_title' => 'Brand IMG 3',
        'post_name' => 'brand-3',
    ));
    $brand_4 = elessi_import_upload('/wp-content/uploads/2017/09/brand-4.jpg', '3074', array(
        'post_title' => 'Brand IMG 4',
        'post_name' => 'brand-4',
    ));
    $brand_5 = elessi_import_upload('/wp-content/uploads/2017/09/brand-5.jpg', '3074', array(
        'post_title' => 'Brand IMG 5',
        'post_name' => 'brand-5',
    ));
    $brand_6 = elessi_import_upload('/wp-content/uploads/2017/09/brand-6.jpg', '3074', array(
        'post_title' => 'Brand IMG 6',
        'post_name' => 'brand-6',
    ));
    
    return array(
        'post' => array(
            'post_title' => 'ELM Bag',
            'post_name' => 'elm-bag'
        ),
        
        'post_meta' => array(
            '_elementor_data' => '[{"id":"32cf68a0","elType":"section","settings":{"layout":"full_width","gap":"no"},"elements":[{"id":"2f01d60a","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"599d840","elType":"widget","settings":{"revslidertitle":"Slider Bag","shortcode":"[rev_slider alias=\"slider-bag\" slidertitle=\"Slider Bag\"][\/rev_slider]"},"elements":[],"widgetType":"slider_revolution"}],"isInner":false}],"isInner":false},{"id":"f53105d","elType":"section","settings":{"layout":"full_width","gap":"no"},"elements":[{"id":"3786ac68","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"69693a3c","elType":"widget","settings":{"wp":{"title":"","list_cats":"coats-and-jackets-woman, dresses-woman, jeans-woman, knit-woman, outerwear-woman, puffer-jackets-woman, sweaters-woman","number":"0","disp_type":"Horizontal5","parent":"true","root_cat":"","hide_empty":"1","columns_number":"6","columns_number_small":"2","columns_number_tablet":"4","number_vertical":"4","auto_slide":"false","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_product_categories_sc"}],"isInner":false}],"isInner":false},{"id":"122f8e87","elType":"section","settings":{"css_classes":"desktop-margin-top-50 mobile-margin-top-30"},"elements":[{"id":"612b1a4d","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"eafceb5","elType":"widget","settings":{"title":"Trendy item","align":"center","title_color":"#333333","typography_typography":"custom","typography_font_family":"Jost","typography_font_weight":"800","size":"large","header_size":"h3"},"elements":[],"widgetType":"heading"},{"id":"69419551","elType":"widget","settings":{"wp":{"title":"","desc":"","alignment":"center","style":"2d-no-border","tabs":{"1603386304507":{"tab_title":"BACKPACKS","type":"recent_product","style":"grid","style_viewmore":"1","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"1","arrows":"1","dots":"false","auto_slide":"false","number":"8","auto_delay_time":"6","columns_number":"4","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""},"1603386427250":{"tab_title":"HANDBAGS","type":"recent_product","style":"grid","style_viewmore":"1","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"0","dots":"false","auto_slide":"false","number":"8","auto_delay_time":"6","columns_number":"4","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""},"1603386467942":{"tab_title":"ON SALE","type":"recent_product","style":"grid","style_viewmore":"1","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"1","arrows":"0","dots":"false","auto_slide":"false","number":"8","auto_delay_time":"6","columns_number":"4","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""},"1603386510457":{"tab_title":"FEATURED","type":"recent_product","style":"grid","style_viewmore":"1","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"1","arrows":"0","dots":"false","auto_slide":"false","number":"8","auto_delay_time":"6","columns_number":"4","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""}},"el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_products_tabs_sc"}],"isInner":false}],"isInner":false},{"id":"54a21bdd","elType":"section","settings":{"structure":"34","background_background":"classic","background_image":{"id":3740,"url":' . json_encode($imgs_1_src) . '},"background_position":"center center","background_repeat":"no-repeat","background_size":"initial","padding":{"unit":"px","top":"80","right":"0","bottom":"100","left":"0","isLinked":false},"background_image_mobile":{"id":3741,"url":"https:\/\/via.placeholder.com\/636x636?text=636x636"},"margin":{"unit":"px","top":"30","right":0,"bottom":"0","left":0,"isLinked":false}},"elements":[{"id":"3fed3889","elType":"column","settings":{"_column_size":16,"_inline_size":null},"elements":[{"id":"36292f14","elType":"widget","settings":{"hide_mobile":"hidden-phone"},"elements":[],"widgetType":"spacer"}],"isInner":false},{"id":"24eea5aa","elType":"column","settings":{"_column_size":66,"_inline_size":null},"elements":[{"id":"4c7d53c","elType":"widget","settings":{"testimonial_content":"<p>\"Quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium\"<\/p>","testimonial_image":{"id":2883,"url":"https:\/\/via.placeholder.com\/100x100?text=100x100"},"testimonial_name":"John Doe","testimonial_job":"CEO & Founder NasaTheme","content_content_color":"#555555","job_text_color":"#54595F","_padding_mobile":{"unit":"px","top":"0","right":"30","bottom":"0","left":"30","isLinked":false},"content_typography_typography":"custom","content_typography_font_family":"Jost","content_typography_font_weight":"400","content_typography_font_style":"italic","name_text_color":"#333333","name_typography_typography":"custom","name_typography_font_family":"Jost","name_typography_font_weight":"800","job_typography_typography":"custom","job_typography_font_family":"Jost","job_typography_font_weight":"400","testimonial_image_position":"top"},"elements":[],"widgetType":"testimonial"}],"isInner":false},{"id":"3d3e4391","elType":"column","settings":{"_column_size":16,"_inline_size":null},"elements":[{"id":"62261ffb","elType":"widget","settings":{"hide_mobile":"hidden-phone"},"elements":[],"widgetType":"spacer"}],"isInner":false}],"isInner":false},{"id":"51b93958","elType":"section","settings":{"structure":"30","css_classes":"margin-top-50 tablet-margin-top-40 mobile-margin-top-40"},"elements":[{"id":"47f243e2","elType":"column","settings":{"_column_size":33,"_inline_size":null},"elements":[{"id":"2ba58ca","elType":"widget","settings":{"title":"Top Rated","header_size":"h3","title_color":"#333333","typography_typography":"custom","typography_font_family":"Jost","typography_font_weight":"800","text_shadow_text_shadow_type":"yes","text_shadow_text_shadow":{"horizontal":0,"vertical":0,"blur":0,"color":"rgba(0,0,0,0.3)"},"_css_classes":"margin-bottom-30"},"elements":[],"widgetType":"heading"},{"id":"73ddb3e6","elType":"widget","settings":{"wp":{"title_shortcode":"","type":"recent_product","style":"list","style_viewmore":"1","style_row":"3","pos_nav":"top","title_align":"left","shop_url":"1","arrows":"1","dots":"true","auto_slide":"false","number":"3","auto_delay_time":"6","columns_number":"1","columns_number_small":"1","columns_number_small_slider":"1","columns_number_tablet":"1","cat":"","not_in":"","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_products_sc"}],"isInner":false},{"id":"2bd1e3a3","elType":"column","settings":{"_column_size":33,"_inline_size":null},"elements":[{"id":"1d16d7e9","elType":"widget","settings":{"title":"Best Selling","header_size":"h3","title_color":"#333333","typography_typography":"custom","typography_font_family":"Jost","typography_font_weight":"800","text_shadow_text_shadow_type":"yes","text_shadow_text_shadow":{"horizontal":0,"vertical":0,"blur":0,"color":"rgba(0,0,0,0.3)"},"_css_classes":"margin-bottom-30"},"elements":[],"widgetType":"heading"},{"id":"6c29b469","elType":"widget","settings":{"wp":{"title_shortcode":"","type":"recent_product","style":"list","style_viewmore":"1","style_row":"3","pos_nav":"top","title_align":"left","shop_url":"1","arrows":"1","dots":"true","auto_slide":"false","number":"3","auto_delay_time":"6","columns_number":"1","columns_number_small":"1","columns_number_small_slider":"1","columns_number_tablet":"1","cat":"","not_in":"","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_products_sc"}],"isInner":false},{"id":"78af28c3","elType":"column","settings":{"_column_size":33,"_inline_size":null},"elements":[{"id":"7cc2d48b","elType":"widget","settings":{"title":"On Sale\u200b","header_size":"h3","title_color":"#333333","typography_typography":"custom","typography_font_family":"Jost","typography_font_weight":"800","text_shadow_text_shadow_type":"yes","text_shadow_text_shadow":{"horizontal":0,"vertical":0,"blur":0,"color":"rgba(0,0,0,0.3)"},"_css_classes":"margin-bottom-30"},"elements":[],"widgetType":"heading"},{"id":"4d22a1d3","elType":"widget","settings":{"wp":{"title_shortcode":"","type":"recent_product","style":"list","style_viewmore":"1","style_row":"3","pos_nav":"top","title_align":"left","shop_url":"1","arrows":"1","dots":"true","auto_slide":"false","number":"3","auto_delay_time":"6","columns_number":"1","columns_number_small":"1","columns_number_small_slider":"1","columns_number_tablet":"1","cat":"","not_in":"","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_products_sc"}],"isInner":false}],"isInner":false},{"id":"5dc2ea35","elType":"section","settings":{"css_classes":"margin-top-30"},"elements":[{"id":"73a35ec6","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"6840357c","elType":"widget","settings":{"title":"Latest blog","size":"large","header_size":"h3","align":"center","title_color":"#000000","typography_typography":"custom","typography_font_family":"Jost","typography_font_weight":"800","_css_classes":"margin-bottom-5"},"elements":[],"widgetType":"heading"},{"id":"273efbdc","elType":"widget","settings":{"editor":"<p class=\"nasa-title-desc text-center margin-bottom-0\">The freshest and most exciting news<\/p>"},"elements":[],"widgetType":"text-editor"},{"id":"210ea9b7","elType":"widget","settings":{"wp":{"title":"","show_type":"slide","auto_slide":"false","arrows":"1","dots":"false","posts":"8","columns_number":"3","columns_number_small":"1","columns_number_small_slider":"1","columns_number_tablet":"2","category":"","cats_enable":"yes","date_enable":"yes","author_enable":"yes","readmore":"yes","date_author":"bot","des_enable":"no","page_blogs":"no","info_align":"left","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_post_sc"}],"isInner":false}],"isInner":false},{"id":"c1c268d","elType":"section","settings":{"css_classes":"margin-top-30 margin-bottom-50"},"elements":[{"id":"2d16be5","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"f668323","elType":"widget","settings":{"wp":{"title":"","align":"center","sliders":{"1605886645649":{"img_src":"' . $brand_1 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886663901":{"img_src":"' . $brand_2 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886673562":{"img_src":"' . $brand_3 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886691185":{"img_src":"' . $brand_4 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886702478":{"img_src":"' . $brand_5 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886713208":{"img_src":"' . $brand_6 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""}},"bullets":"false","bullets_pos":"","bullets_align":"center","navigation":"true","column_number":"6","column_number_small":"3","column_number_tablet":"4","padding_item":"","padding_item_small":"","padding_item_medium":"","autoplay":"false","paginationspeed":"300","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_sliders_sc"}],"isInner":false}],"isInner":false}]',
            '_elementor_controls_usage' => 'a:12:{s:27:"wp-widget-rev-slider-widget";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:6:"column";a:3:{s:5:"count";i:11;s:15:"control_percent";i:0;s:8:"controls";a:1:{s:6:"layout";a:1:{s:6:"layout";a:1:{s:12:"_inline_size";i:11;}}}}s:7:"section";a:3:{s:5:"count";i:7;s:15:"control_percent";i:0;s:8:"controls";a:3:{s:6:"layout";a:2:{s:14:"section_layout";a:2:{s:6:"layout";i:2;s:3:"gap";i:2;}s:17:"section_structure";a:1:{s:9:"structure";i:2;}}s:8:"advanced";a:1:{s:16:"section_advanced";a:3:{s:11:"css_classes";i:4;s:7:"padding";i:1;s:6:"margin";i:1;}}s:5:"style";a:1:{s:18:"section_background";a:6:{s:21:"background_background";i:1;s:16:"background_image";i:1;s:19:"background_position";i:1;s:17:"background_repeat";i:1;s:15:"background_size";i:1;s:23:"background_image_mobile";i:1;}}}}s:36:"wp-widget-nasa_product_categories_sc";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:7:"heading";a:3:{s:5:"count";i:5;s:15:"control_percent";i:4;s:8:"controls";a:3:{s:7:"content";a:1:{s:13:"section_title";a:4:{s:5:"title";i:5;s:5:"align";i:2;s:4:"size";i:2;s:11:"header_size";i:5;}}s:5:"style";a:1:{s:19:"section_title_style";a:6:{s:11:"title_color";i:5;s:21:"typography_typography";i:5;s:22:"typography_font_family";i:5;s:22:"typography_font_weight";i:5;s:28:"text_shadow_text_shadow_type";i:3;s:23:"text_shadow_text_shadow";i:3;}}s:8:"advanced";a:1:{s:14:"_section_style";a:1:{s:12:"_css_classes";i:4;}}}}s:31:"wp-widget-nasa_products_tabs_sc";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:6:"spacer";a:3:{s:5:"count";i:2;s:15:"control_percent";i:1;s:8:"controls";a:1:{s:8:"advanced";a:1:{s:19:"_section_responsive";a:1:{s:11:"hide_mobile";i:2;}}}}s:11:"testimonial";a:3:{s:5:"count";i:1;s:15:"control_percent";i:7;s:8:"controls";a:3:{s:7:"content";a:1:{s:19:"section_testimonial";a:4:{s:19:"testimonial_content";i:1;s:17:"testimonial_image";i:1;s:15:"testimonial_job";i:1;s:26:"testimonial_image_position";i:1;}}s:5:"style";a:3:{s:33:"section_style_testimonial_content";a:5:{s:21:"content_content_color";i:1;s:29:"content_typography_typography";i:1;s:30:"content_typography_font_family";i:1;s:30:"content_typography_font_weight";i:1;s:29:"content_typography_font_style";i:1;}s:29:"section_style_testimonial_job";a:4:{s:14:"job_text_color";i:1;s:25:"job_typography_typography";i:1;s:26:"job_typography_font_family";i:1;s:26:"job_typography_font_weight";i:1;}s:30:"section_style_testimonial_name";a:4:{s:15:"name_text_color";i:1;s:26:"name_typography_typography";i:1;s:27:"name_typography_font_family";i:1;s:27:"name_typography_font_weight";i:1;}}s:8:"advanced";a:1:{s:14:"_section_style";a:1:{s:15:"_padding_mobile";i:1;}}}}s:26:"wp-widget-nasa_products_sc";a:3:{s:5:"count";i:3;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:11:"text-editor";a:3:{s:5:"count";i:1;s:15:"control_percent";i:1;s:8:"controls";a:2:{s:7:"content";a:1:{s:14:"section_editor";a:1:{s:6:"editor";i:1;}}s:8:"advanced";a:1:{s:14:"_section_style";a:1:{s:12:"_css_classes";i:1;}}}}s:22:"wp-widget-nasa_post_sc";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:25:"wp-widget-nasa_sliders_sc";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}}',
            '_elementor_css' => 'a:6:{s:4:"time";i:1639648340;s:5:"fonts";a:1:{i:0;s:4:"Jost";}s:5:"icons";a:0:{}s:20:"dynamic_elements_ids";a:0:{}s:6:"status";s:4:"file";i:0;s:0:"";}',
            // '_nasa_custom_header' => '1',
            '_nasa_header_transparent' => '1',
        ),
        
        'globals' => array(
            'header-type' => '1',
            
            // 'plus_wide_width' => '100',
            // 'color_primary' => '#3bb5e8',
            
            // 'fullwidth_main_menu' => '1',
            
            // 'bg_color_main_menu' => '#e4272c',
            // 'text_color_main_menu' => '#ffffff',
            
            // 'bg_color_v_menu' => '#000000',
            // 'text_color_v_menu' => '#ffffff',
            
            'footer_mode' => 'builder-e',
            'footer_elm' => elessi_elm_fid_by_slug('hfe-footer-light-2'),
            'footer_elm_mobile' => elessi_elm_fid_by_slug('hfe-footer-mobile'),
            
            // 'category_sidebar' => 'top-2',
            
            'product_detail_layout' => 'new-2',
            // 'product_image_layout' => 'single',
            'tab_style_info' => 'small-accordion',
            
            'loop_layout_buttons' => 'modern-1',
            
            'animated_products' => 'hover-carousel',
            
            // 'nasa_attr_image_style' => 'square'
        ),

        'css' => '.elementor-[inserted_id] .elementor-element.elementor-element-eafceb5{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-eafceb5 .elementor-heading-title{color:#333333;font-family:"Jost", Sans-serif;font-weight:800;}.elementor-[inserted_id] .elementor-element.elementor-element-54a21bdd:not(.elementor-motion-effects-element-type-background), .elementor-[inserted_id] .elementor-element.elementor-element-54a21bdd > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("' . $imgs_1_src . '");background-position:center center;background-repeat:no-repeat;background-size:100% auto;}.elementor-[inserted_id] .elementor-element.elementor-element-54a21bdd{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:30px;margin-bottom:0px;padding:80px 0px 100px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-54a21bdd > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-[inserted_id] .elementor-element.elementor-element-36292f14 .elementor-spacer-inner{height:50px;}.elementor-[inserted_id] .elementor-element.elementor-element-4c7d53c .elementor-testimonial-wrapper{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-4c7d53c .elementor-testimonial-content{color:#555555;font-family:"Jost", Sans-serif;font-weight:400;font-style:italic;}.elementor-[inserted_id] .elementor-element.elementor-element-4c7d53c .elementor-testimonial-name{color:#333333;font-family:"Jost", Sans-serif;font-weight:800;}.elementor-[inserted_id] .elementor-element.elementor-element-4c7d53c .elementor-testimonial-job{color:#54595F;font-family:"Jost", Sans-serif;font-weight:400;}.elementor-[inserted_id] .elementor-element.elementor-element-62261ffb .elementor-spacer-inner{height:50px;}.elementor-[inserted_id] .elementor-element.elementor-element-2ba58ca .elementor-heading-title{color:#333333;font-family:"Jost", Sans-serif;font-weight:800;text-shadow:0px 0px 0px rgba(0,0,0,0.3);}.elementor-[inserted_id] .elementor-element.elementor-element-1d16d7e9 .elementor-heading-title{color:#333333;font-family:"Jost", Sans-serif;font-weight:800;text-shadow:0px 0px 0px rgba(0,0,0,0.3);}.elementor-[inserted_id] .elementor-element.elementor-element-7cc2d48b .elementor-heading-title{color:#333333;font-family:"Jost", Sans-serif;font-weight:800;text-shadow:0px 0px 0px rgba(0,0,0,0.3);}.elementor-[inserted_id] .elementor-element.elementor-element-6840357c{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-6840357c .elementor-heading-title{color:#000000;font-family:"Jost", Sans-serif;font-weight:800;}@media(max-width:767px){.elementor-[inserted_id] .elementor-element.elementor-element-54a21bdd:not(.elementor-motion-effects-element-type-background), .elementor-[inserted_id] .elementor-element.elementor-element-54a21bdd > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("https://via.placeholder.com/636x636?text=636x636");}.elementor-[inserted_id] .elementor-element.elementor-element-4c7d53c > .elementor-widget-container{padding:0px 30px 0px 30px;}}'
    );
}
