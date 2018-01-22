<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";s:51188:"/**
 * @version    2.8.x
 * @package    K2
 * @author     JoomlaWorks http://www.joomlaworks.net
 * @copyright  Copyright (c) 2006 - 2017 JoomlaWorks Ltd. All rights reserved.
 * @license    GNU/GPL license:http://www.gnu.org/copyleft/gpl.html
 */

/*
	### Legend ###
	Colors used:
		#fafafa (light grey) used as background on all toolbars, category and user/author boxes
*/



/*------------------------------------------------------------------------------
	Common Elements
--------------------------------------------------------------------------------*/

/* --- Basic typography --- */
a:active,
a:focus {outline:0;}
img {border:none;}

/* --- Global K2 container --- */
#k2Container {padding:0 0 24px 0;}
body.contentpane #k2Container {padding:16px;} /* used in popups */

/* --- General padding --- */
.k2Padding {padding:4px;}

/* --- Clearing --- */
.clr {clear:both;height:0;line-height:0;display:block;float:none;padding:0;margin:0;border:none;}

/* --- Striped rows (add a different background color enable stripped rows in various listings with K2 content) --- */
.even {padding:2px;}
.odd {padding:2px;}

/* --- RSS feed icon --- */
div.k2FeedIcon {padding:4px 8px;}
div.k2FeedIcon a,
div.k2FeedIcon a:hover {display:block;float:right;margin:0;padding:0;width:16px;height:16px;}
div.k2FeedIcon a span,
div.k2FeedIcon a:hover span {display:none;}

/* --- Rating --- */
.itemRatingForm {display:block;vertical-align:middle;line-height:25px;float:left;}
.itemRatingLog {font-size:11px;margin:0;padding:0 0 0 4px;float:left;}
div.itemRatingForm .formLogLoading {background:url(/components/com_k2/images/loaders/generic.gif) no-repeat left center;height:25px;padding:0 0 0 20px;}
.itemRatingList,
.itemRatingList a:hover,
.itemRatingList .itemCurrentRating {background:transparent url(/components/com_k2/images/ratingstars.gif) left -1000px repeat-x;}
.itemRatingList {position:relative;float:left;width:125px;height:25px;overflow:hidden;list-style:none;margin:0;padding:0;background-position:left top;}
.itemRatingList li {display:inline;background:none;padding:0;}
.itemRatingList a,
.itemRatingList .itemCurrentRating {position:absolute;top:0;left:0;text-indent:-1000px;height:25px;line-height:25px;outline:none;overflow:hidden;border:none;cursor:pointer;}
.itemRatingList a:hover {background-position:left bottom;}
.itemRatingList a.one-star {width:20%;z-index:6;}
.itemRatingList a.two-stars {width:40%;z-index:5;}
.itemRatingList a.three-stars {width:60%;z-index:4;}
.itemRatingList a.four-stars {width:80%;z-index:3;}
.itemRatingList a.five-stars {width:100%;z-index:2;}
.itemRatingList .itemCurrentRating {z-index:1;background-position:0 center;margin:0;padding:0;}
span.siteRoot {display:none;}

/* --- CSS added with JavaScript --- */
.smallerFontSize {font-size:100%;line-height:inherit;}
.largerFontSize {font-size:150%;line-height:140%;}

/* --- ReCaptcha --- */
.recaptchatable .recaptcha_image_cell,
#recaptcha_table {background-color:#fff !important;}
#recaptcha_table {border-color:#ccc !important;}
#recaptcha_response_field {border-color:#ccc !important;background-color:#fff !important;}
.k2-recaptcha-v2 {margin-top:12px;}

/* --- Icon Font Support --- */
/* Reset for users with older overrides */
div.itemToolbar ul li a#fontDecrease,
div.itemToolbar ul li a#fontIncrease {font-size:14px;}
div.itemToolbar ul li a#fontDecrease img,
div.itemToolbar ul li a#fontIncrease img {background:none;}
a.ubUserFeedIcon,
a.ubUserFeedIcon:hover,
a.ubUserURL,
a.ubUserURL:hover,
span.ubUserEmail,
div.itemIsFeatured:before,
div.catItemIsFeatured:before,
div.userItemIsFeatured:before,
div.k2FeedIcon a,
div.k2FeedIcon a:hover,
div.itemToolbar ul li a#fontDecrease,
div.itemToolbar ul li a#fontIncrease {background:none;text-decoration:none;vertical-align:middle;font-family:'simple-line-icons';speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}

/* Font assignments */
div.catItemIsFeatured:before,
div.userItemIsFeatured:before,
div.itemIsFeatured:before {content:"\e09b";}
a#fontIncrease:before {content:"\e091";}
a#fontDecrease:before {content:"\e092";}
div.k2FeedIcon a:before,
a.ubUserFeedIcon:before {content:"\e03b";}
a.ubUserURL:before {content:"\e037";}
span.ubUserEmail:before {content:"\e086";}

/* --- Primary lists in modules --- */
div.k2LatestCommentsBlock ul,
div.k2TopCommentersBlock ul,
div.k2ItemsBlock ul,
div.k2LoginBlock ul,
div.k2UserBlock ul.k2UserBlockActions,
div.k2UserBlock ul.k2UserBlockRenderedMenu,
div.k2ArchivesBlock ul,
div.k2AuthorsListBlock ul,
div.k2CategoriesListBlock ul,
div.k2UsersBlock ul {margin:0;padding:0 4px;list-style:none;} /* Example CSS: padding:0;margin:0;list-style:none; */

div.k2LatestCommentsBlock ul li,
div.k2TopCommentersBlock ul li,
div.k2ItemsBlock ul li,
div.k2LoginBlock ul li,
div.k2ArchivesBlock ul li,
div.k2AuthorsListBlock ul li,
div.k2CategoriesListBlock ul li,
div.k2UsersBlock ul li {display:block;padding:0;margin:0 0 24px 0;} /* Example CSS: display:block;clear:both;padding:2px 0;border-bottom:1px dotted #ccc; */

.clearList {display:none;float:none;clear:both;} /* this class is used to clear all previous floating list elements */
.lastItem {border:none;} /* class appended on last list item */

/* --- Avatars --- */
.k2Avatar img {display:block;float:left;background:#fff;border:1px solid #ddd;border-radius:50%;padding:2px;margin:2px 4px 4px 0;}

/* --- Read more --- */
a.k2ReadMore {}
a.k2ReadMore:hover {}

/* --- Pagination --- */
div.k2Pagination {padding:8px;margin:24px 0 4px 0;text-align:center;}
div.k2Pagination ul {text-align:center;}
div.k2Pagination ul li {display:inline-block;margin:0;padding:0;}
div.k2Pagination ul li a {display:inline-block;padding:4px 8px;margin:0 8px;border:1px solid #ddd;border-radius:4px;vertical-align:middle;background:#fff;text-decoration:none;}
div.k2Pagination ul li a:hover {background:#fafafa;cursor:pointer;}
div.k2Pagination ul li.active a {background:#fafafa;}
div.k2Pagination ul li a span {vertical-align:middle;}

/* --- Extra fields: CSV data styling --- */
table.csvData {}
table.csvData tr th {}
table.csvData tr td {}

/* --- Featured flags: the classes are repeated further below to indicate placement in the CSS structure --- */
div.itemIsFeatured,
div.catItemIsFeatured,
div.userItemIsFeatured {position:relative;}
div.itemIsFeatured:before,
div.catItemIsFeatured:before,
div.userItemIsFeatured:before {position:absolute;top:10px;right:10px;color:#CF1919;font-size:20px;}

/* --- Separators --- */
.k2HorizontalSep {border:0;padding:0;margin:0 8px;}

/* --- Edit Buttons --- */
span.itemEditLink,
span.catItemEditLink,
span.userItemEditLink,
span.userItemAddLink {float:right;display:block;padding:0;margin:0;width:120px;text-align:right;}
	span.itemEditLink a,
	span.catItemEditLink a,
	span.userItemEditLink a,
	span.userItemAddLink a {display:inline-block;padding:4px 8px;margin:0;background:#2d96dd;color:#fff;border:0;border-radius:4px;font-size:11px;line-height:100%;font-weight:bold;text-align:center;text-decoration:none;}
	span.itemEditLink a:hover,
	span.catItemEditLink a:hover,
	span.userItemEditLink a:hover,
	span.userItemAddLink a:hover {background:#217dbb;}



/*------------------------------------------------------------------------------
	Component - Item view
--------------------------------------------------------------------------------*/
a.itemPrintThisPage {display:block;width:160px;margin:4px auto 16px;padding:8px;border:1px solid #ddd;border-radius:4px;text-align:center;font-size:14px;}
a.itemPrintThisPage:hover {background:#fafafa;text-decoration:none;}

div.itemView {padding:8px 0 24px 0;margin:0 0 24px 0;} /* this is the item container for this view */
div.itemIsFeatured {} /* Attach a class for each featured item */

span.itemEditLink {}
	span.itemEditLink a {}
	span.itemEditLink a:hover {}

div.itemHeader {}
	div.itemHeader span.itemDateCreated {color:#999;font-size:11px;}
	div.itemHeader h2.itemTitle {padding:10px 0 4px 0;margin:0;}
	div.itemHeader h2.itemTitle span {}
	div.itemHeader h2.itemTitle span sup {font-size:12px;color:#CF1919;text-decoration:none;} /* "Featured" presented in superscript */
	div.itemHeader span.itemAuthor {display:block;padding:0;margin:0;}
	div.itemHeader span.itemAuthor a:before {content:" ";}
	div.itemHeader span.itemAuthor a {}
	div.itemHeader span.itemAuthor a:hover {}

div.itemToolbar {padding:8px;margin:16px 0 0 0;background:#fafafa;border-radius:4px;}
	div.itemToolbar ul {text-align:right;list-style:none;padding:0;margin:0;}
	div.itemToolbar ul li {display:inline;list-style:none;padding:0 4px 0 8px;margin:0;border-left:1px solid #ccc;text-align:center;background:none;font-size:12px;}
	div.itemToolbar ul > li:first-child {border:none;} /* remove the first CSS border from the left of the toolbar */
	div.itemToolbar ul li a {font-size:12px;font-weight:normal;}
	div.itemToolbar ul li a:hover {}
	div.itemToolbar ul li a span {}
	div.itemToolbar ul li a.itemPrintLink {}
	div.itemToolbar ul li a.itemPrintLink span {}
	div.itemToolbar ul li a.itemEmailLink {}
	div.itemToolbar ul li a.itemEmailLink span {}
	div.itemToolbar ul li a.itemVideoLink {}
	div.itemToolbar ul li a.itemVideoLink span {}
	div.itemToolbar ul li a.itemImageGalleryLink {}
	div.itemToolbar ul li a.itemImageGalleryLink span {}
	div.itemToolbar ul li a.itemCommentsLink {}
	div.itemToolbar ul li a.itemCommentsLink span {}
	div.itemToolbar ul li a img {vertical-align:middle;}
	div.itemToolbar ul li span.itemTextResizerTitle {}
	div.itemToolbar ul li a#fontDecrease {margin:0 0 0 2px;}
	div.itemToolbar ul li a#fontDecrease img {width:13px;height:13px;font-size:13px;}
	div.itemToolbar ul li a#fontIncrease {margin:0 0 0 2px;}
	div.itemToolbar ul li a#fontIncrease img {width:13px;height:13px;font-size:13px;}
	div.itemToolbar ul li a#fontDecrease span,
	div.itemToolbar ul li a#fontIncrease span {display:none;}

div.itemRatingBlock {padding:8px 0;}
	div.itemRatingBlock span {display:block;float:left;font-style:normal;padding:0 4px 0 0;margin:0;color:#999;}

div.itemBody {padding:8px 0;margin:0;}

div.itemImageBlock {padding:8px 0;margin:0 0 16px 0;}
	span.itemImage {display:block;text-align:center;margin:0 0 8px 0;}
	span.itemImage img {max-width:100%;height:auto;}
	span.itemImageCaption {color:#666;float:left;display:block;font-size:11px;}
	span.itemImageCredits {color:#999;float:right;display:block;font-style:italic;font-size:11px;}
	@media screen and ( max-width:600px ){
		span.itemImageCaption,
		span.itemImageCredits {float:none;text-align:center;}
	}

div.itemIntroText {color:#444;font-size:18px;font-weight:bold;line-height:24px;padding:4px 0 12px 0;}
	div.itemIntroText img {}

div.itemFullText {}
	div.itemFullText h3 {margin:0;padding:16px 0 4px 0;}
	div.itemFullText p {}
	div.itemFullText img {}

div.itemExtraFields {margin:16px 0 0 0;padding:8px 0 0 0;border-top:1px dotted #ddd;}
	div.itemExtraFields h3 {margin:0;padding:0 0 8px 0;}
	div.itemExtraFields ul {margin:0;padding:0;list-style:none;}
	div.itemExtraFields ul li {display:block;}
	div.itemExtraFields ul li span.itemExtraFieldsLabel {display:block;float:left;font-weight:bold;margin:0 4px 0 0;width:30%;}
	div.itemExtraFields ul li span.itemExtraFieldsValue {}

div.itemContentFooter {display:block;text-align:right;padding:4px 0;margin:16px 0 4px 0;color:#999;}
	span.itemHits {float:left;}
	span.itemDateModified {}

div.itemSocialSharing {padding:8px 0;}
	div.itemTwitterButton {float:left;margin:2px 24px 0 0;}
	div.itemFacebookButton {float:left;margin-right:24px;width:200px;}
	div.itemGooglePlusOneButton {}

div.itemLinks {margin:16px 0;padding:0;}

div.itemCategory {}
	div.itemCategory span {font-weight:bold;color:#555;padding:0 4px 0 0;}
	div.itemCategory a {}
div.itemTagsBlock {}
	div.itemTagsBlock span {font-weight:bold;color:#555;padding:0 4px 0 0;}
	div.itemTagsBlock ul.itemTags {list-style:none;padding:0;margin:0;display:inline;}
	div.itemTagsBlock ul.itemTags li {display:inline;list-style:none;padding:0 4px 0 0;margin:0;text-align:center;}
	div.itemTagsBlock ul.itemTags li a:before {content:"#";}
	div.itemTagsBlock ul.itemTags li a {}
	div.itemTagsBlock ul.itemTags li a:hover {}

div.itemAttachmentsBlock {padding:4px;border-bottom:1px dotted #ccc;}
	div.itemAttachmentsBlock span {font-weight:bold;color:#555;padding:0 4px 0 0;}
	div.itemAttachmentsBlock ul.itemAttachments {list-style:none;padding:0;margin:0;display:inline;}
	div.itemAttachmentsBlock ul.itemAttachments li {display:inline;list-style:none;padding:0 4px;margin:0;text-align:center;}
	div.itemAttachmentsBlock ul.itemAttachments li a {}
	div.itemAttachmentsBlock ul.itemAttachments li a:hover {}
	div.itemAttachmentsBlock ul.itemAttachments li span {font-size:10px;color:#999;font-weight:normal;}

/* Author block */
div.itemAuthorBlock {background:#fafafa;border:1px solid #ddd;border-radius:4px;margin:0 0 16px 0;padding:8px;}
	div.itemAuthorBlock img.itemAuthorAvatar {float:left;display:block;background:#fff;padding:4px;border:1px solid #ddd;margin:0 8px 0 0;border-radius:50%;}
	div.itemAuthorBlock div.itemAuthorDetails {margin:0;padding:4px 0 0 0;}
	div.itemAuthorBlock div.itemAuthorDetails h3.authorName {margin:0 0 4px 0;padding:0;}
	div.itemAuthorBlock div.itemAuthorDetails h3.authorName a {font-size:16px;}
	div.itemAuthorBlock div.itemAuthorDetails h3.authorName a:hover {}
	div.itemAuthorBlock div.itemAuthorDetails p {}
	div.itemAuthorBlock div.itemAuthorDetails span.itemAuthorUrl {font-weight:bold;color:#555;}
	div.itemAuthorBlock div.itemAuthorDetails span.itemAuthorEmail {font-weight:bold;color:#555;}
	div.itemAuthorBlock div.itemAuthorDetails span.itemAuthorUrl a,
	div.itemAuthorBlock div.itemAuthorDetails span.itemAuthorEmail a {font-weight:normal;}

/* Author latest */
div.itemAuthorLatest {margin-bottom:16px;padding:0;}
	div.itemAuthorLatest h3 {}
	div.itemAuthorLatest ul {}
		div.itemAuthorLatest ul li {}
			div.itemAuthorLatest ul li a {}
			div.itemAuthorLatest ul li a:hover {}

/* Related by tag */
div.itemRelated {margin-bottom:16px;padding:0;} /* Add overflow-x:scroll; if you want to enable the scrolling features, as explained in item.php */
	div.itemRelated h3 {}
	div.itemRelated ul {}
		div.itemRelated ul li {}
		div.itemRelated ul li.k2ScrollerElement {float:left;overflow:hidden;border:1px solid #ddd;padding:4px;margin:0 4px 4px 0;background:#fff;} /* you need to insert this class in the related li element in item.php for this styling to take effect */
		div.itemRelated ul li.clr {clear:both;height:0;line-height:0;display:block;float:none;padding:0;margin:0;border:none;}
			a.itemRelTitle {}
			div.itemRelCat {}
				div.itemRelCat a {}
			div.itemRelAuthor {}
				div.itemRelAuthor a {}
			img.itemRelImg {}
			div.itemRelIntrotext {}
			div.itemRelFulltext {}
			div.itemRelMedia {}
			div.itemRelImageGallery {}

/* Video */
div.itemVideoBlock {margin:0 0 16px 0;padding:16px;background:#010101 url(/components/com_k2/images/videobg.gif) repeat-x bottom;color:#eee;}
	div.itemVideoBlock div.itemVideoEmbedded {text-align:center;} /* for embedded videos (not using AllVideos) */
	div.itemVideoBlock span.itemVideo {display:block;overflow:hidden;}
	div.itemVideoBlock span.itemVideoCaption {color:#eee;float:left;display:block;font-size:11px;font-weight:bold;width:60%;}
	div.itemVideoBlock span.itemVideoCredits {color:#eee;float:right;display:block;font-style:italic;font-size:11px;width:35%;text-align:right;}
	@media screen and ( max-width:600px ){
		div.itemVideoBlock span.itemVideoCaption,
		div.itemVideoBlock span.itemVideoCredits {float:none;text-align:center;width:auto;}
	}

/* Image Gallery */
div.itemImageGallery {margin:0 0 16px 0;padding:0;}

/* Article navigation */
div.itemNavigation {padding:8px;margin:0 0 24px 0;background:#fafafa;border-radius:4px;}
	div.itemNavigation span.itemNavigationTitle {color:#999;}
	div.itemNavigation a.itemPrevious {padding:0 12px;}
	div.itemNavigation a.itemNext {padding:0 12px;}

/* Comments */
div.itemComments {background:#fafafa;border:1px solid #ddd;border-radius:4px;padding:16px;}

	div.itemComments ul.itemCommentsList {margin:0 0 16px;padding:0;list-style:none;}
	div.itemComments ul.itemCommentsList li {display:block;padding:4px;margin:0 0 8px 0;border-bottom:1px solid #ddd;background:#fff;}
	div.itemComments ul.itemCommentsList li.authorResponse {background:#f5fdff;}
	div.itemComments ul.itemCommentsList li.unpublishedComment {background:#ffeaea;}
	div.itemComments ul.itemCommentsList li img {float:left;margin:4px 4px 4px 0;padding:4px;}
	div.itemComments ul.itemCommentsList li span.commentDate {padding:0 4px 0 0;margin:0 8px 0 0;border-right:1px solid #ccc;font-weight:bold;font-size:14px;}
	div.itemComments ul.itemCommentsList li span.commentAuthorName {font-weight:bold;font-size:14px;}
	div.itemComments ul.itemCommentsList li p {padding:4px 0;}
	div.itemComments ul.itemCommentsList li span.commentAuthorEmail {display:none;}
	div.itemComments ul.itemCommentsList li span.commentLink {float:right;margin-left:8px;}
	div.itemComments ul.itemCommentsList li span.commentLink a {font-size:11px;color:#999;text-decoration:underline;}
	div.itemComments ul.itemCommentsList li span.commentLink a:hover {font-size:11px;color:#555;text-decoration:underline;}

	div.itemComments ul.itemCommentsList li span.commentToolbar {display:block;clear:both;}
	div.itemComments ul.itemCommentsList li span.commentToolbar a {font-size:11px;color:#999;text-decoration:underline;margin-right:4px;}
	div.itemComments ul.itemCommentsList li span.commentToolbar a:hover {font-size:11px;color:#555;text-decoration:underline;}
	div.itemComments ul.itemCommentsList li span.commentToolbarLoading {background:url(/components/com_k2/images/loaders/search.gif) no-repeat 100% 50%;}

div.itemCommentsPagination {padding:4px;margin:0 0 24px 0;}
	/* Joomla 1.5 - 2.5 */
	div.itemCommentsPagination span.pagination {display:block;float:right;clear:both;}
	/* Joomla 3.x */
	div.itemCommentsPagination ul {text-align:center;}
	div.itemCommentsPagination ul li {display:inline-block;margin:0;padding:0;}
	div.itemCommentsPagination ul li a {display:inline-block;padding:4px 8px;margin:0 8px;border:1px solid #ddd;border-radius:4px;vertical-align:middle;background:#fff;text-decoration:none;}
	div.itemCommentsPagination ul li a:hover {background:#fafafa;cursor:pointer;}
	div.itemCommentsPagination ul li.active a {background:#fafafa;}
	div.itemCommentsPagination ul li a span {vertical-align:middle;}

div.itemCommentsForm h3 {margin:0;padding:0 0 4px 0;}
	div.itemCommentsForm p.itemCommentsFormNotes {border-top:2px solid #ccc;padding:8px 0;}
	div.itemCommentsForm form {margin:0;padding:0;width:100%;}
	div.itemCommentsForm form label.formComment,
	div.itemCommentsForm form label.formName,
	div.itemCommentsForm form label.formEmail,
	div.itemCommentsForm form label.formUrl,
	div.itemCommentsForm form label.formRecaptcha {display:block;margin:12px 0 0 2px;}
	div.itemCommentsForm form textarea.inputbox {display:block;width:100%;height:200px;margin:0;padding:8px;box-sizing:border-box;}
	div.itemCommentsForm form input.inputbox {display:block;width:100%;margin:0;padding:8px;line-height:150%;height:auto;box-sizing:border-box;}
	div.itemCommentsForm form input#submitCommentButton {display:block;margin:16px 0 0 0;padding:8px 16px;background:#2d96dd;color:#fff;border:0;border-radius:4px;font-size:16px;font-weight:bold;}
	div.itemCommentsForm form input#submitCommentButton:hover {background:#217dbb;}
	div.itemCommentsForm form span#formLog {margin:24px;padding:8px 12px;border-radius:4px;text-align:center;display:none;}
		div.itemCommentsForm form span#formLog.k2FormLogError {display:block;background:#f00;color:#fff;}
		div.itemCommentsForm form span#formLog.k2FormLogSuccess {display:block;background:#18ac00;color:#fff;}
	div.itemCommentsForm form .formLogLoading {background:url(/components/com_k2/images/loaders/generic.gif) no-repeat left center;}

div.itemCommentsLoginFirst {display:block;margin:24px;padding:8px 12px;background:#f00;color:#fff;border-radius:4px;}

/* "Report comment" form */
div.k2ReportCommentFormContainer {padding:8px;width:480px;margin:0 auto;}
	div.k2ReportCommentFormContainer blockquote {width:462px;background:#fafafa;border:1px solid #ddd;padding:8px;margin:0 0 8px 0;}
	div.k2ReportCommentFormContainer blockquote span.quoteIconLeft {font-style:italic;font-weight:bold;font-size:40px;color:#135CAE;line-height:30px;vertical-align:top;display:block;float:left;}
	div.k2ReportCommentFormContainer blockquote span.quoteIconRight {font-style:italic;font-weight:bold;font-size:40px;color:#135CAE;line-height:30px;vertical-align:top;display:block;float:right;}
	div.k2ReportCommentFormContainer blockquote span.theComment {font-style:italic;font-size:12px;font-weight:normal;color:#000;padding:0 4px;}
	div.k2ReportCommentFormContainer form label {display:block;font-weight:bold;}
	div.k2ReportCommentFormContainer form input,
	div.k2ReportCommentFormContainer form textarea {display:block;border:1px solid #ddd;font-size:12px;padding:2px;margin:0 0 8px 0;width:474px;}
	div.k2ReportCommentFormContainer form #recaptcha {margin-bottom:24px;}
	div.k2ReportCommentFormContainer form span#formLog {margin:24px;padding:8px 12px;background:#fafafa;border-radius:4px;text-align:center;display:none;}
	div.k2ReportCommentFormContainer form .formLogLoading {background:url(/components/com_k2/images/loaders/generic.gif) no-repeat left center;}

/* Back to top link */
div.itemBackToTop {text-align:right;}
	div.itemBackToTop a {text-decoration:underline;}
	div.itemBackToTop a:hover {text-decoration:underline;}



/*------------------------------------------------------------------------------
	Component - Itemlist view (category)
--------------------------------------------------------------------------------*/

div.itemListCategoriesBlock {}

/* --- Category block --- */
div.itemListCategory {background:#fafafa;border:1px solid #ddd;border-radius:4px;margin:0 0 24px 0;padding:8px;}
	span.catItemAddLink {display:block;padding:8px 0;margin:0 0 4px 0;border-bottom:1px dotted #ccc;text-align:right;}
	span.catItemAddLink a {padding:4px 16px;border:1px solid #ddd;background:#fafafa;text-decoration:none;}
	span.catItemAddLink a:hover {background:#ffffcc;}
	div.itemListCategory img {float:left;display:block;margin:0 8px 0 0;}
	div.itemListCategory h2 {}
	div.itemListCategory p {}

/* --- Sub-category block --- */
div.itemListSubCategories {}
	div.itemListSubCategories h3 {}
		div.subCategoryContainer {float:left;}
		div.subCategoryContainerLast {} /* this class is appended to the last container on each row of items (useful when you want to set 0 padding/margin to the last container) */
			div.subCategory {background:#fafafa;border:1px solid #ddd;margin:4px;padding:8px;}
				div.subCategory a.subCategoryImage,
				div.subCategory a.subCategoryImage:hover {text-align:center;display:block;}
				div.subCategory a.subCategoryImage img,
				div.subCategory a.subCategoryImage:hover img {margin:0 8px 0 0;}
				div.subCategory h2 {}
				div.subCategory h2 a {}
				div.subCategory h2 a:hover {}
				div.subCategory p {}

/* --- Item groups --- */
div.itemList {}
	div#itemListLeading {}
	div#itemListPrimary {}
	div#itemListSecondary {}
	div#itemListLinks {background:#fafafa;border:1px solid #ddd;margin:8px 0;padding:8px;}

		div.itemContainer {float:left;}
		div.itemContainerLast {} /* this class is appended to the last container on each row of items (useful when you want to set 0 padding/margin to the last container) */
		@media screen and ( max-width:600px ){
			div.itemContainer, div.subCategoryContainer {float:none;display:block;width:100%!important;}
		}

/* --- Item block for each item group --- */
div.catItemView {margin-bottom:48px;padding:4px;} /* this is the container for each K2 item on this view */

	/* Additional class appended to the element above for further styling per group item */
	div.groupLeading {}
	div.groupPrimary {}
	div.groupSecondary {}
	div.groupLinks {padding:0;margin:0;}

	div.catItemIsFeatured {} /* Attach a class for each featured item */

span.catItemEditLink {}
	span.catItemEditLink a {}
	span.catItemEditLink a:hover {}

div.catItemHeader {}
	div.catItemHeader span.catItemDateCreated {color:#999;font-size:11px;}
	div.catItemHeader h3.catItemTitle {padding:10px 0 4px 0;margin:0;}
	div.catItemHeader h3.catItemTitle span {}
	div.catItemHeader h3.catItemTitle span sup {font-size:12px;color:#CF1919;text-decoration:none;} /* superscript */
	div.catItemHeader span.catItemAuthor {display:block;padding:0;margin:0;}
	div.catItemHeader span.catItemAuthor a {}
	div.catItemHeader span.catItemAuthor a:hover {}

div.catItemRatingBlock {padding:8px 0;}
	div.catItemRatingBlock span {display:block;float:left;font-style:normal;padding:0 4px 0 0;margin:0;color:#999;}

div.catItemBody {padding:8px 0;margin:0;}

div.catItemImageBlock {padding:8px 0;margin:0 0 16px 0;}
	span.catItemImage {display:block;text-align:center;margin:0 0 8px 0;}
	span.catItemImage img {max-width:100%;height:auto;}

div.catItemIntroText {font-size:inherit;font-weight:normal;line-height:inherit;padding:4px 0 12px 0;}
	div.catItemIntroText img {}

div.catItemExtraFields,
div.genericItemExtraFields {margin:16px 0 0 0;padding:8px 0 0 0;border-top:1px dotted #ddd;}
	div.catItemExtraFields h4,
	div.genericItemExtraFields h4 {margin:0;padding:0 0 8px 0;}
	div.catItemExtraFields ul,
	div.genericItemExtraFields ul {margin:0;padding:0;list-style:none;}
	div.catItemExtraFields ul li,
	div.genericItemExtraFields ul li {display:block;}
	div.catItemExtraFields ul li span.catItemExtraFieldsLabel,
	div.genericItemExtraFields ul li span.genericItemExtraFieldsLabel {display:block;float:left;font-weight:bold;margin:0 4px 0 0;width:30%;}
	div.catItemExtraFields ul li span.catItemExtraFieldsValue {}

div.catItemLinks {margin:0 0 16px 0;padding:0;}

div.catItemHitsBlock {padding:4px 0;}
	span.catItemHits {}

div.catItemCategory {padding:4px 0;}
	div.catItemCategory span {font-weight:bold;padding:0 4px 0 0;}
	div.catItemCategory a {}

div.catItemTagsBlock {padding:4px 0;}
	div.catItemTagsBlock span {font-weight:bold;padding:0 4px 0 0;}
	div.catItemTagsBlock ul.catItemTags {list-style:none;padding:0;margin:0;display:inline;}
	div.catItemTagsBlock ul.catItemTags li {display:inline;list-style:none;padding:0 4px 0 0;margin:0;text-align:center;}
	div.catItemTagsBlock ul.catItemTags li a:before {content:"#";}
	div.catItemTagsBlock ul.catItemTags li a {}
	div.catItemTagsBlock ul.catItemTags li a:hover {}

div.catItemAttachmentsBlock {padding:4px;border-bottom:1px dotted #ccc;}
	div.catItemAttachmentsBlock span {font-weight:bold;color:#555;padding:0 4px 0 0;}
	div.catItemAttachmentsBlock ul.catItemAttachments {list-style:none;padding:0;margin:0;display:inline;}
	div.catItemAttachmentsBlock ul.catItemAttachments li {display:inline;list-style:none;padding:0 4px;margin:0;text-align:center;}
	div.catItemAttachmentsBlock ul.catItemAttachments li a {}
	div.catItemAttachmentsBlock ul.catItemAttachments li a:hover {}
	div.catItemAttachmentsBlock ul.catItemAttachments li span {font-size:10px;color:#999;font-weight:normal;}

/* Video */
div.catItemVideoBlock {margin:0 0 16px 0;padding:16px;background:#010101 url(/components/com_k2/images/videobg.gif) repeat-x bottom;}
	div.catItemVideoBlock div.catItemVideoEmbedded {text-align:center;} /* for embedded videos (not using AllVideos) */
	div.catItemVideoBlock span.catItemVideo {display:block;}

/* Image Gallery */
div.catItemImageGallery {margin:0 0 16px 0;padding:0;}

/* Anchor link to comments */
div.catItemCommentsLink {display:inline;margin:0 8px 0 0;padding:0 8px 0 0;border-right:1px solid #ccc;}
	div.catItemCommentsLink a {}
	div.catItemCommentsLink a:hover {}

/* Read more link */
div.catItemReadMore {display:inline;}
	div.catItemReadMore a {}
	div.catItemReadMore a:hover {}

/* Modified date */
span.catItemDateModified {display:block;text-align:right;padding:4px;margin:4px 0;color:#999;border-top:1px solid #ddd;}



/*------------------------------------------------------------------------------
	Component - Itemlist view (user)
--------------------------------------------------------------------------------*/

/* User info block */
div.userView {}
	div.userBlock {background:#fafafa;border:1px solid #ddd;border-radius:4px;margin:0 0 24px 0;padding:8px;}

		div.userBlock img {display:block;float:left;background:#fff;padding:4px;border:1px solid #ddd;margin:0 8px 0 0;border-radius:50%;}
		div.userBlock h2 {}
		div.userBlock div.userDescription {padding:4px 0;}
		div.userBlock div.userAdditionalInfo {padding:4px 0;margin:8px 0 0 0;}
			span.userURL {font-weight:bold;color:#555;display:block;}
			span.userEmail {font-weight:bold;color:#555;display:block;}

		div.userItemList {}

/* User items */
div.userItemView {margin-bottom:48px;} /* this is the item container for this view */
div.userItemIsFeatured {} /* Attach a class for each featured item */

div.userItemViewUnpublished {opacity:0.9;border:4px dashed #ccc;background:#fffff2;padding:8px;margin:8px 0;}

span.userItemEditLink {}
	span.userItemEditLink a {}
	span.userItemEditLink a:hover {}

div.userItemHeader {}
	div.userItemHeader span.userItemDateCreated {color:#999;font-size:11px;}
	div.userItemHeader h3.userItemTitle {padding:10px 0 4px 0;margin:0;}
	div.userItemHeader h3.userItemTitle span sup {font-size:12px;color:#CF1919;text-decoration:none;} /* "Unpublished" presented in superscript */

div.userItemBody {padding:8px 0;margin:0;}

div.userItemImageBlock {padding:0;margin:0;float:left;}
	span.userItemImage {display:block;text-align:center;margin:0 8px 8px 0;}
	span.userItemImage img {max-width:100%;height:auto;}

div.userItemIntroText {font-size:inherit;font-weight:normal;line-height:inherit;padding:4px 0 12px 0;}
	div.userItemIntroText img {}

div.userItemLinks {margin:0 0 16px 0;padding:0;}

div.userItemCategory {padding:4px 0;}
	div.userItemCategory span {font-weight:bold;color:#555;padding:0 4px 0 0;}
	div.userItemCategory a {}

div.userItemTagsBlock {padding:4px 0;}
	div.userItemTagsBlock span {font-weight:bold;color:#555;padding:0 4px 0 0;}
	div.userItemTagsBlock ul.userItemTags {list-style:none;padding:0;margin:0;display:inline;}
	div.userItemTagsBlock ul.userItemTags li {display:inline;list-style:none;padding:0 4px 0 0;margin:0;text-align:center;}
	div.userItemTagsBlock ul.userItemTags li a:before {content:"#";}
	div.userItemTagsBlock ul.userItemTags li a {}
	div.userItemTagsBlock ul.userItemTags li a:hover {}

/* Anchor link to comments */
div.userItemCommentsLink {display:inline;margin:0 8px 0 0;padding:0 8px 0 0;border-right:1px solid #ccc;}
	div.userItemCommentsLink a {}
	div.userItemCommentsLink a:hover {}

/* Read more link */
div.userItemReadMore {display:inline;}
	div.userItemReadMore a {}
	div.userItemReadMore a:hover {}



/*------------------------------------------------------------------------------
	Component - Itemlist view (tag)
--------------------------------------------------------------------------------*/
div.tagView {}

div.tagItemList {}

div.tagItemView {margin-bottom:48px;} /* this is the item container for this view */

div.tagItemHeader {}
	div.tagItemHeader span.tagItemDateCreated {color:#999;font-size:11px;}
	div.tagItemHeader h2.tagItemTitle {padding:10px 0 4px 0;margin:0;}

div.tagItemBody {padding:8px 0;margin:0;}

div.tagItemImageBlock {padding:0;margin:0;float:left;}
	span.tagItemImage {display:block;text-align:center;margin:0 8px 8px 0;}
	span.tagItemImage img {max-width:100%;height:auto;}

div.tagItemIntroText {font-size:inherit;font-weight:normal;line-height:inherit;padding:4px 0 12px 0;}
	div.tagItemIntroText img {}

	div.tagItemExtraFields {}
		div.tagItemExtraFields h4 {}
		div.tagItemExtraFields ul {}
			div.tagItemExtraFields ul li {}
				div.tagItemExtraFields ul li span.tagItemExtraFieldsLabel {}
				div.tagItemExtraFields ul li span.tagItemExtraFieldsValue {}

	div.tagItemCategory {display:inline;margin:0 8px 0 0;padding:0 8px 0 0;border-right:1px solid #ccc;}
		div.tagItemCategory span {font-weight:bold;color:#555;padding:0 4px 0 0;}
		div.tagItemCategory a {}

/* Read more link */
div.tagItemReadMore {display:inline;}
	div.tagItemReadMore a {}
	div.tagItemReadMore a:hover {}



/*------------------------------------------------------------------------------
	Component - Itemlist view (generic)
--------------------------------------------------------------------------------*/
div.genericView {}

div.genericItemList {}

div.genericItemView {margin-bottom:48px;} /* this is the item container for this view */

div.genericItemHeader {}
	div.genericItemHeader span.genericItemDateCreated {color:#999;font-size:11px;}
	div.genericItemHeader h2.genericItemTitle {padding:10px 0 4px 0;margin:0;}

div.genericItemBody {padding:8px 0;margin:0;}

div.genericItemImageBlock {padding:0;margin:0;float:left;}
	span.genericItemImage {display:block;text-align:center;margin:0 8px 8px 0;}
	span.genericItemImage img {max-width:100%;height:auto;}

div.genericItemIntroText {font-size:inherit;font-weight:normal;line-height:inherit;padding:4px 0 12px 0;}
	div.genericItemIntroText img {}

	div.genericItemExtraFields {}
		div.genericItemExtraFields h4 {}
		div.genericItemExtraFields ul {}
			div.genericItemExtraFields ul li {}
				div.genericItemExtraFields ul li span.genericItemExtraFieldsLabel {}
				div.genericItemExtraFields ul li span.genericItemExtraFieldsValue {}

	div.genericItemCategory {display:inline;margin:0 8px 0 0;padding:0 8px 0 0;border-right:1px solid #ccc;}
		div.genericItemCategory span {font-weight:bold;color:#555;padding:0 4px 0 0;}
		div.genericItemCategory a {}

/* Read more link */
div.genericItemReadMore {display:inline;}
	div.genericItemReadMore a {}
	div.genericItemReadMore a:hover {}

/* No results found message */
div#genericItemListNothingFound {padding:40px;text-align:center;}
	div#genericItemListNothingFound p {font-size:20px;color:#999;}

/* --- Google Search (use Firebug or similar tools to inspect the generated HTML, then style accordingly --- */
#k2GoogleSearchContainer .gsc-control {width:auto !important;}
#k2GoogleSearchContainer .gsc-control .gsc-above-wrapper-area,
#k2GoogleSearchContainer .gsc-control .gsc-resultsHeader,
#k2GoogleSearchContainer .gsc-control .gsc-url-bottom {display:none !important;} /* Hide unneeded elements of the results page */



/*------------------------------------------------------------------------------
	Component - Latest view
--------------------------------------------------------------------------------*/

div.latestItemsContainer {float:left;}
@media screen and ( max-width:600px ){
	div.latestItemsContainer {float:none;display:block;width:100%!important;}
}

/* Category info block */
div.latestItemsCategory {background:#fafafa;border:1px solid #ddd;border-radius:4px;margin:0 8px 24px 0;padding:8px;}
	div.latestItemsCategoryImage {text-align:center;}
	div.latestItemsCategoryImage img {margin:0 8px 0 0;}
div.latestItemsCategory h2 {}
div.latestItemsCategory p {}

/* User info block */
div.latestItemsUser {background:#fafafa;border:1px solid #ddd;border-radius:4px;margin:0 8px 24px 0;padding:8px;}
	div.latestItemsUser img {display:block;float:left;background:#fff;padding:4px;border:1px solid #ddd;margin:0 8px 0 0;border-radius:50%;}
	div.latestItemsUser h2 {}
	div.latestItemsUser p.latestItemsUserDescription {padding:4px 0;}
	div.latestItemsUser p.latestItemsUserAdditionalInfo {padding:4px 0;margin:8px 0 0 0;}
		span.latestItemsUserURL {font-weight:bold;color:#555;display:block;}
		span.latestItemsUserEmail {font-weight:bold;color:#555;display:block;}

/* Latest items list */
div.latestItemList {padding:0 8px 8px 0;}

div.latestItemView {} /* this is the item container for this view */

div.latestItemHeader {}
	div.latestItemHeader h3.latestItemTitle {padding:10px 0 4px 0;margin:0;}

span.latestItemDateCreated {color:#999;font-size:11px;}

div.latestItemBody {padding:8px 0;margin:0;}

div.latestItemImageBlock {padding:0;margin:0;float:left;}
	span.latestItemImage {display:block;text-align:center;margin:0 8px 8px 0;}
	span.latestItemImage img {max-width:100%;height:auto;}
	@media screen and ( max-width:600px ){
		div.latestItemImageBlock {float:none;display:block;}
	}

div.latestItemIntroText {font-size:inherit;font-weight:normal;line-height:inherit;padding:4px 0 12px 0;}
	div.latestItemIntroText img {}

div.latestItemLinks {margin:0 0 16px 0;padding:0;}

div.latestItemCategory {padding:4px 0;}
	div.latestItemCategory span {font-weight:bold;color:#555;padding:0 4px 0 0;}
	div.latestItemCategory a {}

div.latestItemTagsBlock {padding:4px 0;}
	div.latestItemTagsBlock span {font-weight:bold;color:#555;padding:0 4px 0 0;}
	div.latestItemTagsBlock ul.latestItemTags {list-style:none;padding:0;margin:0;display:inline;}
	div.latestItemTagsBlock ul.latestItemTags li {display:inline;list-style:none;padding:0 4px 0 0;margin:0;text-align:center;}
	div.latestItemTagsBlock ul.latestItemTags li a:before {content:"#";}
	div.latestItemTagsBlock ul.latestItemTags li a {}
	div.latestItemTagsBlock ul.latestItemTags li a:hover {}

/* Video */
div.latestItemVideoBlock {margin:0 0 16px 0;padding:16px;background:#010101 url(/components/com_k2/images/videobg.gif) repeat-x bottom;}
	div.latestItemVideoBlock span.latestItemVideo {display:block;}

/* Anchor link to comments */
div.latestItemCommentsLink {display:inline;margin:0 8px 0 0;padding:0 8px 0 0;border-right:1px solid #ccc;}
	div.latestItemCommentsLink a {}
	div.latestItemCommentsLink a:hover {}

/* Read more link */
div.latestItemReadMore {display:inline;}
	div.latestItemReadMore a {}
	div.latestItemReadMore a:hover {}

/* Items presented in a list */
h2.latestItemTitleList {padding:2px 0;margin:8px 0 2px 0;border-bottom:1px dotted #ccc;}



/*------------------------------------------------------------------------------
	Component - Register & profile page views (register.php & profile.php)
--------------------------------------------------------------------------------*/
.k2AccountPage {}
.k2AccountPage table {}
.k2AccountPage table tr th {}
.k2AccountPage table tr td {}
.k2AccountPage table tr td label {white-space:nowrap;}
img.k2AccountPageImage {border:4px solid #ddd;margin:10px 0;padding:0;display:block;}
.k2AccountPage div.k2AccountPageNotice {padding:8px;}
.k2AccountPage div.k2AccountPageUpdate {border-top:1px dotted #ddd;margin:8px 0;padding:8px;text-align:right;}

.k2AccountPage th.k2ProfileHeading {text-align:left;font-size:18px;padding:8px;background:#f6f6f6;}
.k2AccountPage td#userAdminParams {padding:0;margin:0;}
.k2AccountPage table.admintable td.key,
.k2AccountPage table.admintable td.paramlist_key {background:#f6f6f6;border-bottom:1px solid #e9e9e9;border-right:1px solid #e9e9e9;color:#666;font-weight:bold;text-align:right;font-size:11px;width:140px;}

/* Profile edit */
.k2AccountPage table.admintable {}
.k2AccountPage table.admintable tr td {}
.k2AccountPage table.admintable tr td span {}
.k2AccountPage table.admintable tr td span label {}



/*------------------------------------------------------------------------------
	Modules - mod_k2_comments
--------------------------------------------------------------------------------*/

/* Latest Comments */
div.k2LatestCommentsBlock {}
div.k2LatestCommentsBlock ul {}
div.k2LatestCommentsBlock ul li {}
div.k2LatestCommentsBlock ul li.lastItem {}
div.k2LatestCommentsBlock ul li a.lcAvatar img {}
div.k2LatestCommentsBlock ul li a {}
div.k2LatestCommentsBlock ul li a:hover {}
div.k2LatestCommentsBlock ul li span.lcComment {}
div.k2LatestCommentsBlock ul li span.lcUsername {}
div.k2LatestCommentsBlock ul li span.lcCommentDate {color:#999;}
div.k2LatestCommentsBlock ul li span.lcItemTitle {}
div.k2LatestCommentsBlock ul li span.lcItemCategory {}

/* Top Commenters */
div.k2TopCommentersBlock {}
div.k2TopCommentersBlock ul {}
div.k2TopCommentersBlock ul li {}
div.k2TopCommentersBlock ul li.lastItem {}
div.k2TopCommentersBlock ul li a.tcAvatar img {}
div.k2TopCommentersBlock ul li a.tcLink {}
div.k2TopCommentersBlock ul li a.tcLink:hover {}
div.k2TopCommentersBlock ul li span.tcUsername {}
div.k2TopCommentersBlock ul li span.tcCommentsCounter {}
div.k2TopCommentersBlock ul li a.tcLatestComment {}
div.k2TopCommentersBlock ul li a.tcLatestComment:hover {}
div.k2TopCommentersBlock ul li span.tcLatestCommentDate {color:#999;}



/*------------------------------------------------------------------------------
	Modules - mod_k2_content
--------------------------------------------------------------------------------*/

div.k2ItemsBlock {}

div.k2ItemsBlock p.modulePretext {}

div.k2ItemsBlock ul {}
div.k2ItemsBlock ul li {}
div.k2ItemsBlock ul li a {}
div.k2ItemsBlock ul li a:hover {}
div.k2ItemsBlock ul li.lastItem {}

div.k2ItemsBlock ul li a.moduleItemTitle {}
div.k2ItemsBlock ul li a.moduleItemTitle:hover {}

div.k2ItemsBlock ul li div.moduleItemAuthor {}
div.k2ItemsBlock ul li div.moduleItemAuthor a {}
div.k2ItemsBlock ul li div.moduleItemAuthor a:hover {}

div.k2ItemsBlock ul li a.moduleItemAuthorAvatar img {}

div.k2ItemsBlock ul li div.moduleItemIntrotext {display:block;padding:4px 0;}
div.k2ItemsBlock ul li div.moduleItemIntrotext a.moduleItemImage img {float:right;margin:2px 0 4px 4px;padding:0;}

div.k2ItemsBlock ul li div.moduleItemExtraFields {}
	div.moduleItemExtraFields ul {}
	div.moduleItemExtraFields ul li {}
	div.moduleItemExtraFields ul li span.moduleItemExtraFieldsLabel {display:block;float:left;font-weight:bold;margin:0 4px 0 0;width:30%;}
	div.moduleItemExtraFields ul li span.moduleItemExtraFieldsValue {}

div.k2ItemsBlock ul li div.moduleItemVideo {}
div.k2ItemsBlock ul li div.moduleItemVideo span.moduleItemVideoCaption {}
div.k2ItemsBlock ul li div.moduleItemVideo span.moduleItemVideoCredits {}

div.k2ItemsBlock ul li span.moduleItemDateCreated {}

div.k2ItemsBlock ul li a.moduleItemCategory {}

div.k2ItemsBlock ul li div.moduleItemTags {}
div.k2ItemsBlock ul li div.moduleItemTags b {}
div.k2ItemsBlock ul li div.moduleItemTags a {padding:0 2px;}
div.k2ItemsBlock ul li div.moduleItemTags a:hover {}

div.k2ItemsBlock ul li div.moduleAttachments {}

div.k2ItemsBlock ul li a.moduleItemComments {border-right:1px solid #ccc;padding:0 4px 0 0;margin:0 8px 0 0;}
div.k2ItemsBlock ul li a.moduleItemComments:hover {}
div.k2ItemsBlock ul li span.moduleItemHits {border-right:1px solid #ccc;padding:0 4px 0 0;margin:0 8px 0 0;}
div.k2ItemsBlock ul li a.moduleItemReadMore {}
div.k2ItemsBlock ul li a.moduleItemReadMore:hover {}

div.k2ItemsBlock a.moduleCustomLink {}
div.k2ItemsBlock a.moduleCustomLink:hover {}



/*------------------------------------------------------------------------------
	Modules - mod_k2_tools
--------------------------------------------------------------------------------*/

/* --- Archives --- */
div.k2ArchivesBlock {}
div.k2ArchivesBlock ul {}
div.k2ArchivesBlock ul li {}
div.k2ArchivesBlock ul li a {}
div.k2ArchivesBlock ul li a:hover {}

/* --- Authors --- */
div.k2AuthorsListBlock {}
div.k2AuthorsListBlock ul {}
div.k2AuthorsListBlock ul li {}
div.k2AuthorsListBlock ul li a.abAuthorAvatar img {}
div.k2AuthorsListBlock ul li a.abAuthorName {}
div.k2AuthorsListBlock ul li a.abAuthorName:hover {}
div.k2AuthorsListBlock ul li a.abAuthorLatestItem {display:block;clear:both;}
div.k2AuthorsListBlock ul li a.abAuthorLatestItem:hover {}
div.k2AuthorsListBlock ul li span.abAuthorCommentsCount {}

/* --- Breadcrumbs --- */
div.k2BreadcrumbsBlock {}
div.k2BreadcrumbsBlock span.bcTitle {padding:0 4px 0 0;color:#999;}
div.k2BreadcrumbsBlock a {}
div.k2BreadcrumbsBlock a:hover {}
div.k2BreadcrumbsBlock span.bcSeparator {padding:0 4px;font-size:14px;}

/* --- Calendar --- */
div.k2CalendarBlock {height:190px;margin-bottom:8px;} /* use this height value so that the calendar height won't change on Month change via ajax */
div.k2CalendarLoader {background:#fff url(/components/com_k2/images/loaders/calendar.gif) no-repeat 50% 50%;}
table.calendar {margin:0 auto;background:#fff;border-collapse:collapse;}
table.calendar tr td {text-align:center;vertical-align:middle;padding:2px;border:1px solid #f4f4f4;background:#fff;}
table.calendar tr td.calendarNavMonthPrev {background:#fafafa;text-align:left;}
table.calendar tr td.calendarNavMonthPrev a {font-size:20px;text-decoration:none;}
table.calendar tr td.calendarNavMonthPrev a:hover {font-size:20px;text-decoration:none;}
table.calendar tr td.calendarCurrentMonth {background:#fafafa;}
table.calendar tr td.calendarNavMonthNext {background:#fafafa;text-align:right;}
table.calendar tr td.calendarNavMonthNext a {font-size:20px;text-decoration:none;}
table.calendar tr td.calendarNavMonthNext a:hover {font-size:20px;text-decoration:none;}
table.calendar tr td.calendarDayName {background:#e9e9e9;font-size:11px;width:14.2%;}
table.calendar tr td.calendarDateEmpty {background:#fbfbfb;}
table.calendar tr td.calendarDate {}
table.calendar tr td.calendarDateLinked {padding:0;}
table.calendar tr td.calendarDateLinked a {display:block;padding:2px;text-decoration:none;background:#fafafa;}
table.calendar tr td.calendarDateLinked a:hover {display:block;background:#135cae;color:#fff;padding:2px;text-decoration:none;}
table.calendar tr td.calendarToday {background:#135cae;color:#fff;}
table.calendar tr td.calendarTodayLinked {background:#135cae;color:#fff;padding:0;}
table.calendar tr td.calendarTodayLinked a {display:block;padding:2px;color:#fff;text-decoration:none;}
table.calendar tr td.calendarTodayLinked a:hover {display:block;background:#BFD9FF;padding:2px;text-decoration:none;}

/* --- Category Tree Select Box --- */
div.k2CategorySelectBlock {}
div.k2CategorySelectBlock form select {width:auto;}
div.k2CategorySelectBlock form select option {}

/* --- Category List/Menu --- */
div.k2CategoriesListBlock {}
div.k2CategoriesListBlock ul {}
div.k2CategoriesListBlock ul li {}
div.k2CategoriesListBlock ul li a {}
div.k2CategoriesListBlock ul li a:hover {}
div.k2CategoriesListBlock ul li a span.catTitle {padding-right:4px;}
div.k2CategoriesListBlock ul li a span.catCounter {}
div.k2CategoriesListBlock ul li a:hover span.catTitle {}
div.k2CategoriesListBlock ul li a:hover span.catCounter {}
div.k2CategoriesListBlock ul li.activeCategory {}
div.k2CategoriesListBlock ul li.activeCategory a {font-weight:bold;}

	/* Root level (0) */
	ul.level0 {}
	ul.level0 li {}
	ul.level0 li a {}
	ul.level0 li a:hover {}
	ul.level0 li a span {}
	ul.level0 li a:hover span {}

		/* First level (1) */
		ul.level1 {}
		ul.level1 li {}
		ul.level1 li a {}
		ul.level1 li a:hover {}
		ul.level1 li a span {}
		ul.level1 li a:hover span {}

			/* n level (n) - like the above... */

/* --- Search Box --- */
div.k2SearchBlock {position:relative;}
div.k2SearchBlock form {}
div.k2SearchBlock form input.inputbox {}
div.k2SearchBlock form input.button {}
div.k2SearchBlock form input.k2SearchLoading {background:url(/components/com_k2/images/loaders/search.gif) no-repeat 100% 50%;}
div.k2SearchBlock div.k2LiveSearchResults {display:none;background:#fff;position:absolute;z-index:99;border:1px solid #ddd;margin-top:-1px;}
	/* Live search results (fetched via ajax) */
	div.k2SearchBlock div.k2LiveSearchResults ul.liveSearchResults {list-style:none;margin:0;padding:0;}
	div.k2SearchBlock div.k2LiveSearchResults ul.liveSearchResults li {border:none;margin:0;padding:0;}
	div.k2SearchBlock div.k2LiveSearchResults ul.liveSearchResults li a {display:block;padding:1px 2px;border-top:1px dotted #ddd;}
	div.k2SearchBlock div.k2LiveSearchResults ul.liveSearchResults li a:hover {background:#fffff0;}

/* --- Tag Cloud --- */
div.k2TagCloudBlock {padding:8px 0;}
div.k2TagCloudBlock a {padding:4px;float:left;display:block;}
div.k2TagCloudBlock a:hover {padding:4px;float:left;display:block;background:#135cae;color:#fff;text-decoration:none;}

/* --- Custom Code --- */
div.k2CustomCodeBlock {}



/*------------------------------------------------------------------------------
	Modules - mod_k2_user (mod_k2_login is removed since v2.6.x)
--------------------------------------------------------------------------------*/

div.k2LoginBlock {}
	div.k2LoginBlock p.preText {}

	div.k2LoginBlock fieldset.input {margin:0;padding:0 0 8px 0;}
	div.k2LoginBlock fieldset.input p {margin:0;padding:0 0 4px 0;}
	div.k2LoginBlock fieldset.input p label {display:block;}
	div.k2LoginBlock fieldset.input p input {display:block;}
	div.k2LoginBlock fieldset.input p#form-login-remember label,
	div.k2LoginBlock fieldset.input p#form-login-remember input {display:inline;}
	div.k2LoginBlock fieldset.input input.button {}

	div.k2LoginBlock ul {}
	div.k2LoginBlock ul li {}

	div.k2LoginBlock p.postText {}

div.k2UserBlock {}
	div.k2UserBlock p.ubGreeting {border-bottom:1px dotted #ccc;}
	div.k2UserBlock div.k2UserBlockDetails a.ubAvatar img {}
	div.k2UserBlock div.k2UserBlockDetails span.ubName {display:block;font-weight:bold;font-size:14px;}
	div.k2UserBlock div.k2UserBlockDetails span.ubCommentsCount {}

	div.k2UserBlock ul.k2UserBlockActions {}
		div.k2UserBlock ul.k2UserBlockActions li {}
		div.k2UserBlock ul.k2UserBlockActions li a {}
		div.k2UserBlock ul.k2UserBlockActions li a:hover {}

	div.k2UserBlock ul.k2UserBlockRenderedMenu {}
		div.k2UserBlock ul.k2UserBlockRenderedMenu li {}
		div.k2UserBlock ul.k2UserBlockRenderedMenu li a {}
		div.k2UserBlock ul.k2UserBlockRenderedMenu li a:hover {}
		div.k2UserBlock ul.k2UserBlockRenderedMenu li ul {} /* 2nd level ul */
		div.k2UserBlock ul.k2UserBlockRenderedMenu li ul li {}
		div.k2UserBlock ul.k2UserBlockRenderedMenu li ul li a {}
		div.k2UserBlock ul.k2UserBlockRenderedMenu li ul ul {} /* 3rd level ul (and so on...) */
		div.k2UserBlock ul.k2UserBlockRenderedMenu li ul ul li {}
		div.k2UserBlock ul.k2UserBlockRenderedMenu li ul ul li a {}

	div.k2UserBlock form {}
	div.k2UserBlock form input.ubLogout {}



/*------------------------------------------------------------------------------
	Modules - mod_k2_users
--------------------------------------------------------------------------------*/

div.k2UsersBlock {}
div.k2UsersBlock ul {}
div.k2UsersBlock ul li {}
div.k2UsersBlock ul li.lastItem {}
div.k2UsersBlock ul li a.ubUserAvatar img {}
div.k2UsersBlock ul li a.ubUserName {}
div.k2UsersBlock ul li a.ubUserName:hover {}
div.k2UsersBlock ul li div.ubUserDescription {}
div.k2UsersBlock ul li div.ubUserAdditionalInfo {}
	a.ubUserFeedIcon,
	a.ubUserFeedIcon:hover {display:inline-block;margin:0 2px 0 0;padding:0;font-size:15px;}
	a.ubUserFeedIcon span,
	a.ubUserFeedIcon:hover span {display:none;}
	a.ubUserURL,
	a.ubUserURL:hover {display:inline-block;margin:0 2px 0 0;padding:0;font-size:15px;}
	a.ubUserURL span,
	a.ubUserURL:hover span {display:none;}
	span.ubUserEmail {display:inline-block;margin:0 2px 0 0;padding:0;overflow:hidden;font-size:15px;}
	span.ubUserEmail a {display:inline-block;margin:0;padding:0;width:16px;height:16px;text-indent:-9999px;}

div.k2UsersBlock ul li h3 {clear:both;margin:8px 0 0 0;padding:0;}
div.k2UsersBlock ul li ul.ubUserItems {}
div.k2UsersBlock ul li ul.ubUserItems li {}



/* --- END --- */";s:6:"output";s:0:"";}