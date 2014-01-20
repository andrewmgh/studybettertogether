<?php /* Smarty version Smarty-3.1.15, created on 2013-12-18 20:16:44
         compiled from "themes\default\subtemplates\entry.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1812052b202ac855193-82492648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fe7116afc47d2e0c4cd7060a856c81b0ec440df' => 
    array (
      0 => 'themes\\default\\subtemplates\\entry.inc.tpl',
      1 => 1299596520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1812052b202ac855193-82492648',
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
    'hp' => 0,
    'email' => 0,
    'user_type' => 0,
    'posting_user_id' => 0,
    'user' => 0,
    'settings' => 0,
    'spam' => 0,
    'avatar' => 0,
    'subject' => 0,
    'category_name' => 0,
    'location' => 0,
    'name' => 0,
    'email_hp' => 0,
    'formated_time' => 0,
    'ago' => 0,
    'admin' => 0,
    'ip' => 0,
    'pid' => 0,
    'data' => 0,
    'edited' => 0,
    'edited_by' => 0,
    'formated_edit_time' => 0,
    'posting' => 0,
    'signature' => 0,
    'tags' => 0,
    'tag' => 0,
    'locked' => 0,
    'id' => 0,
    'views' => 0,
    'options' => 0,
    'tid' => 0,
    'element' => 0,
    'read' => 0,
    'THEMES_DIR' => 0,
    'theme' => 0,
    'mod' => 0,
    'child_array' => 0,
    'fold_threads' => 0,
    'level' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b202acae5639_85134589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b202acae5639_85134589')) {function content_52b202acae5639_85134589($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\studybettertogether\\forum\\modules\\smarty\\plugins\\modifier.replace.php';
?><?php  $_config = new Smarty_Internal_Config($_smarty_tpl->tpl_vars['language_file']->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("entry", 'local'); ?>
<?php $_smarty_tpl->tpl_vars['email_alt'] = new Smarty_variable($_smarty_tpl->getConfigVariable('email'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['homepage_alt'] = new Smarty_variable($_smarty_tpl->getConfigVariable('homepage'), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['hp']->value&&!$_smarty_tpl->tpl_vars['email']->value) {?>
<?php $_smarty_tpl->tpl_vars['email_hp'] = new Smarty_variable(" <a href=\"".((string)$_smarty_tpl->tpl_vars['hp']->value)."\"><img src=\"".((string)$_smarty_tpl->tpl_vars['THEMES_DIR']->value)."/".((string)$_smarty_tpl->tpl_vars['theme']->value)."/images/homepage.png\" title=\"".((string)$_smarty_tpl->tpl_vars['homepage_alt']->value)."\" alt=\"⌂\" width=\"13\" height=\"13\" /></a>", null, 0);?>
<?php } elseif (!$_smarty_tpl->tpl_vars['hp']->value&&$_smarty_tpl->tpl_vars['email']->value) {?>
<?php $_smarty_tpl->tpl_vars['email_hp'] = new Smarty_variable(" <a href=\"index.php?mode=contact&amp;id=".((string)$_smarty_tpl->tpl_vars['id']->value)."\" rel=\"nofollow\"><img src=\"".((string)$_smarty_tpl->tpl_vars['THEMES_DIR']->value)."/".((string)$_smarty_tpl->tpl_vars['theme']->value)."/images/email.png\" title=\"".((string)$_smarty_tpl->tpl_vars['email_alt']->value)."\" alt=\"@\" width=\"13\" height=\"10\" /></a>", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['hp']->value&&$_smarty_tpl->tpl_vars['email']->value) {?>
<?php $_smarty_tpl->tpl_vars['email_hp'] = new Smarty_variable(" <a href=\"".((string)$_smarty_tpl->tpl_vars['hp']->value)."\"><img src=\"".((string)$_smarty_tpl->tpl_vars['THEMES_DIR']->value)."/".((string)$_smarty_tpl->tpl_vars['theme']->value)."/images/homepage.png\" title=\"".((string)$_smarty_tpl->tpl_vars['homepage_alt']->value)."\" alt=\"⌂\" width=\"13\" height=\"13\" /></a> <a href=\"index.php?mode=contact&amp;id=".((string)$_smarty_tpl->tpl_vars['id']->value)."\" rel=\"nofollow\"><img src=\"".((string)$_smarty_tpl->tpl_vars['THEMES_DIR']->value)."/".((string)$_smarty_tpl->tpl_vars['theme']->value)."/images/email.png\" title=\"".((string)$_smarty_tpl->tpl_vars['email_alt']->value)."\" alt=\"@\" width=\"13\" height=\"10\" /></a>", null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['email_hp'] = new Smarty_variable('', null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['user_type']->value==2) {?>
<?php $_smarty_tpl->tpl_vars['admin_title'] = new Smarty_variable($_smarty_tpl->getConfigVariable('administrator_title'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable("<span class=\"admin\" title=\"".((string)$_smarty_tpl->tpl_vars['admin_title']->value)."\">".((string)$_smarty_tpl->tpl_vars['name']->value)."</span>", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['user_type']->value==1) {?>
<?php $_smarty_tpl->tpl_vars['mod_title'] = new Smarty_variable($_smarty_tpl->getConfigVariable('moderator_title'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable("<span class=\"mod\" title=\"".((string)$_smarty_tpl->tpl_vars['mod_title']->value)."\">".((string)$_smarty_tpl->tpl_vars['name']->value)."</span>", null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['name']->value), null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['posting_user_id']->value>0&&($_smarty_tpl->tpl_vars['user']->value||$_smarty_tpl->tpl_vars['settings']->value['user_area_public']==1)) {?><?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable("<a href=\"index.php?mode=user&amp;show_user=".((string)$_smarty_tpl->tpl_vars['posting_user_id']->value)."\">".((string)$_smarty_tpl->tpl_vars['name']->value)."</a>", null, 0);?><?php }?>
<div class="posting"><?php if ($_smarty_tpl->tpl_vars['spam']->value) {?><p class="spam-note"><?php echo $_smarty_tpl->getConfigVariable('spam_note');?>
</p><?php }?>
<?php if ($_smarty_tpl->tpl_vars['avatar']->value) {?><img class="avatar" src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['image'];?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('avatar_img_alt');?>
" width="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['height'];?>
" /><?php }?>
<h1><?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
<?php if ($_smarty_tpl->tpl_vars['category_name']->value) {?> <span class="category">(<?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
)</span><?php }?></h1>
<p class="author"><?php if ($_smarty_tpl->tpl_vars['location']->value) {?><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('posted_by_location'),"[name]",$_smarty_tpl->tpl_vars['name']->value),"[email_hp]",$_smarty_tpl->tpl_vars['email_hp']->value),"[location]",$_smarty_tpl->tpl_vars['location']->value),"[time]",$_smarty_tpl->tpl_vars['formated_time']->value);?>
<?php } else { ?><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('posted_by'),"[name]",$_smarty_tpl->tpl_vars['name']->value),"[email_hp]",$_smarty_tpl->tpl_vars['email_hp']->value),"[time]",$_smarty_tpl->tpl_vars['formated_time']->value);?>
<?php }?> <span class="ago">(<?php if ($_smarty_tpl->tpl_vars['ago']->value['days']>1) {?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('posting_several_days_ago'),"[days]",$_smarty_tpl->tpl_vars['ago']->value['days_rounded']);?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['ago']->value['days']==0&&$_smarty_tpl->tpl_vars['ago']->value['hours']==0) {?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('posting_minutes_ago'),"[minutes]",$_smarty_tpl->tpl_vars['ago']->value['minutes']);?>
<?php } elseif ($_smarty_tpl->tpl_vars['ago']->value['days']==0&&$_smarty_tpl->tpl_vars['ago']->value['hours']!=0) {?><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('posting_hours_ago'),"[hours]",$_smarty_tpl->tpl_vars['ago']->value['hours']),"[minutes]",$_smarty_tpl->tpl_vars['ago']->value['minutes']);?>
<?php } else { ?><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('posting_one_day_ago'),"[hours]",$_smarty_tpl->tpl_vars['ago']->value['hours']),"[minutes]",$_smarty_tpl->tpl_vars['ago']->value['minutes']);?>
<?php }?><?php }?>)</span><?php if ($_smarty_tpl->tpl_vars['admin']->value&&$_smarty_tpl->tpl_vars['ip']->value) {?> <span class="ip">(<?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
)</span><?php }?><?php if ($_smarty_tpl->tpl_vars['pid']->value!=0) {?> <span class="op-link"><a href="index.php?id=<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
" title="<?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('original_posting_linktitle'),"[name]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['pid']->value]['name']);?>
">@ <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['pid']->value]['name'];?>
</a></span><?php }?><?php if ($_smarty_tpl->tpl_vars['edited']->value) {?><br />
<span class="edited"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('edited_by'),"[name]",$_smarty_tpl->tpl_vars['edited_by']->value),"[time]",$_smarty_tpl->tpl_vars['formated_edit_time']->value);?>
</span><?php }?></p>
<?php if ($_smarty_tpl->tpl_vars['posting']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['posting']->value;?>

<?php } else { ?>
<p><?php echo $_smarty_tpl->getConfigVariable('no_text');?>
</p>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['signature']->value) {?>
<p class="signature">--<br />
<?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
<p class="tags"><?php echo $_smarty_tpl->getConfigVariable('tags_marking');?>
<br />
<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
<div class="reply"><?php if ($_smarty_tpl->tpl_vars['locked']->value==0) {?><a class="stronglink" href="index.php?mode=posting&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&amp;back=entry" title="<?php echo $_smarty_tpl->getConfigVariable('reply_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('reply_link');?>
</a><?php } else { ?><span class="locked"><?php echo $_smarty_tpl->getConfigVariable('posting_locked');?>
</span><?php }?></div>
<div class="info">
<?php if ($_smarty_tpl->tpl_vars['views']->value) {?><span class="views"><?php if ($_smarty_tpl->tpl_vars['views']->value==1) {?><?php echo $_smarty_tpl->getConfigVariable('one_view');?>
<?php } else { ?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('several_views'),"[views]",$_smarty_tpl->tpl_vars['views']->value);?>
<?php }?></span><?php } else { ?>&nbsp;<?php }?>
<?php if ($_smarty_tpl->tpl_vars['options']->value) {?>
<ul class="options">
<?php if ($_smarty_tpl->tpl_vars['options']->value['edit']) {?><li><a href="index.php?mode=posting&amp;edit=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&amp;back=entry" class="edit" title="<?php echo $_smarty_tpl->getConfigVariable('edit_message_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('edit_message_linkname');?>
</a></li><?php }?>
<?php if ($_smarty_tpl->tpl_vars['options']->value['delete']) {?><li><a href="index.php?mode=posting&amp;delete_posting=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&amp;back=entry" class="delete" title="<?php echo $_smarty_tpl->getConfigVariable('delete_message_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('delete_message_linkname');?>
</a></li><?php }?>
<?php if ($_smarty_tpl->tpl_vars['options']->value['move']) {?><li><a href="index.php?mode=posting&amp;move_posting=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&amp;back=entry" class="move" title="<?php echo $_smarty_tpl->getConfigVariable('move_posting_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('move_posting_linkname');?>
</a></li><?php }?>
<?php if ($_smarty_tpl->tpl_vars['options']->value['report_spam']) {?><li><a href="index.php?mode=posting&amp;report_spam=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&amp;back=entry" class="report" title="<?php echo $_smarty_tpl->getConfigVariable('report_spam_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('report_spam_linkname');?>
</a></li><?php }?>
<?php if ($_smarty_tpl->tpl_vars['options']->value['flag_ham']) {?><li><a href="index.php?mode=posting&amp;flag_ham=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&amp;back=entry" class="report" title="<?php echo $_smarty_tpl->getConfigVariable('flag_ham_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('flag_ham_linkname');?>
</a></li><?php }?>
<?php if ($_smarty_tpl->tpl_vars['options']->value['lock']) {?><li><a href="index.php?mode=posting&amp;lock=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&amp;back=entry" class="<?php if ($_smarty_tpl->tpl_vars['locked']->value==0) {?>lock<?php } else { ?>unlock<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['locked']->value==0) {?><?php echo $_smarty_tpl->getConfigVariable('lock_linktitle');?>
<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('unlock_linktitle');?>
<?php }?>"><?php if ($_smarty_tpl->tpl_vars['locked']->value==0) {?><?php echo $_smarty_tpl->getConfigVariable('lock_linkname');?>
<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('unlock_linkname');?>
<?php }?></a></li>
<li><a href="index.php?mode=posting&amp;lock_thread=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&amp;back=entry" class="lock-thread" title="<?php echo $_smarty_tpl->getConfigVariable('lock_thread_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('lock_thread_linkname');?>
</a></li>
<li><a href="index.php?mode=posting&amp;unlock_thread=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&amp;back=entry" class="unlock-thread" title="<?php echo $_smarty_tpl->getConfigVariable('unlock_thread_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('unlock_thread_linkname');?>
</a></li><?php }?>
</ul>
<?php }?>
</div>
</div>

<hr class="entryline" />
<div class="complete-thread">
<p class="left"><strong><?php echo $_smarty_tpl->getConfigVariable('complete_thread_marking');?>
</strong></p><p class="right">&nbsp;<?php if ($_smarty_tpl->tpl_vars['settings']->value['rss_feed']==1) {?><a class="rss" href="index.php?mode=rss&amp;thread=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('rss_feed_thread_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('rss_feed_thread');?>
</a><?php }?></p>
</div>

<ul class="thread openthread">
<?php if (!function_exists('smarty_template_function_tree')) {
    function smarty_template_function_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<li><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id']!=$_smarty_tpl->tpl_vars['id']->value) {?><a class="<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid']==0&&$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['new']) {?>threadnew<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid']==0) {?>thread<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid']!=0&&$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['new']) {?>replynew<?php } else { ?>reply<?php }?><?php if ($_smarty_tpl->tpl_vars['read']->value&&in_array($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'],$_smarty_tpl->tpl_vars['read']->value)) {?> read<?php }?>" href="index.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['subject'];?>
</a><?php } else { ?><span class="<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid']==0) {?><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['new']) {?>currentthreadnew<?php } else { ?>currentthread<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['new']) {?>currentreplynew<?php } else { ?>currentreply<?php }?><?php }?>"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['subject'];?>
</span><?php }?><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['no_text']) {?> <img class="no-text" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/no_text.png" title="<?php echo $_smarty_tpl->getConfigVariable('no_text_title');?>
" alt="[ <?php echo $_smarty_tpl->getConfigVariable('no_text_alt');?>
 ]" width="11" height="9" /><?php }?> - <strong><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['name'];?>
</strong>, <span id="p<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
" class="tail"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['formated_time'];?>
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid']==0) {?> <a href="index.php?mode=thread&amp;id=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('open_whole_thread');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/complete_thread.png" title="<?php echo $_smarty_tpl->getConfigVariable('open_whole_thread');?>
" alt="[*]" width="11" height="11" /></a><?php }?><?php if ($_smarty_tpl->tpl_vars['admin']->value||$_smarty_tpl->tpl_vars['mod']->value) {?> <a id="marklink_<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
" href="index.php?mode=posting&amp;mark=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('mark_linktitle');?>
" onclick="mark(<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/marked.png','<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/unmarked.png','<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/mark_process.png','<?php echo $_smarty_tpl->getConfigVariable('mark_linktitle');?>
','<?php echo $_smarty_tpl->getConfigVariable('unmark_linktitle');?>
'); return false"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['marked']==0) {?><img id="markimg_<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/unmarked.png" title="<?php echo $_smarty_tpl->getConfigVariable('mark_linktitle');?>
" alt="[○]" width="11" height="11" /><?php } else { ?><img id="markimg_<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/marked.png" title="<?php echo $_smarty_tpl->getConfigVariable('unmark_linktitle');?>
" alt="[●]" width="11" height="11" title="<?php echo $_smarty_tpl->getConfigVariable('unmark_linktitle');?>
" /><?php }?></a> <a href="index.php?mode=posting&amp;delete_posting=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=entry" title="<?php echo $_smarty_tpl->getConfigVariable('delete_posting_title');?>
" onclick="return delete_posting_confirm(this, '<?php echo rawurlencode($_smarty_tpl->getConfigVariable('delete_posting_confirm'));?>
')"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/delete_posting.png" alt="[x]" width="9" height="9" /></a><?php }?></span>
<?php if (is_array($_smarty_tpl->tpl_vars['child_array']->value[$_smarty_tpl->tpl_vars['element']->value])) {?>
<ul<?php if ($_smarty_tpl->tpl_vars['fold_threads']->value==1) {?> style="display:none;"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['level']->value<$_smarty_tpl->tpl_vars['settings']->value['deep_reply']) {?>reply<?php } elseif ($_smarty_tpl->tpl_vars['level']->value>=$_smarty_tpl->tpl_vars['settings']->value['deep_reply']&&$_smarty_tpl->tpl_vars['level']->value<$_smarty_tpl->tpl_vars['settings']->value['very_deep_reply']) {?>deep-reply<?php } else { ?>very-deep-reply<?php }?>"><?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['child_array']->value[$_smarty_tpl->tpl_vars['element']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?><?php smarty_template_function_tree($_smarty_tpl,array('element'=>$_smarty_tpl->tpl_vars['child']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>
<?php } ?></ul><?php }?></li>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<?php smarty_template_function_tree($_smarty_tpl,array('element'=>$_smarty_tpl->tpl_vars['tid']->value));?>

</ul>
<?php }} ?>
