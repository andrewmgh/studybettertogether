<?php /* Smarty version Smarty-3.1.15, created on 2014-03-19 18:06:57
         compiled from "themes\default\subtemplates\user_postings.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137195329dcc1dc2c29-58159053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7e063bc608125ca2b4ba1e87d38faa23d91efde' => 
    array (
      0 => 'themes\\default\\subtemplates\\user_postings.inc.tpl',
      1 => 1276203256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137195329dcc1dc2c29-58159053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_postings_data' => 0,
    'user_postings_count' => 0,
    'visited' => 0,
    'THEMES_DIR' => 0,
    'theme' => 0,
    'pagination' => 0,
    'mode' => 0,
    'action' => 0,
    'id' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5329dcc217a469_94340927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5329dcc217a469_94340927')) {function content_5329dcc217a469_94340927($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\studybettertogether\\forum\\modules\\smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\studybettertogether\\forum\\modules\\smarty\\plugins\\modifier.date_format.php';
?><?php if ($_smarty_tpl->tpl_vars['user_postings_data']->value) {?>
<p><?php if ($_smarty_tpl->tpl_vars['user_postings_count']->value>1) {?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('several_postings_by_user'),"[number]",$_smarty_tpl->tpl_vars['user_postings_count']->value);?>
<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('one_posting_by_user');?>
<?php }?></p>
<ul class="searchresults">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_postings_data']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
<li><a class="<?php if ($_smarty_tpl->tpl_vars['user_postings_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pid']==0) {?>thread-search<?php } else { ?>reply-search<?php }?> <?php if ($_smarty_tpl->tpl_vars['visited']->value&&in_array($_smarty_tpl->tpl_vars['user_postings_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['id'],$_smarty_tpl->tpl_vars['visited']->value)) {?> visited<?php }?>" href="index.php?mode=entry&amp;id=<?php echo $_smarty_tpl->tpl_vars['user_postings_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user_postings_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['subject'];?>
</a> - <strong><?php echo $_smarty_tpl->tpl_vars['user_postings_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
</strong>, <span id="p<?php echo $_smarty_tpl->tpl_vars['user_postings_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['id'];?>
" class="tail"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user_postings_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['disp_time'],$_smarty_tpl->getConfigVariable('time_format'));?>
 <a href="index.php?mode=thread&amp;id=<?php echo $_smarty_tpl->tpl_vars['user_postings_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('open_whole_thread');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/complete_thread.png" alt="<?php echo $_smarty_tpl->getConfigVariable('open_whole_thread');?>
" width="11" height="11" /></a> <?php if ($_smarty_tpl->tpl_vars['user_postings_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['category']) {?><a href="index.php?mode=index&amp;category=<?php echo $_smarty_tpl->tpl_vars['user_postings_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['category'];?>
"><span class="category">(<?php echo $_smarty_tpl->tpl_vars['user_postings_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['category_name'];?>
)</span></a><?php }?></span></li>
<?php endfor; endif; ?>
</ul>

<?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
<ul class="pagination">
<?php if ($_smarty_tpl->tpl_vars['pagination']->value['previous']) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
<?php if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['pagination']->value['previous']>1) {?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['previous'];?>
<?php }?>" title="<?php echo $_smarty_tpl->getConfigVariable('previous_page_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('previous_page_link');?>
</a></li><?php }?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagination']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['item']->value==0) {?><li>&hellip;</li><?php } elseif ($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->tpl_vars['pagination']->value['current']) {?><li><span class="current"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span></li><?php } else { ?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
<?php if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value>1) {?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li><?php }?>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['pagination']->value['next']) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
<?php if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['next'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('next_page_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('next_page_link');?>
</a></li><?php }?>
</ul>
<?php }?>

<?php } else { ?>
<p><?php echo $_smarty_tpl->getConfigVariable('no_postings_by_user');?>
</p>
<?php }?>
<?php }} ?>
