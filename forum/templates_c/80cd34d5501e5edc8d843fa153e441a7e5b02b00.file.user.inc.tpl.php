<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 19:19:54
         compiled from "themes\default\subtemplates\user.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:345652b1f55a9cbf68-77856054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80cd34d5501e5edc8d843fa153e441a7e5b02b00' => 
    array (
      0 => 'themes\\default\\subtemplates\\user.inc.tpl',
      1 => 1308246348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '345652b1f55a9cbf68-77856054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_file' => 0,
    'search_user' => 0,
    'pagination' => 0,
    'mode' => 0,
    'action' => 0,
    'search_user_encoded' => 0,
    'method' => 0,
    'id' => 0,
    'p_category' => 0,
    'order' => 0,
    'descasc' => 0,
    'item' => 0,
    'total_users' => 0,
    'ul' => 0,
    'THEMES_DIR' => 0,
    'theme' => 0,
    'mod' => 0,
    'admin' => 0,
    'userdata' => 0,
    'c' => 0,
    'row' => 0,
    'page' => 0,
    'users_online' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b1f55ac7f683_24438889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b1f55ac7f683_24438889')) {function content_52b1f55ac7f683_24438889($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\studybettertogether\\forum\\modules\\smarty\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\studybettertogether\\forum\\modules\\smarty\\plugins\\modifier.replace.php';
?><?php  $_config = new Smarty_Internal_Config($_smarty_tpl->tpl_vars['language_file']->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("user", 'local'); ?>
<div id="usernav">
<div id="usersearch">
<label for="search-user"><?php echo $_smarty_tpl->getConfigVariable('search_user');?>
</label><form action="index.php" method="get" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="user" />
<input id="search-user" type="text" name="search_user" value="<?php if ($_smarty_tpl->tpl_vars['search_user']->value) {?><?php echo $_smarty_tpl->tpl_vars['search_user']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('search_user_default_value');?>
<?php }?>" size="25" alt="<?php echo $_smarty_tpl->getConfigVariable('search_user_default_value');?>
" />
</div>
</form>
</div>
<div id="userpagination">
<?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
<ul class="pagination">
<?php if ($_smarty_tpl->tpl_vars['pagination']->value['previous']) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
<?php if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['method']->value&&$_smarty_tpl->tpl_vars['method']->value!='fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['pagination']->value['previous']>1) {?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['previous'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['p_category']->value&&$_smarty_tpl->tpl_vars['p_category']->value>0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;?>
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
<?php }?><?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['method']->value&&$_smarty_tpl->tpl_vars['method']->value!='fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value>1) {?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['p_category']->value&&$_smarty_tpl->tpl_vars['p_category']->value>0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li><?php }?>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['pagination']->value['next']) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
<?php if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['method']->value&&$_smarty_tpl->tpl_vars['method']->value!='fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['next'];?>
<?php if ($_smarty_tpl->tpl_vars['p_category']->value&&$_smarty_tpl->tpl_vars['p_category']->value>0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;?>
<?php }?>" title="<?php echo $_smarty_tpl->getConfigVariable('next_page_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('next_page_link');?>
</a></li><?php }?>
</ul>
<?php } else { ?>
&nbsp;
<?php }?>
</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['total_users']->value>0) {?>
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">
<tr>
<th><a href="index.php?mode=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?>&amp;order=user_name&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value=="ASC"&&$_smarty_tpl->tpl_vars['order']->value=="user_name") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('order_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('user_name');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value=="user_name"&&$_smarty_tpl->tpl_vars['descasc']->value=="ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value=="user_name"&&$_smarty_tpl->tpl_vars['descasc']->value=="DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th><a href="index.php?mode=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?>&amp;order=user_type&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value=="ASC"&&$_smarty_tpl->tpl_vars['order']->value=="user_type") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('order_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('user_type');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value=="user_type"&&$_smarty_tpl->tpl_vars['descasc']->value=="ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value=="user_type"&&$_smarty_tpl->tpl_vars['descasc']->value=="DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th><a href="index.php?mode=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?>&amp;order=user_hp&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value=="ASC"&&$_smarty_tpl->tpl_vars['order']->value=="user_hp") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('order_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('user_hp');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value=="user_hp"&&$_smarty_tpl->tpl_vars['descasc']->value=="ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value=="user_hp"&&$_smarty_tpl->tpl_vars['descasc']->value=="DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th><a href="index.php?mode=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?>&amp;order=email_contact&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value=="ASC"&&$_smarty_tpl->tpl_vars['order']->value=="email_contact") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('order_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('user_email');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value=="email_contact"&&$_smarty_tpl->tpl_vars['descasc']->value=="ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value=="email_contact"&&$_smarty_tpl->tpl_vars['descasc']->value=="DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>


<?php if ($_smarty_tpl->tpl_vars['mod']->value||$_smarty_tpl->tpl_vars['admin']->value) {?><th><a href="index.php?mode=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?>&amp;order=user_lock&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value=="ASC"&&$_smarty_tpl->tpl_vars['order']->value=="user_lock") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('order_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('user_blockage');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value=="user_lock"&&$_smarty_tpl->tpl_vars['descasc']->value=="ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value=="user_lock"&&$_smarty_tpl->tpl_vars['descasc']->value=="DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th><?php }?>
</tr>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<?php echo smarty_function_cycle(array('values'=>"a,b",'assign'=>'c'),$_smarty_tpl);?>

<tr class="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
">
<td><a href="index.php?mode=user&amp;show_user=<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
" title="<?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('show_userdata_linktitle'),"[user]",$_smarty_tpl->tpl_vars['row']->value['user_name']);?>
"><strong><?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
</strong></a></td>
<td><span class="small"><?php if ($_smarty_tpl->tpl_vars['row']->value['user_type']==2) {?><?php echo $_smarty_tpl->getConfigVariable('admin');?>
<?php } elseif ($_smarty_tpl->tpl_vars['row']->value['user_type']==1) {?><?php echo $_smarty_tpl->getConfigVariable('mod');?>
<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('user');?>
<?php }?></span></td>
<td><span class="small"><?php if ($_smarty_tpl->tpl_vars['row']->value['user_hp']!='') {?><a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_hp'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_hp'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/homepage.png" alt="<?php echo $_smarty_tpl->getConfigVariable('homepage');?>
" width="13" height="13" /></a><?php } else { ?>&nbsp;<?php }?></span></td>
<td><span class="small"><?php if ($_smarty_tpl->tpl_vars['row']->value['user_email']) {?><a href="index.php?mode=contact&amp;user_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
" title="<?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('mailto_user'),"[user]",$_smarty_tpl->tpl_vars['row']->value['user_name']);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/email.png" alt="<?php echo $_smarty_tpl->getConfigVariable('email');?>
" width="13" height="10" /></a><?php } else { ?>&nbsp;<?php }?></span></td>


<?php if ($_smarty_tpl->tpl_vars['mod']->value||$_smarty_tpl->tpl_vars['admin']->value) {?><td><span class="small"><?php if ($_smarty_tpl->tpl_vars['row']->value['user_type']>0) {?><?php if ($_smarty_tpl->tpl_vars['row']->value['user_lock']==0) {?><?php echo $_smarty_tpl->getConfigVariable('unlocked');?>
<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('locked');?>
<?php }?><?php } elseif ($_smarty_tpl->tpl_vars['row']->value['user_lock']==0) {?><a href="index.php?mode=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?>&amp;user_lock=<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('lock_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('unlocked');?>
</a><?php } else { ?><a class="user-locked" href="index.php?mode=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?>&amp;user_lock=<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('unlock_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('user_locked');?>
</a><?php }?></span></td><?php }?>
</tr>
<?php } ?>
</table>

<?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
<ul class="pagination pagination-index-table">
<?php if ($_smarty_tpl->tpl_vars['pagination']->value['previous']) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
<?php if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['method']->value&&$_smarty_tpl->tpl_vars['method']->value!='fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['pagination']->value['previous']>1) {?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['previous'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['p_category']->value&&$_smarty_tpl->tpl_vars['p_category']->value>0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;?>
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
<?php }?><?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['method']->value&&$_smarty_tpl->tpl_vars['method']->value!='fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value>1) {?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['p_category']->value&&$_smarty_tpl->tpl_vars['p_category']->value>0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li><?php }?>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['pagination']->value['next']) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
<?php if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['method']->value&&$_smarty_tpl->tpl_vars['method']->value!='fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['next'];?>
<?php if ($_smarty_tpl->tpl_vars['p_category']->value&&$_smarty_tpl->tpl_vars['p_category']->value>0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;?>
<?php }?>" title="<?php echo $_smarty_tpl->getConfigVariable('next_page_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('next_page_link');?>
</a></li><?php }?>
</ul>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['users_online']->value) {?>
<div id="usersonline">
<h3><?php echo $_smarty_tpl->getConfigVariable('currently_online');?>
</h3>
<p><?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users_online']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['user']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['user']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars['user']->iteration++;
 $_smarty_tpl->tpl_vars['user']->last = $_smarty_tpl->tpl_vars['user']->iteration === $_smarty_tpl->tpl_vars['user']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["users_online"]['last'] = $_smarty_tpl->tpl_vars['user']->last;
?><a href="index.php?mode=user&amp;show_user=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['users_online']['last']) {?>, <?php }?><?php } ?></p>
</div>
<?php }?>

<?php } else { ?>
<p><em><?php echo $_smarty_tpl->getConfigVariable('no_users');?>
</em></p>
<?php }?>
<?php }} ?>
