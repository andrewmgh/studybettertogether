<?php /* Smarty version Smarty-3.1.15, created on 2013-12-18 18:23:16
         compiled from "themes\default\subtemplates\login.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:571852b1e814b78492-69453766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63c2de13d04cd08fed1d10d90744640b2be4335b' => 
    array (
      0 => 'themes\\default\\subtemplates\\login.inc.tpl',
      1 => 1266867300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '571852b1e814b78492-69453766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_file' => 0,
    'ip_temporarily_blocked' => 0,
    'login_message' => 0,
    'mode' => 0,
    'back' => 0,
    'id' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b1e814bd9f31_17341200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b1e814bd9f31_17341200')) {function content_52b1e814bd9f31_17341200($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config($_smarty_tpl->tpl_vars['language_file']->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("login", 'local'); ?>
<?php if ($_smarty_tpl->tpl_vars['ip_temporarily_blocked']->value) {?>
<?php echo $_smarty_tpl->getConfigVariable('login_message');?>

<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('login_ip_temp_blocked');?>
</p>
<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['login_message']->value&&$_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['login_message']->value)) {?>
<p class="<?php if ($_smarty_tpl->tpl_vars['login_message']->value=='account_activated'||$_smarty_tpl->tpl_vars['login_message']->value=='mail_sent'||$_smarty_tpl->tpl_vars['login_message']->value=='pw_sent') {?>ok<?php } else { ?>caution<?php }?>"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['login_message']->value);?>
</p>
<?php }?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
" />
<?php if ($_smarty_tpl->tpl_vars['back']->value) {?><input type="hidden" name="back" value="<?php echo $_smarty_tpl->tpl_vars['back']->value;?>
" /><?php }?>
<?php if ($_smarty_tpl->tpl_vars['id']->value) {?><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" /><?php }?>
<p><label for="login" class="main"><?php echo $_smarty_tpl->getConfigVariable('login_username');?>
</label><br /><input id="login" class="login" type="text" name="username" size="25" /></p>
<p><label for="password" class="main"><?php echo $_smarty_tpl->getConfigVariable('login_password');?>
</label><br /><input id="password" class="login" type="password" name="userpw" size="25" /></p>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['autologin']==1) {?>
<p class="small"><input id="autologin" type="checkbox" name="autologin_checked" value="true" /> <label for="autologin"><?php echo $_smarty_tpl->getConfigVariable('login_auto');?>
</label></p>
<?php }?>
<p><input type="submit" value="<?php echo $_smarty_tpl->getConfigVariable('login_submit');?>
" /></p>
</div>
</form>
<p class="small"><?php echo $_smarty_tpl->getConfigVariable('login_advice');?>
</p>
<p class="small"><a href="index.php?mode=login&amp;action=pw_forgotten"><?php echo $_smarty_tpl->getConfigVariable('pw_forgotten_link');?>
</a></p>
<?php }?>
<?php }} ?>
