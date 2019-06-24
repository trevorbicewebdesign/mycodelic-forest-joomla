<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// get params
$sitename  = $this->params->get('sitename');
$logotype  = $this->params->get('logotype');
$logoimage = $logotype == 'image' ? $this->params->get('logoimage', 'templates/' . T3_TEMPLATE . '/images/logo.png') : '';

if (!$sitename) {
	$sitename = JFactory::getConfig()->get('sitename');
}

?>

<header class="page_header scrolled_not_transparent with_border has_top scroll_top  with_hover_bg_color fixed ajax_header_animation header_one_scroll_resize" style="top: 0px; margin-top: 0px;">
	<div class="header_inner clearfix">
		<div class="header_top_bottom_holder">
			<div class="header_top clearfix	" style="background-color: rgba(0, 0, 0, 0.3); display: block;">
				<div class="container">
					<div class="container_inner clearfix">
						<div class="left">
							<div class="inner">
								<div class="header-widget widget_text header-left-widget">
									<div class="textwidget"><span class="mkd_icon_shade mkd_icon_shortcode simple_line_icons normal   " style="margin: 0px 3px 0px 0px;"><i class="mkd_icon_simple_line_icon icon-earphones-alt " style="font-size: 15px;color: #18cfab;line-height:17px; " data-color="#18cfab"></i></span> <span style="font-size: 13px; font-weight: 700;">1-555-372</span> <span class="mkd_vertical_sep" style="border-right-color: rgba(255,255,255,0.2);height: 21px;margin-left: 10px;margin-right: 10px;margin-bottom: 2px;"></span> <span class="mkd_icon_shade mkd_icon_shortcode simple_line_icons normal   " style="margin: 0px 3px 0px 0px;"><i class="mkd_icon_simple_line_icon icon-clock " style="font-size: 15px;color: #18cfab;line-height:17px; " data-color="#18cfab"></i></span> <span style="font-size: 13px; font-weight: 700;">Mon - Sat: 8:00 - 17:00</span> <span class="mkd_vertical_sep" style="border-right-color: rgba(255,255,255,0.2);height: 21px;margin-left: 10px;margin-right: 10px;margin-bottom: 2px;"></span> <span class="mkd_icon_shade mkd_icon_shortcode simple_line_icons normal   " style="margin: 0px 3px 0px 0px;"><i class="mkd_icon_simple_line_icon icon-envelope " style="font-size: 15px;color: #18cfab;line-height:17px; " data-color="#18cfab"></i></span> <span style="font-size: 13px; font-weight: 700;">office@site.com</span></div>
								</div>
							</div>
						</div>
						<div class="right">
							<div class="inner">
								<div class="header-widget widget_text header-right-widget">
									<div class="textwidget"><span class="mkd_vertical_sep" style="border-right-color: rgba(255,255,255,0.2);height: 21px;margin-left: 8px;margin-right: 16px;margin-bottom: 2px;"></span> <span class="mkd_icon_shade mkd_icon_shortcode font_elegant normal  icon_linked  " style="margin: 0px 19px 2px 0px;"><a href="https://www.facebook.com/" target="_blank" style="color: #ffffff;"><span aria-hidden="true" class="mkd_icon_font_elegant social_facebook " style="font-size: 12px;color: #ffffff;line-height:14px; " data-color="#ffffff" data-hover-color="#18cfab"></span></a></span> <span class="mkd_icon_shade mkd_icon_shortcode font_elegant normal  icon_linked  " style="margin: 0px 19px 2px 0px;"><a href="https://twitter.com/" target="_blank" style="color: #ffffff;"><span aria-hidden="true" class="mkd_icon_font_elegant social_twitter " style="font-size: 12px;color: #ffffff;line-height:14px; " data-color="#ffffff" data-hover-color="#18cfab"></span></a></span> <span class="mkd_icon_shade mkd_icon_shortcode font_elegant normal  icon_linked  " style="margin: 0px 19px 2px 0px;"><a href="https://dribbble.com/" target="_blank" style="color: #ffffff;"><span aria-hidden="true" class="mkd_icon_font_elegant social_dribbble " style="font-size: 12px;color: #ffffff;line-height:14px; " data-color="#ffffff" data-hover-color="#18cfab"></span></a></span> <span class="mkd_icon_shade mkd_icon_shortcode font_elegant normal  icon_linked  " style="margin: 0px 21px 2px 0px;"><a href="https://instagram.com/" target="_blank" style="color: #ffffff;"><span aria-hidden="true" class="mkd_icon_font_elegant social_instagram " style="font-size: 12px;color: #ffffff;line-height:14px; " data-color="#ffffff" data-hover-color="#18cfab"></span></a></span> <span class="mkd_vertical_sep" style="border-right-color: rgba(255,255,255,0.2);height: 21px;margin-left: 0px;margin-right: 0px;margin-bottom: 2px;"></span></div>
								</div>
								<div class="header-widget widget_text header-right-widget">
									<div class="textwidget">
										<div id="lang_sel">
											<ul>
												<li> <a href="#" class="lang_sel_sel icl-en"> <img class="iclflag" src="http://burst.mikado-themes.com/burst/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png" alt="en" title="En">&nbsp;En </a>
													<ul>
														<li class="icl-fr"> <a rel="alternate" hreflang="fr" href="#"> <img class="iclflag" src="http://burst.mikado-themes.com/burst/wp-content/plugins/sitepress-multilingual-cms/res/flags/fr.png" alt="fr" title="Fr">&nbsp;Fr </a> </li>
														<li class="icl-de"> <a rel="alternate" hreflang="de" href="#"> <img class="iclflag" src="http://burst.mikado-themes.com/burst/wp-content/plugins/sitepress-multilingual-cms/res/flags/de.png" alt="de" title="Ge">&nbsp;Ge </a> </li>
														<li class="icl-it"> <a rel="alternate" hreflang="it" href="#"> <img class="iclflag" src="http://burst.mikado-themes.com/burst/wp-content/plugins/sitepress-multilingual-cms/res/flags/it.png" alt="it" title="It">&nbsp;It </a> </li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header_bottom  header_in_grid clearfix " style="background-color:rgba(0, 0, 0, 0.2);">
				<div class="container">
					<div class="container_inner clearfix">
						<div class="header_inner_left">
							<div class="mobile_menu_button"> <span> <span aria-hidden="true" class="mkd_icon_font_elegant icon_menu "></span> </span> </div>
							<div class="logo_wrapper" style="height: 83px;">
								<div class="mkd_logo"><a href="http://burst.mikado-themes.com/burst/" style="height: 83px; visibility: visible;"><img class="normal" src="http://burst.mikado-themes.com/burst/wp-content/uploads/2015/10/logo-light-fixed.png" alt="Logo"><img class="light" src="http://burst.mikado-themes.com/burst/wp-content/uploads/2015/10/logo-light-fixed.png" alt="Logo"><img class="dark" src="http://burst.mikado-themes.com/burst/wp-content/uploads/2015/10/logo-dark-fixed.png" alt="Logo"><img class="sticky" src="http://burst.mikado-themes.com/burst/wp-content/uploads/2015/10/logo-dark-fixed.png" alt="Logo"><img class="mobile" src="http://burst.mikado-themes.com/burst/wp-content/uploads/2015/10/logo-dark-fixed.png" alt="Logo"></a></div>
							</div>
						</div>
						<div class="header_inner_right">
							<div class="side_menu_button_wrapper right">
								<div class="header_bottom_right_widget_holder" style="height: 83px;">
									<div class="shopping_cart_outer">
										<div class="shopping_cart_inner">
											<div class="shopping_cart_header"> <a class="header_cart light_cart" href="http://burst.mikado-themes.com/burst/cart/"> <span class="header_cart_span">0</span> </a>
												<div class="shopping_cart_dropdown">
													<div class="shopping_cart_dropdown_inner1">
														<ul>
															<li class="empty_cart">No products in the cart.</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="side_menu_button" style="height: 83px;"> <a class="fullscreen_search normal" href="javascript:void(0)"> <span aria-hidden="true" class="mkd_icon_font_elegant icon_search "></span> </a> </div>
							</div>
						</div>
						<nav class="main_menu drop_down  slide_from_bottom right">
							<ul id="menu-main_menu" class="">
								<li id="nav-menu-item-6439" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current_page_ancestor menu-item-has-children has_sub wide icons wide_columns_2 left_position"><a href="http://burst.mikado-themes.com/burst/" class=" current " style="line-height: 83px;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Home</span></span><span class="plus"></span></a>
									<div class="second" style="height: 3px;">
										<div class="inner">
											<ul>
												<li id="nav-menu-item-7034" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children sub" style="height: 460px;"><a href="#" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Homepages</span></span><span class="plus"></span><i class="mkd_menu_arrow fa fa-angle-right"></i></a>
													<ul>
														<li id="nav-menu-item-7045" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Original Homepage</span></span><span class="plus"></span><span class=" featured_icon icon_star" aria-hidden="true"></span></a></li>
														<li id="nav-menu-item-5639" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5049 current_page_item"><a href="http://burst.mikado-themes.com/burst/agency-home/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Agency Homepage</span></span><span class="plus"></span><span class=" featured_icon icon_star" aria-hidden="true"></span></a></li>
														<li id="nav-menu-item-5643" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/fullscreen-home/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Fullscreen Homepage</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-5642" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/video-home/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Video Homepage</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-5644" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/colorful-home/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Colorful Homepage</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-5646" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/business-home/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Business Homepage</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-5645" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/designer-home/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Designer Homepage</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-2130" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/flat-home/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Flat Homepage</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-10736" class="menu-item menu-item-type-custom menu-item-object-custom"><a target="_blank" href="http://burst.mikado-themes.com/landing/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Intro</span></span><span class="plus"></span><span class=" featured_icon arrow_right-up" aria-hidden="true"></span></a></li>
													</ul>
												</li>
												<li id="nav-menu-item-7035" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub" style="height: 460px;"><a href="#" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Demos</span></span><span class="plus"></span><i class="mkd_menu_arrow fa fa-angle-right"></i></a>
													<ul>
														<li id="nav-menu-item-7039" class="menu-item menu-item-type-custom menu-item-object-custom"><a target="_blank" href="http://burst.mikado-themes.com/burst4" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Standard Demo</span></span><span class="plus"></span><span class=" featured_icon arrow_right-up" aria-hidden="true"></span></a></li>
														<li id="nav-menu-item-7037" class="menu-item menu-item-type-custom menu-item-object-custom"><a target="_blank" href="http://burst.mikado-themes.com/burst2/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Left Menu Demo</span></span><span class="plus"></span><span class=" featured_icon arrow_right-up" aria-hidden="true"></span></a></li>
														<li id="nav-menu-item-7041" class="menu-item menu-item-type-custom menu-item-object-custom"><a target="_blank" href="http://burst.mikado-themes.com/burst6/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Split Demo</span></span><span class="plus"></span><span class=" featured_icon arrow_right-up" aria-hidden="true"></span></a></li>
														<li id="nav-menu-item-7040" class="menu-item menu-item-type-custom menu-item-object-custom"><a target="_blank" href="http://burst.mikado-themes.com/burst5/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Passepartout Demo</span></span><span class="plus"></span><span class=" featured_icon arrow_right-up" aria-hidden="true"></span></a></li>
														<li id="nav-menu-item-7038" class="menu-item menu-item-type-custom menu-item-object-custom"><a target="_blank" href="http://burst.mikado-themes.com/burst3/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Classic Demo</span></span><span class="plus"></span><span class=" featured_icon arrow_right-up" aria-hidden="true"></span></a></li>
														<li id="nav-menu-item-7036" class="menu-item menu-item-type-custom menu-item-object-custom"><a target="_blank" href="http://burst.mikado-themes.com/burst1" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">One Page Demo</span></span><span class="plus"></span><span class=" featured_icon arrow_right-up" aria-hidden="true"></span></a></li>
														<li id="nav-menu-item-7043" class="menu-item menu-item-type-custom menu-item-object-custom"><a target="_blank" href="http://burst.mikado-themes.com/burst8/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Masonry Demo</span></span><span class="plus"></span><span class=" featured_icon arrow_right-up" aria-hidden="true"></span></a></li>
														<li id="nav-menu-item-7042" class="menu-item menu-item-type-custom menu-item-object-custom"><a target="_blank" href="http://burst.mikado-themes.com/burst7/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Shop Demo</span></span><span class="plus"></span><span class=" featured_icon arrow_right-up" aria-hidden="true"></span></a></li>
														<li id="nav-menu-item-10773" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://burst.mikado-themes.com/burst9/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Blog Demo</span></span><span class="plus"></span><span class=" featured_icon arrow_right-up" aria-hidden="true"></span></a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li id="nav-menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub wide icons wide_columns_2 left_position"><a href="#" class="no_link down left" style="cursor: default; line-height: 83px;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Pages</span></span><span class="plus"></span></a>
									<div class="second" style="height: 3px;">
										<div class="inner">
											<ul>
												<li id="nav-menu-item-7031" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub" style="height: 370px;"><a href="#" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Page Examples</span></span><span class="plus"></span><i class="mkd_menu_arrow fa fa-angle-right"></i></a>
													<ul>
														<li id="nav-menu-item-1851" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/about-me/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">About Me</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4456" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/about-me-simple/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">About Me Simple</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1852" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/about-the-company/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">About The Company</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-2115" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/about-bussines-compact/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">About Business</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-2131" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/about-the-studio/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">About The Studio</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4455" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/app-launch/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">App Launch</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4452" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/our-services/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Our Services</span></span><span class="plus"></span></a></li>
													</ul>
												</li>
												<li id="nav-menu-item-7032" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub" style="height: 370px;"><a href="#" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Page Exapmles II</span></span><span class="plus"></span><i class="mkd_menu_arrow fa fa-angle-right"></i></a>
													<ul>
														<li id="nav-menu-item-2329" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/personal-lookbook/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Personal Lookbook</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-2235" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/contact-with-big-map/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Contact Big Map</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-2349" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/contact-elegant/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Contact Elegant</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4454" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/coming-soon/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Coming Soon</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4450" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/pricing-plans/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Pricing Plans</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4451" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/parallax-page/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Parallax Page</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4540" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/creative-process/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Creative Process</span></span><span class="plus"></span></a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li id="nav-menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub wide icons wide_columns_4"><a href="#" class="no_link down left" style="cursor: default; line-height: 83px;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Highlights</span></span><span class="plus"></span></a>
									<div class="second background_image" style="left: -504.75px; height: 3px;">
										<div class="inner">
											<ul style="background-image:url(http://burst.mikado-themes.com/burst/wp-content/uploads/2015/10/dropdownbackground.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">
												<li id="nav-menu-item-2236" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub" style="height: 505px;"><a href="#" class="no_link down left" style="cursor: default;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Sliders</span></span><span class="plus"></span><i class="mkd_menu_arrow fa fa-angle-right"></i></a>
													<ul>
														<li id="nav-menu-item-2577" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/all-sliders/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-diamond fa"></i></span><span class="item_text">All Sliders</span></span><span class="plus"></span><span class=" featured_icon icon_star" aria-hidden="true"></span></a></li>
														<li id="nav-menu-item-4228" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/fullscreen-slider/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-size-fullscreen fa"></i></span><span class="item_text">Fullscreen Slider</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-2299" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/premium-layer-slider/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-layers fa"></i></span><span class="item_text">Premium Layer Slider</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-2459" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/simple-flex-slider/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-film fa"></i></span><span class="item_text">Simple Flex Slider</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-2350" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/blog-single-post-slider/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-globe fa"></i></span><span class="item_text">Blog Single Slider</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-2339" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/blog-multiple-posts-slider/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-rocket fa"></i></span><span class="item_text">Blog Multiple Slider</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-2320" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/portfolio-slider/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-picture fa"></i></span><span class="item_text">Portfolio Slider</span></span><span class="plus"></span><span class=" featured_icon icon_star" aria-hidden="true"></span></a></li>
														<li id="nav-menu-item-5546" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/testimonials-slider/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-paper-clip fa"></i></span><span class="item_text">Testimonials Slider</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-5547" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/text-slider/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-magic-wand fa"></i></span><span class="item_text">Text Slider</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-2386" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/clients-slider/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-pin fa"></i></span><span class="item_text">Clients Slider</span></span><span class="plus"></span></a></li>
													</ul>
												</li>
												<li id="nav-menu-item-1195" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub" style="height: 505px;"><a href="#" class="no_link down left" style="cursor: default;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Title Area Styles</span></span><span class="plus"></span><i class="mkd_menu_arrow fa fa-angle-right"></i></a>
													<ul>
														<li id="nav-menu-item-1259" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/video-title/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Video Title</span></span><span class="plus"></span><span class=" featured_icon icon_star" aria-hidden="true"></span></a></li>
														<li id="nav-menu-item-1258" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/revealing-title/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Revealing Title</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1299" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/parallax-zoom-out/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Parallax Zoom Out</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1298" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/regular-parallax/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Regular Parallax</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1304" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/title-slide-in/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Title Slide-in</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1308" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/responsive-image/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Responsive Image</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1325" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/monochrome-title/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Monochrome Title</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-5173" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/breadcrumb-with-background-image/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Breadcrumb with Image</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1326" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/regular-title/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Regular Title</span></span><span class="plus"></span></a></li>
													</ul>
												</li>
												<li id="nav-menu-item-1271" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub" style="height: 505px;"><a href="#" class="no_link down left" style="cursor: default;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Transitions &amp; Hovers</span></span><span class="plus"></span><i class="mkd_menu_arrow fa fa-angle-right"></i></a>
													<ul>
														<li id="nav-menu-item-1350" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/featured-hover-effects/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Featured Hover Effects</span></span><span class="plus"></span><span class=" featured_icon icon_star" aria-hidden="true"></span></a></li>
														<li id="nav-menu-item-1285" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/left-to-right-ajax-transition/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Left to Right Transition</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1283" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/up-down-ajax-transition/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Up/Down Transiton</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1289" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/up-down-fade-ajax-transition/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Up/Down Fade Transition</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1287" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/fade-ajax-transition/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">Fade Transition</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-10203" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/no-ajax-transition/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon arrow_triangle-right fa"></i></span><span class="item_text">No Ajax Transition</span></span><span class="plus"></span></a></li>
													</ul>
												</li>
												<li id="nav-menu-item-1402" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub" style="height: 505px;"><a href="#" class="no_link down left" style="cursor: default;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Header Styles</span></span><span class="plus"></span><i class="mkd_menu_arrow fa fa-angle-right"></i></a>
													<ul>
														<li id="nav-menu-item-1406" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/header-with-border/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-badge fa"></i></span><span class="item_text">With Border</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1407" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/header-with-image/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-lock fa"></i></span><span class="item_text">With Image</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1408" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/initially-hidden-header/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-bulb fa"></i></span><span class="item_text">Initially Hidden</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1409" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/transparent-dark-header/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-trophy fa"></i></span><span class="item_text">Transparent Dark</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1410" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/transparent-white-header/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-eyeglasses fa"></i></span><span class="item_text">Transparent White</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1404" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/dark-header/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-envelope-open fa"></i></span><span class="item_text">Dark</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1411" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/white-header/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-cup fa"></i></span><span class="item_text">White</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1405" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/fully-transparent-header/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-users fa"></i></span><span class="item_text">Fully Transparent</span></span><span class="plus"></span></a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li id="nav-menu-item-1389" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="#" class="no_link down left" style="cursor: default; line-height: 83px;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Portfolio</span></span><span class="plus"></span></a>
									<div class="second" style="height: 3px;">
										<div class="inner">
											<ul>
												<li id="nav-menu-item-1390" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class="no_link down left" style="cursor: default;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Standard</span></span><span class="plus"></span><i class="mkd_menu_arrow fa fa-angle-right"></i></a>
													<ul>
														<li id="nav-menu-item-1399" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/standard-two-columns/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Two Columns</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1398" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/standard-three-columns/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Three Columns</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1397" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/standard-four-columns/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Four Columns</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1395" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/standard-four-columns-wide/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Four Columns Wide</span></span><span class="plus"></span></a></li>
													</ul>
												</li>
												<li id="nav-menu-item-1489" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class="no_link down left" style="cursor: default;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Text on Hover</span></span><span class="plus"></span><i class="mkd_menu_arrow fa fa-angle-right"></i></a>
													<ul>
														<li id="nav-menu-item-1497" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/text-on-hover-two-columns/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Two Columns</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1496" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/text-on-hover-three-columns/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Three Columns</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1494" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/text-on-hover-four-columns/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Four Columns</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1573" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/text-on-hover-four-columns-wide/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Four Columns Wide</span></span><span class="plus"></span></a></li>
													</ul>
												</li>
												<li id="nav-menu-item-1449" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class="no_link down left" style="cursor: default;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Text on Hover No Space</span></span><span class="plus"></span><i class="mkd_menu_arrow fa fa-angle-right"></i></a>
													<ul>
														<li id="nav-menu-item-1456" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/text-on-hover-no-space-two-columns/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Two Columns</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1455" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/text-on-hover-no-space-three-columns/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Three Columns</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1454" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/text-on-hover-no-space-four-columns/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Four Columns</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-1452" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/text-on-hover-no-space-four-columns-wide/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Four Columns Wide</span></span><span class="plus"></span></a></li>
													</ul>
												</li>
												<li id="nav-menu-item-4770" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class="no_link down left" style="cursor: default;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Masonry</span></span><span class="plus"></span><i class="mkd_menu_arrow fa fa-angle-right"></i></a>
													<ul>
														<li id="nav-menu-item-4769" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/masonry-three-columns/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Three Columns</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4768" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/masonry-four-columns/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Four Columns</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4767" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/masonry-three-columns-no-space/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Three Col. No Space</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4766" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/masonry-four-columns-no-space/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Four Col. No Space</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4765" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/masonry-wide/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Masonry Wide</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4764" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/masonry-wide-no-space/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Wide No Space</span></span><span class="plus"></span></a></li>
													</ul>
												</li>
												<li id="nav-menu-item-4693" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class="no_link down left" style="cursor: default;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Pinterest</span></span><span class="plus"></span><i class="mkd_menu_arrow fa fa-angle-right"></i></a>
													<ul>
														<li id="nav-menu-item-4692" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/pinterest-three-columns/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Three Columns</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4691" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/pinterest-four-columns-wide/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Four Columns Wide</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4690" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/pinterest-five-columns-wide/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Five Columns Wide</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4689" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/pinterest-six-columns-wide/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Six Columns Wide</span></span><span class="plus"></span></a></li>
													</ul>
												</li>
												<li id="nav-menu-item-4820" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class="no_link down left" style="cursor: default;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Single Project Types</span></span><span class="plus"></span><i class="mkd_menu_arrow fa fa-angle-right"></i></a>
													<ul>
														<li id="nav-menu-item-4815" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://burst.mikado-themes.com/burst/portfolio_page/creative-cool/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Small Images</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4819" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://burst.mikado-themes.com/burst/portfolio_page/logo-magic/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Small Slider</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4816" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://burst.mikado-themes.com/burst/portfolio_page/sketches-and-concepts/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Big Images</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4817" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://burst.mikado-themes.com/burst/portfolio_page/robots/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Big Slider</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4818" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://burst.mikado-themes.com/burst/portfolio_page/web-makeover/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Gallery</span></span><span class="plus"></span></a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li id="nav-menu-item-4754" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub wide icons wide_columns_4"><a href="#" class="no_link down left" style="cursor: default; line-height: 83px;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon blank fa"></i></span><span class="item_text">Elements</span></span><span class="plus"></span></a>
									<div class="second background_image" style="left: -751.344px; height: 3px;">
										<div class="inner">
											<ul style="background-image:url(http://burst.mikado-themes.com/burst/wp-content/uploads/2015/10/elements_dropdown_background.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">
												<li id="nav-menu-item-4755" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub" style="height: 550px;"><a href="#" class="no_link down left" style="cursor: default;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Burst Specials</span></span><span class="plus"></span><i class="mkd_menu_arrow fa fa-angle-right"></i></a>
													<ul>
														<li id="nav-menu-item-4916" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/image-shader/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-notebook fa"></i></span><span class="item_text">Image Shader</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4733" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/image-stack/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-badge fa"></i></span><span class="item_text">Image Stack</span></span><span class="plus"></span><span class=" featured_icon icon_star" aria-hidden="true"></span></a></li>
														<li id="nav-menu-item-4917" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/zoom-parallax/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-magnifier fa"></i></span><span class="item_text">Zoom Parallax</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4751" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/type-out/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-envelope-open fa"></i></span><span class="item_text">Type Out</span></span><span class="plus"></span><span class=" featured_icon icon_star" aria-hidden="true"></span></a></li>
														<li id="nav-menu-item-4735" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/interactive-info-card/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-folder-alt fa"></i></span><span class="item_text">Interactive Info Card</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4742" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/pop-up-notes/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-note fa"></i></span><span class="item_text">Pop Up Notes</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4753" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/video-background/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-social-youtube fa"></i></span><span class="item_text">Video Background</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4739" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/parallax-layers/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-layers fa"></i></span><span class="item_text">Parallax Layers</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4750" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/testimonials/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-question fa"></i></span><span class="item_text">Testimonials</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4736" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/interactive-pie-charts/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-compass fa"></i></span><span class="item_text">Interactive Pie Charts</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4740" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/parallax-sections/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-docs fa"></i></span><span class="item_text">Parallax Sections</span></span><span class="plus"></span></a></li>
													</ul>
												</li>
												<li id="nav-menu-item-4759" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub" style="height: 550px;"><a href="#" class="no_link down left" style="cursor: default;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Interactive</span></span><span class="plus"></span><i class="mkd_menu_arrow fa fa-angle-right"></i></a>
													<ul>
														<li id="nav-menu-item-4749" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/team/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-users fa"></i></span><span class="item_text">Team</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4734" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/interactive-banners/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-tag fa"></i></span><span class="item_text">Interactive Banners</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4748" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/tabs/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-book-open fa"></i></span><span class="item_text">Tabs</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4709" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/accordions/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-plus fa"></i></span><span class="item_text">Accordions &amp; Toggle</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4714" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/clients-carousel/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-lock fa"></i></span><span class="item_text">Clients Carousel</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4715" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/clients-grid/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-frame fa"></i></span><span class="item_text">Clients Grid</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4718" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/cover-boxes/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-puzzle fa"></i></span><span class="item_text">Cover Boxes</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4719" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/custom-buttons/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-like fa"></i></span><span class="item_text">Custom Buttons</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4725" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/gallery/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-camera fa"></i></span><span class="item_text">Gallery</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4726" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/gallery-grayscale/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-picture fa"></i></span><span class="item_text">Gallery Grayscale</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4723" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/expandable-sections/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-hourglass fa"></i></span><span class="item_text">Expandable Sections</span></span><span class="plus"></span></a></li>
													</ul>
												</li>
												<li id="nav-menu-item-4760" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub" style="height: 550px;"><a href="#" class="no_link down left" style="cursor: default;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Infographic</span></span><span class="plus"></span><i class="mkd_menu_arrow fa fa-angle-right"></i></a>
													<ul>
														<li id="nav-menu-item-4710" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/animated-counters/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-clock fa"></i></span><span class="item_text">Animated Counters</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4730" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/icon-combinations/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-social-twitter fa"></i></span><span class="item_text">Icon Combinations</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4731" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/icon-font-sets/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-star fa"></i></span><span class="item_text">Icon Font Sets</span></span><span class="plus"></span><span class=" featured_icon icon_star" aria-hidden="true"></span></a></li>
														<li id="nav-menu-item-4747" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/social-network-icons/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-share fa"></i></span><span class="item_text">Social Network Icons</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4741" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/pie-charts/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-pie-chart fa"></i></span><span class="item_text">Pie Charts</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4729" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/progress-bars/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-rocket fa"></i></span><span class="item_text">Horizontal Bars</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4752" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/vertical-progress-bars/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-bar-chart fa"></i></span><span class="item_text">Vertical Bars</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4732" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/icon-progress-bars/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-mouse fa"></i></span><span class="item_text">Icon Progress Bars</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4744" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/pricing-tables/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-calendar fa"></i></span><span class="item_text">Pricing Tables</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4746" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/service-tables/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-wrench fa"></i></span><span class="item_text">Service Tables</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4745" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/process/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-drop fa"></i></span><span class="item_text">Process</span></span><span class="plus"></span></a></li>
													</ul>
												</li>
												<li id="nav-menu-item-4761" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub" style="height: 550px;"><a href="#" class="no_link down left" style="cursor: default;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Typography</span></span><span class="plus"></span><i class="mkd_menu_arrow fa fa-angle-right"></i></a>
													<ul>
														<li id="nav-menu-item-4724" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/fonts/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-flag fa"></i></span><span class="item_text">Fonts</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4713" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/call-to-action/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-speedometer fa"></i></span><span class="item_text">Call To Action</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4738" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/message-box/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-speech fa"></i></span><span class="item_text">Message Box</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4712" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/blockquotes/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-magnet fa"></i></span><span class="item_text">Blockquotes</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4737" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/lists/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-list fa"></i></span><span class="item_text">Lists</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4728" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/highlights/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-cup fa"></i></span><span class="item_text">Highlights</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4722" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/dropcaps/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-support fa"></i></span><span class="item_text">Dropcaps</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4721" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/dividers/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-energy fa"></i></span><span class="item_text">Dividers</span></span><span class="plus"></span><span class=" featured_icon icon_star" aria-hidden="true"></span></a></li>
														<li id="nav-menu-item-4727" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/headings/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-trophy fa"></i></span><span class="item_text">Headings</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4717" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/columns/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon icon-settings fa"></i></span><span class="item_text">Columns</span></span><span class="plus"></span></a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li id="nav-menu-item-4694" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="#" class="no_link down left" style="cursor: default; line-height: 83px;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Blog</span></span><span class="plus"></span></a>
									<div class="second" style="height: 0px;">
										<div class="inner">
											<ul>
												<li id="nav-menu-item-4699" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/blog-standard-with-sidebar/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Standard &amp; Sidebar</span></span><span class="plus"></span></a></li>
												<li id="nav-menu-item-10192" class="menu-item menu-item-type-custom menu-item-object-custom"><a target="_blank" href="http://burst.mikado-themes.com/burst9/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Standard &amp; Slider</span></span><span class="plus"></span><span class=" featured_icon icon_star" aria-hidden="true"></span></a></li>
												<li id="nav-menu-item-4702" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/blog-standard/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Standard Blog</span></span><span class="plus"></span></a></li>
												<li id="nav-menu-item-4701" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/blog-standard-whole-posts/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Whole Posts Blog</span></span><span class="plus"></span></a></li>
												<li id="nav-menu-item-4700" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/blog-masonry/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Masonry Blog</span></span><span class="plus"></span></a></li>
												<li id="nav-menu-item-4696" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://burst.mikado-themes.com/burst/blog-hover-types/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Hover Types</span></span><span class="plus"></span></a></li>
												<li id="nav-menu-item-4703" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class="no_link down left" style="cursor: default;" onclick="JavaScript: return false;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Post Types</span></span><span class="plus"></span><i class="mkd_menu_arrow fa fa-angle-right"></i></a>
													<ul>
														<li id="nav-menu-item-4704" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://burst.mikado-themes.com/burst/how-to-challenge-yourself-to-write-daily/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Standard</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4706" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://burst.mikado-themes.com/burst/developing-friendships-in-the-workplace/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Gallery</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4707" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://burst.mikado-themes.com/burst/john-lennon/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Quote</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4708" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://burst.mikado-themes.com/burst/home-made-vegetarian-pasta-recipe/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Link</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-6838" class="menu-item menu-item-type-post_type menu-item-object-post"><a href="http://burst.mikado-themes.com/burst/everything-you-need-to-know-about-marketing/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Audio</span></span><span class="plus"></span></a></li>
														<li id="nav-menu-item-4705" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://burst.mikado-themes.com/burst/unforgettable-ski-trips-in-the-french-alps/" class="down left"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Video</span></span><span class="plus"></span></a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li id="nav-menu-item-10090" class="menu-item menu-item-type-post_type menu-item-object-page  narrow"><a href="http://burst.mikado-themes.com/burst/shop/" class="down left" style="line-height: 83px;"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">Shop</span></span><span class="plus"></span></a></li>
							</ul>
						</nav>
						<nav class="mobile_menu">
							<ul id="menu-main_menu-1" class="">
								<li id="mobile-menu-item-6439" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current_page_ancestor menu-item-has-children has_sub level0"><a href="http://burst.mikado-themes.com/burst/" class=" current "><span>Home</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
									<ul class="sub_menu">
										<li id="mobile-menu-item-7034" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children has_sub level1"><a href="#" class=""><span>Homepages</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
											<ul class="sub_menu">
												<li id="mobile-menu-item-7045" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/" class=""><span>Original Homepage<span class=" featured_icon icon_star" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-5639" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5049 current_page_item level2"><a href="http://burst.mikado-themes.com/burst/agency-home/" class=""><span>Agency Homepage<span class=" featured_icon icon_star" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-5643" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/fullscreen-home/" class=""><span>Fullscreen Homepage</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-5642" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/video-home/" class=""><span>Video Homepage</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-5644" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/colorful-home/" class=""><span>Colorful Homepage</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-5646" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/business-home/" class=""><span>Business Homepage</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-5645" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/designer-home/" class=""><span>Designer Homepage</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-2130" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/flat-home/" class=""><span>Flat Homepage</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-10736" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a target="_blank" href="http://burst.mikado-themes.com/landing/" class=""><span>Intro<span class=" featured_icon arrow_right-up" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
											</ul>
										</li>
										<li id="mobile-menu-item-7035" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level1"><a href="#" class=""><span>Demos</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
											<ul class="sub_menu">
												<li id="mobile-menu-item-7039" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a target="_blank" href="http://burst.mikado-themes.com/burst4" class=""><span>Standard Demo<span class=" featured_icon arrow_right-up" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-7037" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a target="_blank" href="http://burst.mikado-themes.com/burst2/" class=""><span>Left Menu Demo<span class=" featured_icon arrow_right-up" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-7041" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a target="_blank" href="http://burst.mikado-themes.com/burst6/" class=""><span>Split Demo<span class=" featured_icon arrow_right-up" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-7040" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a target="_blank" href="http://burst.mikado-themes.com/burst5/" class=""><span>Passepartout Demo<span class=" featured_icon arrow_right-up" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-7038" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a target="_blank" href="http://burst.mikado-themes.com/burst3/" class=""><span>Classic Demo<span class=" featured_icon arrow_right-up" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-7036" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a target="_blank" href="http://burst.mikado-themes.com/burst1" class=""><span>One Page Demo<span class=" featured_icon arrow_right-up" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-7043" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a target="_blank" href="http://burst.mikado-themes.com/burst8/" class=""><span>Masonry Demo<span class=" featured_icon arrow_right-up" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-7042" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a target="_blank" href="http://burst.mikado-themes.com/burst7/" class=""><span>Shop Demo<span class=" featured_icon arrow_right-up" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-10773" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a href="http://burst.mikado-themes.com/burst9/" class=""><span>Blog Demo<span class=" featured_icon arrow_right-up" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
											</ul>
										</li>
									</ul>
								</li>
								<li id="mobile-menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level0">
									<h4><span>Pages</span></h4>
									<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
									<ul class="sub_menu">
										<li id="mobile-menu-item-7031" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level1"><a href="#" class=""><span>Page Examples</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
											<ul class="sub_menu">
												<li id="mobile-menu-item-1851" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/about-me/" class=""><span>About Me</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4456" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/about-me-simple/" class=""><span>About Me Simple</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1852" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/about-the-company/" class=""><span>About The Company</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-2115" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/about-bussines-compact/" class=""><span>About Business</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-2131" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/about-the-studio/" class=""><span>About The Studio</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4455" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/app-launch/" class=""><span>App Launch</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4452" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/our-services/" class=""><span>Our Services</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
											</ul>
										</li>
										<li id="mobile-menu-item-7032" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level1"><a href="#" class=""><span>Page Exapmles II</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
											<ul class="sub_menu">
												<li id="mobile-menu-item-2329" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/personal-lookbook/" class=""><span>Personal Lookbook</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-2235" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/contact-with-big-map/" class=""><span>Contact Big Map</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-2349" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/contact-elegant/" class=""><span>Contact Elegant</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4454" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/coming-soon/" class=""><span>Coming Soon</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4450" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/pricing-plans/" class=""><span>Pricing Plans</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4451" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/parallax-page/" class=""><span>Parallax Page</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4540" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/creative-process/" class=""><span>Creative Process</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
											</ul>
										</li>
									</ul>
								</li>
								<li id="mobile-menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level0">
									<h4><span>Highlights</span></h4>
									<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
									<ul class="sub_menu">
										<li id="mobile-menu-item-2236" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level1">
											<h4><span>Sliders</span></h4>
											<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
											<ul class="sub_menu">
												<li id="mobile-menu-item-2577" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/all-sliders/" class=""><span>All Sliders<span class=" featured_icon icon_star" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4228" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/fullscreen-slider/" class=""><span>Fullscreen Slider</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-2299" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/premium-layer-slider/" class=""><span>Premium Layer Slider</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-2459" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/simple-flex-slider/" class=""><span>Simple Flex Slider</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-2350" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/blog-single-post-slider/" class=""><span>Blog Single Slider</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-2339" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/blog-multiple-posts-slider/" class=""><span>Blog Multiple Slider</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-2320" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/portfolio-slider/" class=""><span>Portfolio Slider<span class=" featured_icon icon_star" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-5546" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/testimonials-slider/" class=""><span>Testimonials Slider</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-5547" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/text-slider/" class=""><span>Text Slider</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-2386" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/clients-slider/" class=""><span>Clients Slider</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
											</ul>
										</li>
										<li id="mobile-menu-item-1195" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level1">
											<h4><span>Title Area Styles</span></h4>
											<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
											<ul class="sub_menu">
												<li id="mobile-menu-item-1259" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/video-title/" class=""><span>Video Title<span class=" featured_icon icon_star" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1258" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/revealing-title/" class=""><span>Revealing Title</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1299" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/parallax-zoom-out/" class=""><span>Parallax Zoom Out</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1298" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/regular-parallax/" class=""><span>Regular Parallax</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1304" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/title-slide-in/" class=""><span>Title Slide-in</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1308" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/responsive-image/" class=""><span>Responsive Image</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1325" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/monochrome-title/" class=""><span>Monochrome Title</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-5173" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/breadcrumb-with-background-image/" class=""><span>Breadcrumb with Image</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1326" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/regular-title/" class=""><span>Regular Title</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
											</ul>
										</li>
										<li id="mobile-menu-item-1271" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level1">
											<h4><span>Transitions &amp; Hovers</span></h4>
											<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
											<ul class="sub_menu">
												<li id="mobile-menu-item-1350" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/featured-hover-effects/" class=""><span>Featured Hover Effects<span class=" featured_icon icon_star" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1285" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/left-to-right-ajax-transition/" class=""><span>Left to Right Transition</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1283" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/up-down-ajax-transition/" class=""><span>Up/Down Transiton</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1289" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/up-down-fade-ajax-transition/" class=""><span>Up/Down Fade Transition</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1287" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/fade-ajax-transition/" class=""><span>Fade Transition</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-10203" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/no-ajax-transition/" class=""><span>No Ajax Transition</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
											</ul>
										</li>
										<li id="mobile-menu-item-1402" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level1">
											<h4><span>Header Styles</span></h4>
											<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
											<ul class="sub_menu">
												<li id="mobile-menu-item-1406" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/header-with-border/" class=""><span>With Border</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1407" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/header-with-image/" class=""><span>With Image</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1408" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/initially-hidden-header/" class=""><span>Initially Hidden</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1409" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/transparent-dark-header/" class=""><span>Transparent Dark</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1410" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/transparent-white-header/" class=""><span>Transparent White</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1404" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/dark-header/" class=""><span>Dark</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1411" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/white-header/" class=""><span>White</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1405" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/fully-transparent-header/" class=""><span>Fully Transparent</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
											</ul>
										</li>
									</ul>
								</li>
								<li id="mobile-menu-item-1389" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level0">
									<h4><span>Portfolio</span></h4>
									<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
									<ul class="sub_menu">
										<li id="mobile-menu-item-1390" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level1">
											<h4><span>Standard</span></h4>
											<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
											<ul class="sub_menu">
												<li id="mobile-menu-item-1399" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/standard-two-columns/" class=""><span>Two Columns</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1398" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/standard-three-columns/" class=""><span>Three Columns</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1397" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/standard-four-columns/" class=""><span>Four Columns</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1395" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/standard-four-columns-wide/" class=""><span>Four Columns Wide</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
											</ul>
										</li>
										<li id="mobile-menu-item-1489" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level1">
											<h4><span>Text on Hover</span></h4>
											<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
											<ul class="sub_menu">
												<li id="mobile-menu-item-1497" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/text-on-hover-two-columns/" class=""><span>Two Columns</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1496" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/text-on-hover-three-columns/" class=""><span>Three Columns</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1494" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/text-on-hover-four-columns/" class=""><span>Four Columns</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1573" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/text-on-hover-four-columns-wide/" class=""><span>Four Columns Wide</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
											</ul>
										</li>
										<li id="mobile-menu-item-1449" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level1">
											<h4><span>Text on Hover No Space</span></h4>
											<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
											<ul class="sub_menu">
												<li id="mobile-menu-item-1456" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/text-on-hover-no-space-two-columns/" class=""><span>Two Columns</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1455" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/text-on-hover-no-space-three-columns/" class=""><span>Three Columns</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1454" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/text-on-hover-no-space-four-columns/" class=""><span>Four Columns</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-1452" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/text-on-hover-no-space-four-columns-wide/" class=""><span>Four Columns Wide</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
											</ul>
										</li>
										<li id="mobile-menu-item-4770" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level1">
											<h4><span>Masonry</span></h4>
											<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
											<ul class="sub_menu">
												<li id="mobile-menu-item-4769" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/masonry-three-columns/" class=""><span>Three Columns</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4768" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/masonry-four-columns/" class=""><span>Four Columns</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4767" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/masonry-three-columns-no-space/" class=""><span>Three Col. No Space</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4766" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/masonry-four-columns-no-space/" class=""><span>Four Col. No Space</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4765" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/masonry-wide/" class=""><span>Masonry Wide</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4764" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/masonry-wide-no-space/" class=""><span>Wide No Space</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
											</ul>
										</li>
										<li id="mobile-menu-item-4693" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level1">
											<h4><span>Pinterest</span></h4>
											<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
											<ul class="sub_menu">
												<li id="mobile-menu-item-4692" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/pinterest-three-columns/" class=""><span>Three Columns</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4691" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/pinterest-four-columns-wide/" class=""><span>Four Columns Wide</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4690" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/pinterest-five-columns-wide/" class=""><span>Five Columns Wide</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4689" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/pinterest-six-columns-wide/" class=""><span>Six Columns Wide</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
											</ul>
										</li>
										<li id="mobile-menu-item-4820" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level1">
											<h4><span>Single Project Types</span></h4>
											<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
											<ul class="sub_menu">
												<li id="mobile-menu-item-4815" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a href="http://burst.mikado-themes.com/burst/portfolio_page/creative-cool/" class=""><span>Small Images</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4819" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a href="http://burst.mikado-themes.com/burst/portfolio_page/logo-magic/" class=""><span>Small Slider</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4816" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a href="http://burst.mikado-themes.com/burst/portfolio_page/sketches-and-concepts/" class=""><span>Big Images</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4817" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a href="http://burst.mikado-themes.com/burst/portfolio_page/robots/" class=""><span>Big Slider</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4818" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a href="http://burst.mikado-themes.com/burst/portfolio_page/web-makeover/" class=""><span>Gallery</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
											</ul>
										</li>
									</ul>
								</li>
								<li id="mobile-menu-item-4754" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level0">
									<h4><span>Elements</span></h4>
									<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
									<ul class="sub_menu">
										<li id="mobile-menu-item-4755" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level1">
											<h4><span>Burst Specials</span></h4>
											<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
											<ul class="sub_menu">
												<li id="mobile-menu-item-4916" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/image-shader/" class=""><span>Image Shader</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4733" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/image-stack/" class=""><span>Image Stack<span class=" featured_icon icon_star" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4917" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/zoom-parallax/" class=""><span>Zoom Parallax</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4751" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/type-out/" class=""><span>Type Out<span class=" featured_icon icon_star" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4735" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/interactive-info-card/" class=""><span>Interactive Info Card</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4742" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/pop-up-notes/" class=""><span>Pop Up Notes</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4753" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/video-background/" class=""><span>Video Background</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4739" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/parallax-layers/" class=""><span>Parallax Layers</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4750" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/testimonials/" class=""><span>Testimonials</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4736" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/interactive-pie-charts/" class=""><span>Interactive Pie Charts</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4740" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/parallax-sections/" class=""><span>Parallax Sections</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
											</ul>
										</li>
										<li id="mobile-menu-item-4759" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level1">
											<h4><span>Interactive</span></h4>
											<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
											<ul class="sub_menu">
												<li id="mobile-menu-item-4749" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/team/" class=""><span>Team</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4734" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/interactive-banners/" class=""><span>Interactive Banners</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4748" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/tabs/" class=""><span>Tabs</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4709" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/accordions/" class=""><span>Accordions &amp; Toggle</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4714" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/clients-carousel/" class=""><span>Clients Carousel</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4715" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/clients-grid/" class=""><span>Clients Grid</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4718" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/cover-boxes/" class=""><span>Cover Boxes</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4719" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/custom-buttons/" class=""><span>Custom Buttons</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4725" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/gallery/" class=""><span>Gallery</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4726" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/gallery-grayscale/" class=""><span>Gallery Grayscale</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4723" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/expandable-sections/" class=""><span>Expandable Sections</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
											</ul>
										</li>
										<li id="mobile-menu-item-4760" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level1">
											<h4><span>Infographic</span></h4>
											<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
											<ul class="sub_menu">
												<li id="mobile-menu-item-4710" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/animated-counters/" class=""><span>Animated Counters</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4730" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/icon-combinations/" class=""><span>Icon Combinations</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4731" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/icon-font-sets/" class=""><span>Icon Font Sets<span class=" featured_icon icon_star" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4747" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/social-network-icons/" class=""><span>Social Network Icons</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4741" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/pie-charts/" class=""><span>Pie Charts</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4729" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/progress-bars/" class=""><span>Horizontal Bars</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4752" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/vertical-progress-bars/" class=""><span>Vertical Bars</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4732" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/icon-progress-bars/" class=""><span>Icon Progress Bars</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4744" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/pricing-tables/" class=""><span>Pricing Tables</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4746" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/service-tables/" class=""><span>Service Tables</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4745" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/process/" class=""><span>Process</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
											</ul>
										</li>
										<li id="mobile-menu-item-4761" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level1">
											<h4><span>Typography</span></h4>
											<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
											<ul class="sub_menu">
												<li id="mobile-menu-item-4724" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/fonts/" class=""><span>Fonts</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4713" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/call-to-action/" class=""><span>Call To Action</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4738" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/message-box/" class=""><span>Message Box</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4712" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/blockquotes/" class=""><span>Blockquotes</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4737" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/lists/" class=""><span>Lists</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4728" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/highlights/" class=""><span>Highlights</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4722" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/dropcaps/" class=""><span>Dropcaps</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4721" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/dividers/" class=""><span>Dividers<span class=" featured_icon icon_star" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4727" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/headings/" class=""><span>Headings</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4717" class="menu-item menu-item-type-post_type menu-item-object-page  level2"><a href="http://burst.mikado-themes.com/burst/columns/" class=""><span>Columns</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
											</ul>
										</li>
									</ul>
								</li>
								<li id="mobile-menu-item-4694" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level0">
									<h4><span>Blog</span></h4>
									<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
									<ul class="sub_menu">
										<li id="mobile-menu-item-4699" class="menu-item menu-item-type-post_type menu-item-object-page  level1"><a href="http://burst.mikado-themes.com/burst/blog-standard-with-sidebar/" class=""><span>Standard &amp; Sidebar</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
										<li id="mobile-menu-item-10192" class="menu-item menu-item-type-custom menu-item-object-custom  level1"><a target="_blank" href="http://burst.mikado-themes.com/burst9/" class=""><span>Standard &amp; Slider<span class=" featured_icon icon_star" aria-hidden="true"></span></span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
										<li id="mobile-menu-item-4702" class="menu-item menu-item-type-post_type menu-item-object-page  level1"><a href="http://burst.mikado-themes.com/burst/blog-standard/" class=""><span>Standard Blog</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
										<li id="mobile-menu-item-4701" class="menu-item menu-item-type-post_type menu-item-object-page  level1"><a href="http://burst.mikado-themes.com/burst/blog-standard-whole-posts/" class=""><span>Whole Posts Blog</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
										<li id="mobile-menu-item-4700" class="menu-item menu-item-type-post_type menu-item-object-page  level1"><a href="http://burst.mikado-themes.com/burst/blog-masonry/" class=""><span>Masonry Blog</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
										<li id="mobile-menu-item-4696" class="menu-item menu-item-type-post_type menu-item-object-page  level1"><a href="http://burst.mikado-themes.com/burst/blog-hover-types/" class=""><span>Hover Types</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
										<li id="mobile-menu-item-4703" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub level1">
											<h4><span>Post Types</span></h4>
											<span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
											<ul class="sub_menu">
												<li id="mobile-menu-item-4704" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a href="http://burst.mikado-themes.com/burst/how-to-challenge-yourself-to-write-daily/" class=""><span>Standard</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4706" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a href="http://burst.mikado-themes.com/burst/developing-friendships-in-the-workplace/" class=""><span>Gallery</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4707" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a href="http://burst.mikado-themes.com/burst/john-lennon/" class=""><span>Quote</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4708" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a href="http://burst.mikado-themes.com/burst/home-made-vegetarian-pasta-recipe/" class=""><span>Link</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-6838" class="menu-item menu-item-type-post_type menu-item-object-post  level2"><a href="http://burst.mikado-themes.com/burst/everything-you-need-to-know-about-marketing/" class=""><span>Audio</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
												<li id="mobile-menu-item-4705" class="menu-item menu-item-type-custom menu-item-object-custom  level2"><a href="http://burst.mikado-themes.com/burst/unforgettable-ski-trips-in-the-french-alps/" class=""><span>Video</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
											</ul>
										</li>
									</ul>
								</li>
								<li id="mobile-menu-item-10090" class="menu-item menu-item-type-post_type menu-item-object-page  level0"><a href="http://burst.mikado-themes.com/burst/shop/" class=""><span>Shop</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- MAIN NAVIGATION -->
<header class="wrap">
	<div class="th-header-top">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-4"> 
					<!-- LOGO -->
					<div class="logo logo-<?php echo $logotype ?>"> <a href="<?php echo JURI::base(true) ?>" title="<?php echo strip_tags($sitename) ?>">
						<?php if($logotype == 'image'): ?>
						<img class="logo-img" src="<?php echo JURI::base(true) . '/' . $logoimage ?>" alt="<?php echo strip_tags($sitename) ?>" />
						<?php endif ?>
						<span><?php echo $sitename ?></span> </a> </div>
					<!-- //LOGO --> 
				</div>
				<div class="col-md-9 col-sm-8  hidden-xs">
					<?php if ($this->countModules('header-right')) : ?>
					<!-- HEAD LOGIN -->
					<div class="th-login pull-right<?php $this->_c('header-right')?>">
						<jdoc:include type="modules" name="<?php $this->_p('header-right') ?>" style="raw" />
					</div>
					<!-- //HEAD LOGIN -->
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="navbar navbar-default t3-mainnav"> 
			
			<!-- OFF-CANVAS -->
			<div class="hidden-md hidden-lg">
				<?php if ($this->getParam('addon_offcanvas_enable')) : ?>
				<?php $this->loadBlock ('off-canvas') ?>
				<?php endif ?>
			</div>
			<!-- //OFF-CANVAS --> 
			
			<!-- NAVBAR HEADER -->
			<div class="navbar-header">
				<?php if ($this->getParam('navigation_collapse_enable', 1) && $this->getParam('responsive', 1)) : ?>
				<?php $this->addScript(T3_URL.'/js/nav-collapse.js'); ?>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".t3-navbar-collapse"> <i class="fa fa-bars"></i> </button>
				<?php endif ?>
				<?php if ($this->countModules('head-search')) : ?>
				<!-- HEAD SEARCH -->
				<div class="head-search<?php $this->_c('head-search')?>">
					<jdoc:include type="modules" name="<?php $this->_p('head-search') ?>" style="raw" />
				</div>
				<!-- //HEAD SEARCH -->
				<?php endif ?>
			</div>
			<!-- //NAVBAR HEADER --> 
			
			<!-- NAVBAR MAIN -->
			<?php if ($this->getParam('navigation_collapse_enable')) : ?>
			<nav class="t3-navbar-collapse navbar-collapse collapse"></nav>
			<?php endif ?>
			<nav class="t3-navbar navbar-collapse collapse">
				<jdoc:include type="<?php echo $this->getParam('navigation_type', 'megamenu') ?>" name="<?php echo $this->getParam('mm_type', 'mainmenu') ?>" />
			</nav>
			<!-- //NAVBAR MAIN --> 
			<script type="text/javascript">new menuFixer('.t3-navbar ul.nav.level0');</script> 
		</div>
	</div>
</header>
<!-- //MAIN NAVIGATION -->

<?php $this->loadBlock ('masthead') ?>
