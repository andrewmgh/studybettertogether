<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 20:20:20
         compiled from "themes\default\subtemplates\thread.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1315152b20384e80b35-68977986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0b191617ba9755c45cb285e07d872531f4fbb90' => 
    array (
      0 => 'themes\\default\\subtemplates\\thread.inc.tpl',
      1 => 1299596772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1315152b20384e80b35-68977986',
  'function' => 
  array (
    'tree' => 
    array (
      'parameter' => 
      array (
        'level' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'language_file' => 0,
    'level' => 0,
    'settings' => 0,
    'element' => 0,
    'data' => 0,
    'hp' => 0,
    'email' => 0,
    'user' => 0,
    'category_name' => 0,
    'name' => 0,
    'email_hp' => 0,
    'admin' => 0,
    'parent_posting' => 0,
    'tag' => 0,
    'child_array' => 0,
    'child' => 0,
    'tid' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b203851b3645_84228096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b203851b3645_84228096')) {function content_52b203851b3645_84228096($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config($_smarty_tpl->tpl_vars['language_file']->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("entry", 'local'); ?>
<?php if (!is_callable('smarty_modifier_replace')) include 'C:\xampp\htdocs\studybettertogether\forum\modules\smarty\plugins\modifier.replace.php';
?><?php if (!function_exists('smarty_template_function_tree')) {
    function smarty_template_function_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<div class="<?php if ($_smarty_tpl->tpl_vars['level']->value==0) {?>thread-wrapper<?php } elseif ($_smarty_tpl->tpl_vars['level']->value>0&&$_smarty_tpl->tpl_vars['level']->value<$_smarty_tpl->tpl_vars['settings']->value['deep_reply']) {?>reply-wrapper<?php } elseif ($_smarty_tpl->tpl_vars['level']->value>=$_smarty_tpl->tpl_vars['settings']->value['deep_reply']&&$_smarty_tpl->tpl_vars['level']->value<$_smarty_tpl->tpl_vars['settings']->value['very_deep_reply']) {?>deep-reply-wrapper<?php } else { ?>very-deep-reply-wrapper<?php }?>">

<?php $_smarty_tpl->tpl_vars['email_alt'] = new Smarty_variable($_smarty_tpl->getConfigVariable('email'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['homepage_alt'] = new Smarty_variable($_smarty_tpl->getConfigVariable('homepage'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['hp'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['hp'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['email'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['email'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['email_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'], null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['hp']->value&&!$_smarty_tpl->tpl_vars['email']->value) {?>
<?php $_smarty_tpl->tpl_vars['email_hp'] = new Smarty_variable(" <a href=\"".((string)$_smarty_tpl->tpl_vars['hp']->value)."\"><img src=\"".((string)$_smarty_tpl->tpl_vars['THEMES_DIR']->value)."/".((string)$_smarty_tpl->tpl_vars['theme']->value)."/images/homepage.png\" title=\"".((string)$_smarty_tpl->tpl_vars['homepage_alt']->value)."\" alt=\"⌂\" width=\"13\" height=\"13\" /></a>", null, 0);?>
<?php } elseif (!$_smarty_tpl->tpl_vars['hp']->value&&$_smarty_tpl->tpl_vars['email']->value) {?>
<?php $_smarty_tpl->tpl_vars['email_hp'] = new Smarty_variable(" <a href=\"index.php?mode=contact&amp;id=".((string)$_smarty_tpl->tpl_vars['email_id']->value)."\" rel=\"nofollow\"><img src=\"".((string)$_smarty_tpl->tpl_vars['THEMES_DIR']->value)."/".((string)$_smarty_tpl->tpl_vars['theme']->value)."/images/email.png\" title=\"".((string)$_smarty_tpl->tpl_vars['email_alt']->value)."\" alt=\"@\" width=\"13\" height=\"10\" /></a>", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['hp']->value&&$_smarty_tpl->tpl_vars['email']->value) {?>
<?php $_smarty_tpl->tpl_vars['email_hp'] = new Smarty_variable(" <a href=\"".((string)$_smarty_tpl->tpl_vars['hp']->value)."\"><img src=\"".((string)$_smarty_tpl->tpl_vars['THEMES_DIR']->value)."/".((string)$_smarty_tpl->tpl_vars['theme']->value)."/images/homepage.png\" title=\"".((string)$_smarty_tpl->tpl_vars['homepage_alt']->value)."\" alt=\"⌂\" width=\"13\" height=\"13\" /></a> <a href=\"index.php?mode=contact&amp;id=".((string)$_smarty_tpl->tpl_vars['email_id']->value)."\" rel=\"nofollow\"><img src=\"".((string)$_smarty_tpl->tpl_vars['THEMES_DIR']->value)."/".((string)$_smarty_tpl->tpl_vars['theme']->value)."/images/email.png\" title=\"".((string)$_smarty_tpl->tpl_vars['email_alt']->value)."\" alt=\"@\" width=\"13\" height=\"10\" /></a>", null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['email_hp'] = new Smarty_variable('', null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['user_type']==2) {?>
<?php $_smarty_tpl->tpl_vars['admin_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['name'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['admin_title'] = new Smarty_variable($_smarty_tpl->getConfigVariable('administrator_title'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable("<span class=\"admin\" title=\"".((string)$_smarty_tpl->tpl_vars['admin_title']->value)."\">".((string)$_smarty_tpl->tpl_vars['admin_name']->value)."</span>", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['user_type']==1) {?>
<?php $_smarty_tpl->tpl_vars['mod_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['name'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['mod_title'] = new Smarty_variable($_smarty_tpl->getConfigVariable('moderator_title'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable("<span class=\"mod\" title=\"".((string)$_smarty_tpl->tpl_vars['mod_title']->value)."\">".((string)$_smarty_tpl->tpl_vars['mod_name']->value)."</span>", null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['name'], null, 0);?>
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['user']->value||$_smarty_tpl->tpl_vars['settings']->value['user_area_public']==1)&&$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['user_id']>0) {?>
<?php $_smarty_tpl->tpl_vars['posting_user_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['user_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable("<a href=\"index.php?mode=user&amp;show_user=".((string)$_smarty_tpl->tpl_vars['posting_user_id']->value)."\">".((string)$_smarty_tpl->tpl_vars['name']->value)."</a>", null, 0);?>
<?php }?>
<div class="thread-posting<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['new']) {?> new<?php }?>" id="p<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
">
<div class="header">
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['avatar']) {?><img id="avatar-<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
" class="avatar" src="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['avatar']['image'];?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('avatar_img_alt');?>
" width="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['avatar']['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['avatar']['height'];?>
" /><?php }?>
<h<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid']==0) {?>1<?php } else { ?>2<?php }?> id="headline-<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['subject'];?>
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid']==0&&$_smarty_tpl->tpl_vars['category_name']->value) {?> <span class="category">(<?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
)</span><?php }?></h<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid']==0) {?>1<?php } else { ?>2<?php }?>>
<p class="author"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['location']) {?><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('posted_by_location'),"[name]",$_smarty_tpl->tpl_vars['name']->value),"[email_hp]",$_smarty_tpl->tpl_vars['email_hp']->value),"[location]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['location']),"[time]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['formated_time']);?>
<?php } else { ?><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('posted_by'),"[name]",$_smarty_tpl->tpl_vars['name']->value),"[email_hp]",$_smarty_tpl->tpl_vars['email_hp']->value),"[time]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['formated_time']);?>
<?php }?> <span class="ago">(<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['days']>1) {?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('posting_several_days_ago'),"[days]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['days_rounded']);?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['days']==0&&$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['hours']==0) {?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('posting_minutes_ago'),"[minutes]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['minutes']);?>
<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['days']==0&&$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['hours']!=0) {?><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('posting_hours_ago'),"[hours]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['hours']),"[minutes]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['minutes']);?>
<?php } else { ?><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('posting_one_day_ago'),"[hours]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['hours']),"[minutes]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['minutes']);?>
<?php }?><?php }?>)</span><?php if ($_smarty_tpl->tpl_vars['admin']->value&&$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ip']) {?> <span class="ip">(<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ip'];?>
)</span><?php }?><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid']!=0) {?><?php $_smarty_tpl->tpl_vars["parent_posting"] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid'], null, 0);?> <span class="op-link"><a href="#p<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid'];?>
" title="<?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('original_posting_linktitle'),"[name]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['parent_posting']->value]['name']);?>
">@ <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['parent_posting']->value]['name'];?>
</a></span><?php }?><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['edited']) {?><br />
<span class="edited"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('edited_by'),"[name]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['edited_by']),"[time]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['formated_edit_time']);?>
</span><?php }?></p>
</div>
<div class="wrapper" id="posting-<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
">
<div class="body">
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['posting']) {?>
<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['posting'];?>

<?php } else { ?>
<p><?php echo $_smarty_tpl->getConfigVariable('no_text');?>
</p>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['signature']) {?>
<p class="signature">--<br />
<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['signature'];?>
</p>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['tags']) {?>
<p class="tags"><?php echo $_smarty_tpl->getConfigVariable('tags_marking');?>
<br />
<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["tags"]['last'] = $_smarty_tpl->tpl_vars['tag']->last;
?><a href="index.php?mode=search&amp;search=<?php echo $_smarty_tpl->tpl_vars['tag']->value['escaped'];?>
&amp;method=tags"><?php echo $_smarty_tpl->tpl_vars['tag']->value['display'];?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['tags']['last']) {?>, <?php }?><?php } ?></p>
<?php }?>
</div>
<div class="posting-footer">
<div class="reply"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['locked']==0) {?><a class="stronglink" href="index.php?mode=posting&amp;id=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" title="<?php echo $_smarty_tpl->getConfigVariable('reply_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('reply_link');?>
</a><?php } else { ?><span class="locked"><?php echo $_smarty_tpl->getConfigVariable('posting_locked');?>
</span><?php }?></div>
<div class="info">&nbsp;
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['views']) {?><span class="views"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['views']==1) {?><?php echo $_smarty_tpl->getConfigVariable('one_view');?>
<?php } else { ?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('several_views'),"[views]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['views']);?>
<?php }?></span><?php }?>
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['options']) {?>
<ul class="options">
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['options']['edit']) {?><li><a href="index.php?mode=posting&amp;edit=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" class="edit" title="<?php echo $_smarty_tpl->getConfigVariable('edit_message_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('edit_message_linkname');?>
</a></li><?php }?>
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['options']['delete']) {?><li><a href="index.php?mode=posting&amp;delete_posting=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" class="delete" title="<?php echo $_smarty_tpl->getConfigVariable('delete_message_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('delete_message_linkname');?>
</a></li><?php }?>
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['options']['move']) {?><li><a href="index.php?mode=posting&amp;move_posting=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" class="move" title="<?php echo $_smarty_tpl->getConfigVariable('move_posting_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('move_posting_linkname');?>
</a></li><?php }?>
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['options']['report_spam']) {?><li><a href="index.php?mode=posting&amp;report_spam=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" class="report" title="<?php echo $_smarty_tpl->getConfigVariable('report_spam_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('report_spam_linkname');?>
</a></li><?php }?>
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['options']['flag_ham']) {?><li><a href="index.php?mode=posting&amp;flag_ham=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" class="report" title="<?php echo $_smarty_tpl->getConfigVariable('flag_ham_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('flag_ham_linkname');?>
</a></li><?php }?>
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['options']['lock']) {?><li><a href="index.php?mode=posting&amp;lock=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" class="<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['locked']==0) {?>lock<?php } else { ?>unlock<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['locked']==0) {?><?php echo $_smarty_tpl->getConfigVariable('lock_linktitle');?>
<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('unlock_linktitle');?>
<?php }?>"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['locked']==0) {?><?php echo $_smarty_tpl->getConfigVariable('lock_linkname');?>
<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('unlock_linkname');?>
<?php }?></a></li>
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid']==0) {?><li><a href="index.php?mode=posting&amp;lock_thread=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" class="lock-thread" title="<?php echo $_smarty_tpl->getConfigVariable('lock_thread_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('lock_thread_linkname');?>
</a></li>
<li><a href="index.php?mode=posting&amp;unlock_thread=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" class="lock-thread" title="<?php echo $_smarty_tpl->getConfigVariable('unlock_thread_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('unlock_thread_linkname');?>
</a></li><?php }?><?php }?>
</ul>
<?php }?>
</div>
</div>
</div>
</div>
<?php if (is_array($_smarty_tpl->tpl_vars['child_array']->value[$_smarty_tpl->tpl_vars['element']->value])) {?>
<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['child_array']->value[$_smarty_tpl->tpl_vars['element']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?><?php smarty_template_function_tree($_smarty_tpl,array('element'=>$_smarty_tpl->tpl_vars['child']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>
<?php } ?>
<?php }?>
</div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<?php smarty_template_function_tree($_smarty_tpl,array('element'=>$_smarty_tpl->tpl_vars['tid']->value));?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['rss_feed']==1) {?><div class="small" style="text-align:right;"><a class="rss" href="index.php?mode=rss&amp;thread=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('rss_feed_thread_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('rss_feed_thread');?>
</a></div><?php }?>
<?php }} ?>
