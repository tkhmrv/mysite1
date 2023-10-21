<!--icon Animation section start -->
<div class="sub_row stand sec_new" style="margin-left: 0px;">

	<h3><?php _e( 'Animate them (your main icons)', 'ultimate-social-media-plus' ); ?></h3>

    <div id="animationSection" class="radio_section tab_3_option">

        <input name="sfsi_plus_mouseOver" <?php echo ( isset( $option3['sfsi_plus_mouseOver'] ) && $option3['sfsi_plus_mouseOver'] == 'yes' ) ? 'checked="true"' : ''; ?> type="checkbox" value="yes" class="styled" />
        <label><?php _e( 'Mouse-Over effects', 'ultimate-social-media-plus' ); ?></label>

        <div class="col-md-12 rowmarginleft45 mouse-over-effects <?php echo ( isset( $option3['sfsi_plus_mouseOver'] ) && $option3['sfsi_plus_mouseOver'] == 'yes' ) ? 'show' : 'hide'; ?>">

            <div class="row">
                <input value="same_icons" name="sfsi_plus_mouseOver_effect_type" <?php echo ( isset( $option3['sfsi_plus_mouseOver_effect_type'] ) && $option3['sfsi_plus_mouseOver_effect_type'] == 'same_icons' ) ? 'checked=checked' : ''; ?> type="radio" class="styled" />
                <label><?php _e( 'Same-icon effects', 'ultimate-social-media-plus' ); ?></label>
            </div><!-- row closes -->
            <div class="row rowpadding10 same_icons_effects <?php echo ( isset( $option3['sfsi_plus_mouseOver_effect_type'] ) && $option3['sfsi_plus_mouseOver_effect_type'] == 'same_icons' ) ? 'show' : 'hide'; ?>">
                <div class="effectContainer bottommargin30">
                    <div class="effectName">
                        <input class="styled" type="radio" name="sfsi_plus_same_icons_mouseOver_effect" value="fade_in" <?php echo ( isset( $option3['sfsi_plus_mouseOver_effect'] ) && $option3['sfsi_plus_mouseOver_effect'] == 'fade_in' ) ? 'checked="true"' : ''; ?> />
                        <label>
                            <span><?php _e( 'Fade In', 'ultimate-social-media-plus' ); ?></span>
                            <span><?php _e( '(Icons turn from shadow to full color)', 'ultimate-social-media-plus' ); ?></span>
                        </label>
                    </div>
                    <div class="effectName">
                        <input class="styled" type="radio" name="sfsi_plus_same_icons_mouseOver_effect" value="scale" <?php echo ( isset( $option3['sfsi_plus_mouseOver_effect'] ) && $option3['sfsi_plus_mouseOver_effect'] == 'scale' ) ? 'checked="true"' : ''; ?>>
                        <label>
                            <span><?php _e( 'Scale', 'ultimate-social-media-plus' ); ?></span>
                            <span><?php _e( '(Icons become bigger)', 'ultimate-social-media-plus' ); ?></span>
                        </label>
                    </div>
                </div>
                <div class="effectContainer bottommargin20">
                    <div class="effectName">
                        <input class="styled" type="radio" name="sfsi_plus_same_icons_mouseOver_effect" value="combo" <?php echo ( isset( $option3['sfsi_plus_mouseOver_effect'] ) && $option3['sfsi_plus_mouseOver_effect'] == 'combo' ) ? 'checked="true"' : ''; ?> />
                        <label>
                            <span><?php _e( 'Combo', 'ultimate-social-media-plus' ); ?></span>
                            <span><?php _e( '(Both fade in and scale effects)', 'ultimate-social-media-plus' ); ?></span>
                        </label>
                    </div>
                    <div disabled class="effectName inactiveSection">
                        <input class="styled" type="radio" name="sfsi_plus_same_icons_mouseOver_effect" value="fade_out" <?php echo ( isset( $option3['sfsi_plus_mouseOver_effect'] ) && $option3['sfsi_plus_mouseOver_effect'] == 'fade_out' ) ? 'checked="true"' : ''; ?> />
                        <label> 
                            <span><?php _e( 'Fade Out', 'ultimate-social-media-plus' ); ?></span>
                            <span><?php _e( '(Icons turn from full color to shadow)', 'ultimate-social-media-plus' ); ?></span>
                        </label>
                    </div>
                </div>
                <div class="row mouseover-premium-notice zerotoppadding rowmarginleft45">
                    <label><?php _e( 'Greyed-out options are available in the', 'ultimate-social-media-plus' ); ?></label>
                    <a target="_blank" href="https://www.ultimatelysocial.com/usm-premium/?utm_source=usmplus_settings_page&utm_campaign=same_icon_effects&utm_medium=link"><?php  _e( 'Premium Plugin', 'ultimate-social-media-plus' ); ?></a>
                </div>
            </div><!-- row closes -->
            <div class="row other_icons_effects">
                <input value="other_icons" name="sfsi_plus_mouseOver_effect_type" <?php echo ( isset( $option3['sfsi_plus_mouseOver_effect_type'] ) && $option3['sfsi_plus_mouseOver_effect_type'] == 'other_icons' ) ? 'checked=checked' : ''; ?> type="radio" class="styled" />
                <label><?php _e( 'Show other icons on mouse-over (Only applied for Desktop Icons)', 'ultimate-social-media-plus' ); ?></label>
            </div><!-- row closes -->
            <div class="row rowpadding10 rowmarginleft25 other_icons_effects_options <?php echo ( isset( $option3['sfsi_plus_mouseOver_effect_type'] ) && $option3['sfsi_plus_mouseOver_effect_type'] == 'other_icons' ) ? 'show' : 'hide'; ?>" />
                <div disabled class="col-md-12 inactiveSection other_icons_effects_options_container sfsiplus_icon_flex_box">
                    <?php 
                        $arrDefaultIcons             = maybe_unserialize( SFSI_PLUS_ALLICONS );
                        $arrActiveStdDesktopIcons    = sfsi_plus_get_displayed_std_desktop_icons( $option1 );
                        $arrActiveCustomDesktopicons = sfsi_plus_get_displayed_custom_desktop_icons( $option1 );

                        foreach ($arrDefaultIcons as $key => $iconName ):
                            sfsi_plus_generate_other_icon_effect_admin_html( $iconName, $arrActiveStdDesktopIcons );
                        endforeach;

                        if( isset( $arrActiveCustomDesktopicons ) && !empty( $arrActiveCustomDesktopicons ) && is_array( $arrActiveCustomDesktopicons ) ) {

                            $i = 1;
                            foreach ( $arrActiveCustomDesktopicons as $index => $imgUrl ) {

                                if( !empty( $imgUrl ) ) {
                                    sfsi_plus_generate_other_icon_effect_admin_html( "custom", $arrActiveCustomDesktopicons,$index, $imgUrl, $i );
                                    $i++;
                                }
                            }
                        }
                    ?>
                </div>
                <div disabled class="col-md-12 inactiveSection rowmarginleft15 topmargin10">
                    <label><?php _e('Transition effect to those icons', 'ultimate-social-media-plus' ); ?></label>
                    <select name="mouseover_other_icons_transition_effect">
                        <option value="noeffect"><?php _e( 'No effect', 'ultimate-social-media-plus' ); ?></option>
                        <option value="flip"><?php _e( 'Flip', 'ultimate-social-media-plus' ); ?></option>
                    </select>
                </div>
                <div class="row mouseover-premium-notice rowmarginleft45">
                    <label><?php _e( 'Above options are available in the', 'ultimate-social-media-plus' ); ?></label>
                    <a target="_blank" href="https://www.ultimatelysocial.com/usm-premium/?utm_source=usmplus_settings_page&utm_campaign=different_icon_mouseover&utm_medium=link"><?php _e( 'Premium Plugin', 'ultimate-social-media-plus' ); ?></a>
                </div>
            </div><!-- row closes -->
        </div><!-- col-md-12 closes -->
    </div><!-- #animationSection closes -->
    <div class="Shuffle_auto">
        <p class="radio_section tab_3_option">
            <input name="sfsi_plus_shuffle_icons" <?php echo ( isset( $option3['sfsi_plus_shuffle_icons'] ) && $option3['sfsi_plus_shuffle_icons'] == 'yes' ) ? 'checked="true"' : ''; ?> type="checkbox" value="yes" class="styled" />
            <label><?php _e( 'Shuffle them automatically', 'ultimate-social-media-plus' ); ?></label>
        </p>
        <div class="sub_sub_box shuffle_sub <?php echo ( isset( $option3['sfsi_plus_shuffle_icons'] ) && $option3['sfsi_plus_shuffle_icons'] == 'yes' ) ? 'show' : 'hide'; ?>">
            <p class="radio_section tab_3_option">
                <input name="sfsi_plus_shuffle_Firstload" <?php echo ( isset( $option3['sfsi_plus_shuffle_Firstload'] ) && $option3['sfsi_plus_shuffle_Firstload'] == 'yes' ) ? 'checked="true"' : ''; ?> type="checkbox" value="yes" class="styled" />
                <label><?php _e( 'When the site is first loaded', 'ultimate-social-media-plus' ); ?></label>
            </p>
            <p class="radio_section tab_3_option">
                <input name="sfsi_plus_shuffle_interval" <?php echo ( isset( $option3['sfsi_plus_shuffle_interval'] ) && $option3['sfsi_plus_shuffle_interval'] == 'yes' ) ? 'checked="true"' : ''; ?> type="checkbox" value="yes" class="styled" />
                <label><?php _e( 'Every', 'ultimate-social-media-plus' ); ?></label>
                <input class="smal_inpt" type="text" name="sfsi_plus_shuffle_intervalTime" value="<?php echo ( isset( $option3['sfsi_plus_shuffle_intervalTime'] ) && $option3['sfsi_plus_shuffle_intervalTime'] != '' ) ? $option3['sfsi_plus_shuffle_intervalTime'] : ''; ?>" />
                <label><?php _e( 'seconds', 'ultimate-social-media-plus' ); ?></label>
            </p>
        </div>
    </div>
</div>
<!--END icon Animation section start -->