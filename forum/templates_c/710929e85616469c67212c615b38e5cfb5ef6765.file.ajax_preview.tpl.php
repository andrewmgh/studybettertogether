<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 18:23:13
         compiled from "themes\default\ajax_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:784052b1e8115497f5-13528165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '710929e85616469c67212c615b38e5cfb5ef6765' => 
    array (
      0 => 'themes\\default\\ajax_preview.tpl',
      1 => 1268513202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '784052b1e8115497f5-13528165',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'THEMES_DIR' => 0,
    'theme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b1e8115785f4_20613684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b1e8115785f4_20613684')) {function content_52b1e8115785f4_20613684($_smarty_tpl) {?><div id="ajax-preview-top"></div>
<div id="ajax-preview-main">
 <div id="ajax-preview-body">
  <img id="ajax-preview-close" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/close.png" alt="[x]" title="<?php echo $_smarty_tpl->getConfigVariable('close');?>
" />
  <div id="ajax-preview-content"></div>
 </div>
</div>
<?php }} ?>
