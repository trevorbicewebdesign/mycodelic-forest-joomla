<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2009-2018 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version         Release v7.2.5
 * @build-date      2018/03/13
 */

if (!(defined('_JEXEC') || defined('ABSPATH'))) {     die('Restricted access'); }
$model = $this->model;
?>
<div class="tab-pane" id="social_content_k2_like">
    <div class="config_row">
        <div class="config_setting header"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_ITEM_VIEW_SETTING'); ?></div>
        <div class="config_option header"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_OPTIONS'); ?></div>
        <div style="clear:both"></div>
    </div>
    <div class="config_row">
        <div class="config_setting hasTip"
             title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_K2_ITEM_VIEW_DESC2'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_K2_ITEM_VIEW_LABEL'); ?>
            :
        </div>
        <div class="config_option">
            <?php $socialK2LikeItemView = $model->getSetting('social_k2_like_item_view'); ?>
            <select name="social_k2_like_item_view">
                <option value="1" <?php echo ($socialK2LikeItemView == '1') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_TOP_LABEL'); ?></option>
                <option value="2" <?php echo ($socialK2LikeItemView == '2') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_BOTTOM_LABEL'); ?></option>
                <option value="3" <?php echo ($socialK2LikeItemView == '3') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_BOTH_LABEL'); ?></option>
                <?php if (defined('SC30')):?>
                    <option value="4" <?php echo ($socialK2LikeItemView == '4') ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_AFTER_TITLE_LABEL"); ?></option>
                <?php endif;?>
                <option value="0" <?php echo ($socialK2LikeItemView == '0') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_NONE_LABEL'); ?></option>
            </select>
        </div>
        <div style="clear:both"></div>
    </div>
    <div id="social_k2_like_item_settings">
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_LAYOUT_STYLE_DESC3'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_LAYOUT_STYLE_LABEL'); ?>
                :
            </div>
            <div class="config_option">
                <select name="social_k2_item_like_layout_style">
                    <option value="standard" <?php echo $model->getSetting('social_k2_item_like_layout_style') == 'standard' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_STANDARD_LABEL"); ?></option>
                    <option value="box_count" <?php echo $model->getSetting('social_k2_item_like_layout_style') == 'box_count' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_BOX_COUNT_LABEL"); ?></option>
                    <option value="button_count" <?php echo $model->getSetting('social_k2_item_like_layout_style') == 'button_count' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_BUTTON_COUNT_LABEL"); ?></option>
                    <option value="button" <?php echo $model->getSetting('social_k2_item_like_layout_style') == 'button' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_BUTTON_LABEL"); ?></option>
                </select>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_FACEBOOK_DESC3'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_FACEBOOK_LABEL'); ?>
                :
            </div>
            <div class="config_option">
                <fieldset id="social_k2_item_like_show_facebook" class="radio btn-group">
                    <input type="radio" id="social_k2_item_like_show_facebook1" name="social_k2_item_like_show_facebook"
                           value="1" <?php echo $model->getSetting('social_k2_item_like_show_facebook') ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_item_like_show_facebook1"><?php echo JText::_("JYES"); ?></label>
                    <input type="radio" id="social_k2_item_like_show_facebook0" name="social_k2_item_like_show_facebook"
                           value="0" <?php echo $model->getSetting('social_k2_item_like_show_facebook') ? '""' : 'checked="checked"'; ?> />
                    <label for="social_k2_item_like_show_facebook0"><?php echo JText::_("JNO"); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_FACES_DESC3'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_FACES_LABEL'); ?>:
            </div>
            <div class="config_option">
                <fieldset id="social_k2_item_like_show_faces" class="radio btn-group">
                    <input type="radio" id="social_k2_item_like_show_faces1" name="social_k2_item_like_show_faces"
                           value="1" <?php echo $model->getSetting('social_k2_item_like_show_faces') ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_item_like_show_faces1"><?php echo JText::_("JYES"); ?></label>
                    <input type="radio" id="social_k2_item_like_show_faces0" name="social_k2_item_like_show_faces"
                           value="0" <?php echo $model->getSetting('social_k2_item_like_show_faces') ? '""' : 'checked="checked"'; ?> />
                    <label for="social_k2_item_like_show_faces0"><?php echo JText::_("JNO"); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_SHARE_DESC3'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_SEND_LABEL'); ?>:
            </div>
            <div class="config_option">
                <fieldset id="social_k2_item_like_show_send_button" class="radio btn-group">
                    <input type="radio" id="social_k2_item_like_show_send_button1" name="social_k2_item_like_show_send_button"
                           value="1" <?php echo $model->getSetting('social_k2_item_like_show_send_button') ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_item_like_show_send_button1"><?php echo JText::_("JYES"); ?></label>
                    <input type="radio" id="social_k2_item_like_show_send_button0" name="social_k2_item_like_show_send_button"
                           value="0" <?php echo $model->getSetting('social_k2_item_like_show_send_button') ? '""' : 'checked="checked"'; ?> />
                    <label for="social_k2_item_like_show_send_button0"><?php echo JText::_("JNO"); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_LINKEDIN_DESC3'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_LINKEDIN_LABEL'); ?>
                :
            </div>
            <div class="config_option">
                <fieldset id="social_k2_item_like_show_linkedin" class="radio btn-group">
                    <input type="radio" id="social_k2_item_like_show_linkedin1" name="social_k2_item_like_show_linkedin"
                           value="1" <?php echo $model->getSetting('social_k2_item_like_show_linkedin') ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_item_like_show_linkedin1"><?php echo JText::_("JYES"); ?></label>
                    <input type="radio" id="social_k2_item_like_show_linkedin0" name="social_k2_item_like_show_linkedin"
                           value="0" <?php echo $model->getSetting('social_k2_item_like_show_linkedin') ? '""' : 'checked="checked"'; ?> />
                    <label for="social_k2_item_like_show_linkedin0"><?php echo JText::_("JNO"); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_TWITTER_DESC3'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_TWITTER_LABEL'); ?>
                :
            </div>
            <div class="config_option">
                <fieldset id="social_k2_item_like_show_twitter" class="radio btn-group">
                    <input type="radio" id="social_k2_item_like_show_twitter1" name="social_k2_item_like_show_twitter"
                           value="1" <?php echo $model->getSetting('social_k2_item_like_show_twitter') ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_item_like_show_twitter1"><?php echo JText::_("JYES"); ?></label>
                    <input type="radio" id="social_k2_item_like_show_twitter0" name="social_k2_item_like_show_twitter"
                           value="0" <?php echo $model->getSetting('social_k2_item_like_show_twitter') ? '""' : 'checked="checked"'; ?> />
                    <label for="social_k2_item_like_show_twitter0"><?php echo JText::_("JNO"); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_GOOGLE_DESC3'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_GOOGLE_LABEL'); ?>:
            </div>
            <div class="config_option">
                <fieldset id="social_k2_item_like_show_googleplus" class="radio btn-group">
                    <input type="radio" id="social_k2_item_like_show_googleplus1" name="social_k2_item_like_show_googleplus"
                           value="1" <?php echo $model->getSetting('social_k2_item_like_show_googleplus') ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_item_like_show_googleplus1"><?php echo JText::_("JYES"); ?></label>
                    <input type="radio" id="social_k2_item_like_show_googleplus0" name="social_k2_item_like_show_googleplus"
                           value="0" <?php echo $model->getSetting('social_k2_item_like_show_googleplus') ? '""' : 'checked="checked"'; ?> />
                    <label for="social_k2_item_like_show_googleplus0"><?php echo JText::_("JNO"); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_PINTEREST_DESC3'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_PINTEREST_LABEL'); ?>
                :
            </div>
            <div class="config_option">
                <fieldset id="social_k2_item_like_show_pinterest" class="radio btn-group">
                    <input type="radio" id="social_k2_item_like_show_pinterest1" name="social_k2_item_like_show_pinterest"
                           value="1" <?php echo $model->getSetting('social_k2_item_like_show_pinterest') ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_item_like_show_pinterest1"><?php echo JText::_("JYES"); ?></label>
                    <input type="radio" id="social_k2_item_like_show_pinterest0" name="social_k2_item_like_show_pinterest"
                           value="0" <?php echo $model->getSetting('social_k2_item_like_show_pinterest') ? '""' : 'checked="checked"'; ?> />
                    <label for="social_k2_item_like_show_pinterest0"><?php echo JText::_("JNO"); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SIZE_DESC'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SIZE_LABEL'); ?>
                :
            </div>
            <div class="config_option">
                <fieldset id="social_k2_item_like_size" class="radio btn-group">
                    <input type="radio" id="social_k2_item_like_size_small" name="social_k2_item_like_size"
                           value="small" <?php echo $model->getSetting('social_k2_item_like_size') == 'small' ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_item_like_size_small"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SIZE_SMALL_LABEL'); ?></label>
                    <input type="radio" id="social_k2_item_like_size_large" name="social_k2_item_like_size"
                           value="large" <?php echo $model->getSetting('social_k2_item_like_size') == 'large' ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_item_like_size_large"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SIZE_LARGE_LABEL'); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_VERB_DISPLAY_DESC3'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_VERB_DISPLAY_LABEL'); ?>
                :
            </div>
            <div class="config_option">
                <fieldset id="social_k2_item_like_verb_to_display" class="radio btn-group">
                    <input type="radio" id="social_k2_item_like_verb_to_displayLike" name="social_k2_item_like_verb_to_display"
                           value="like" <?php echo $model->getSetting('social_k2_item_like_verb_to_display') == 'like' ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_item_like_verb_to_displayLike"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_LIKE_LABEL'); ?></label>
                    <input type="radio" id="social_k2_item_like_verb_to_displayRec" name="social_k2_item_like_verb_to_display"
                           value="recommend" <?php echo $model->getSetting('social_k2_item_like_verb_to_display') == 'recommend' ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_item_like_verb_to_displayRec"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_RECOMMEND_LABEL'); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_COLOR_SCHEME_DESC4'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_COLOR_SCHEME_LABEL'); ?>
                :
            </div>
            <div class="config_option">
                <fieldset id="social_k2_item_like_color_scheme" class="radio btn-group">
                    <input type="radio" id="social_k2_item_like_color_schemeL" name="social_k2_item_like_color_scheme"
                           value="light" <?php echo $model->getSetting('social_k2_item_like_color_scheme') == 'light' ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_item_like_color_schemeL"><?php echo JText::_("COM_JFBCONNECT_SOCIAL_COLOR_SCHEME_LIGHT"); ?></label>
                    <input type="radio" id="social_k2_item_like_color_schemeD" name="social_k2_item_like_color_scheme"
                           value="dark" <?php echo $model->getSetting('social_k2_item_like_color_scheme') == 'dark' ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_item_like_color_schemeD"><?php echo JText::_("COM_JFBCONNECT_SOCIAL_COLOR_SCHEME_DARK"); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_FONT_DESC3'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_FONT_LABEL'); ?>:
            </div>
            <div class="config_option">
                <select name="social_k2_item_like_font">
                    <option value="arial" <?php echo $model->getSetting('social_k2_item_like_font') == 'arial' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_FONT1"); ?></option>
                    <option value="lucida grande" <?php echo $model->getSetting('social_k2_item_like_font') == 'lucida grande' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_FONT2"); ?></option>
                    <option value="segoe ui" <?php echo $model->getSetting('social_k2_item_like_font') == 'segoe ui' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_FONT3"); ?></option>
                    <option value="tahoma" <?php echo $model->getSetting('social_k2_item_like_font') == 'tahoma' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_FONT4"); ?></option>
                    <option value="trebuchet ms" <?php echo $model->getSetting('social_k2_item_like_font') == 'trebuchet ms' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_FONT5"); ?></option>
                    <option value="verdana" <?php echo $model->getSetting('social_k2_item_like_font') == 'verdana' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_FONT6"); ?></option>
                </select>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_WIDTH_DESC6'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_WIDTH_LABEL'); ?>:
            </div>
            <div class="config_option">
                <input type="text" name="social_k2_item_like_width" value="<?php echo $model->getSetting('social_k2_item_like_width') ?>" size="20">
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_INTRO_TEXT_DESC'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_INTRO_TEXT_LABEL'); ?></div>
            <div class="config_option">
                <textarea name="social_k2_item_like_intro_text" rows="3"
                          cols="30"><?php echo $model->getSetting('social_k2_item_like_intro_text') ?></textarea><br />
            </div>
            <div style="clear:both"></div>
        </div>
    </div>
    <div class="config_row">
        <div class="config_setting header"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_BLOG_SETTING_LABEL'); ?></div>
        <div class="config_option header"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_OPTIONS'); ?></div>
        <div style="clear:both"></div>
    </div>
    <div class="config_row">
        <div class="config_setting hasTip"
             title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_K2_CATEGORY_VIEW_DESC2'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_K2_CATEGORY_VIEW_LABEL'); ?>
            :
        </div>
        <div class="config_option">
            <?php $socialK2LikeCategoryView = $model->getSetting('social_k2_like_category_view'); ?>
            <select name="social_k2_like_category_view">
                <option value="1" <?php echo ($socialK2LikeCategoryView == '1') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_TOP_LABEL'); ?></option>
                <option value="2" <?php echo ($socialK2LikeCategoryView == '2') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_BOTTOM_LABEL'); ?></option>
                <option value="3" <?php echo ($socialK2LikeCategoryView == '3') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_BOTH_LABEL'); ?></option>
                <?php if (defined('SC30')):?>
                    <option value="4" <?php echo ($socialK2LikeCategoryView == '4') ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_AFTER_TITLE_LABEL"); ?></option>
                <?php endif;?>
                <option value="0" <?php echo ($socialK2LikeCategoryView == '0') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_NONE_LABEL'); ?></option>
            </select>
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="config_row">
        <div class="config_setting hasTip"
             title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_K2_TAG_VIEW_DESC2'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_K2_TAG_VIEW_LABEL'); ?>
            :
        </div>
        <div class="config_option">
            <?php $socialK2LikeTagView = $model->getSetting('social_k2_like_tag_view'); ?>
            <select name="social_k2_like_tag_view">
                <option value="1" <?php echo ($socialK2LikeTagView == '1') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_TOP_LABEL'); ?></option>
                <option value="2" <?php echo ($socialK2LikeTagView == '2') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_BOTTOM_LABEL'); ?></option>
                <option value="3" <?php echo ($socialK2LikeTagView == '3') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_BOTH_LABEL'); ?></option>
                <option value="0" <?php echo ($socialK2LikeTagView == '0') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_NONE_LABEL'); ?></option>
            </select>
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="config_row">
        <div class="config_setting hasTip"
             title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_K2_USERPAGE_VIEW_DESC2'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_K2_USERPAGE_VIEW_LABEL'); ?>
            :
        </div>
        <div class="config_option">
            <?php $socialK2LikeUserpageView = $model->getSetting('social_k2_like_userpage_view'); ?>
            <select name="social_k2_like_userpage_view">
                <option value="1" <?php echo ($socialK2LikeUserpageView == '1') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_TOP_LABEL'); ?></option>
                <option value="2" <?php echo ($socialK2LikeUserpageView == '2') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_BOTTOM_LABEL'); ?></option>
                <option value="3" <?php echo ($socialK2LikeUserpageView == '3') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_BOTH_LABEL'); ?></option>
                <?php if (defined('SC30')):?>
                    <option value="4" <?php echo ($socialK2LikeUserpageView == '4') ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_AFTER_TITLE_LABEL"); ?></option>
                <?php endif;?>
                <option value="0" <?php echo ($socialK2LikeUserpageView == '0') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_NONE_LABEL'); ?></option>
            </select>
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="config_row">
        <div class="config_setting hasTip"
             title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_K2_LATEST_VIEW_DESC2'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_K2_LATEST_VIEW_LABEL'); ?>
            :
        </div>
        <div class="config_option">
            <?php $socialK2LikeLatestView = $model->getSetting('social_k2_like_latest_view'); ?>
            <select name="social_k2_like_latest_view">
                <option value="1" <?php echo ($socialK2LikeLatestView == '1') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_TOP_LABEL'); ?></option>
                <option value="2" <?php echo ($socialK2LikeLatestView == '2') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_BOTTOM_LABEL'); ?></option>
                <option value="3" <?php echo ($socialK2LikeLatestView == '3') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_BOTH_LABEL'); ?></option>
                <?php if (defined('SC30')):?>
                    <option value="4" <?php echo ($socialK2LikeLatestView == '4') ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_AFTER_TITLE_LABEL"); ?></option>
                <?php endif;?>
                <option value="0" <?php echo ($socialK2LikeLatestView == '0') ? 'selected' : ""; ?>><?php echo JText::_('COM_JFBCONNECT_SOCIAL_NONE_LABEL'); ?></option>
            </select>
        </div>
        <div style="clear:both"></div>
    </div>
    <div id="social_k2_like_blog_settings">
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_LAYOUT_STYLE_DESC2'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_LAYOUT_STYLE_LABEL'); ?>
                :
            </div>
            <div class="config_option">
                <select name="social_k2_blog_like_layout_style">
                    <option value="standard" <?php echo $model->getSetting('social_k2_blog_like_layout_style') == 'standard' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_STANDARD_LABEL"); ?></option>
                    <option value="box_count" <?php echo $model->getSetting('social_k2_blog_like_layout_style') == 'box_count' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_BOX_COUNT_LABEL"); ?></option>
                    <option value="button_count" <?php echo $model->getSetting('social_k2_blog_like_layout_style') == 'button_count' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_BUTTON_COUNT_LABEL"); ?></option>
                    <option value="button" <?php echo $model->getSetting('social_k2_blog_like_layout_style') == 'button' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_BUTTON_LABEL"); ?></option>
                </select>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_FACEBOOK_DESC2'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_FACEBOOK_LABEL'); ?>
                :
            </div>
            <div class="config_option">
                <fieldset id="social_k2_blog_like_show_facebook" class="radio btn-group">
                    <input type="radio" id="social_k2_blog_like_show_facebook1" name="social_k2_blog_like_show_facebook"
                           value="1" <?php echo $model->getSetting('social_k2_blog_like_show_facebook') ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_blog_like_show_facebook1"><?php echo JText::_("JYES"); ?></label>
                    <input type="radio" id="social_k2_blog_like_show_facebook0" name="social_k2_blog_like_show_facebook"
                           value="0" <?php echo $model->getSetting('social_k2_blog_like_show_facebook') ? '""' : 'checked="checked"'; ?> />
                    <label for="social_k2_blog_like_show_facebook0"><?php echo JText::_("JNO"); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_FACES_DESC2'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_FACES_LABEL'); ?>:
            </div>
            <div class="config_option">
                <fieldset id="social_k2_blog_like_show_faces" class="radio btn-group">
                    <input type="radio" id="social_k2_blog_like_show_faces1" name="social_k2_blog_like_show_faces"
                           value="1" <?php echo $model->getSetting('social_k2_blog_like_show_faces') ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_blog_like_show_faces1"><?php echo JText::_("JYES"); ?></label>
                    <input type="radio" id="social_k2_blog_like_show_faces0" name="social_k2_blog_like_show_faces"
                           value="0" <?php echo $model->getSetting('social_k2_blog_like_show_faces') ? '""' : 'checked="checked"'; ?> />
                    <label for="social_k2_blog_like_show_faces0"><?php echo JText::_("JNO"); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_SHARE_DESC2'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_SEND_LABEL'); ?>:
            </div>
            <div class="config_option">
                <fieldset id="social_k2_blog_like_show_send_button" class="radio btn-group">
                    <input type="radio" id="social_k2_blog_like_show_send_button1" name="social_k2_blog_like_show_send_button"
                           value="1" <?php echo $model->getSetting('social_k2_blog_like_show_send_button') ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_blog_like_show_send_button1"><?php echo JText::_("JYES"); ?></label>
                    <input type="radio" id="social_k2_blog_like_show_send_button0" name="social_k2_blog_like_show_send_button"
                           value="0" <?php echo $model->getSetting('social_k2_blog_like_show_send_button') ? '""' : 'checked="checked"'; ?> />
                    <label for="social_k2_blog_like_show_send_button0"><?php echo JText::_("JNO"); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_LINKEDIN_DESC2'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_LINKEDIN_LABEL'); ?>
                :
            </div>
            <div class="config_option">
                <fieldset id="social_k2_blog_like_show_linkedin" class="radio btn-group">
                    <input type="radio" id="social_k2_blog_like_show_linkedin1" name="social_k2_blog_like_show_linkedin"
                           value="1" <?php echo $model->getSetting('social_k2_blog_like_show_linkedin') ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_blog_like_show_linkedin1"><?php echo JText::_("JYES"); ?></label>
                    <input type="radio" id="social_k2_blog_like_show_linkedin0" name="social_k2_blog_like_show_linkedin"
                           value="0" <?php echo $model->getSetting('social_k2_blog_like_show_linkedin') ? '""' : 'checked="checked"'; ?> />
                    <label for="social_k2_blog_like_show_linkedin0"><?php echo JText::_("JNO"); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_TWITTER_DESC2'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_TWITTER_LABEL'); ?>
                :
            </div>
            <div class="config_option">
                <fieldset id="social_k2_blog_like_show_twitter" class="radio btn-group">
                    <input type="radio" id="social_k2_blog_like_show_twitter1" name="social_k2_blog_like_show_twitter"
                           value="1" <?php echo $model->getSetting('social_k2_blog_like_show_twitter') ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_blog_like_show_twitter1"><?php echo JText::_("JYES"); ?></label>
                    <input type="radio" id="social_k2_blog_like_show_twitter0" name="social_k2_blog_like_show_twitter"
                           value="0" <?php echo $model->getSetting('social_k2_blog_like_show_twitter') ? '""' : 'checked="checked"'; ?> />
                    <label for="social_k2_blog_like_show_twitter0"><?php echo JText::_("JNO"); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_GOOGLE_DESC2'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_GOOGLE_LABEL'); ?>:
            </div>
            <div class="config_option">
                <fieldset id="social_k2_blog_like_show_googleplus" class="radio btn-group">
                    <input type="radio" id="social_k2_blog_like_show_googleplus1" name="social_k2_blog_like_show_googleplus"
                           value="1" <?php echo $model->getSetting('social_k2_blog_like_show_googleplus') ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_blog_like_show_googleplus1"><?php echo JText::_("JYES"); ?></label>
                    <input type="radio" id="social_k2_blog_like_show_googleplus0" name="social_k2_blog_like_show_googleplus"
                           value="0" <?php echo $model->getSetting('social_k2_blog_like_show_googleplus') ? '""' : 'checked="checked"'; ?> />
                    <label for="social_k2_blog_like_show_googleplus0"><?php echo JText::_("JNO"); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_PINTEREST_DESC2'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SHOW_PINTEREST_LABEL'); ?>
                :
            </div>
            <div class="config_option">
                <fieldset id="social_k2_blog_like_show_pinterest" class="radio btn-group">
                    <input type="radio" id="social_k2_blog_like_show_pinterest1" name="social_k2_blog_like_show_pinterest"
                           value="1" <?php echo $model->getSetting('social_k2_blog_like_show_pinterest') ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_blog_like_show_pinterest1"><?php echo JText::_("JYES"); ?></label>
                    <input type="radio" id="social_k2_blog_like_show_pinterest0" name="social_k2_blog_like_show_pinterest"
                           value="0" <?php echo $model->getSetting('social_k2_blog_like_show_pinterest') ? '""' : 'checked="checked"'; ?> />
                    <label for="social_k2_blog_like_show_pinterest0"><?php echo JText::_("JNO"); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_SIZE_DESC'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SIZE_LABEL'); ?>
                :
            </div>
            <div class="config_option">
                <fieldset id="social_k2_blog_like_size" class="radio btn-group">
                    <input type="radio" id="social_k2_blog_like_size_small" name="social_k2_blog_like_size"
                           value="small" <?php echo $model->getSetting('social_k2_blog_like_size') == 'small' ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_blog_like_size_small"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SIZE_SMALL_LABEL'); ?></label>
                    <input type="radio" id="social_k2_blog_like_size_large" name="social_k2_blog_like_size"
                           value="large" <?php echo $model->getSetting('social_k2_blog_like_size') == 'large' ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_blog_like_size_large"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_SIZE_LARGE_LABEL'); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>

        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_VERB_DISPLAY_DESC2'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_VERB_DISPLAY_LABEL'); ?>
                :
            </div>
            <div class="config_option">
                <fieldset id="social_k2_blog_like_verb_to_display" class="radio btn-group">
                    <input type="radio" id="social_k2_blog_like_verb_to_displayLike" name="social_k2_blog_like_verb_to_display"
                           value="like" <?php echo $model->getSetting('social_k2_blog_like_verb_to_display') == 'like' ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_blog_like_verb_to_displayLike"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_LIKE_LABEL'); ?></label>
                    <input type="radio" id="social_k2_blog_like_verb_to_displayRec" name="social_k2_blog_like_verb_to_display"
                           value="recommend" <?php echo $model->getSetting('social_k2_blog_like_verb_to_display') == 'recommend' ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_blog_like_verb_to_displayRec"><?php echo JText::_("COM_JFBCONNECT_SOCIAL_RECOMMEND_LABEL"); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_COLOR_SCHEME_DESC2'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_COLOR_SCHEME_LABEL'); ?>
                :
            </div>
            <div class="config_option">
                <fieldset id="social_k2_blog_like_color_scheme" class="radio btn-group">
                    <input type="radio" id="social_k2_blog_like_color_schemeL" name="social_k2_blog_like_color_scheme"
                           value="light" <?php echo $model->getSetting('social_k2_blog_like_color_scheme') == 'light' ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_blog_like_color_schemeL"><?php echo JText::_("COM_JFBCONNECT_SOCIAL_COLOR_SCHEME_LIGHT"); ?></label>
                    <input type="radio" id="social_k2_blog_like_color_schemeD" name="social_k2_blog_like_color_scheme"
                           value="dark" <?php echo $model->getSetting('social_k2_blog_like_color_scheme') == 'dark' ? 'checked="checked"' : ""; ?> />
                    <label for="social_k2_blog_like_color_schemeD"><?php echo JText::_("COM_JFBCONNECT_SOCIAL_COLOR_SCHEME_DARK"); ?></label>
                </fieldset>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_FONT_DESC2'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_FONT_LABEL'); ?>:
            </div>
            <div class="config_option">
                <select name="social_k2_blog_like_font">
                    <option value="arial" <?php echo $model->getSetting('social_k2_blog_like_font') == 'arial' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_FONT1"); ?></option>
                    <option value="lucida grande" <?php echo $model->getSetting('social_k2_blog_like_font') == 'lucida grande' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_FONT2"); ?></option>
                    <option value="segoe ui" <?php echo $model->getSetting('social_k2_blog_like_font') == 'segoe ui' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_FONT3"); ?></option>
                    <option value="tahoma" <?php echo $model->getSetting('social_k2_blog_like_font') == 'tahoma' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_FONT4"); ?></option>
                    <option value="trebuchet ms" <?php echo $model->getSetting('social_k2_blog_like_font') == 'trebuchet ms' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_FONT5"); ?></option>
                    <option value="verdana" <?php echo $model->getSetting('social_k2_blog_like_font') == 'verdana' ? 'selected' : ""; ?>><?php echo JText::_("COM_JFBCONNECT_SOCIAL_FONT6"); ?></option>
                </select>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_WIDTH_DESC4'); ?>"><?php echo JText::_("COM_JFBCONNECT_SOCIAL_WIDTH_LABEL"); ?>:
            </div>
            <div class="config_option">
                <input type="text" name="social_k2_blog_like_width" value="<?php echo $model->getSetting('social_k2_blog_like_width') ?>" size="20">
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="config_row">
            <div class="config_setting hasTip"
                 title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_INTRO_TEXT_DESC'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_INTRO_TEXT_LABEL'); ?></div>
            <div class="config_option">
                <textarea name="social_k2_blog_like_intro_text" rows="3"
                          cols="30"><?php echo $model->getSetting('social_k2_blog_like_intro_text') ?></textarea><br />
            </div>
            <div style="clear:both"></div>
        </div>
    </div>
    <!-- Category -->
    <div class="config_row">
        <div class="config_setting_option header"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_K2_CATEGORY_SETTING'); ?></div>
        <div style="clear:both"></div>
    </div>
    <div class="config_row">
        <div class="config_setting_option hasTip"
             title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_K2_CATEGORY_SETTING_DESC2'); ?>">
            <?php $k2catType = $model->getSetting('social_k2_like_cat_include_type'); ?>
            <fieldset id="social_k2_like_cat_include_type" class="radio btn-group">
                <input type="radio" id="social_k2_like_cat_include_type0" name="social_k2_like_cat_include_type"
                       value="0" <?php echo($k2catType == '0' ? 'checked="checked"' : ""); ?> onclick="toggleHide('k2_like_cat_ids', 'none')" />
                <label for="social_k2_like_cat_include_type0"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_ALL_LABEL'); ?></label>
                <input type="radio" id="social_k2_like_cat_include_type1" name="social_k2_like_cat_include_type"
                       value="1" <?php echo($k2catType == '1' ? 'checked="checked"' : ""); ?> onclick="toggleHide('k2_like_cat_ids', '')" />
                <label for="social_k2_like_cat_include_type1"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_INCLUDE_LABEL'); ?></label>
                <input type="radio" id="social_k2_like_cat_include_type2" name="social_k2_like_cat_include_type"
                       value="2" <?php echo($k2catType == '2' ? 'checked="checked"' : ""); ?> onclick="toggleHide('k2_like_cat_ids', '')" />
                <label for="social_k2_like_cat_include_type2"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_EXCLUDE_LABEL'); ?></label>
            </fieldset>
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="config_row" id="k2_like_cat_ids" style="display:<?php echo($k2catType == "0" ? 'none' : ''); ?>">
        <?php
        $k2catids = $model->getSetting('social_k2_like_cat_ids');
        $k2categories = unserialize($k2catids);

        $query = "SELECT `id`, `name` FROM #__k2_categories";
        $db = JFactory::getDBO();
        $db->setQuery($query);
        $k2cats = $db->loadAssocList();

        $attribs = 'multiple="multiple"';
        echo '<td>' . JHTML::_('select.genericlist', $k2cats, 'social_k2_like_cat_ids[]', $attribs, 'id', 'name', $k2categories, 'social_k2_like_cat_ids') . '</td>';
        ?>
        <div style="clear:both"></div>
    </div>
    <!-- End Categories -->
    <div class="config_row">
        <div class="config_setting header"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_K2_ITEM_SETTING'); ?></div>
        <div class="config_option header"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_OPTIONS'); ?></div>
        <div style="clear:both"></div>
        <div style="clear:both"></div>
    </div>
    <div class="config_row">
        <div class="config_setting hasTip"
             title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_K2_ITEM_INCLUDE_DESC'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_INCLUDE_LABEL'); ?>:
        </div>
        <div class="config_option">
            <input type="text" name="social_k2_like_item_include_ids" value="<?php echo $model->getSetting('social_k2_like_item_include_ids'); ?>"
                   size="20">
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="config_row">
        <div class="config_setting hasTip"
             title="<?php echo JText::_('COM_JFBCONNECT_SOCIAL_K2_ITEM_EXCLUDE_DESC'); ?>"><?php echo JText::_('COM_JFBCONNECT_SOCIAL_EXCLUDE_LABEL'); ?>:
        </div>
        <div class="config_option">
            <input type="text" name="social_k2_like_item_exclude_ids" value="<?php echo $model->getSetting('social_k2_like_item_exclude_ids'); ?>"
                   size="20">
        </div>
        <div style="clear:both"></div>
    </div>
</div>
