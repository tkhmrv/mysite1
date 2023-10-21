<?php

$option1 =  maybe_unserialize(get_option('sfsi_plus_section1_options', false));
// var_dump($option1);

/**
 * Sanitize, escape and validate values
 */
$option1['sfsi_plus_rss_display']         = (isset($option1['sfsi_plus_rss_display']))
    ? sanitize_text_field($option1['sfsi_plus_rss_display'])
    : '';
$option1['sfsi_plus_email_display']        = (isset($option1['sfsi_plus_email_display']))
    ? sanitize_text_field($option1['sfsi_plus_email_display'])
    : '';
$option1['sfsi_plus_facebook_display']     = (isset($option1['sfsi_plus_facebook_display']))
    ? sanitize_text_field($option1['sfsi_plus_facebook_display'])
    : '';
$option1['sfsi_plus_twitter_display']     = (isset($option1['sfsi_plus_twitter_display']))
    ? sanitize_text_field($option1['sfsi_plus_twitter_display'])
    : '';
$option1['sfsi_plus_youtube_display']     = (isset($option1['sfsi_plus_youtube_display']))
    ? sanitize_text_field($option1['sfsi_plus_youtube_display'])
    : '';
$option1['sfsi_plus_pinterest_display'] = (isset($option1['sfsi_plus_pinterest_display']))
    ? sanitize_text_field($option1['sfsi_plus_pinterest_display'])
    : '';
$option1['sfsi_plus_linkedin_display']     = (isset($option1['sfsi_plus_linkedin_display']))
    ? sanitize_text_field($option1['sfsi_plus_linkedin_display'])
    : '';
$option1['sfsi_plus_instagram_display'] = (isset($option1['sfsi_plus_instagram_display']))
    ? sanitize_text_field($option1['sfsi_plus_instagram_display'])
    : '';
$option1['sfsi_plus_houzz_display']     = (isset($option1['sfsi_plus_houzz_display']))
    ? sanitize_text_field($option1['sfsi_plus_houzz_display'])
    : '';
$option1['sfsi_plus_premium_icons_box'] = (isset($option1['sfsi_plus_premium_icons_box']))
    ? sanitize_text_field($option1['sfsi_plus_premium_icons_box'])
    : 'yes';
$option1['sfsi_plus_whatsapp_display']     = (isset($option1['sfsi_plus_whatsapp_display']))
? sanitize_text_field($option1['sfsi_plus_whatsapp_display'])
: '';
// var_dump(get_option('sfsi_plus_custom_icons'));
//MZ CODE START
$option1['sfsi_plus_ok_display'] = (isset($option1['sfsi_plus_ok_display'])) ? sanitize_text_field($option1['sfsi_plus_ok_display']) : 'no';
$option1['sfsi_plus_telegram_display'] = (isset($option1['sfsi_plus_telegram_display']))
    ? sanitize_text_field($option1['sfsi_plus_telegram_display']) : 'no';
$option1['sfsi_plus_vk_display'] = (isset($option1['sfsi_plus_vk_display']))
    ? sanitize_text_field($option1['sfsi_plus_vk_display']) : 'no';
$option1['sfsi_plus_wechat_display'] = (isset($option1['sfsi_plus_wechat_display'])) ? sanitize_text_field($option1['sfsi_plus_wechat_display']) : 'no';
$option1['sfsi_plus_weibo_display'] = (isset($option1['sfsi_plus_weibo_display'])) ? sanitize_text_field($option1['sfsi_plus_weibo_display']) : 'no';
$option1['sfsi_plus_copylink_display'] =	(isset($option1['sfsi_plus_copylink_display'])) ? sanitize_text_field($option1['sfsi_plus_copylink_display']) : 'no';
$option1['sfsi_plus_mastodon_display'] = (isset($option1['sfsi_plus_mastodon_display'])) ? sanitize_text_field($option1['sfsi_plus_mastodon_display']) : 'no';

//MZ CODE ENd

?>

<!-- Section 1 "Which icons do you want to show on your site? " main div Start -->
<div class="tab1">
    <p class="top_txt">
        <?php _e( 'In general, the more icons you offer the better because people have different preferences, and more options mean that there’s something for everybody, increasing the chances that you get followed and/or shared.', 'ultimate-social-media-plus' ); ?>
    </p>
    <ul class="plus_icn_listing">
        <!-- RSS ICON -->
        <li class="gary_bg">
            <div class="radio_section tb_4_ck">
                <input name="sfsi_plus_rss_display" <?php echo ($option1['sfsi_plus_rss_display'] == 'yes') ? 'checked="true"' : ''; ?> id="sfsi_plus_rss_display" type="checkbox" value="yes" class="styled" />
            </div>
            <span class="sfsicls_rs_s">
                <?php _e( 'RSS', 'ultimate-social-media-plus' ); ?>
            </span>
            <div class="sfsiplus_right_info">
                <p>
                    <span>
                        <?php _e( 'Strongly recommended:', 'ultimate-social-media-plus' ); ?>
                    </span>

                    <?php _e( 'RSS is still popular, esp. among the tech-savvy crowd.', 'ultimate-social-media-plus' ); ?>

                    <label class="expanded-area">
                        <?php _e( 'RSS stands for Really Simply Syndication and is an easy way for people to read your content. ', 'ultimate-social-media-plus' ); ?>
                        <a href="http://en.wikipedia.org/wiki/RSS" target="_new" title="Syndication">
                            <?php _e( 'Learn more about RSS', 'ultimate-social-media-plus' ); ?>
                        </a>.
                    </label>
                </p>
                <a href="javascript:;" class="expand-area"><?php _e( 'Read more', 'ultimate-social-media-plus' ); ?></a>
            </div>
        </li>
        <!-- END RSS ICON -->

        <!-- EMAIL ICON -->
        <li class="gary_bg">
            <div>
                <div class="radio_section tb_4_ck">
                    <input name="sfsi_plus_email_display" <?php echo ($option1['sfsi_plus_email_display'] == 'yes') ? 'checked="true"' : ''; ?> id="sfsi_plus_email_display" type="checkbox" value="yes" class="styled" />
                </div>
                <span class="sfsicls_email">
                    <?php _e( 'Email', 'ultimate-social-media-plus' ); ?>
                </span>
            </div>

            <div class="sfsiplus_right_info">
                <p>
                    <span>
                        <?php _e( 'Strongly recommended:', 'ultimate-social-media-plus' ); ?>
                    </span>

                    <?php _e( 'Email is the most effective tool to build up followership.', 'ultimate-social-media-plus' ); ?>

                    <span style="float: right;margin-right: 13px; margin-top: -3px;">
                        <?php if (get_option('sfsi_plus_footer_sec') == "yes") {
                            $nonce = wp_create_nonce("remove_plusfooter"); ?> <a style="font-size:13px;margin-left:30px;color:#777777;" href="javascript:;" class="sfsiplus_removeFooter" data-nonce="<?php echo $nonce; ?>"><?php _e( 'Remove credit link', 'ultimate-social-media-plus' ); ?></a>
                        <?php } ?>
                    </span>
                    <label class="expanded-area">
                        <?php _e( 'Everybody uses email – that’s why it’s much more effective than social media to make people follow you', 'ultimate-social-media-plus' ); ?>
                        (<a href="http://www.entrepreneur.com/article/230949" target="_new"><?php _e('learn more', 'ultimate-social-media-plus'); ?></a>)
                        <?php _e( 'Not offering an email subscription option mean losing out on future traffic to your site.', 'ultimate-social-media-plus' ); ?>
                    </label>
                </p>
                <a href="javascript:;" class="expand-area"><?php _e( 'Read more', 'ultimate-social-media-plus' ); ?></a>
            </div>
        </li>
        <!-- EMAIL ICON -->

        <!-- FACEBOOK ICON -->
        <li class="gary_bg">
            <div>

                <div class="radio_section tb_4_ck">
                    <input name="sfsi_plus_facebook_display" <?php echo ($option1['sfsi_plus_facebook_display'] == 'yes') ? 'checked="true"' : ''; ?> id="sfsi_plus_facebook_display" type="checkbox" value="yes" class="styled" />
                </div>
                <span class="sfsicls_facebook">
                    <?php _e( 'Facebook', 'ultimate-social-media-plus' ); ?>
                </span>
            </div>

            <div class="sfsiplus_right_info">
                <p>
                    <span><?php _e( 'Strongly recommended:', 'ultimate-social-media-plus' ); ?></span>
                    <?php _e( 'Facebook is crucial, esp. for sharing.', 'ultimate-social-media-plus' ); ?>

                    <label class="expanded-area">
                        <?php _e('Facebook is the giant in the social media world, and even if you don’t have a Facebook account yourself you should display this icon, so that Facebook users can share your site on Facebook.', 'ultimate-social-media-plus'); ?>
                    </label>
                </p>
                <a href="javascript:;" class="expand-area"><?php _e( 'Read more', 'ultimate-social-media-plus' ); ?></a>
            </div>
        </li>
        <!-- END FACEBOOK ICON -->

        <!-- TWITTER ICON -->
        <li class="gary_bg">
            <div>
                <div class="radio_section tb_4_ck">
                    <input name="sfsi_plus_twitter_display" <?php echo ( $option1['sfsi_plus_twitter_display'] == 'yes' ) ? 'checked="true"' : ''; ?> id="sfsi_plus_twitter_display" type="checkbox" value="yes" class="styled" />
                </div>
                <span class="sfsicls_twt">
                    Twitter
                </span>
            </div>
            <div class="sfsiplus_right_info">
                <p>
                    <span><?php _e('Strongly recommended:', 'ultimate-social-media-plus'); ?></span>
                    <?php _e('Can have a strong promotional effect.', 'ultimate-social-media-plus'); ?>

                    <label class="expanded-area">
                        <?php _e('If you have a Twitter-account then adding this icon is a no-brainer. However, similar as with Facebook, even if you don’t have one you should still show this icon so that Twitter-users can share your site.', 'ultimate-social-media-plus'); ?>
                    </label>
                </p>

                <a href="javascript:;" class="expand-area"><?php _e( 'Read more', 'ultimate-social-media-plus' ); ?></a>
            </div>
        </li>
        <!-- END TWITTER ICON -->


        <!-- YOUTUBE ICON -->
        <li class="vertical-align">
            <div>

                <div class="radio_section tb_4_ck">
                    <input name="sfsi_plus_youtube_display" <?php echo ($option1['sfsi_plus_youtube_display'] == 'yes') ? 'checked="true"' : ''; ?> id="sfsi_plus_youtube_display" type="checkbox" value="yes" class="styled" />
                </div>
                <span class="sfsicls_utube">
                    <?php _e( 'Youtube', 'ultimate-social-media-plus' ); ?>
                </span>
            </div>
            <div class="sfsiplus_right_info">
                <p>
                    <span><?php _e( 'It depends:', 'ultimate-social-media-plus' ); ?></span>
                    <?php _e( 'Show this icon if you have a Youtube account (and you should set up one if you have video content – that can increase your traffic significantly).', 'ultimate-social-media-plus' ); ?>
                </p>
            </div>
        </li>
        <!-- END YOUTUBE ICON -->

        <!-- LINKEDIN ICON -->
        <li class="vertical-align">
            <div>
                <div class="radio_section tb_4_ck">
                    <input name="sfsi_plus_linkedin_display" <?php echo ( $option1['sfsi_plus_linkedin_display'] == 'yes' ) ? 'checked="true"' : ''; ?> id="sfsi_plus_linkedin_display" type="checkbox" value="yes" class="styled" />
                </div>
                <span class="sfsicls_linkdin">
                    <?php _e( 'LinkedIn', 'ultimate-social-media-plus' ); ?>
                </span>
            </div>
            <div class="sfsiplus_right_info">
                <p>
                    <span><?php _e('It depends:', 'ultimate-social-media-plus'); ?></span>
                    <?php _e('No.1 network for business purposes. Use this icon if you’re a LinkedInner.', 'ultimate-social-media-plus'); ?>
                </p>
            </div>
        </li>
        <!-- END LINKEDIN ICON -->

        <!-- PINTEREST ICON -->
        <li class="vertical-align">
            <div>
                <div class="radio_section tb_4_ck">
                    <input name="sfsi_plus_pinterest_display" <?php echo ($option1['sfsi_plus_pinterest_display'] == 'yes') ? 'checked="true"' : ''; ?> id="sfsi_plus_pinterest_display" type="checkbox" value="yes" class="styled" />
                </div>
                <span class="sfsicls_pinterest">
                    <?php _e( 'Pinterest', 'ultimate-social-media-plus' ); ?>
                </span>
            </div>
            <div class="sfsiplus_right_info">
                <p>
                    <span><?php _e( 'It depends:', 'ultimate-social-media-plus' ); ?></span>
                    <?php _e( 'Show this icon if you have a Pinterest account (and you should set up one if you publish new pictures regularly – that can increase your traffic significantly).', 'ultimate-social-media-plus' ); ?>
                </p>
            </div>
        </li>
        <!-- END PINTEREST ICON -->

        <!-- INSTAGRAM ICON -->
        <li class="vertical-align">
            <div>
                <div class="radio_section tb_4_ck"><input name="sfsi_plus_instagram_display" <?php echo ($option1['sfsi_plus_instagram_display'] == 'yes') ? 'checked="true"' : ''; ?> id="sfsi_plus_instagram_display" type="checkbox" value="yes" class="styled" /></div>
                <span class="sfsicls_instagram">
                    <?php _e( 'Instagram', 'ultimate-social-media-plus' ); ?>
                </span>
            </div>
            <div class="sfsiplus_right_info">
                <p>
                    <span><?php _e( 'It depends:', 'ultimate-social-media-plus' ); ?></span>
                    <?php _e( 'Show this icon if you have an Instagram account.', 'ultimate-social-media-plus' ); ?>
                </p>
            </div>
        </li>
        <!-- END INSTAGRAM ICON -->

        <!-- Houzz ICON -->
        <li class="vertical-align">
            <div>
                <div class="radio_section tb_4_ck">
                    <input name="sfsi_plus_houzz_display" <?php echo (isset($option1['sfsi_plus_houzz_display']) && $option1['sfsi_plus_houzz_display'] == 'yes') ? 'checked="true"' : ''; ?> id="sfsi_plus_houzz_display" type="checkbox" value="yes" class="styled" />
                </div>
                <span class="sfsicls_houzz">
                    <?php _e( 'Houzz', 'ultimate-social-media-plus' ); ?>
                </span>
            </div>
            <div class="sfsiplus_right_info">
                <p>
                    <span><?php _e( 'It depends:', 'ultimate-social-media-plus' ); ?></span>
                    <?php _e( 'Show this icon if you have a Houzz account.', 'ultimate-social-media-plus' ); ?>

                    <?php _e( 'Houzz is the No.1 site & community in the world of architecture and interior design.', 'ultimate-social-media-plus' ); ?>
                    <a href="http://www.houzz.com/" target="_blank">
                        <?php _e( 'Visit Houzz', 'ultimate-social-media-plus' ); ?>
                    </a>
                </p>
            </div>
        </li>
        <!-- END Houzz ICON -->

        <!--MZ CODE-->

        <!-- OK ICON -->
        <li class="vertical-align">
            <div>
                <div class="radio_section tb_4_ck">
                    <input name="sfsi_plus_ok_display" <?php echo (isset($option1['sfsi_plus_ok_display']) && $option1['sfsi_plus_ok_display'] == 'yes') ? 'checked="true"' : ''; ?> id="sfsi_plus_ok_display" type="checkbox" value="yes" class="styled" />
                </div>
                <span class="sfsicls_ok"><?php _e( 'OK', 'ultimate-social-media-plus' ); ?></span>
            </div>
            <div class="sfsiplus_right_info">
                <p>
                    <span><?php _e( 'It depends:', 'ultimate-social-media-plus' ); ?></span>
                    <?php _e( 'Show this icon if you have an OK account.', 'ultimate-social-media-plus' ); ?>
                </p>
            </div>
        </li>
        <!-- END OK ICON -->

        <!-- Telegram ICON -->
        <li class="vertical-align">
            <div>
                <div class="radio_section tb_4_ck">
                    <input name="sfsi_plus_telegram_display" <?php echo (isset($option1['sfsi_plus_telegram_display']) && $option1['sfsi_plus_telegram_display'] == 'yes') ? 'checked="true"' : ''; ?> id="sfsi_plus_telegram_display" type="checkbox" value="yes" class="styled" />
                </div>
                <span class="sfsicls_telegram"><?php _e( 'Telegram', 'ultimate-social-media-plus' ); ?></span>
            </div>
            <div class="sfsiplus_right_info">
                <p>
                    <span><?php _e( 'It depends:', 'ultimate-social-media-plus' ); ?></span>
                    <?php _e( 'Show this icon if you have a Telegram account.', 'ultimate-social-media-plus' ); ?>
                </p>
            </div>
        </li>
        <!-- END Telegram ICON -->

        <!-- VK ICON -->
        <li class="vertical-align">
            <div>
                <div class="radio_section tb_4_ck">
                    <input name="sfsi_plus_vk_display" <?php echo (isset($option1['sfsi_plus_vk_display']) && $option1['sfsi_plus_vk_display'] == 'yes') ? 'checked="true"' : ''; ?> id="sfsi_plus_vk_display" type="checkbox" value="yes" class="styled" />
                </div>
                <span class="sfsicls_vk"><?php _e( 'VK', 'ultimate-social-media-plus' ); ?></span>
            </div>
            <div class="sfsiplus_right_info">
                <p>
                    <span><?php _e( 'It depends:', 'ultimate-social-media-plus' ); ?></span>
                    <?php _e( 'Show this icon if you have a VK account.', 'ultimate-social-media-plus' ); ?>
                </p>
            </div>
        </li>
        <!-- END VK ICON -->

        <!-- WeChat ICON -->
        <li class="vertical-align">
            <div>
                <div class="radio_section tb_4_ck">
                    <input name="sfsi_plus_wechat_display" <?php echo (isset($option1['sfsi_plus_wechat_display']) && $option1['sfsi_plus_wechat_display'] == 'yes') ? 'checked="true"' : ''; ?> id="sfsi_plus_wechat_display" type="checkbox" value="yes" class="styled" />
                </div>
                <span style="padding-left:54px;" class="sfsicls_wechat"><?php _e( 'WeChat', 'ultimate-social-media-plus' ); ?></span>
            </div>
            <div class="sfsiplus_right_info">
                <p>
                    <span><?php _e( 'It depends:', 'ultimate-social-media-plus' ); ?></span>
                    <?php _e( 'Show this icon if you have a WeChat account.', 'ultimate-social-media-plus' ); ?>
                </p>
            </div>
        </li>
        <!-- END WeChat ICON -->

        <!-- WhatsApp ICON -->
        <li class="vertical-align">
            <div>
                <div class="radio_section tb_4_ck">
                    <input name="sfsi_plus_whatsapp_display" <?php echo (isset($option1['sfsi_plus_whatsapp_display']) && $option1['sfsi_plus_whatsapp_display'] == 'yes') ? 'checked="true"' : ''; ?> id="sfsi_plus_whatsapp_display" type="checkbox" value="yes" class="styled" />
                </div>
                <span class="sfsicls_whatsapp"><?php _e( 'WhatsApp', 'ultimate-social-media-plus' ); ?></span>
            </div>
            <div class="sfsiplus_right_info">
                <p>
                    <span><?php _e( 'It depends:', 'ultimate-social-media-plus' ); ?></span>
                    <?php _e( 'Show this icon if you want to allow users to share the page via WhatsApp.', 'ultimate-social-media-plus' ); ?>
                </p>
            </div>
        </li>
        <!-- END WhatsApp ICON -->

        <!-- Weibo ICON -->
        <li class="vertical-align">
            <div>
                <div class="radio_section tb_4_ck">
                    <input name="sfsi_plus_weibo_display" <?php echo (isset($option1['sfsi_plus_weibo_display']) && $option1['sfsi_plus_weibo_display'] == 'yes') ? 'checked="true"' : ''; ?> id="sfsi_plus_weibo_display" type="checkbox" value="yes" class="styled" />
                </div>
                <span class="sfsicls_weibo"><?php _e( 'Weibo', 'ultimate-social-media-plus' ); ?></span>
            </div>

            <div class="sfsiplus_right_info">
                <p>
                    <span><?php _e( 'It depends:', 'ultimate-social-media-plus' ); ?></span>
                    <?php _e( 'Show this icon if you have a Weibo account.', 'ultimate-social-media-plus' ); ?>
                </p>
            </div>
        </li>
        <!-- END Weibo ICON -->
        
        <!-- Copy ICON -->
        <li class="vertical-align">
	        <div>
	            <div class="radio_section tb_4_ck">
	                <input name="sfsi_plus_copylink_display" <?php echo ( isset( $option1['sfsi_plus_copylink_display'] ) && $option1['sfsi_plus_copylink_display'] == 'yes' ) ?  'checked="true"' : '' ;?> id="sfsi_plus_copylink_display" type="checkbox" value="yes" class="styled" />
	            </div>
	            <span class="sfsicls_copylink"><?php  _e( 'Copy link', 'ultimate-social-media-plus' ); ?></span>
	        </div>
            <div class="sfsiplus_right_info">
                <p>
                    <span><?php  _e( 'It depends:', 'ultimate-social-media-plus' ); ?></span>
                    <?php _e( 'Show this icon if you want to allow visitors to copy the url address of the page with a single click.', 'ultimate-social-media-plus' ); ?>
                </p>
            </div>
        </li>
        <!-- END Copy ICON -->

        <!-- Mastodon ICON -->
        <li class="vertical-align">
            <div>
                <div class="radio_section tb_4_ck">
                    <input name="sfsi_plus_mastodon_display" <?php echo (isset($option1['sfsi_plus_mastodon_display']) && $option1['sfsi_plus_mastodon_display'] == 'yes') ? 'checked="true"' : ''; ?> id="sfsi_plus_mastodon_display" type="checkbox" value="yes" class="styled" />
                </div>
                <span class="sfsicls_mastodon"><?php _e( 'Mastodon', 'ultimate-social-media-plus' ); ?></span>
            </div>

            <div class="sfsiplus_right_info">
                <p>
                    <?php _e( 'Mastodon is the largest decentralized social network on the internet that functions much like Twitter.', 'ultimate-social-media-plus' ); ?>
                </p>
            </div>
        </li>
        <!-- END Mastodon ICON -->

        <!--MZ CODE END-->

        <!-- Custom icon section start here -->

        <?php
        if (get_option('sfsi_plus_custom_icons') == 'no') {
            $icons = (isset($option1['sfsi_custom_files'])) ? maybe_unserialize($option1['sfsi_custom_files']) : array();
            if (!is_array($icons)) {
                $icons = array();
            }
            $total_icons = count($icons);
            end($icons);
            $endkey = key($icons);
            $endkey = (isset($endkey)) ? $endkey : 0;
            reset($icons);
            $first_key = key($icons);
            $first_key = (isset($first_key)) ? $first_key : 0;
            $new_element = 0;

            if ($total_icons > 0) {
                $new_element = $endkey + 1;
            }
        }

        ?>
        <!-- Display all custom icons  -->
        <?php if (get_option('sfsi_plus_custom_icons') == 'no') { ?>
            <?php $count = 1;
            for ($i = $first_key; $i <= $endkey; $i++) : ?>
                <?php if (!empty($icons[$i])) : ?>

                    <?php $count++;
                endif;
            endfor; ?>

            <!-- Create a custom icon if total uploaded icons are less than 5 -->
            <?php if ($count <= 5) : ?>
                <li id="plus_c<?php echo $new_element; ?>" class="plus_custom bdr_btm_non vertical-align">
                    <a class="pop-up" data-id="sfsi_plus_quickpay-overlay" onclick="sfsi_plus_open_quick_checkout(event)" target="_blank">

                        <div class="radio_section tb_4_ck" style="opacity:0.5">
                            <input type="checkbox" onclick="return false;  value=" yes" class="styled" disabled="true" />
                        </div>

                        <span class="plus_custom-img" style="opacity:0.5">
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/custom.png'; ?>" id="plus_CImg_<?php echo $new_element; ?>" />
                        </span>

                        <span class="custom sfsiplus_custom-txt" style="font-weight:normal;opacity:0.5;margin-left:2px">
                            <?php _e( 'Custom icon', 'ultimate-social-media-plus' ); ?>
                        </span>
                    </a>

                    <div class="sfsiplus_right_info ">
                        <p>
                            <a style="color: #12a252 !important;font-weight: bold; border-bottom:none;text-decoration: none;">
                                <?php _e( 'Premium Feature:', 'ultimate-social-media-plus' ); ?>
                            </a>
                            <?php _e('Upload a custom icon if you have other accounts/websites you want to link to.', 'ultimate-social-media-plus'); ?>
                            <a class="pop-up" style="cursor:pointer; color: #12a252 !important;border-bottom: 1px solid #12a252;text-decoration: none;" data-id="sfsi_plus_quickpay-overlay" onclick="sfsi_plus_open_quick_checkout(event)" target="_blank">
                                <?php _e( 'Get it now.', 'ultimate-social-media-plus' ); ?>
                            </a>
                        </p>
                    </div>
                </li>
            <?php endif; ?>
        <?php } ?>
        <!-- END Custom icon section here -->
        <?php if (get_option('sfsi_plus_custom_icons') == 'yes') { ?>
            <!-- Custom icon section start here -->
            <?php
            $icons = (isset($option1['sfsi_custom_files'])) ? maybe_unserialize($option1['sfsi_custom_files']) : array();
            if (!is_array($icons)) {
                $icons = array();
            }
            $total_icons = count($icons);
            end($icons);
            $endkey = key($icons);
            $endkey = (isset($endkey)) ? $endkey : 0;
            reset($icons);
            $first_key = key($icons);
            $first_key = (isset($first_key)) ? $first_key : 0;
            $new_element = 0;

            if ($total_icons > 0) {
                $new_element = $endkey + 1;
            }
            ?>
            <!-- Display all custom icons  -->
            <?php $count = 1;
            for ($i = $first_key; $i <= $endkey; $i++) : ?>
                <?php if (!empty($icons[$i])) : ?>
                    <li id="plus_c<?php echo $i; ?>" class="plus_custom">
                        <div class="radio_section tb_4_ck">
                            <input name="plussfsiICON_<?php echo $i; ?>" checked="true" type="checkbox" value="yes" class="styled" element-type="sfsiplus-cusotm-icon" />
                        </div>
                        <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('plus_deleteIcons'); ?>">
                        <span class="plus_custom-img">
                            <img class="plus_sfcm" src="<?php echo (!empty($icons[$i])) ? esc_url($icons[$i]) : SFSI_PLUS_PLUGURL . 'images/custom.png'; ?>" id="plus_CImg_<?php echo $i; ?>" />
                        </span>
                        <span class="custom sfsiplus_custom-txt">
                            <?php _e('Custom', 'ultimate-social-media-plus'); ?>
                            <?php echo $count; ?>
                        </span>
                        <div class="sfsiplus_right_info">
                            <p>
                                <span><?php _e('It depends:', 'ultimate-social-media-plus'); ?></span>
                                <?php _e( 'Upload a custom icon if you have other accounts/websites you want to link to.', 'ultimate-social-media-plus' ); ?>
                            </p>
                        </div>
                    </li>
                    <?php $count++;
                endif;
            endfor; ?>

            <!-- Create a custom icon if total uploaded icons are less than 5 -->
            <?php if ($count <= 5) : ?>
                <li id="plus_c<?php echo $new_element; ?>" class="plus_custom bdr_btm_non vertical-align">
                    <div>
                        <div class="radio_section tb_4_ck">
                            <input name="plussfsiICON_<?php echo $new_element; ?>" type="checkbox" value="yes" class="styled" element-type="sfsiplus-cusotm-icon" ele-type='new' />
                        </div>

                        <span class="plus_custom-img">
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/custom.png'; ?>" id="plus_CImg_<?php echo $new_element; ?>" />
                        </span>

                        <span class="custom sfsiplus_custom-txt">
                            <?php _e( 'Custom', 'ultimate-social-media-plus' ); ?>
                            <?php echo $count; ?>
                        </span>
                    </div>

                    <div class="sfsiplus_right_info">
                        <p>
                            <span><?php _e( 'It depends:', 'ultimate-social-media-plus' ); ?></span>
                            <?php _e( 'Upload a custom icon if you have other accounts/websites you want to link to.', 'ultimate-social-media-plus' ); ?>
                        </p>
                    </div>
                </li>
            <?php endif; ?>
            <!-- END Custom icon section here -->
        <?php } ?>
    </ul>
    <ul>
        <li class="sfsi_plus_premium_brdr_box">
            <div class="sfsi_plus_prem_icons_added">
                <div class="sf_si_plus_prmium_head">
                    <h2><?php _e( 'New:', 'ultimate-social-media-plus' ); ?><span> <?php _e( 'In our Premium Plugin we added icons for:', 'ultimate-social-media-plus' ); ?></span></h2>
                </div>
                <div class="sfsi_plus_premium_row">
                    <div class="sfsi_plus_prem_cmn_rowlisting">
                        <span>
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/snapchat.png'; ?>" id="CImg" alt="" />
                        </span>
                        <span class="sfsicls_plus_prem_text"><?php _e( 'Snapchat', 'ultimate-social-media-plus' ); ?></span>
                    </div>

                    <div class="sfsi_plus_prem_cmn_rowlisting">
                        <span>
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/whatsapp.png'; ?>" id="CImg" alt="" />
                        </span>
                        <span class="sfsicls_plus_prem_text"><?php _e( 'WhatsApp or Phone', 'ultimate-social-media-plus' ); ?></span>
                    </div>

                    <div class="sfsi_plus_prem_cmn_rowlisting">
                        <span>
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/yummly.png'; ?>" id="CImg" alt="" />
                        </span>
                        <span class="sfsicls_plus_prem_text"><?php _e( 'Yummly', 'ultimate-social-media-plus' ); ?></span>
                    </div>
                    <div class="sfsi_plus_prem_cmn_rowlisting">
                        <span>
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/yelp.png'; ?>" id="CImg" alt="" />
                        </span>
                        <span class="sfsicls_plus_prem_text"><?php _e( 'Yelp', 'ultimate-social-media-plus' ); ?></span>
                    </div>
                    <div class="sfsi_plus_prem_cmn_rowlisting">
                        <span>
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/print.png'; ?>" id="CImg" alt="" />
                        </span>
                        <span class="sfsicls_plus_prem_text"><?php _e( 'Print', 'ultimate-social-media-plus' ); ?></span>
                    </div>
                </div>
                <div class="sfsi_plus_premium_row">
                    <div class="sfsi_plus_prem_cmn_rowlisting">
                        <span>
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/soundcloud.png'; ?>" id="CImg" alt="" />
                        </span>
                        <span class="sfsicls_plus_prem_text"><?php _e( 'Soundcloud', 'ultimate-social-media-plus' ); ?></span>
                    </div>

                    <div class="sfsi_plus_prem_cmn_rowlisting">
                        <span>
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/skype.png'; ?>" id="CImg" alt="" />
                        </span>
                        <span class="sfsicls_plus_prem_text"><?php _e( 'Skype', 'ultimate-social-media-plus' ); ?></span>
                    </div>
                    <div class="sfsi_plus_prem_cmn_rowlisting">
                        <span>
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/flickr.png'; ?>" id="CImg" alt="" />
                        </span>
                        <span class="sfsicls_plus_prem_text"><?php _e( 'Flickr', 'ultimate-social-media-plus' ); ?></span>
                    </div>

                    <div class="sfsi_plus_prem_cmn_rowlisting">
                        <span>
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/angieslist.png'; ?>" id="CImg" alt="" />
                        </span>
                        <span class="sfsicls_plus_prem_text"><?php _e( 'Angie’s List', 'ultimate-social-media-plus' ); ?></span>
                    </div>

                    <div class="sfsi_plus_prem_cmn_rowlisting">
                        <span>
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/reddit.png'; ?>" id="CImg" alt="" />
                        </span>
                        <span class="sfsicls_plus_prem_text"><?php _e( 'Reddit', 'ultimate-social-media-plus' ); ?></span>
                    </div>
                </div>
                <div class="sfsi_plus_premium_row">
                    <div class="sfsi_plus_prem_cmn_rowlisting">
                        <span>
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/vimeo.png'; ?>" id="CImg" alt="" />
                        </span>
                        <span class="sfsicls_plus_prem_text"><?php _e( 'Vimeo', 'ultimate-social-media-plus' ); ?></span>
                    </div>

                    <div class="sfsi_plus_prem_cmn_rowlisting">
                        <span>
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/tumblr.png'; ?>" id="CImg" alt="" />
                        </span>
                        <span class="sfsicls_plus_prem_text"><?php _e( 'Tumblr', 'ultimate-social-media-plus' ); ?></span>
                    </div>
                    <div class="sfsi_plus_prem_cmn_rowlisting">
                        <span>
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/buffer.png'; ?>" id="CImg" alt="" />
                        </span>
                        <span class="sfsicls_plus_prem_text"><?php _e( 'Buffer', 'ultimate-social-media-plus' ); ?></span>
                    </div>
                    <div class="sfsi_plus_prem_cmn_rowlisting">
                        <span>
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/blogger.png'; ?>" id="CImg" alt="" />
                        </span>
                        <span class="sfsicls_plus_prem_text"><?php _e( 'Blogger', 'ultimate-social-media-plus' ); ?></span>
                    </div>

                    <div class="sfsi_plus_prem_cmn_rowlisting">
                        <span>
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/steam.png'; ?>" id="CImg" alt="" />
                        </span>
                        <span class="sfsicls_plus_prem_text"><?php _e( 'Steam', 'ultimate-social-media-plus' ); ?></span>
                    </div>
                </div>
                <div class="sfsi_plus_premium_row">
                    <div class="sfsi_plus_prem_cmn_rowlisting">
                        <span>
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/xing.png'; ?>" id="CImg" alt="" />
                        </span>
                        <span class="sfsicls_plus_prem_text"><?php _e( 'Xing', 'ultimate-social-media-plus' ); ?></span>
                    </div>

                    <div class="sfsi_plus_prem_cmn_rowlisting">
                        <span>
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/amazon.png'; ?>" id="CImg" alt="" />
                        </span>
                        <span class="sfsicls_plus_prem_text"><?php _e( 'Amazon', 'ultimate-social-media-plus' ); ?></span>
                    </div>
                    <div class="sfsi_plus_prem_cmn_rowlisting">
                        <span>
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/twitch.png'; ?>" id="CImg" alt="" />
                        </span>
                        <span class="sfsicls_plus_prem_text"><?php _e( 'Twitch', 'ultimate-social-media-plus' ); ?></span>
                    </div>
                    <div class="sfsi_plus_prem_cmn_rowlisting">
                        <span>
                            <img src="<?php echo SFSI_PLUS_PLUGURL . 'images/messenger.png'; ?>" id="CImg" alt="" />
                        </span>
                        <span class="sfsicls_plus_prem_text"><?php _e( 'Messenger', 'ultimate-social-media-plus' ); ?></span>
                    </div>
                </div>
                <div class="sfsi_plus_need_another_one_link">
                    <!--                     <p><?php _e('Need another one?', 'ultimate-social-media-plus'); ?><a href="mailto:biz@ultimatelysocial.com" target="_blank"> <?php _e( 'Tell us', 'ultimate-social-media-plus' ); ?></a></p> -->
                </div>
                <div class="sfsi_plus_need_another_tell_us">
                    <a href="https://www.ultimatelysocial.com/all-platforms/" target="_blank"><?php _e( '...and many more!', 'ultimate-social-media-plus' ); ?></a>
                    <a class="pop-up" style="cursor:pointer" data-id="sfsi_plus_quickpay-overlay" onclick="sfsi_plus_open_quick_checkout(event)" target="_blank">
                        <?php _e( ' Go premium now', 'ultimate-social-media-plus' ); ?>
                    </a>
                    <!--                     <a href="https://www.ultimatelysocial.com/usm-premium/?utm_source=usmplus_settings_page&utm_campaign=more_platforms&utm_medium=banner" target="_blank"><?php _e('See all features Premium Plugin', 'ultimate-social-media-plus'); ?></a>
 -->
                </div>
            </div>
        </li>
    </ul>
    <input type="hidden" value="<?php echo SFSI_PLUS_PLUGURL ?>" id="plugin_url" />
    <input type="hidden" value="" id="upload_id" />

    <?php sfsi_plus_ask_for_help(1); ?>

    <!-- SAVE BUTTON SECTION   -->
    <div class="save_button tab_1_sav">
        <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/ajax-loader.gif" class="loader-img" />
        <?php $nonce = wp_create_nonce("update_plus_step1"); ?>
        <a href="javascript:;" id="sfsi_plus_save1" title="Save" data-nonce="<?php echo $nonce; ?>">
            <?php _e( 'Save', 'ultimate-social-media-plus' ); ?>
        </a>
    </div>
    <!-- END SAVE BUTTON SECTION   -->

    <a class="sfsiColbtn closeSec" href="javascript:;">
        <?php _e('Collapse area', 'ultimate-social-media-plus'); ?>
    </a>

    <!-- ERROR AND SUCCESS MESSAGE AREA-->
    <p class="red_txt errorMsg" style="display:none"> </p>
    <p class="green_txt sucMsg" style="display:none"> </p>

</div>
<!-- END Section 1 "Which icons do you want to show on your site? " main div-->