<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 18:23:12
         compiled from "themes\default\subtemplates\subnavigation_1.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2594952b1e810e3e5f5-04667432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77718d9d0f0b0a32fb3bda1e568b58984e214cc0' => 
    array (
      0 => 'themes\\default\\subtemplates\\subnavigation_1.inc.tpl',
      1 => 1299538016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2594952b1e810e3e5f5-04667432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subnav_location' => 0,
    'breadcrumbs' => 0,
    'breadcrumb_linkname' => 0,
    'subnav_link' => 0,
    'link_title' => 0,
    'name_repl_subnav' => 0,
    'link_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b1e810ecb015_01671857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b1e810ecb015_01671857')) {function content_52b1e810ecb015_01671857($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\studybettertogether\\forum\\modules\\smarty\\plugins\\modifier.replace.php';
?><?php if ($_smarty_tpl->tpl_vars['subnav_location']->value) {?>
<p class="subnav">
<?php if ($_smarty_tpl->tpl_vars['breadcrumbs']->value) {?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['nr'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['name'] = 'nr';
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['breadcrumbs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['total']);
?>
<?php $_smarty_tpl->tpl_vars["breadcrumb_linkname"] = new Smarty_variable($_smarty_tpl->tpl_vars['breadcrumbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']]['linkname'], null, 0);?>
<a href="<?php echo $_smarty_tpl->tpl_vars['breadcrumbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']]['link'];?>
"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['breadcrumb_linkname']->value);?>
</a> &raquo;
<?php endfor; endif; ?>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['subnav_location']->value;?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['subnav_link']->value) {?>
<?php $_smarty_tpl->tpl_vars["link_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['subnav_link']->value['name'], null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['subnav_link']->value['title']) {?><?php $_smarty_tpl->tpl_vars["link_title"] = new Smarty_variable($_smarty_tpl->tpl_vars['subnav_link']->value['title'], null, 0);?><?php }?>
<a class="stronglink" href="index.php<?php if ($_smarty_tpl->tpl_vars['subnav_link']->value['id']&&!$_smarty_tpl->tpl_vars['subnav_link']->value['mode']) {?>?id=<?php echo $_smarty_tpl->tpl_vars['subnav_link']->value['id'];?>
<?php } else { ?>?mode=<?php echo $_smarty_tpl->tpl_vars['subnav_link']->value['mode'];?>
<?php if ($_smarty_tpl->tpl_vars['subnav_link']->value['back']) {?>&amp;back=<?php echo $_smarty_tpl->tpl_vars['subnav_link']->value['back'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['subnav_link']->value['id']) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['subnav_link']->value['id'];?>
<?php }?><?php }?>" title="<?php echo (($tmp = @smarty_modifier_replace($_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['link_title']->value),"[name]",$_smarty_tpl->tpl_vars['name_repl_subnav']->value))===null||$tmp==='' ? '' : $tmp);?>
"><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['link_name']->value),"[name]",$_smarty_tpl->tpl_vars['name_repl_subnav']->value);?>
</a>
<?php } else { ?>
&nbsp;
<?php }?>
<?php }} ?>
