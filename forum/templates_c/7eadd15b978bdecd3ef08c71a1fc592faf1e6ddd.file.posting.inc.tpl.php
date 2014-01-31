<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 19:20:04
         compiled from "themes\default\subtemplates\posting.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2860152b1f564303d08-84881056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7eadd15b978bdecd3ef08c71a1fc592faf1e6ddd' => 
    array (
      0 => 'themes\\default\\subtemplates\\posting.inc.tpl',
      1 => 1351953704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2860152b1f564303d08-84881056',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_file' => 0,
    'captcha' => 0,
    'no_authorisation' => 0,
    'settings' => 0,
    'text' => 0,
    'posting_mode' => 0,
    'id' => 0,
    'name_repl_subnav' => 0,
    'errors' => 0,
    'error' => 0,
    'text_length' => 0,
    'word' => 0,
    'minutes' => 0,
    'not_accepted_word' => 0,
    'not_accepted_words' => 0,
    'minutes_left_to_edit' => 0,
    'preview' => 0,
    'preview_hp' => 0,
    'email' => 0,
    'preview_subject' => 0,
    'category_name' => 0,
    'preview_location' => 0,
    'preview_name' => 0,
    'email_hp' => 0,
    'preview_formated_time' => 0,
    'preview_text' => 0,
    'preview_signature' => 0,
    'show_signature' => 0,
    'back' => 0,
    'mode' => 0,
    'uniqid' => 0,
    'session' => 0,
    'quote' => 0,
    'form_type' => 0,
    'terms_of_use_agreement' => 0,
    'name' => 0,
    'hp' => 0,
    'location' => 0,
    'user' => 0,
    'setcookie' => 0,
    'cookie' => 0,
    'categories' => 0,
    'pid' => 0,
    'key' => 0,
    'p_category' => 0,
    'val' => 0,
    'subject' => 0,
    'admin' => 0,
    'mod' => 0,
    'tags' => 0,
    'smilies' => 0,
    'upload_images' => 0,
    'code_languages' => 0,
    'code_language' => 0,
    'smiley' => 0,
    'signature' => 0,
    'provide_email_notification' => 0,
    'provide_sticky' => 0,
    'email_notification' => 0,
    'sticky' => 0,
    'terms_of_use_agree' => 0,
    'terms_of_use_url' => 0,
    'THEMES_DIR' => 0,
    'theme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b1f56459fd26_78050070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b1f56459fd26_78050070')) {function content_52b1f56459fd26_78050070($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\studybettertogether\\forum\\modules\\smarty\\plugins\\modifier.replace.php';
?><?php  $_config = new Smarty_Internal_Config($_smarty_tpl->tpl_vars['language_file']->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("posting", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config($_smarty_tpl->tpl_vars['language_file']->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("thread_entry", 'local'); ?>
<?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?><?php  $_config = new Smarty_Internal_Config($_smarty_tpl->tpl_vars['language_file']->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("captcha", 'local'); ?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['no_authorisation']->value) {?>
<p class="caution"><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['no_authorisation']->value),"[minutes]",$_smarty_tpl->tpl_vars['settings']->value['edit_period']);?>
</p>
<?php if ($_smarty_tpl->tpl_vars['text']->value) {?>
<textarea onfocus="this.select()" onclick="this.select()" readonly="readonly" cols="80" rows="21" name="text"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</textarea>
<?php }?>
<?php } else { ?>
<h1><?php if ($_smarty_tpl->tpl_vars['posting_mode']->value==0&&$_smarty_tpl->tpl_vars['id']->value==0) {?><?php echo $_smarty_tpl->getConfigVariable('new_topic_hl');?>
<?php } elseif ($_smarty_tpl->tpl_vars['posting_mode']->value==0&&$_smarty_tpl->tpl_vars['id']->value>0) {?><?php echo $_smarty_tpl->getConfigVariable('reply_hl');?>
<?php } elseif ($_smarty_tpl->tpl_vars['posting_mode']->value==1) {?><?php echo $_smarty_tpl->getConfigVariable('edit_hl');?>
<?php }?></h1>
<?php if ($_smarty_tpl->tpl_vars['posting_mode']->value==0&&$_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['name_repl_subnav']->value) {?>
<p id="reply-to"><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('reply_to_posting_marking'),"[name]",$_smarty_tpl->tpl_vars['name_repl_subnav']->value);?>
</p>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('error_headline');?>
</p>
<ul style="margin-bottom:25px;">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['mysec'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['name'] = 'mysec';
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['total']);
?>
<li><?php $_smarty_tpl->tpl_vars["error"] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mysec']['index']], null, 0);?><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['error']->value),"[text_length]",$_smarty_tpl->tpl_vars['text_length']->value),"[text_maxlength]",$_smarty_tpl->tpl_vars['settings']->value['text_maxlength']),"[word]",$_smarty_tpl->tpl_vars['word']->value),"[minutes]",$_smarty_tpl->tpl_vars['minutes']->value),"[not_accepted_word]",$_smarty_tpl->tpl_vars['not_accepted_word']->value),"[not_accepted_words]",$_smarty_tpl->tpl_vars['not_accepted_words']->value);?>
</li>
<?php endfor; endif; ?>
</ul>
<?php } elseif (isset($_smarty_tpl->tpl_vars['minutes_left_to_edit']->value)) {?>
<p class="caution"><?php if ($_smarty_tpl->tpl_vars['settings']->value['user_edit_if_no_replies']==1) {?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('minutes_left_to_edit_reply'),"[minutes]",$_smarty_tpl->tpl_vars['minutes_left_to_edit']->value);?>
<?php } else { ?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('minutes_left_to_edit'),"[minutes]",$_smarty_tpl->tpl_vars['minutes_left_to_edit']->value);?>
<?php }?></p>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
<?php if ($_smarty_tpl->tpl_vars['preview_hp']->value&&!$_smarty_tpl->tpl_vars['email']->value) {?>
<?php $_smarty_tpl->tpl_vars['email_hp'] = new Smarty_variable(" <a href=\"".((string)$_smarty_tpl->tpl_vars['preview_hp']->value)."\"><img src=\"".((string)$_smarty_tpl->tpl_vars['THEMES_DIR']->value)."/".((string)$_smarty_tpl->tpl_vars['theme']->value)."/images/homepage.png\" alt=\"".((string)$_smarty_tpl->tpl_vars['homepage_alt']->value)."\" width=\"13\" height=\"13\" /></a>", null, 0);?>
<?php } elseif (!$_smarty_tpl->tpl_vars['preview_hp']->value&&$_smarty_tpl->tpl_vars['email']->value) {?>
<?php $_smarty_tpl->tpl_vars['email_hp'] = new Smarty_variable(" <a href=\"index.php?mode=contact&amp;id=".((string)$_smarty_tpl->tpl_vars['id']->value)."\"><img src=\"".((string)$_smarty_tpl->tpl_vars['THEMES_DIR']->value)."/".((string)$_smarty_tpl->tpl_vars['theme']->value)."/images/email.png\" alt=\"".((string)$_smarty_tpl->tpl_vars['email_alt']->value)."\" width=\"13\" height=\"10\" /></a>", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['preview_hp']->value&&$_smarty_tpl->tpl_vars['email']->value) {?>
<?php $_smarty_tpl->tpl_vars['email_hp'] = new Smarty_variable(" <a href=\"".((string)$_smarty_tpl->tpl_vars['preview_hp']->value)."\"><img src=\"".((string)$_smarty_tpl->tpl_vars['THEMES_DIR']->value)."/".((string)$_smarty_tpl->tpl_vars['theme']->value)."/images/homepage.png\" alt=\"".((string)$_smarty_tpl->tpl_vars['homepage_alt']->value)."\" width=\"13\" height=\"13\" /></a> <a href=\"index.php?mode=contact&amp;id=".((string)$_smarty_tpl->tpl_vars['id']->value)."\"><img src=\"".((string)$_smarty_tpl->tpl_vars['THEMES_DIR']->value)."/".((string)$_smarty_tpl->tpl_vars['theme']->value)."/images/email.png\" alt=\"".((string)$_smarty_tpl->tpl_vars['email_alt']->value)."\" width=\"13\" height=\"10\" /></a>", null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['email_hp'] = new Smarty_variable('', null, 0);?>
<?php }?>
<h3 class="preview"><?php echo $_smarty_tpl->getConfigVariable('preview_headline');?>
</h3>
<div class="preview">
<div class="posting">
<h1 class="postingheadline"><?php echo $_smarty_tpl->tpl_vars['preview_subject']->value;?>
<?php if ($_smarty_tpl->tpl_vars['category_name']->value) {?> <span class="category">(<?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
)</span><?php }?></h1>
<p class="author"><?php if ($_smarty_tpl->tpl_vars['preview_location']->value) {?><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('posted_by_location'),"[name]",$_smarty_tpl->tpl_vars['preview_name']->value),"[email_hp]",$_smarty_tpl->tpl_vars['email_hp']->value),"[location]",$_smarty_tpl->tpl_vars['preview_location']->value),"[time]",$_smarty_tpl->tpl_vars['preview_formated_time']->value);?>
<?php } else { ?><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('posted_by'),"[name]",$_smarty_tpl->tpl_vars['preview_name']->value),"[email_hp]",$_smarty_tpl->tpl_vars['email_hp']->value),"[time]",$_smarty_tpl->tpl_vars['preview_formated_time']->value);?>
<?php }?></p>
<?php if ($_smarty_tpl->tpl_vars['preview_text']->value) {?><?php echo $_smarty_tpl->tpl_vars['preview_text']->value;?>
<?php } else { ?><p><?php echo $_smarty_tpl->getConfigVariable('no_text');?>
</p><?php }?>
<?php if ($_smarty_tpl->tpl_vars['preview_signature']->value&&$_smarty_tpl->tpl_vars['show_signature']->value==1) {?>
<p class="signature">---<br />
<?php echo $_smarty_tpl->tpl_vars['preview_signature']->value;?>
</p>
<?php }?>
</div>
</div>
<?php }?>
<form action="index.php" method="post" id="postingform" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="back" value="<?php echo $_smarty_tpl->tpl_vars['back']->value;?>
" />
<input type="hidden" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
" />
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
<input type="hidden" name="uniqid" value="<?php echo $_smarty_tpl->tpl_vars['uniqid']->value;?>
" />
<input type="hidden" name="posting_mode" value="<?php echo $_smarty_tpl->tpl_vars['posting_mode']->value;?>
" />
<?php if ($_smarty_tpl->tpl_vars['session']->value) {?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['session']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['session']->value['id'];?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['quote']->value) {?>
<input type="hidden" id="quote" value="true" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['form_type']->value==0) {?>
<input type="hidden" id="name_required" value="true" />
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['settings']->value['empty_postings_possible']) {?>
<input type="hidden" id="text_required" value="true" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['terms_of_use_agreement']->value) {?>
<input type="hidden" id="terms_of_use_required" value="true" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['form_type']->value==0) {?>
<fieldset>

<p>
<label for="name" class="input"><?php echo $_smarty_tpl->getConfigVariable('name_marking');?>
</label>
<input id="name" type="text" size="40" name="name" value="<?php if ($_smarty_tpl->tpl_vars['name']->value) {?><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<?php }?>" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['username_maxlength'];?>
"  tabindex="1" />
</p>

<p>
<label for="email" class="input"><?php echo $_smarty_tpl->getConfigVariable('email_marking');?>
</label>
<input id="email" type="text" size="40" name="email" value="<?php if ($_smarty_tpl->tpl_vars['email']->value) {?><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<?php }?>" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['email_maxlength'];?>
" tabindex="2" />&nbsp;<span class="xsmall"><?php echo $_smarty_tpl->getConfigVariable('optional_email');?>
</span>
</p>

<p>
<label for="hp" class="input"><?php echo $_smarty_tpl->getConfigVariable('hp_marking');?>
</label>
<input id="hp" type="text" size="40" name="hp" value="<?php if ($_smarty_tpl->tpl_vars['hp']->value) {?><?php echo $_smarty_tpl->tpl_vars['hp']->value;?>
<?php }?>" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['hp_maxlength'];?>
" tabindex="3" />&nbsp;<span class="xsmall"><?php echo $_smarty_tpl->getConfigVariable('optional');?>
</span>
</p>

<p>
<label for="location" class="input"><?php echo $_smarty_tpl->getConfigVariable('location_marking');?>
</label>
<input id="location" type="text" size="40" name="location" value="<?php if ($_smarty_tpl->tpl_vars['location']->value) {?><?php echo $_smarty_tpl->tpl_vars['location']->value;?>
<?php }?>" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['location_maxlength'];?>
" tabindex="4" />&nbsp;<span class="xsmall"><?php echo $_smarty_tpl->getConfigVariable('optional');?>
</span>
</p>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['remember_userdata']==1&&$_smarty_tpl->tpl_vars['posting_mode']->value==0&&!$_smarty_tpl->tpl_vars['user']->value) {?>
<p>
<input id="setcookie" class="checkbox" type="checkbox" name="setcookie" value="1"<?php if ($_smarty_tpl->tpl_vars['setcookie']->value) {?> checked="checked"<?php }?> />&nbsp;<label for="setcookie"><?php echo $_smarty_tpl->getConfigVariable('remember_userdata_marking');?>
</label><?php if ($_smarty_tpl->tpl_vars['cookie']->value) {?> &nbsp;<span id="delete_cookie"><a href="index.php?mode=delete_cookie"><?php echo $_smarty_tpl->getConfigVariable('delete_cookie_linkname');?>
</a></span><?php }?>
</p>
<?php }?>

</fieldset>
<?php }?>

<fieldset>
<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
<p><label for="p_category" class="input"><?php echo $_smarty_tpl->getConfigVariable('category_marking');?>
</label>
<select id="p_category" size="1" name="p_category" tabindex="5"<?php if ($_smarty_tpl->tpl_vars['posting_mode']->value==0&&$_smarty_tpl->tpl_vars['id']->value>0||$_smarty_tpl->tpl_vars['posting_mode']->value==1&&$_smarty_tpl->tpl_vars['pid']->value>0) {?> disabled="disabled"<?php }?>>
<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['key']->value!=0) {?><option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['p_category']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option><?php }?>
<?php } ?>
</select></p>
<?php }?>

<p><label for="subject" class="input"><?php echo $_smarty_tpl->getConfigVariable('subject_marking');?>
</label>
<input id="subject" type="text" size="50" name="subject" value="<?php if ($_smarty_tpl->tpl_vars['subject']->value) {?><?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
<?php }?>" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['subject_maxlength'];?>
" tabindex="6" />
</p>

<?php if (($_smarty_tpl->tpl_vars['admin']->value||$_smarty_tpl->tpl_vars['mod']->value)&&$_smarty_tpl->tpl_vars['settings']->value['tags']) {?>
<p>
<label for="tags" class="input"><?php echo $_smarty_tpl->getConfigVariable('tags_marking');?>
</label>
<input id="tags" type="text" size="50" name="tags" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tags']->value)===null||$tmp==='' ? '' : $tmp);?>
" maxlength="253" />&nbsp;<span class="xsmall"><?php echo $_smarty_tpl->getConfigVariable('tags_note');?>
</span>
</p>
<?php }?>
</fieldset>

<fieldset id="message">
<label for="text" class="textarea"><?php echo $_smarty_tpl->getConfigVariable('message_marking');?>
</label><br />

<textarea id="text" cols="80" rows="21" name="text" tabindex="7"><?php if ($_smarty_tpl->tpl_vars['text']->value) {?><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
<?php }?></textarea>

<div id="format-bar">
<?php if ($_smarty_tpl->tpl_vars['settings']->value['bbcode']) {?>
<div id="bbcode-bar">

</div>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['smilies']&&$_smarty_tpl->tpl_vars['smilies']->value) {?>
<div id="smiley-bar">

</div>
<?php }?>


<dl id="bbcode-instructions">
<dt id="b" title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_bold_label');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_bold_title');?>
</dt>
<dd><?php echo $_smarty_tpl->getConfigVariable('bbcode_bold_instruction');?>
</dd>
<dt id="i" title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_italic_label');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_italic_title');?>
</dt>
<dd><?php echo $_smarty_tpl->getConfigVariable('bbcode_italic_instruction');?>
</dd>
<dt id="link" title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_link_label');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_link_title');?>
</dt>
<dd><?php echo $_smarty_tpl->getConfigVariable('bbcode_link_instruction');?>
</dd>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['bbcode_color']) {?>
<dt id="color" title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_color_label');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_color_title');?>
</dt>
<dd><?php echo $_smarty_tpl->getConfigVariable('bbcode_color_instruction');?>
</dd>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['bbcode_size']) {?>
<dt id="size" title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_size_label');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_size_title');?>
</dt>
<dd id="small" title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_size_label_small');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_size_instruction_small');?>
</dd>
<dd id="large" title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_size_label_large');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_size_instruction_large');?>
</dd>
<?php }?>
<dt id="list" title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_list_label');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_list_title');?>
</dt>
<dd><?php echo $_smarty_tpl->getConfigVariable('bbcode_list_instruction');?>
</dd>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['bbcode_img']) {?>
<dt id="img" title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_image_label');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_image_title');?>
</dt>
<dd title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_image_label_default');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_image_instr_default');?>
</dd>
<dd id="left" title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_image_label_left');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_image_instr_left');?>
</dd>
<dd id="right" title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_image_label_right');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_image_instr_right');?>
</dd>
<dd id="thumbnail" title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_image_label_thumb');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_image_instr_thumb');?>
</dd>
<dd id="thumbnail-left" title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_image_label_thumb_left');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_image_instr_thumb_left');?>
</dd>
<dd id="thumbnail-right" title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_image_label_thumb_right');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_image_instr_thumb_right');?>
</dd>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['upload_images']->value) {?>
<dt id="upload" title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_upload_label');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_upload_title');?>
</dt>
<dd><a href="index.php?mode=upload_image"><?php echo $_smarty_tpl->getConfigVariable('bbcode_upload_instruction');?>
</a></dd>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['bbcode_flash']) {?>
<dt id="flash" title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_flash_label');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_flash_title');?>
</dt>
<dd><?php echo $_smarty_tpl->getConfigVariable('bbcode_flash_instruction');?>
</dd>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['bbcode_tex']) {?>
<dt id="tex" title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_tex_label');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_tex_title');?>
</dt>
<dd><?php echo $_smarty_tpl->getConfigVariable('bbcode_tex_instruction');?>
</dd>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['bbcode_code']) {?>
<dt id="code" title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_code_label');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_code_title');?>
</dt>
<dd id="inlinecode" title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_code_label_inline');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_code_instruction_inline');?>
</dd>
<dd title="<?php echo $_smarty_tpl->getConfigVariable('bbcode_code_label_general');?>
"><?php echo $_smarty_tpl->getConfigVariable('bbcode_code_instruction_general');?>
</dd>
<?php if ($_smarty_tpl->tpl_vars['code_languages']->value) {?>
<?php  $_smarty_tpl->tpl_vars['code_language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['code_language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['code_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['code_language']->key => $_smarty_tpl->tpl_vars['code_language']->value) {
$_smarty_tpl->tpl_vars['code_language']->_loop = true;
?>
<dd id="<?php echo $_smarty_tpl->tpl_vars['code_language']->value;?>
" title="<?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('bbcode_code_label_specific'),"[language]",$_smarty_tpl->tpl_vars['code_language']->value);?>
"><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('bbcode_code_instruction_spec'),"[language]",$_smarty_tpl->tpl_vars['code_language']->value);?>
</dd>
<?php } ?>
<?php }?>
<?php }?>
</dl>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['smilies']&&$_smarty_tpl->tpl_vars['smilies']->value) {?>
<dl id="smiley-instructions">
<?php  $_smarty_tpl->tpl_vars['smiley'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['smiley']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['smilies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["smilies"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['smiley']->key => $_smarty_tpl->tpl_vars['smiley']->value) {
$_smarty_tpl->tpl_vars['smiley']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["smilies"]['index']++;
?>
<dt class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['smilies']['index']<6) {?>default<?php } else { ?>additional<?php }?>" title="<?php echo $_smarty_tpl->getConfigVariable('insert_smiley_title');?>
"><?php echo $_smarty_tpl->tpl_vars['smiley']->value['code'];?>
</dt>
<dd><img src="images/smilies/<?php echo $_smarty_tpl->tpl_vars['smiley']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['smiley']->value['code'];?>
" /></dd>
<?php } ?>
</dl>
<?php }?>

</div>
</fieldset>

<?php if ($_smarty_tpl->tpl_vars['signature']->value||$_smarty_tpl->tpl_vars['provide_email_notification']->value||$_smarty_tpl->tpl_vars['provide_sticky']->value||$_smarty_tpl->tpl_vars['terms_of_use_agreement']->value) {?>
<fieldset>
<?php if ($_smarty_tpl->tpl_vars['signature']->value) {?>
<p>
<input id="show_signature" type="checkbox" name="show_signature" value="1"<?php if ($_smarty_tpl->tpl_vars['show_signature']->value&&$_smarty_tpl->tpl_vars['show_signature']->value==1) {?> checked="checked"<?php }?> />&nbsp;<label for="show_signature"><?php echo $_smarty_tpl->getConfigVariable('show_signature_marking');?>
</label>
</p>
<?php }?>
<!--
<?php if ($_smarty_tpl->tpl_vars['provide_email_notification']->value) {?>
<p>
<input id="email_notification" type="checkbox" name="email_notification" value="1"<?php if ($_smarty_tpl->tpl_vars['email_notification']->value&&$_smarty_tpl->tpl_vars['email_notification']->value==1) {?> checked="checked"<?php }?> />&nbsp;<label for="email_notification"><?php if ($_smarty_tpl->tpl_vars['id']->value==0) {?><?php echo $_smarty_tpl->getConfigVariable('email_notific_reply_thread');?>
<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('email_notific_reply_post');?>
<?php }?></label>
</p>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['provide_sticky']->value) {?>
<p>
<input id="sticky" type="checkbox" name="sticky" value="1"<?php if ($_smarty_tpl->tpl_vars['sticky']->value&&$_smarty_tpl->tpl_vars['sticky']->value==1) {?> checked="checked"<?php }?> />&nbsp;<label for="sticky"><?php echo $_smarty_tpl->getConfigVariable('sticky_thread');?>
</label>
</p>
<?php }?>
-->
<?php if ($_smarty_tpl->tpl_vars['terms_of_use_agreement']->value) {?>
<?php $_smarty_tpl->tpl_vars['terms_of_use_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['terms_of_use_url'], null, 0);?>
<p>
<input id="terms_of_use_agree" type="checkbox" name="terms_of_use_agree" value="1"<?php if ($_smarty_tpl->tpl_vars['terms_of_use_agree']->value&&$_smarty_tpl->tpl_vars['terms_of_use_agree']->value==1) {?> checked="checked"<?php }?> />&nbsp;<label for="terms_of_use_agree"><?php if ($_smarty_tpl->tpl_vars['terms_of_use_url']->value) {?><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('terms_of_use_agreement'),"[[","<a id=\"terms_of_use\" href=\"".((string)$_smarty_tpl->tpl_vars['terms_of_use_url']->value)."\">"),"]]","</a>");?>
<?php } else { ?><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('terms_of_use_agreement'),"[[",''),"]]",'');?>
<?php }?></label>
</p>
<?php }?>
</fieldset>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
<fieldset>
<legend><?php echo $_smarty_tpl->getConfigVariable('captcha_marking');?>
</legend>
<?php if ($_smarty_tpl->tpl_vars['captcha']->value['type']==2) {?>
<p><img class="captcha" src="modules/captcha/captcha_image.php?<?php echo $_smarty_tpl->tpl_vars['session']->value['name'];?>
=<?php echo $_smarty_tpl->tpl_vars['session']->value['id'];?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('captcha_image_alt');?>
" width="180" height="40" /><br />
<label for="captcha_code"><?php echo $_smarty_tpl->getConfigVariable('captcha_expl_image');?>
</label><br />
<input id="captcha_code" type="text" name="captcha_code" value="" size="10" /></p>
<?php } else { ?>
<p><label for="captcha_code"><?php echo $_smarty_tpl->getConfigVariable('captcha_expl_math');?>
 <?php echo $_smarty_tpl->tpl_vars['captcha']->value['number_1'];?>
 + <?php echo $_smarty_tpl->tpl_vars['captcha']->value['number_2'];?>
 = </label><input id="captcha_code" type="text" name="captcha_code" value="" size="5" maxlength="5" /></p>
<?php }?>
</fieldset>
<?php }?>

<fieldset>
<p><input type="submit" name="save_entry" value="<?php echo $_smarty_tpl->getConfigVariable('message_submit_button');?>
" title="<?php echo $_smarty_tpl->getConfigVariable('message_submit_title');?>
" tabindex="8" />&nbsp;<input type="submit" name="preview" value="<?php echo $_smarty_tpl->getConfigVariable('message_preview_button');?>
" title="<?php echo $_smarty_tpl->getConfigVariable('message_preview_title');?>
" tabindex="9" /> <img id="throbber-submit" style="visibility:hidden;" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/throbber_submit.gif" alt="" width="16" height="16" /></p>
</fieldset>

</div>
</form>
<?php }?>
<?php }} ?>
