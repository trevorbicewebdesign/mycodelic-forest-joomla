<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";O:24:"Joomla\CMS\Http\Response":3:{s:4:"code";i:200;s:7:"headers";a:24:{s:23:"Content-Security-Policy";s:54:"default-src 'none'; style-src 'unsafe-inline'; sandbox";s:25:"Strict-Transport-Security";s:16:"max-age=31536000";s:22:"X-Content-Type-Options";s:7:"nosniff";s:15:"X-Frame-Options";s:4:"deny";s:16:"X-XSS-Protection";s:13:"1; mode=block";s:4:"ETag";s:42:""5e39bf2b1818800573167e1be650fd4fbb2b9abf"";s:12:"Content-Type";s:25:"text/plain; charset=utf-8";s:13:"Cache-Control";s:11:"max-age=300";s:16:"X-Geo-Block-List";s:0:"";s:19:"X-GitHub-Request-Id";s:32:"D282:5333:12F9FF:13E254:5A640C70";s:14:"Content-Length";s:4:"3659";s:13:"Accept-Ranges";s:5:"bytes";s:4:"Date";s:29:"Sun, 21 Jan 2018 03:43:45 GMT";s:3:"Via";s:11:"1.1 varnish";s:10:"Connection";s:10:"keep-alive";s:11:"X-Served-By";s:17:"cache-ord1747-ORD";s:7:"X-Cache";s:4:"MISS";s:12:"X-Cache-Hits";s:1:"0";s:7:"X-Timer";s:28:"S1516506226.696056,VS0,VE102";s:4:"Vary";s:29:"Authorization,Accept-Encoding";s:27:"Access-Control-Allow-Origin";s:1:"*";s:19:"X-Fastly-Request-ID";s:40:"a1a51ab4027fbb3a1d8894c09150369fb1d9a86d";s:7:"Expires";s:29:"Sun, 21 Jan 2018 03:48:45 GMT";s:10:"Source-Age";s:1:"0";}s:4:"body";s:3659:"<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_joomlaupdate
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('bootstrap.tooltip');

$twofactormethods = JAuthenticationHelper::getTwoFactorMethods();

?>
<div class="alert alert-warning">
	<h4 class="alert-heading">
		<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_UPLOAD_CAPTIVE_INTRO_HEAD'); ?>
	</h4>
	<p>
		<?php echo JText::sprintf('COM_JOOMLAUPDATE_VIEW_UPLOAD_CAPTIVE_INTRO_BODY', JFactory::getConfig()->get('sitename')); ?>
	</p>
</div>

<hr/>

<form action="<?php echo JRoute::_('index.php', true); ?>" method="post" id="form-login" class="form-inline center">
	<fieldset class="loginform">
		<div class="control-group">
			<div class="controls">
				<div class="input-prepend input-append">
					<span class="add-on">
						<span class="icon-user hasTooltip" title="<?php echo JText::_('JGLOBAL_USERNAME'); ?>" aria-hidden="true"></span>
						<label for="mod-login-username" class="element-invisible">
							<?php echo JText::_('JGLOBAL_USERNAME'); ?>
						</label>
					</span>
					<input name="username" tabindex="1" id="mod-login-username" type="text" class="input-medium" placeholder="<?php echo JText::_('JGLOBAL_USERNAME'); ?>" size="15" autofocus="true" />
				</div>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<div class="input-prepend input-append">
					<span class="add-on">
						<span class="icon-lock hasTooltip" title="<?php echo JText::_('JGLOBAL_PASSWORD'); ?>" aria-hidden="true"></span>
						<label for="mod-login-password" class="element-invisible">
							<?php echo JText::_('JGLOBAL_PASSWORD'); ?>
						</label>
					</span>
					<input name="passwd" tabindex="2" id="mod-login-password" type="password" class="input-medium" placeholder="<?php echo JText::_('JGLOBAL_PASSWORD'); ?>" size="15"/>
				</div>
			</div>
		</div>
		<?php if (count($twofactormethods) > 1) : ?>
			<div class="control-group">
				<div class="controls">
					<div class="input-prepend input-append">
						<span class="add-on">
							<span class="icon-star hasTooltip" title="<?php echo JText::_('JGLOBAL_SECRETKEY'); ?>" aria-hidden="true"></span>
							<label for="mod-login-secretkey" class="element-invisible">
								<?php echo JText::_('JGLOBAL_SECRETKEY'); ?>
							</label>
						</span>
						<input name="secretkey" autocomplete="off" tabindex="3" id="mod-login-secretkey" type="text" class="input-medium" placeholder="<?php echo JText::_('JGLOBAL_SECRETKEY'); ?>" size="15"/>
						<span class="btn width-auto hasTooltip" title="<?php echo JText::_('JGLOBAL_SECRETKEY_HELP'); ?>">
							<span class="icon-help" aria-hidden="true"></span>
						</span>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="control-group">
			<div class="controls">
				<div class="btn-group">
					<a tabindex="4" class="btn btn-danger" href="index.php?option=com_joomlaupdate">
						<span class="icon-cancel icon-white" aria-hidden="true"></span> <?php echo JText::_('JCANCEL'); ?>
					</a>
				</div>
				<div class="btn-group">
					<button tabindex="5" class="btn btn-primary">
						<span class="icon-play icon-white" aria-hidden="true"></span> <?php echo JText::_('COM_INSTALLER_INSTALL_BUTTON'); ?>
					</button>
				</div>
			</div>
		</div>

		<input type="hidden" name="option" value="com_joomlaupdate"/>
		<input type="hidden" name="task" value="update.confirm"/>
		<?php echo JHtml::_('form.token'); ?>
	</fieldset>
</form>
";}s:6:"output";s:0:"";}