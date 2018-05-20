<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
<title><?php echo $this->params->get('sitename'); ?> - Site is in Test Mode</title>
<link rel="stylesheet" href="<?php echo $this->base_path; ?>themes/default/css/theme.css" type="text/css" />
</head>
<body id="bd">
	<div id="frame">
	<div class="top">
	<div class="bottom">
	<div class="outline">
	<a href="<?php echo $this->client_url; ?>" title="<?php echo $this->client_name; ?>"><img src="<?php echo $this->base_path; ?>themes/default/images/logo.png" alt="<?php echo $this->client_name; ?>"></a>
	<h1><?php echo $this->params->get('sitename'); ?></h1>
	<p><?php echo $this->params->get( 'testmode_message') ?></p>
	<div class="login_fields">
		<div style="color:#e37474;"><?php echo $this->params->get( 'testmode_error') ?></div>
		<form action="index.php?option=com_testmode&task=loginTestMode" method="post" name="login" id="form-login">
			<fieldset class="input">
			<p id="form-login-username">
				<label for="username"><?php echo JText::_('Username') ?></label>
				<input id="testmode_username" name="testmode_username" type="text" class="inputbox" alt="<?php echo JText::_('Username') ?>" size="18" />
			</p>
			<p id="form-login-password">
				<label for="passwd"><?php echo JText::_('Password') ?></label>
				<input id="testmode_password" name="testmode_password" type="password" class="inputbox" size="18" alt="<?php echo JText::_('Password') ?>" id="passwd" />
			</p>
			<input type="submit" name="Submit" class="button" value="<?php echo JText::_('View Site') ?>"/>
			</fieldset>
			<input type="hidden" name="testmode" id="testmode" value="com_user" />
			<input type="hidden" name="option" value="com_testmode" />
			<input type="hidden" name="task" value="loginTestMode" />
			<?php echo JHTML::_( 'form.token' ); ?>
		</form>
		</div>
	</div>
	<div style="padding:0px;padding:5px;padding-right:0px;width:400px;margin:0px;font-size:10px;margin-left:auto;margin-right:auto;color:#444444;letter-spacing:1px;text-align:right;"> 
		<a href="<?php echo $this->client_url; ?>" title="<?php echo $this->client_name; ?>"><?php echo $this->client_name; ?></a>
	</div>
	</div>
	</div>
	</div>	
</body>


