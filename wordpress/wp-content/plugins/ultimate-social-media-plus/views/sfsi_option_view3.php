<?php
/* unserialize all saved option for second section options */
$option2 = maybe_unserialize(get_option('sfsi_plus_section2_options', false));
$option3 = maybe_unserialize(get_option('sfsi_plus_section3_options', false));
/*
	 * Sanitize, escape and validate values
	 */
$option3['sfsi_plus_actvite_theme']         = (isset($option3['sfsi_plus_actvite_theme']))
    ? sanitize_text_field($option3['sfsi_plus_actvite_theme'])
    : '';
$option3['sfsi_plus_mouseOver']             = (isset($option3['sfsi_plus_mouseOver']))
    ? sanitize_text_field($option3['sfsi_plus_mouseOver'])
    : '';
$option3['sfsi_plus_mouseOver_effect']         = (isset($option3['sfsi_plus_mouseOver_effect']))
    ? sanitize_text_field($option3['sfsi_plus_mouseOver_effect'])
    : '';

$option3['sfsi_plus_shuffle_Firstload']     = (isset($option3['sfsi_plus_shuffle_Firstload']))
    ? sanitize_text_field($option3['sfsi_plus_shuffle_Firstload'])
    : '';
$option3['sfsi_plus_shuffle_interval']         = (isset($option3['sfsi_plus_shuffle_interval']))
    ? sanitize_text_field($option3['sfsi_plus_shuffle_interval'])
    : '';
$option3['sfsi_plus_shuffle_intervalTime']     = (isset($option3['sfsi_plus_shuffle_intervalTime']))
    ? intval($option3['sfsi_plus_shuffle_intervalTime'])
    : '';
$option3['sfsi_plus_premium_icons_design_box']     = (isset($option3['sfsi_plus_premium_icons_design_box']))
    ? intval($option3['sfsi_plus_premium_icons_design_box'])
    : 'yes';
$option3['sfsi_plus_mouseOver_effect_type'] = (isset($option3['sfsi_plus_mouseOver_effect_type'])) ? sanitize_text_field($option3['sfsi_plus_mouseOver_effect_type']) : 'same_icons';

$mouseover_other_icons_transition_effect = (isset($option3['mouseover_other_icons_transition_effect'])) ? sanitize_text_field($option3['mouseover_other_icons_transition_effect']) : 'flip';
?>
<!-- Section 3 "What design & animation do you want to give your icons?" main div Start -->
<div class="tab3">
    <!--Content of 4-->
    <div class="row mouse_txt sfsiplusmousetxt tab3">
        <p>
            <?php _e('A good & well-fitting design is not only nice to look at, but it increases the chances that people will subscribe and/or share your site with friends:', 'ultimate-social-media-plus'); ?>
        </p>
        <ul class="tab_3_list">
            <li>
                <?php _e('It comes across as more professional and gives your site more “credit”', 'ultimate-social-media-plus'); ?>
            </li>
            <li>
                <?php _e('A smart automatic animation can make your visitors aware of your icons in an unintrusive manner', 'ultimate-social-media-plus'); ?>
            </li>
        </ul>

        <p style="padding:0px;">
            <?php _e('The icons have been compressed by Shortpixel.com for faster loading of your site. Thank you Shortpixel!', 'ultimate-social-media-plus'); ?>
        </p>

        <div class="row">
            <h3>
                <?php _e('Theme options', 'ultimate-social-media-plus'); ?>
            </h3>
            <!--icon themes section start -->
            <ul class="sfsiplus_tab_3_icns">
                <li>
                    <input name="sfsi_plus_actvite_theme" <?php echo ($option3['sfsi_plus_actvite_theme'] == 'default') ?  'checked="true"' : ''; ?> type="radio" value="default" class="styled" />
                    <label>
                        <?php _e('Default', 'ultimate-social-media-plus'); ?>
                    </label>
                    <div class="sfsiplus_icns_tab_3">
                        <span class="sfsiplus_row_1_1 sfsiplus_rss_section"></span><span class="sfsiplus_row_1_2 sfsiplus_email_section"></span><span class="sfsiplus_row_1_3 sfsiplus_facebook_section"></span><span class="sfsiplus_row_1_5 sfsiplus_twitter_section"></span><span class="sfsiplus_row_1_7 sfsiplus_youtube_section"></span><span class="sfsiplus_row_1_8 sfsiplus_pinterest_section"></span><span class="sfsiplus_row_1_9 sfsiplus_linkedin_section"></span><span class="sfsiplus_row_1_10 sfsiplus_instagram_section"></span><span class="sfsiplus_row_1_11 sfsiplus_houzz_section"></span><span class="sfsiplus_row_1_22 sfsiplus_telegram_section"></span><span class="sfsiplus_row_1_23 sfsiplus_vk_section"></span><span class="sfsiplus_row_1_24 sfsiplus_ok_section"></span><span class="sfsiplus_row_1_26 sfsiplus_wechat_section"></span><span class="sfsiplus_row_1_25 sfsiplus_weibo_section"></span><span class="sfsiplus_row_1_27 sfsiplus_whatsapp_section"></span><span class="sfsiplus_row_1_29 sfsiplus_copylink_section"></span><span class="sfsiplus_row_1_28 sfsiplus_mastodon_section"></span>
                        <!--<span class="sfsiplus_row_1_11 sf_section"></span>-->
                    </div>
                </li>

                <li class="sfsi_plus_notificationBannner" style="display:none">
                </li>

                <li class="sfsi_webtheme" style='display:none'>
                <a href="#" target="_blank">
                    <span class="radio" style="opacity: 0.5;"></span>
                    <label class="sfsi_premium_ad_lable" style="text-transform: capitalize;">Default</label>
                    <div class="icns_tab_3 sfsi_premium_ad"><span class="premium_col_1 rss_section"></span><span class="premium_col_2 email_section"></span><span class="premium_col_3 facebook_section"></span><span class="premium_col_4 twitter_section"></span>
                        <div class="sfis_premium_ad_name">(Premium)</div>
                        <!--<span class="row_1_11 sf_section"></span>-->
                    </div>
                    </a>
                </li>

                <li>
                    <input name="sfsi_plus_actvite_theme" <?php echo ($option3['sfsi_plus_actvite_theme'] == 'flat') ?  'checked="true"' : ''; ?> type="radio" value="flat" class="styled" />
                    <label>
                        <?php _e( 'Flat', 'ultimate-social-media-plus' ); ?>
                    </label>
                    <?php
                        $sfsi_plus_rss_bgColor = $sfsi_plus_rss_bgColor_style = $sfsi_plus_email_bgColor = $sfsi_plus_email_bgColor_style = $sfsi_plus_facebook_bgColor = $sfsi_plus_facebook_bgColor_style = $sfsi_plus_twitter_bgColor = $sfsi_plus_twitter_bgColor_style = $sfsi_plus_youtube_bgColor = $sfsi_plus_youtube_bgColor_style = $sfsi_plus_linkedin_bgColor = $sfsi_plus_linkedin_bgColor_style = $sfsi_plus_pinterest_bgColor = $sfsi_plus_pinterest_bgColor_style = $sfsi_plus_instagram_bgColor = $sfsi_plus_instagram_bgColor_style = $sfsi_plus_houzz_bgColor = $sfsi_plus_houzz_bgColor_style = $sfsi_plus_ok_bgColor = $sfsi_plus_ok_bgColor_style = $sfsi_plus_telegram_bgColor = $sfsi_plus_telegram_bgColor_style = $sfsi_plus_vk_bgColor = $sfsi_plus_vk_bgColor_style = $sfsi_plus_wechat_bgColor = $sfsi_plus_wechat_bgColor_style = $sfsi_plus_whatsapp_bgColor = $sfsi_plus_whatsapp_bgColor_style = $sfsi_plus_weibo_bgColor = $sfsi_plus_weibo_bgColor_style = $sfsi_plus_copylink_bgColor = $sfsi_plus_copylink_bgColor_style = $sfsi_plus_mastodon_bgColor = $sfsi_plus_mastodon_bgColor_style =  '';
                        
                        if ( isset( $option3['sfsi_plus_rss_bgColor'] ) && $option3['sfsi_plus_rss_bgColor'] != '' ) {
                            $sfsi_plus_rss_bgColor = $option3['sfsi_plus_rss_bgColor'];
                            $sfsi_plus_rss_bgColor_style = 'background: '.$sfsi_plus_rss_bgColor;
                        } else {
                            $sfsi_plus_rss_bgColor_style = 'background: #FF9845';
                        }
                        if ( isset( $option3['sfsi_plus_email_bgColor'] ) && $option3['sfsi_plus_email_bgColor'] != '' ) {
                            $sfsi_plus_email_bgColor = $option3['sfsi_plus_email_bgColor'];
                            $sfsi_plus_email_bgColor_style = 'background: '.$sfsi_plus_email_bgColor;
                        } else {
                            if ($option2['sfsi_plus_rss_icons'] == "sfsi") {
                                $sfsi_plus_email_bgColor_style = 'background: #05B04E';
                            } elseif ($option2['sfsi_plus_rss_icons'] == "email") {
                                $sfsi_plus_email_bgColor_style = 'background: #343D44';
                            } else {
                                $sfsi_plus_email_bgColor_style = 'background: #16CB30';
                            }
                        }
                    
                        if ( isset( $option3['sfsi_plus_facebook_bgColor'] ) && $option3['sfsi_plus_facebook_bgColor'] != '' ) {
                            $sfsi_plus_facebook_bgColor = $option3['sfsi_plus_facebook_bgColor'];
                            $sfsi_plus_facebook_bgColor_style = 'background: '.$sfsi_plus_facebook_bgColor;
                        } else {
                            $sfsi_plus_facebook_bgColor_style = 'background: #336699';
                        }
                    
                        if ( isset( $option3['sfsi_plus_twitter_bgColor'] ) && $option3['sfsi_plus_twitter_bgColor'] != '' ) {
                            $sfsi_plus_twitter_bgColor = $option3['sfsi_plus_twitter_bgColor'];
                            $sfsi_plus_twitter_bgColor_style = 'background: '.$sfsi_plus_twitter_bgColor;
                        } else {
                            $sfsi_plus_twitter_bgColor_style = 'background: #020202';
                        }
                    
                        if ( isset( $option3['sfsi_plus_youtube_bgColor'] ) && $option3['sfsi_plus_youtube_bgColor'] != '' ) {
                            $sfsi_plus_youtube_bgColor = $option3['sfsi_plus_youtube_bgColor'];
                            $sfsi_plus_youtube_bgColor_style = 'background: '.$sfsi_plus_youtube_bgColor;
                        } else {
                            $sfsi_plus_youtube_bgColor_style = 'background: linear-gradient(141.52deg, #E02F2F 14.26%, #E02F2F 48.98%, #C92A2A 49.12%, #C92A2A 85.18%)';
                        }
                    
                        if ( isset( $option3['sfsi_plus_linkedin_bgColor'] ) && $option3['sfsi_plus_linkedin_bgColor'] != '' ) {
                            $sfsi_plus_linkedin_bgColor = $option3['sfsi_plus_linkedin_bgColor'];
                            $sfsi_plus_linkedin_bgColor_style = 'background: '.$sfsi_plus_linkedin_bgColor;
                        } else {
                            $sfsi_plus_linkedin_bgColor_style = 'background: #0877B5';
                        }

                        if ( isset( $option3['sfsi_plus_pinterest_bgColor'] ) && $option3['sfsi_plus_pinterest_bgColor'] != '' ) {
                            $sfsi_plus_pinterest_bgColor = $option3['sfsi_plus_pinterest_bgColor'];
                            $sfsi_plus_pinterest_bgColor_style = 'background: '.$sfsi_plus_pinterest_bgColor;
                        } else {
                            $sfsi_plus_pinterest_bgColor_style = 'background: #CC3333';
                        }

                        if ( isset( $option3['sfsi_plus_instagram_bgColor'] ) && $option3['sfsi_plus_instagram_bgColor'] != '' ) {
                            $sfsi_plus_instagram_bgColor = $option3['sfsi_plus_instagram_bgColor'];
                            $sfsi_plus_instagram_bgColor_style = 'background: '.$sfsi_plus_instagram_bgColor;
                        } else {
                            $sfsi_plus_instagram_bgColor_style = 'background: radial-gradient(circle farthest-corner at 35% 90%, #fec564, rgba(0, 0, 0, 0) 50%), radial-gradient(circle farthest-corner at 0 140%, #fec564, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 0 -25%, #5258cf, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 20% -50%, #5258cf, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 100% 0, #893dc2, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 60% -20%, #893dc2, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 100% 100%, #d9317a, rgba(0, 0, 0, 0)), linear-gradient(#6559ca, #bc318f 30%, #e33f5f 50%, #f77638 70%, #fec66d 100%)';
                        }
                    
                        if ( isset( $option3['sfsi_plus_houzz_bgColor'] ) && $option3['sfsi_plus_houzz_bgColor'] != '' ) {
                            $sfsi_plus_houzz_bgColor = $option3['sfsi_plus_houzz_bgColor'];
                            $sfsi_plus_houzz_bgColor_style = 'background: '.$sfsi_plus_houzz_bgColor;
                        } else {
                            $sfsi_plus_houzz_bgColor_style = 'background: #7BC043';
                        }
                    
                        if ( isset( $option3['sfsi_plus_ok_bgColor'] ) && $option3['sfsi_plus_ok_bgColor'] != '' ) {
                            $sfsi_plus_ok_bgColor = $option3['sfsi_plus_ok_bgColor'];
                            $sfsi_plus_ok_bgColor_style = 'background: '.$sfsi_plus_ok_bgColor;
                        } else {
                            $sfsi_plus_ok_bgColor_style = 'background: #F58220';
                        }
                    
                        if ( isset( $option3['sfsi_plus_telegram_bgColor'] ) && $option3['sfsi_plus_telegram_bgColor'] != '' ) {
                            $sfsi_plus_telegram_bgColor = $option3['sfsi_plus_telegram_bgColor'];
                            $sfsi_plus_telegram_bgColor_style = 'background: '.$sfsi_plus_telegram_bgColor;
                        } else {
                            $sfsi_plus_telegram_bgColor_style = 'background: #33A1D1';
                        }

                        if ( isset( $option3['sfsi_plus_vk_bgColor'] ) && $option3['sfsi_plus_vk_bgColor'] != '' ) {
                            $sfsi_plus_vk_bgColor = $option3['sfsi_plus_vk_bgColor'];
                            $sfsi_plus_vk_bgColor_style = 'background: '.$sfsi_plus_vk_bgColor;
                        } else {
                            $sfsi_plus_vk_bgColor_style = 'background: #4E77A2';
                        }
                    
                        if ( isset( $option3['sfsi_plus_wechat_bgColor'] ) && $option3['sfsi_plus_wechat_bgColor'] != '' ) {
                            $sfsi_plus_wechat_bgColor = $option3['sfsi_plus_wechat_bgColor'];
                            $sfsi_plus_wechat_bgColor_style = 'background: '.$sfsi_plus_wechat_bgColor;
                        } else {
                            $sfsi_plus_wechat_bgColor_style = 'background: #4BAD33';
                        }

                        if ( isset( $option3['sfsi_plus_whatsapp_bgColor'] ) && $option3['sfsi_plus_whatsapp_bgColor'] != '' ) {
                            $sfsi_plus_whatsapp_bgColor = $option3['sfsi_plus_whatsapp_bgColor'];
                            $sfsi_plus_whatsapp_bgColor_style = 'background: '.$sfsi_plus_whatsapp_bgColor;
                        } else {
                            $sfsi_plus_whatsapp_bgColor_style = 'background: #3ED946';
                        }

                        if ( isset( $option3['sfsi_plus_weibo_bgColor'] ) && $option3['sfsi_plus_weibo_bgColor'] != '' ) {
                            $sfsi_plus_weibo_bgColor = $option3['sfsi_plus_weibo_bgColor'];
                            $sfsi_plus_weibo_bgColor_style = 'background: '.$sfsi_plus_weibo_bgColor;
                        } else {
                            $sfsi_plus_weibo_bgColor_style = 'background: #e6162d';
                        }

                        if ( isset( $option3['sfsi_plus_copylink_bgColor'] ) && $option3['sfsi_plus_copylink_bgColor'] != '' ) {
                            $sfsi_plus_copylink_bgColor = $option3['sfsi_plus_copylink_bgColor'];
                            $sfsi_plus_copylink_bgColor_style = 'background: '.$sfsi_plus_copylink_bgColor;
                        } else {
                            $sfsi_plus_copylink_bgColor_style = 'background: linear-gradient(180deg, #C295FF 0%, #4273F7 100%)';
                        }

                        if ( isset( $option3['sfsi_plus_mastodon_bgColor'] ) && $option3['sfsi_plus_mastodon_bgColor'] != '' ) {
                            $sfsi_plus_mastodon_bgColor = $option3['sfsi_plus_mastodon_bgColor'];
                            $sfsi_plus_mastodon_bgColor_style = 'background: '.$sfsi_plus_mastodon_bgColor;
                        } else {
                            $sfsi_plus_mastodon_bgColor_style = 'background: #583ED1';
                        }
                    ?>
                    <div class="sfsiplus_icns_tab_3">
                        <span class="sfsiplus_row_2_1 sfsiplus_icon_bgcolor sfsiplus_rss_section">
                            <span class="sfsiplus_icon_img_wrapper" style="<?php echo esc_attr( $sfsi_plus_rss_bgColor_style ); ?>">
                                <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/icons_theme/flat/flat_rss.png" alt="" />
                            </span>
                            <span class="sfsiplus_icon_color_picker">
                                <input name="sfsi_plus_rss_bgColor" data-default-color="#FF9845" id="sfsi_plus_rss_bgColor" class="sfsi_plus_input_bgColor" type="text" value="<?php echo esc_attr( $sfsi_plus_rss_bgColor ); ?>" />
                            </span>
                        </span>
                        <span class="sfsiplus_row_2_2 sfsiplus_icon_bgcolor sfsiplus_email_section">
                            <span class="sfsiplus_icon_img_wrapper" style="<?php echo esc_attr( $sfsi_plus_email_bgColor_style ); ?>">
                                <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/icons_theme/flat/flat_email.png" alt="" />
                            </span>
                            <span class="sfsiplus_icon_color_picker">
                                <input name="sfsi_plus_email_bgColor" data-default-color="#343D44" id="sfsi_plus_email_bgColor" class="sfsi_plus_input_bgColor" type="text" value="<?php echo esc_attr( $sfsi_plus_email_bgColor ); ?>" />
                            </span>
                        </span>
                        <span class="sfsiplus_row_2_3 sfsiplus_icon_bgcolor sfsiplus_facebook_section">
                            <span class="sfsiplus_icon_img_wrapper" style="<?php echo esc_attr( $sfsi_plus_facebook_bgColor_style ); ?>">
                                <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/icons_theme/flat/flat_fb.png" alt="" />
                            </span>
                            <span class="sfsiplus_icon_color_picker">
                                <input name="sfsi_plus_facebook_bgColor" data-default-color="#336699" id="sfsi_plus_facebook_bgColor" class="sfsi_plus_input_bgColor" type="text" value="<?php echo esc_attr( $sfsi_plus_facebook_bgColor ); ?>" />
                            </span>
                        </span>
                        <span class="sfsiplus_row_2_5 sfsiplus_icon_bgcolor sfsiplus_twitter_section">
                            <span class="sfsiplus_icon_img_wrapper" style="<?php echo esc_attr( $sfsi_plus_twitter_bgColor_style ); ?>">
                                <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/icons_theme/flat/flat_twitter.png" alt="" />
                            </span>
                            <span class="sfsiplus_icon_color_picker">
                                <input name="sfsi_plus_twitter_bgColor" data-default-color="#00ACEC" id="sfsi_plus_twitter_bgColor" class="sfsi_plus_input_bgColor" type="text" value="<?php echo esc_attr( $sfsi_plus_twitter_bgColor ); ?>" />
                            </span>
                        </span>
                        <span class="sfsiplus_row_2_7 sfsiplus_icon_bgcolor sfsiplus_youtube_section">
                            <span class="sfsiplus_icon_img_wrapper" style="<?php echo esc_attr( $sfsi_plus_youtube_bgColor_style ); ?>">
                                <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/icons_theme/flat/flat_youtube.png" alt="" />
                            </span>
                            <span class="sfsiplus_icon_color_picker">
                                <input name="sfsi_plus_youtube_bgColor" data-default-color-custom="linear-gradient(141.52deg, #E02F2F 14.26%, #E02F2F 48.98%, #C92A2A 49.12%, #C92A2A 85.18%)" id="sfsi_plus_youtube_bgColor" class="sfsi_plus_input_bgColor" type="text" value="<?php echo esc_attr( $sfsi_plus_youtube_bgColor ); ?>" />
                            </span>
                        </span>
                        <span class="sfsiplus_row_2_8 sfsiplus_icon_bgcolor sfsiplus_pinterest_section">
                            <span class="sfsiplus_icon_img_wrapper" style="<?php echo esc_attr( $sfsi_plus_pinterest_bgColor_style ); ?>">
                                <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/icons_theme/flat/flat_pinterest.png" alt="" />
                            </span>
                            <span class="sfsiplus_icon_color_picker">
                                <input name="sfsi_plus_pinterest_bgColor" data-default-color="#CC3333" id="sfsi_plus_pinterest_bgColor" class="sfsi_plus_input_bgColor" type="text" value="<?php echo esc_attr( $sfsi_plus_pinterest_bgColor ); ?>" />
                            </span>
                        </span>
                        <span class="sfsiplus_row_2_9 sfsiplus_icon_bgcolor sfsiplus_linkedin_section">
                            <span class="sfsiplus_icon_img_wrapper" style="<?php echo esc_attr( $sfsi_plus_linkedin_bgColor_style ); ?>">
                                <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/icons_theme/flat/flat_linkedin.png" alt="" />
                            </span>
                            <span class="sfsiplus_icon_color_picker">
                                <input name="sfsi_plus_linkedin_bgColor" data-default-color="#0877B5" id="sfsi_plus_linkedin_bgColor" class="sfsi_plus_input_bgColor" type="text" value="<?php echo esc_attr( $sfsi_plus_linkedin_bgColor ); ?>" />
                            </span>
                        </span>
                        <span class="sfsiplus_row_2_10 sfsiplus_icon_bgcolor sfsiplus_instagram_section">
                            <span class="sfsiplus_icon_img_wrapper" style="<?php echo esc_attr( $sfsi_plus_instagram_bgColor_style ); ?>">
                                <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/icons_theme/flat/flat_instagram.png" alt="" />
                            </span>
                            <span class="sfsiplus_icon_color_picker">
                                <input name="sfsi_plus_instagram_bgColor" data-default-color-custom="radial-gradient(circle farthest-corner at 35% 90%, #fec564, rgba(0, 0, 0, 0) 50%), radial-gradient(circle farthest-corner at 0 140%, #fec564, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 0 -25%, #5258cf, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 20% -50%, #5258cf, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 100% 0, #893dc2, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 60% -20%, #893dc2, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 100% 100%, #d9317a, rgba(0, 0, 0, 0)), linear-gradient(#6559ca, #bc318f 30%, #e33f5f 50%, #f77638 70%, #fec66d 100%)" id="sfsi_plus_instagram_bgColor" class="sfsi_plus_input_bgColor" type="text" value="<?php echo esc_attr( $sfsi_plus_instagram_bgColor ); ?>" />
                            </span>
                        </span>
                        <span class="sfsiplus_row_2_11 sfsiplus_icon_bgcolor sfsiplus_houzz_section">
                            <span class="sfsiplus_icon_img_wrapper" style="<?php echo esc_attr( $sfsi_plus_houzz_bgColor_style ); ?>">
                                <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/icons_theme/flat/flat_houzz.png" alt="" />
                            </span>
                            <span class="sfsiplus_icon_color_picker">
                                <input name="sfsi_plus_houzz_bgColor" data-default-color="#7BC043" id="sfsi_plus_houzz_bgColor" class="sfsi_plus_input_bgColor" type="text" value="<?php echo esc_attr( $sfsi_plus_houzz_bgColor ); ?>" />
                            </span>
                        </span>
                        <span class="sfsiplus_row_2_22 sfsiplus_icon_bgcolor sfsiplus_telegram_section">
                            <span class="sfsiplus_icon_img_wrapper" style="<?php echo esc_attr( $sfsi_plus_telegram_bgColor_style ); ?>">
                                <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/icons_theme/flat/flat_telegram.png" alt="" />
                            </span>
                            <span class="sfsiplus_icon_color_picker">
                                <input name="sfsi_plus_telegram_bgColor" data-default-color="#33A1D1" id="sfsi_plus_telegram_bgColor" class="sfsi_plus_input_bgColor" type="text" value="<?php echo esc_attr( $sfsi_plus_telegram_bgColor ); ?>" />
                            </span>
                        </span>
                        <span class="sfsiplus_row_2_23 sfsiplus_icon_bgcolor sfsiplus_vk_section">
                            <span class="sfsiplus_icon_img_wrapper" style="<?php echo esc_attr( $sfsi_plus_vk_bgColor_style ); ?>">
                                <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/icons_theme/flat/flat_vk.png" alt="" />
                            </span>
                            <span class="sfsiplus_icon_color_picker">
                                <input name="sfsi_plus_vk_bgColor" data-default-color="#4E77A2" id="sfsi_plus_vk_bgColor" class="sfsi_plus_input_bgColor" type="text" value="<?php echo esc_attr( $sfsi_plus_vk_bgColor ); ?>" />
                            </span>
                        </span>
                        <span class="sfsiplus_row_2_24 sfsiplus_icon_bgcolor sfsiplus_ok_section">
                            <span class="sfsiplus_icon_img_wrapper" style="<?php echo esc_attr( $sfsi_plus_ok_bgColor_style ); ?>">
                                <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/icons_theme/flat/flat_ok.png" alt="" />
                            </span>
                            <span class="sfsiplus_icon_color_picker">
                                <input name="sfsi_plus_ok_bgColor" data-default-color="#F58220" id="sfsi_plus_ok_bgColor" class="sfsi_plus_input_bgColor" type="text" value="<?php echo esc_attr( $sfsi_plus_ok_bgColor ); ?>" />
                            </span>
                        </span>
                        <span class="sfsiplus_row_2_26 sfsiplus_icon_bgcolor sfsiplus_wechat_section">
                            <span class="sfsiplus_icon_img_wrapper" style="<?php echo esc_attr( $sfsi_plus_wechat_bgColor_style ); ?>">
                                <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/icons_theme/flat/flat_wechat.png" alt="" />
                            </span>
                            <span class="sfsiplus_icon_color_picker">
                                <input name="sfsi_plus_wechat_bgColor" data-default-color="#4BAD33" id="sfsi_plus_wechat_bgColor" class="sfsi_plus_input_bgColor" type="text" value="<?php echo esc_attr( $sfsi_plus_wechat_bgColor ); ?>" />
                            </span>
                        </span>
                        <span class="sfsiplus_row_2_25 sfsiplus_icon_bgcolor sfsiplus_weibo_section">
                            <span class="sfsiplus_icon_img_wrapper" style="<?php echo esc_attr( $sfsi_plus_weibo_bgColor_style ); ?>">
                                <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/icons_theme/flat/flat_weibo.png" alt="" />
                            </span>
                            <span class="sfsiplus_icon_color_picker">
                                <input name="sfsi_plus_weibo_bgColor" data-default-color="#E6162D" id="sfsi_plus_weibo_bgColor" class="sfsi_plus_input_bgColor" type="text" value="<?php echo esc_attr( $sfsi_plus_weibo_bgColor ); ?>" />
                            </span>
                        </span>
                        <span class="sfsiplus_row_2_27 sfsiplus_icon_bgcolor sfsiplus_whatsapp_section">
                            <span class="sfsiplus_icon_img_wrapper" style="<?php echo esc_attr( $sfsi_plus_whatsapp_bgColor_style ); ?>">
                                <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/icons_theme/flat/flat_whatsapp.png" alt="" />
                            </span>
                            <span class="sfsiplus_icon_color_picker">
                                <input name="sfsi_plus_whatsapp_bgColor" data-default-color="#3ED946" id="sfsi_plus_whatsapp_bgColor" class="sfsi_plus_input_bgColor" type="text" value="<?php echo esc_attr( $sfsi_plus_whatsapp_bgColor ); ?>" />
                            </span>
                        </span>
                        <span class="sfsiplus_row_2_29 sfsiplus_icon_bgcolor sfsiplus_copylink_section">
                            <span class="sfsiplus_icon_img_wrapper" style="<?php echo esc_attr( $sfsi_plus_copylink_bgColor_style ); ?>">
                                <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/icons_theme/flat/flat_copylink.png" alt="" />
                            </span>
                            <span class="sfsiplus_icon_color_picker">
                                <input name="sfsi_plus_copylink_bgColor" data-default-color-custom="linear-gradient(180deg, #C295FF 0%, #4273F7 100%)" id="sfsi_plus_copylink_bgColor" class="sfsi_plus_input_bgColor" type="text" value="<?php echo esc_attr( $sfsi_plus_copylink_bgColor ); ?>" />
                            </span>
                        </span>
                        <span class="sfsiplus_row_2_28 sfsiplus_icon_bgcolor sfsiplus_mastodon_section">
                            <span class="sfsiplus_icon_img_wrapper" style="<?php echo esc_attr( $sfsi_plus_mastodon_bgColor_style ); ?>">
                                <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/icons_theme/flat/flat_mastodon.png" alt="" />
                            </span>
                            <span class="sfsiplus_icon_color_picker">
                                <input name="sfsi_plus_mastodon_bgColor" data-default-color="#3ED946" id="sfsi_plus_mastodon_bgColor" class="sfsi_plus_input_bgColor" type="text" value="<?php echo esc_attr( $sfsi_plus_mastodon_bgColor ); ?>" />
                            </span>
                        </span>
                        <!--<span class="sfsiplus_row_2_11 sf_section"></span>-->
                    </div>
                </li>

                <li>
                    <input name="sfsi_plus_actvite_theme" <?php echo ($option3['sfsi_plus_actvite_theme'] == 'thin') ?  'checked="true"' : ''; ?> type="radio" value="thin" class="styled" />
                    <label>
                        <?php _e('Thin', 'ultimate-social-media-plus'); ?>
                    </label>
                    <div class="sfsiplus_icns_tab_3"><span class="sfsiplus_row_3_1 sfsiplus_rss_section"></span><span class="sfsiplus_row_3_2 sfsiplus_email_section"></span><span class="sfsiplus_row_3_3 sfsiplus_facebook_section"></span><span class="sfsiplus_row_3_5 sfsiplus_twitter_section"></span><span class="sfsiplus_row_3_7 sfsiplus_youtube_section"></span><span class="sfsiplus_row_3_8 sfsiplus_pinterest_section"></span><span class="sfsiplus_row_3_9 sfsiplus_linkedin_section"></span><span class="sfsiplus_row_3_10 sfsiplus_instagram_section"></span><span class="sfsiplus_row_3_11 sfsiplus_houzz_section"></span><span class="sfsiplus_row_3_22 sfsiplus_telegram_section"></span><span class="sfsiplus_row_3_23 sfsiplus_vk_section"></span><span class="sfsiplus_row_3_24 sfsiplus_ok_section"></span><span class="sfsiplus_row_3_26 sfsiplus_wechat_section"></span><span class="sfsiplus_row_3_25 sfsiplus_weibo_section"></span><span class="sfsiplus_row_3_27 sfsiplus_whatsapp_section"></span><span class="sfsiplus_row_3_29 sfsiplus_copylink_section"></span><span class="sfsiplus_row_3_28 sfsiplus_mastodon_section"></span>
                        <!--<span class="sfsiplus_row_3_11 sf_section"></span>-->
                    </div>
                </li>

                <li>
                    <input name="sfsi_plus_actvite_theme" <?php echo ($option3['sfsi_plus_actvite_theme'] == 'cute') ?  'checked="true"' : ''; ?> type="radio" value="cute" class="styled" />
                    <label>
                        <?php _e('Cute', 'ultimate-social-media-plus'); ?>
                    </label>
                    <div class="sfsiplus_icns_tab_3"><span class="sfsiplus_row_4_1 sfsiplus_rss_section"></span><span class="sfsiplus_row_4_2 sfsiplus_email_section"></span><span class="sfsiplus_row_4_3 sfsiplus_facebook_section"></span><span class="sfsiplus_row_4_5  sfsiplus_twitter_section"></span><span class="sfsiplus_row_4_7 sfsiplus_youtube_section"></span><span class="sfsiplus_row_4_8 sfsiplus_pinterest_section"></span><span class="sfsiplus_row_4_9 sfsiplus_linkedin_section"></span><span class="sfsiplus_row_4_10 sfsiplus_instagram_section"></span><span class="sfsiplus_row_4_11 sfsiplus_houzz_section"></span><span class="sfsiplus_row_4_22 sfsiplus_telegram_section"></span><span class="sfsiplus_row_4_23 sfsiplus_vk_section"></span><span class="sfsiplus_row_4_24 sfsiplus_ok_section"></span><span class="sfsiplus_row_4_26 sfsiplus_wechat_section"></span><span class="sfsiplus_row_4_25 sfsiplus_weibo_section"></span><span class="sfsiplus_row_4_27 sfsiplus_whatsapp_section"></span><span class="sfsiplus_row_4_29 sfsiplus_copylink_section"></span><span class="sfsiplus_row_4_28 sfsiplus_mastodon_section"></span>
                        <!--<span class="sfsiplus_row_4_11 sf_section"></span>-->
                    </div>
                </li>

                <!--------------------start next four------------------------>

                <li>
                    <input name="sfsi_plus_actvite_theme" <?php echo ($option3['sfsi_plus_actvite_theme'] == 'cubes') ?  'checked="true"' : ''; ?> type="radio" value="cubes" class="styled" />
                    <label><?php _e('Cubes', 'ultimate-social-media-plus'); ?></label>

                    <div class="sfsiplus_icns_tab_3"><span class="sfsiplus_row_5_1 sfsiplus_rss_section"></span><span class="sfsiplus_row_5_2 sfsiplus_email_section"></span><span class="sfsiplus_row_5_3 sfsiplus_facebook_section"></span><span class="sfsiplus_row_5_5 sfsiplus_twitter_section"></span><span class="sfsiplus_row_5_7 sfsiplus_youtube_section"></span><span class="sfsiplus_row_5_8 sfsiplus_pinterest_section"></span><span class="sfsiplus_row_5_9 sfsiplus_linkedin_section"></span><span class="sfsiplus_row_5_10 sfsiplus_instagram_section"></span><span class="sfsiplus_row_5_11 sfsiplus_houzz_section"></span><span class="sfsiplus_row_5_22 sfsiplus_telegram_section"></span><span class="sfsiplus_row_5_23 sfsiplus_vk_section"></span><span class="sfsiplus_row_5_24 sfsiplus_ok_section"></span><span class="sfsiplus_row_5_26 sfsiplus_wechat_section"></span><span class="sfsiplus_row_5_25 sfsiplus_weibo_section"></span><span class="sfsiplus_row_5_27 sfsiplus_whatsapp_section"></span><span class="sfsiplus_row_5_29 sfsiplus_copylink_section"></span><span class="sfsiplus_row_5_28 sfsiplus_mastodon_section"></span>
                        <!--<span class="sfsiplus_row_5_11 sf_section"></span>-->
                    </div>
                </li>

                <li>
                    <input name="sfsi_plus_actvite_theme" <?php echo ($option3['sfsi_plus_actvite_theme'] == 'chrome_blue') ?  'checked="true"' : ''; ?> type="radio" value="chrome_blue" class="styled" />
                    <label><?php _e('Chrome Blue', 'ultimate-social-media-plus'); ?></label>
                    <div class="sfsiplus_icns_tab_3"><span class="sfsiplus_row_6_1 sfsiplus_rss_section"></span><span class="sfsiplus_row_6_2 sfsiplus_email_section"></span><span class="sfsiplus_row_6_3 sfsiplus_facebook_section"></span><span class="sfsiplus_row_6_5 sfsiplus_twitter_section"></span><span class="sfsiplus_row_6_7 sfsiplus_youtube_section"></span><span class="sfsiplus_row_6_8 sfsiplus_pinterest_section"></span><span class="sfsiplus_row_6_9 sfsiplus_linkedin_section"></span><span class="sfsiplus_row_6_10 sfsiplus_instagram_section"></span><span class="sfsiplus_row_6_11 sfsiplus_houzz_section"></span><span class="sfsiplus_row_6_22 sfsiplus_telegram_section"></span><span class="sfsiplus_row_6_23 sfsiplus_vk_section"></span> <span class="sfsiplus_row_6_24 sfsiplus_ok_section"></span><span class="sfsiplus_row_6_26 sfsiplus_wechat_section"></span><span class="sfsiplus_row_6_25 sfsiplus_weibo_section"></span><span class="sfsiplus_row_6_27 sfsiplus_whatsapp_section"></span><span class="sfsiplus_row_6_29 sfsiplus_copylink_section"></span><span class="sfsiplus_row_6_28 sfsiplus_mastodon_section"></span>
                        <!--<span class="sfsiplus_row_6_11 sf_section"></span>-->
                    </div>
                </li>

                <li>
                    <input name="sfsi_plus_actvite_theme" <?php echo ($option3['sfsi_plus_actvite_theme'] == 'chrome_grey') ?  'checked="true"' : ''; ?> type="radio" value="chrome_grey" class="styled" />
                    <label><?php _e('Chrome Grey', 'ultimate-social-media-plus'); ?></label>
                    <div class="sfsiplus_icns_tab_3"><span class="sfsiplus_row_7_1 sfsiplus_rss_section"></span><span class="sfsiplus_row_7_2 sfsiplus_email_section"></span><span class="sfsiplus_row_7_3 sfsiplus_facebook_section"></span><span class="sfsiplus_row_7_5 sfsiplus_twitter_section"></span><span class="sfsiplus_row_7_7 sfsiplus_youtube_section"></span><span class="sfsiplus_row_7_8 sfsiplus_pinterest_section"></span><span class="sfsiplus_row_7_9 sfsiplus_linkedin_section"></span><span class="sfsiplus_row_7_10 sfsiplus_instagram_section"></span><span class="sfsiplus_row_7_11 sfsiplus_houzz_section"></span><span class="sfsiplus_row_7_22 sfsiplus_telegram_section"></span><span class="sfsiplus_row_7_23 sfsiplus_vk_section"></span> <span class="sfsiplus_row_7_24 sfsiplus_ok_section"></span><span class="sfsiplus_row_7_26 sfsiplus_wechat_section"></span><span class="sfsiplus_row_7_25 sfsiplus_weibo_section"></span><span class="sfsiplus_row_7_27 sfsiplus_whatsapp_section"></span><span class="sfsiplus_row_7_29 sfsiplus_copylink_section"></span><span class="sfsiplus_row_7_28 sfsiplus_mastodon_section"></span>
                        <!--<span class="sfsiplus_row_7_11 sf_section"></span>-->
                    </div>
                </li>

                <li>
                    <input name="sfsi_plus_actvite_theme" <?php echo ($option3['sfsi_plus_actvite_theme'] == 'splash') ?  'checked="true"' : ''; ?> type="radio" value="splash" class="styled" />
                    <label><?php _e('Splash', 'ultimate-social-media-plus'); ?></label>
                    <div class="sfsiplus_icns_tab_3"><span class="sfsiplus_row_8_1 sfsiplus_rss_section"></span><span class="sfsiplus_row_8_2 sfsiplus_email_section"></span><span class="sfsiplus_row_8_3 sfsiplus_facebook_section"></span><span class="sfsiplus_row_8_5  sfsiplus_twitter_section"></span><span class="sfsiplus_row_8_7 sfsiplus_youtube_section"></span><span class="sfsiplus_row_8_8 sfsiplus_pinterest_section"></span><span class="sfsiplus_row_8_9 sfsiplus_linkedin_section"></span><span class="sfsiplus_row_8_10 sfsiplus_instagram_section"></span><span class="sfsiplus_row_8_11 sfsiplus_houzz_section"></span><span class="sfsiplus_row_8_22 sfsiplus_telegram_section"></span><span class="sfsiplus_row_8_23 sfsiplus_vk_section"></span> <span class="sfsiplus_row_8_24 sfsiplus_ok_section"></span><span class="sfsiplus_row_8_26 sfsiplus_wechat_section"></span><span class="sfsiplus_row_8_25 sfsiplus_weibo_section"></span><span class="sfsiplus_row_8_27 sfsiplus_whatsapp_section"></span><span class="sfsiplus_row_8_29 sfsiplus_copylink_section"></span><span class="sfsiplus_row_8_28 sfsiplus_mastodon_section"></span>
                        <!--<span class="sfsiplus_row_8_11 sf_section"></span>-->
                    </div>
                </li>


                <!--------------------start second four------------------------>


                <li>
                    <input name="sfsi_plus_actvite_theme" <?php echo ($option3['sfsi_plus_actvite_theme'] == 'orange') ?  'checked="true"' : ''; ?> type="radio" value="orange" class="styled" />
                    <label><?php _e('Orange', 'ultimate-social-media-plus'); ?></label>
                    <div class="sfsiplus_icns_tab_3"><span class="sfsiplus_row_9_1 sfsiplus_rss_section"></span><span class="sfsiplus_row_9_2 sfsiplus_email_section"></span><span class="sfsiplus_row_9_3 sfsiplus_facebook_section"></span><span class="sfsiplus_row_9_5 sfsiplus_twitter_section"></span><span class="sfsiplus_row_9_7 sfsiplus_youtube_section"></span><span class="sfsiplus_row_9_8 sfsiplus_pinterest_section"></span><span class="sfsiplus_row_9_9 sfsiplus_linkedin_section"></span><span class="sfsiplus_row_9_10 sfsiplus_instagram_section"></span><span class="sfsiplus_row_9_11 sfsiplus_houzz_section"></span><span class="sfsiplus_row_9_22 sfsiplus_telegram_section"></span><span class="sfsiplus_row_9_23 sfsiplus_vk_section"></span> <span class="sfsiplus_row_9_24 sfsiplus_ok_section"></span><span class="sfsiplus_row_9_26 sfsiplus_wechat_section"></span><span class="sfsiplus_row_9_25 sfsiplus_weibo_section"></span><span class="sfsiplus_row_9_27 sfsiplus_whatsapp_section"></span><span class="sfsiplus_row_9_29 sfsiplus_copylink_section"></span><span class="sfsiplus_row_9_28 sfsiplus_mastodon_section"></span>
                        <!--<span class="sfsiplus_row_9_11 sf_section"></span>-->
                    </div>
                </li>

                <li>
                    <input name="sfsi_plus_actvite_theme" <?php echo ($option3['sfsi_plus_actvite_theme'] == 'crystal') ?  'checked="true"' : ''; ?> type="radio" value="crystal" class="styled" />
                    <label><?php _e('Crystal', 'ultimate-social-media-plus'); ?></label>
                    <div class="sfsiplus_icns_tab_3"><span class="sfsiplus_row_10_1 sfsiplus_rss_section"></span><span class="sfsiplus_row_10_2 sfsiplus_email_section"></span><span class="sfsiplus_row_10_3 sfsiplus_facebook_section"></span><span class="sfsiplus_row_10_5 sfsiplus_twitter_section"></span><span class="sfsiplus_row_10_7 sfsiplus_youtube_section"></span><span class="sfsiplus_row_10_8 sfsiplus_pinterest_section"></span><span class="sfsiplus_row_10_9 sfsiplus_linkedin_section"></span><span class="sfsiplus_row_10_10 sfsiplus_instagram_section"></span><span class="sfsiplus_row_10_11 sfsiplus_houzz_section"></span><span class="sfsiplus_row_10_22 sfsiplus_telegram_section"></span><span class="sfsiplus_row_10_23 sfsiplus_vk_section"></span><span class="sfsiplus_row_10_24 sfsiplus_ok_section"></span><span class="sfsiplus_row_10_26 sfsiplus_wechat_section"></span><span class="sfsiplus_row_10_25 sfsiplus_weibo_section"></span><span class="sfsiplus_row_10_27 sfsiplus_whatsapp_section"></span><span class="sfsiplus_row_10_29 sfsiplus_copylink_section"></span><span class="sfsiplus_row_10_28 sfsiplus_mastodon_section"></span>
                        <!--<span class="sfsiplus_row_10_11 sf_section"></span>-->
                    </div>
                </li>

                <li>
                    <input name="sfsi_plus_actvite_theme" <?php echo ($option3['sfsi_plus_actvite_theme'] == 'glossy') ?  'checked="true"' : ''; ?> type="radio" value="glossy" class="styled" />
                    <label><?php _e('Glossy', 'ultimate-social-media-plus'); ?></label>
                    <div class="sfsiplus_icns_tab_3"><span class="sfsiplus_row_11_1 sfsiplus_rss_section"></span><span class="sfsiplus_row_11_2 sfsiplus_email_section"></span><span class="sfsiplus_row_11_3 sfsiplus_facebook_section"></span><span class="sfsiplus_row_11_5 sfsiplus_twitter_section"></span><span class="sfsiplus_row_11_7 sfsiplus_youtube_section"></span><span class="sfsiplus_row_11_8 sfsiplus_pinterest_section"></span><span class="sfsiplus_row_11_9 sfsiplus_linkedin_section"></span><span class="sfsiplus_row_11_10 sfsiplus_instagram_section"></span><span class="sfsiplus_row_11_11 sfsiplus_houzz_section"></span><span class="sfsiplus_row_11_22 sfsiplus_telegram_section"></span><span class="sfsiplus_row_11_23 sfsiplus_vk_section"></span> <span class="sfsiplus_row_11_24 sfsiplus_ok_section"></span><span class="sfsiplus_row_11_26 sfsiplus_wechat_section"></span><span class="sfsiplus_row_11_25 sfsiplus_weibo_section"></span><span class="sfsiplus_row_11_27 sfsiplus_whatsapp_section"></span><span class="sfsiplus_row_11_29 sfsiplus_copylink_section"></span><span class="sfsiplus_row_11_28 sfsiplus_mastodon_section"></span>
                        <!--<span class="sfsiplus_row_11_11 sf_section"></span>-->
                    </div>
                </li>

                <li>
                    <input name="sfsi_plus_actvite_theme" <?php echo ($option3['sfsi_plus_actvite_theme'] == 'black') ?  'checked="true"' : ''; ?> type="radio" value="black" class="styled" />
                    <label><?php _e('Black', 'ultimate-social-media-plus'); ?></label>
                    <div class="sfsiplus_icns_tab_3"><span class="sfsiplus_row_12_1 sfsiplus_rss_section"></span><span class="sfsiplus_row_12_2 sfsiplus_email_section"></span><span class="sfsiplus_row_12_3 sfsiplus_facebook_section"></span><span class="sfsiplus_row_12_5  sfsiplus_twitter_section"></span><span class="sfsiplus_row_12_7 sfsiplus_youtube_section"></span><span class="sfsiplus_row_12_8 sfsiplus_pinterest_section"></span><span class="sfsiplus_row_12_9 sfsiplus_linkedin_section"></span><span class="sfsiplus_row_12_10 sfsiplus_instagram_section"></span><span class="sfsiplus_row_12_11 sfsiplus_houzz_section"></span><span class="sfsiplus_row_12_22 sfsiplus_telegram_section"></span><span class="sfsiplus_row_12_23 sfsiplus_vk_section"></span> <span class="sfsiplus_row_12_24 sfsiplus_ok_section"></span><span class="sfsiplus_row_12_26 sfsiplus_wechat_section"></span><span class="sfsiplus_row_12_25 sfsiplus_weibo_section"></span><span class="sfsiplus_row_12_27 sfsiplus_whatsapp_section"></span><span class="sfsiplus_row_12_29 sfsiplus_copylink_section"></span><span class="sfsiplus_row_12_28 sfsiplus_mastodon_section"></span>
                        <!--<span class="sfsiplus_row_12_11 sf_section"></span>-->
                    </div>
                </li>


                <!--------------------start last four------------------------>

                <li>
                    <input name="sfsi_plus_actvite_theme" <?php echo ($option3['sfsi_plus_actvite_theme'] == 'silver') ?  'checked="true"' : ''; ?> type="radio" value="silver" class="styled" />
                    <label><?php _e('Silver', 'ultimate-social-media-plus'); ?></label>
                    <div class="sfsiplus_icns_tab_3"><span class="sfsiplus_row_13_1 sfsiplus_rss_section"></span><span class="sfsiplus_row_13_2 sfsiplus_email_section"></span><span class="sfsiplus_row_13_3 sfsiplus_facebook_section"></span><span class="sfsiplus_row_13_5 sfsiplus_twitter_section"></span><span class="sfsiplus_row_13_7 sfsiplus_youtube_section"></span><span class="sfsiplus_row_13_8 sfsiplus_pinterest_section"></span><span class="sfsiplus_row_13_9 sfsiplus_linkedin_section"></span><span class="sfsiplus_row_13_10 sfsiplus_instagram_section"></span><span class="sfsiplus_row_13_11 sfsiplus_houzz_section"></span><span class="sfsiplus_row_13_22 sfsiplus_telegram_section"></span><span class="sfsiplus_row_13_23 sfsiplus_vk_section"></span><span class="sfsiplus_row_13_24 sfsiplus_ok_section"></span><span class="sfsiplus_row_13_26 sfsiplus_wechat_section"></span><span class="sfsiplus_row_13_25 sfsiplus_weibo_section"></span><span class="sfsiplus_row_13_27 sfsiplus_whatsapp_section"></span><span class="sfsiplus_row_13_29 sfsiplus_copylink_section"></span><span class="sfsiplus_row_13_28 sfsiplus_mastodon_section"></span>
                        <!--<span class="sfsiplus_row_13_11 sf_section"></span>-->
                    </div>
                </li>

                <li>
                    <input name="sfsi_plus_actvite_theme" <?php echo ($option3['sfsi_plus_actvite_theme'] == 'shaded_dark') ?  'checked="true"' : ''; ?> type="radio" value="shaded_dark" class="styled" />
                    <label><?php _e('Shaded Dark', 'ultimate-social-media-plus'); ?></label>
                    <div class="sfsiplus_icns_tab_3"><span class="sfsiplus_row_14_1 sfsiplus_rss_section"></span><span class="sfsiplus_row_14_2 sfsiplus_email_section"></span><span class="sfsiplus_row_14_3 sfsiplus_facebook_section"></span><span class="sfsiplus_row_14_5 sfsiplus_twitter_section"></span><span class="sfsiplus_row_14_7 sfsiplus_youtube_section"></span><span class="sfsiplus_row_14_8 sfsiplus_pinterest_section"></span><span class="sfsiplus_row_14_9 sfsiplus_linkedin_section"></span><span class="sfsiplus_row_14_10 sfsiplus_instagram_section"></span><span class="sfsiplus_row_14_11 sfsiplus_houzz_section"></span><span class="sfsiplus_row_14_22 sfsiplus_telegram_section"></span><span class="sfsiplus_row_14_23 sfsiplus_vk_section"></span> <span class="sfsiplus_row_14_24 sfsiplus_ok_section"></span><span class="sfsiplus_row_14_26 sfsiplus_wechat_section"></span><span class="sfsiplus_row_14_25 sfsiplus_weibo_section"></span><span class="sfsiplus_row_14_27 sfsiplus_whatsapp_section"></span><span class="sfsiplus_row_14_29 sfsiplus_copylink_section"></span><span class="sfsiplus_row_14_28 sfsiplus_mastodon_section"></span>
                        <!--<span class="sfsiplus_row_14_11 sf_section"></span>-->
                    </div>
                </li>

                <li>
                    <input name="sfsi_plus_actvite_theme" <?php echo ($option3['sfsi_plus_actvite_theme'] == 'shaded_light') ?  'checked="true"' : ''; ?> type="radio" value="shaded_light" class="styled" />
                    <label><?php _e('Shaded Light', 'ultimate-social-media-plus'); ?></label>
                    <div class="sfsiplus_icns_tab_3"><span class="sfsiplus_row_15_1 sfsiplus_rss_section"></span><span class="sfsiplus_row_15_2 sfsiplus_email_section"></span><span class="sfsiplus_row_15_3 sfsiplus_facebook_section"></span><span class="sfsiplus_row_15_5 sfsiplus_twitter_section"></span><span class="sfsiplus_row_15_7 sfsiplus_youtube_section"></span><span class="sfsiplus_row_15_8 sfsiplus_pinterest_section"></span><span class="sfsiplus_row_15_9 sfsiplus_linkedin_section"></span><span class="sfsiplus_row_15_10 sfsiplus_instagram_section"></span><span class="sfsiplus_row_15_11 sfsiplus_houzz_section"></span><span class="sfsiplus_row_15_22 sfsiplus_telegram_section"></span><span class="sfsiplus_row_15_23 sfsiplus_vk_section"></span> <span class="sfsiplus_row_15_24 sfsiplus_ok_section"></span><span class="sfsiplus_row_15_26 sfsiplus_wechat_section"></span><span class="sfsiplus_row_15_25 sfsiplus_weibo_section"></span><span class="sfsiplus_row_15_27 sfsiplus_whatsapp_section"></span><span class="sfsiplus_row_15_29 sfsiplus_copylink_section"></span><span class="sfsiplus_row_15_28 sfsiplus_mastodon_section"></span>
                        <!--<span class="sfsiplus_row_15_11 sf_section"></span>-->
                    </div>
                </li>

                <li>
                    <input name="sfsi_plus_actvite_theme" <?php echo ($option3['sfsi_plus_actvite_theme'] == 'transparent') ?  'checked="true"' : ''; ?> type="radio" value="transparent" class="styled" />
                    <label style="line-height:20px !important;margin-top:15px;  ">
                        <?php _e('Transparent', 'ultimate-social-media-plus'); ?> <br />
                        <span style="font-size: 9px;">(<?php _e('for dark backgrounds', 'ultimate-social-media-plus') ?>)</span>
                    </label>
                    <div class="sfsiplus_icns_tab_3 trans_bg" style="padding-left: 6px;"><span class="sfsiplus_row_16_1 sfsiplus_rss_section"></span><span class="sfsiplus_row_16_2 sfsiplus_email_section"></span><span class="sfsiplus_row_16_3 sfsiplus_facebook_section"></span><span class="sfsiplus_row_16_5  sfsiplus_twitter_section"></span><span class="sfsiplus_row_16_7 sfsiplus_youtube_section"></span><span class="sfsiplus_row_16_8 sfsiplus_pinterest_section"></span><span class="sfsiplus_row_16_9 sfsiplus_linkedin_section"></span><span class="sfsiplus_row_16_10 sfsiplus_instagram_section"></span><span class="sfsiplus_row_16_11 sfsiplus_houzz_section"></span><span class="sfsiplus_row_16_22 sfsiplus_telegram_section"></span><span class="sfsiplus_row_16_23 sfsiplus_vk_section"></span> <span class="sfsiplus_row_16_24 sfsiplus_ok_section"></span><span class="sfsiplus_row_16_26 sfsiplus_wechat_section"></span><span class="sfsiplus_row_16_25 sfsiplus_weibo_section"></span><span class="sfsiplus_row_16_27 sfsiplus_whatsapp_section"></span><span class="sfsiplus_row_16_29 sfsiplus_copylink_section"></span><span class="sfsiplus_row_16_28 sfsiplus_mastodon_section"></span>
                        <!--<span class="sfsiplus_row_16_11 sf_section"></span>-->
                    </div>
                </li>

                <?php if (get_option('sfsi_plus_custom_icons') == 'yes') { ?>
                    <!--Custom Icon Support {Monad}-->
                    <li class="cstomskins_upload">
                        <input name="sfsi_plus_actvite_theme" <?php echo ($option3['sfsi_plus_actvite_theme'] == 'custom_support') ?  'checked="true"' : ''; ?> type="radio" value="custom_support" class="styled" />
                        <label style="line-height:20px !important;margin-top:15px;  ">
                            <?php _e('Custom Icons', 'ultimate-social-media-plus'); ?>
                            <br />
                        </label>
                        <div class="sfsiplus_icns_tab_3" style="padding-left: 6px;">
                            <?php
                                if (get_option("plus_rss_skin")) {
                                    $icon = get_option("plus_rss_skin");
                                    echo '<span class="sfsiplus_row_17_1 sfsiplus_rss_section sfsi_plus-bgimage" style="background: url(' . $icon . ') no-repeat;">		
                                </span>';
                                } else {
                                    echo '<span class="sfsiplus_row_17_1 sfsiplus_rss_section" style="background-position:-1px 0;"></span>';
                                }

                                if (get_option("plus_email_skin")) {
                                    $icon = get_option("plus_email_skin");
                                    echo '<span class="sfsiplus_row_17_2 sfsiplus_email_section sfsi_plus-bgimage" style="background: url(' . $icon . ') no-repeat;"></span>';
                                } else {
                                    echo '<span class="sfsiplus_row_17_2 sfsiplus_email_section" style="background-position:-58px 0;"></span>';
                                }

                                if (get_option("plus_facebook_skin")) {
                                    $icon = get_option("plus_facebook_skin");
                                    echo '<span class="sfsiplus_row_17_3 sfsiplus_facebook_section sfsi_plus-bgimage" style="background: url(' . $icon . ') no-repeat;"></span>';
                                } else {
                                    echo '<span class="sfsiplus_row_17_3 sfsiplus_facebook_section" style="background-position:-118px 0;"></span>';
                                }

                                if (get_option("plus_twitter_skin")) {
                                    $icon = get_option("plus_twitter_skin");
                                    echo '<span class="sfsiplus_row_17_5 sfsiplus_twitter_section sfsi_plus-bgimage" style="background: url(' . $icon . ') no-repeat;"></span>';
                                } else {
                                    echo '<span class="sfsiplus_row_17_5 sfsiplus_twitter_section" style="background-position:-235px 0;"></span>';
                                }

                                if (get_option("plus_youtube_skin")) {
                                    $icon = get_option("plus_youtube_skin");
                                    echo '<span class="sfsiplus_row_17_7 sfsiplus_youtube_section sfsi_plus-bgimage" style="background: url(' . $icon . ') no-repeat;"></span>';
                                } else {
                                    echo '<span class="sfsiplus_row_17_7 sfsiplus_youtube_section" style="background-position:-350px 0;"></span>';
                                }

                                if (get_option("plus_pintrest_skin")) {
                                    $icon = get_option("plus_pintrest_skin");
                                    echo '<span class="sfsiplus_row_17_8 sfsiplus_pinterest_section sfsi_plus-bgimage" style="background: url(' . $icon . ') no-repeat;"></span>';
                                } else {
                                    echo '<span class="sfsiplus_row_17_8 sfsiplus_pinterest_section" style="background-position:-409px 0;"></span>';
                                }

                                if (get_option("plus_linkedin_skin")) {
                                    $icon = get_option("plus_linkedin_skin");
                                    echo '<span class="sfsiplus_row_17_9 sfsiplus_linkedin_section sfsi_plus-bgimage" style="background: url(' . $icon . ') no-repeat;"></span>';
                                } else {
                                    echo '<span class="sfsiplus_row_17_9 sfsiplus_linkedin_section" style="background-position:-467px 0;"></span>';
                                }

                                if (get_option("plus_instagram_skin")) {
                                    $icon = get_option("plus_instagram_skin");
                                    echo '<span class="sfsiplus_row_17_10 sfsiplus_instagram_section sfsi_plus-bgimage" style="background: url(' . $icon . ') no-repeat;"></span>';
                                } else {
                                    echo '<span class="sfsiplus_row_17_10 sfsiplus_instagram_section" style="background-position:-526px 0;"></span>';
                                }
                                if (get_option("plus_houzz_skin")) {
                                    $icon = get_option("plus_houzz_skin");
                                    echo '<span class="sfsiplus_row_17_11 sfsiplus_houzz_section sfsi_plus-bgimage" style="background: url(' . $icon . ') no-repeat;"></span>';
                                } else {
                                    echo '<span class="sfsiplus_row_17_11 sfsiplus_houzz_section" style="background-position:-711px 0;"></span>';
                                }

                                if (get_option("plus_telegram_skin")) {
                                    $icon = get_option("plus_telegram_skin");
                                    echo '<span class="sfsiplus_row_17_22 sfsiplus_telegram_section sfsi_plus-bgimage" style="background: url(' . $icon . ') no-repeat;"></span>';
                                } else {
                                    echo '<span class="sfsiplus_row_17_22 sfsiplus_telegram_section" style="background-position:-769px 0;"></span>';
                                }
                                if (get_option("plus_vk_skin")) {
                                    $icon = get_option("plus_vk_skin");
                                    echo '<span class="sfsiplus_row_17_23 sfsiplus_vk_section sfsi_plus-bgimage" style="background: url(' . $icon . ') no-repeat;margin-top:6px;"></span>';
                                } else {
                                    echo '<span class="sfsiplus_row_17_23 sfsiplus_vk_section" style="background-position:-839px 0;"></span>';
                                }

                                if (get_option("plus_ok_skin")) {
                                    $icon = get_option("plus_ok_skin");
                                    echo '<span class="sfsiplus_row_17_24 sfsiplus_ok_section sfsi_plus-bgimage" style="background: url(' . $icon . ') no-repeat;margin-top:6px;"></span>';
                                } else {
                                    echo '<span class="sfsiplus_row_17_24 sfsiplus_ok_section" style="background-position:-909px 0;"></span>';
                                }

                                if (get_option("plus_wechat_skin")) {
                                    $icon = get_option("plus_wechat_skin");
                                    echo '<span class="sfsiplus_row_17_25 sfsiplus_wechat_section sfsi_plus-bgimage" style="background: url(' . $icon . ') no-repeat;margin-top:6px;"></span>';
                                } else {
                                    echo '<span class="sfsiplus_row_17_26 sfsiplus_wechat_section" style="background-position:-1045px 0;"></span>';
                                }
                                if (get_option("plus_weibo_skin")) {
                                    $icon = get_option("plus_weibo_skin");
                                    echo '<span class="sfsiplus_row_17_25 sfsiplus_weibo_section sfsi_plus-bgimage" style="background: url(' . $icon . ') no-repeat;margin-top:6px;"></span>';
                                } else {
                                    echo '<span class="sfsiplus_row_17_25 sfsiplus_weibo_section" style="background-position:-979px 0;"></span>';
                                }


                                ?>

                        </div>
                    </li>
                <?php
                }
                ?>
                <?php if (get_option('sfsi_plus_custom_icons') == 'no') { ?>

                    <li style="display: flex;align-items: center;">
                        <a class="pop-up" data-id="sfsi_plus_quickpay-overlay" onclick="sfsi_plus_open_quick_checkout(event)" target="_blank" style="display: flex;">

                            <input name="sfsi_plus_actvite_theme" type="radio" value="custom_support" class="styled" />
                            <label style="line-height:20px !important;margin-top:15px;opacity:0.5;font-weight:normal;">
                                <?php _e('Custom Icons -', 'ultimate-social-media-plus'); ?>
                                <br />
                            </label>
                        </a>

                        <div class="sfsiplus_icns_tab_3" style="padding-left: 6px;">
                            <p>
                                <a style="color: #12a252 !important;font-weight: bold; border-bottom:none;text-decoration: none;">
                                    <?php _e('Premium Feature:', 'ultimate-social-media-plus'); ?>
                                </a>
                                <?php _e('Upload any icons you want', 'ultimate-social-media-plus'); ?>
                                <a class="pop-up" style="cursor:pointer; color: #12a252 !important;border-bottom: 1px solid #12a252;text-decoration: none;" data-id="sfsi_plus_quickpay-overlay" onclick="sfsi_plus_open_quick_checkout(event)" target="_blank">
                                    <?php _e('Get it now.', 'ultimate-social-media-plus'); ?>
                                </a>
                            </p>
                        </div>
                    </li>

                    <li style="display: flex;align-items: center;">
                        <a class="pop-up" data-id="sfsi_plus_quickpay-overlay" onclick="sfsi_plus_open_quick_checkout(event)" target="_blank" style="display: flex;">

                            <input type="radio" class="styled" />
                            <label style="line-height:20px !important;margin-top:15px;opacity: 0.5;min-width: 79px;font-weight: normal;">
                                <?php _e('Tailored -', 'ultimate-social-media-plus'); ?>
                                <br />
                            </label>
                        </a>

                        <div class="sfsiplus_icns_tab_3" style="padding-left: 6px;">
                            <p>
                                <span>
                                    <?php _e('Let us create icons matching your site perfectly (both in terms of colors and shape).', 'ultimate-social-media-plus'); ?>
                                </span>
                                <a href="https://sellcodes.com/0AL0J23f" style="cursor:pointer; color: #12a252 !important;border-bottom: 1px solid #12a252;text-decoration: none;font-weight: bold;" target="_blank">
                                    Learn more.
                                </a>
                            </p>
                        </div>
                    </li>

                <?php
                }
                ?>
                <?php

                if ($option3['sfsi_plus_premium_icons_design_box'] == 'yes') { ?>
                    <li>
                        <?php include_once(SFSI_PLUS_DOCROOT . '/views/subviews/que4/banner.php'); ?>

                    </li>
                <?php } ?>

                <li>
                    <p style="font-weight: bold; margin: 12px 0 0;">
                        <?php _e("Need icons for another theme? Let us know in the", 'ultimate-social-media-plus'); ?>
                        <a target="_blank" href="https://wordpress.org/support/plugin/ultimate-social-media-plus/#new-topic-0" style="color:#8E81BD; text-decoration:underline;">
                            <?php _e(" Support Forum", 'ultimate-social-media-plus'); ?>
                        </a>
                        <?php //_e("to offer your icons here and get a free link (& traffic) back to your site!", 'ultimate-social-media-plus'); 
                        ?>
                    </p>
                </li>
            </ul>
            <!--icon themes section start -->

            <?php include_once(SFSI_PLUS_DOCROOT . '/views/subviews/que4/animatethem.php'); ?>

        </div>
    </div>
    <!--Content of 4-->


    <?php sfsi_plus_ask_for_help(3); ?>


    <!-- SAVE BUTTON SECTION   -->
    <div class="save_button tab_3_sav">
        <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/ajax-loader.gif" class="loader-img" />
        <?php $nonce = wp_create_nonce("update_plus_step3"); ?>
        <a href="javascript:;" id="sfsi_plus_save3" title="Save" data-nonce="<?php echo $nonce; ?>">
            <?php _e('Save', 'ultimate-social-media-plus'); ?>
        </a>
    </div> <!-- END SAVE BUTTON SECTION   -->

    <a class="sfsiColbtn closeSec" href="javascript:;">
        <?php _e('Collapse area', 'ultimate-social-media-plus'); ?>
    </a>
    <label class="closeSec"></label>
    <!-- ERROR AND SUCCESS MESSAGE AREA-->
    <p class="red_txt errorMsg" style="display:none"> </p>
    <p class="green_txt sucMsg" style="display:none"> </p>
</div><!-- END Section 3 "What design & animation do you want to give your icons?" main div  -->