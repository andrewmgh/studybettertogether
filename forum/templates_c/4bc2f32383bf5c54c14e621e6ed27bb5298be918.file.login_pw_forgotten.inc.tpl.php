<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 21:14:25
         compiled from "themes\default\subtemplates\login_pw_forgotten.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42852b2103176e739-95612506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bc2f32383bf5c54c14e621e6ed27bb5298be918' => 
    array (
      0 => 'themes\\default\\subtemplates\\login_pw_forgotten.inc.tpl',
      1 => 1265367872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42852b2103176e739-95612506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b2103179d542_97287475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b2103179d542_97287475')) {function content_52b2103179d542_97287475($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config($_smarty_tpl->tpl_vars['language_file']->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("pw_forgotten", 'local'); ?>
<p><?php echo $_smarty_tpl->getConfigVariable('pw_forgotten_exp');?>
</p>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="login" />
<p><label for="pwf_email" class="main"><?php echo $_smarty_tpl->getConfigVariable('pwf_email');?>
</label><br />
<input id="pwf_email" type="text" name="pwf_email" size="30" /> <input type="submit" name="pwf_submit" value="<?php echo $_smarty_tpl->getConfigVariable('submit_button_ok');?>
" /></p>
</div>
</form>
<?php }} ?>
