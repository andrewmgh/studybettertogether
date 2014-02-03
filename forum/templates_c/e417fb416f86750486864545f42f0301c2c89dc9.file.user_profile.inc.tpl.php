<?php /* Smarty version Smarty-3.1.15, created on 2014-02-02 18:15:01
         compiled from "themes\default\subtemplates\user_profile.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1066552ee8b257ebe03-30260121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e417fb416f86750486864545f42f0301c2c89dc9' => 
    array (
      0 => 'themes\\default\\subtemplates\\user_profile.inc.tpl',
      1 => 1308248040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1066552ee8b257ebe03-30260121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_file' => 0,
    'user_name' => 0,
    'gender' => 0,
    'THEMES_DIR' => 0,
    'theme' => 0,
    'p_user_type' => 0,
    'user_is_locked' => 0,
    'avatar' => 0,
    'user_hp' => 0,
    'user_email' => 0,
    'p_user_id' => 0,
    'user_real_name' => 0,
    'birthdate' => 0,
    'years' => 0,
    'user_location' => 0,
    'user_registered' => 0,
    'user_last_login' => 0,
    'logins' => 0,
    'logins_per_day' => 0,
    'postings' => 0,
    'postings_percent' => 0,
    'postings_per_day' => 0,
    'last_posting_subject' => 0,
    'last_posting_time' => 0,
    'last_posting_id' => 0,
    'profile' => 0,
    'mod' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52ee8b25a26395_84458070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ee8b25a26395_84458070')) {function content_52ee8b25a26395_84458070($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\studybettertogether\\forum\\modules\\smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\studybettertogether\\forum\\modules\\smarty\\plugins\\modifier.date_format.php';
?><?php  $_config = new Smarty_Internal_Config($_smarty_tpl->tpl_vars['language_file']->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("user_show", 'local'); ?>
<?php if ($_smarty_tpl->tpl_vars['user_name']->value) {?>
<table class="normaltab wide" border="0" cellpadding="5" cellspacing="1">
<tr>
<td class="c"><p class="userdata"><strong><?php echo $_smarty_tpl->getConfigVariable('user_name');?>
</strong></p></td>
<td class="d"><p class="userdata"><strong><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</strong><?php if ($_smarty_tpl->tpl_vars['gender']->value==1) {?> <img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/male.png" alt="<?php echo $_smarty_tpl->getConfigVariable('male');?>
" width="16" height="16" /><?php } elseif ($_smarty_tpl->tpl_vars['gender']->value==2) {?> <img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/female.png" alt="<?php echo $_smarty_tpl->getConfigVariable('female');?>
" width="16" height="16" /><?php }?> <span class="xsmall"><?php if ($_smarty_tpl->tpl_vars['p_user_type']->value==2) {?>(<?php echo $_smarty_tpl->getConfigVariable('admin');?>
)<?php } elseif ($_smarty_tpl->tpl_vars['p_user_type']->value==1) {?>(<?php echo $_smarty_tpl->getConfigVariable('mod');?>
)<?php } else { ?><!--(<?php echo $_smarty_tpl->getConfigVariable('user');?>
)--><?php }?></span><?php if ($_smarty_tpl->tpl_vars['user_is_locked']->value) {?> <span class="small user-locked">(<?php echo $_smarty_tpl->getConfigVariable('user_locked');?>
)</span><?php }?></p></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['avatar']->value) {?>
<tr>
<td class="c"><p class="userdata"><strong><?php echo $_smarty_tpl->getConfigVariable('user_avatar');?>
</strong></p></td>
<td class="d"><p class="userdata"><img src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['image'];?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('avatar_img_alt');?>
" width="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['height'];?>
" /></p></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['user_hp']->value||$_smarty_tpl->tpl_vars['user_email']->value) {?>
<tr>
<td class="c"><p class="userdata"><strong><?php echo $_smarty_tpl->getConfigVariable('user_hp_email');?>
</strong></p></td>
<td class="d"><p class="userdata"><?php if ($_smarty_tpl->tpl_vars['user_hp']->value==''&&$_smarty_tpl->tpl_vars['user_email']->value=='') {?>-<?php }?><?php if ($_smarty_tpl->tpl_vars['user_hp']->value!='') {?><a href="<?php echo $_smarty_tpl->tpl_vars['user_hp']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['user_hp']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/homepage.png" alt="<?php echo $_smarty_tpl->getConfigVariable('homepage');?>
" width="13" height="13" /></a> &nbsp;<?php }?><?php if ($_smarty_tpl->tpl_vars['user_email']->value) {?><a href="index.php?mode=contact&amp;user_id=<?php echo $_smarty_tpl->tpl_vars['p_user_id']->value;?>
" title="<?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('mailto_user'),"[user]",$_smarty_tpl->tpl_vars['user_name']->value);?>
" rel="nofollow"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/email.png" alt="<?php echo $_smarty_tpl->getConfigVariable('email');?>
" width="13" height="10" /></a><?php }?></p></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['user_real_name']->value) {?>
<tr>
<td class="c"><p class="userdata"><strong><?php echo $_smarty_tpl->getConfigVariable('user_real_name');?>
</strong></p></td>
<td class="d"><p class="userdata"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_real_name']->value)===null||$tmp==='' ? '-' : $tmp);?>
</p></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['birthdate']->value) {?>
<tr>
<td class="c"><p class="userdata"><strong><?php echo $_smarty_tpl->getConfigVariable('age_birthday');?>
</strong></p></td>
<td class="d"><p class="userdata"><?php echo $_smarty_tpl->tpl_vars['years']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['birthdate']->value['year'];?>
-<?php echo $_smarty_tpl->tpl_vars['birthdate']->value['month'];?>
-<?php echo $_smarty_tpl->tpl_vars['birthdate']->value['day'];?>
</p></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['user_location']->value) {?>
<tr>
<td class="c"><p class="userdata"><strong><?php echo $_smarty_tpl->getConfigVariable('user_location');?>
</strong></p></td>
<td class="d"><p class="userdata"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_location']->value)===null||$tmp==='' ? '-' : $tmp);?>
</p></td>
</tr>
<?php }?>
<tr>
<td class="c"><p class="userdata"><strong><?php echo $_smarty_tpl->getConfigVariable('user_registered');?>
</strong></p></td>
<td class="d"><p class="userdata"><?php echo $_smarty_tpl->tpl_vars['user_registered']->value;?>
</p></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['user_last_login']->value) {?>
<tr>
<td class="c"><p class="userdata"><strong><?php echo $_smarty_tpl->getConfigVariable('user_last_login');?>
</strong></p></td>
<td class="d"><p class="userdata"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_last_login']->value)===null||$tmp==='' ? '-' : $tmp);?>
</p></td>
</tr>
<?php }?>
<tr>
<td class="c"><p class="userdata"><strong><?php echo $_smarty_tpl->getConfigVariable('user_logins');?>
</strong></p></td>
<td class="d"><p class="userdata"><?php echo $_smarty_tpl->tpl_vars['logins']->value;?>
</p></td>
</tr>
<tr>
<td class="c"><p class="userdata"><strong><?php echo $_smarty_tpl->getConfigVariable('logins_per_day');?>
</strong></p></td>
<td class="d"><p class="userdata"><?php echo $_smarty_tpl->tpl_vars['logins_per_day']->value;?>
</p></td>
</tr>
<tr>
<td class="c"><p class="userdata"><strong><?php echo $_smarty_tpl->getConfigVariable('user_postings');?>
</strong></p></td>
<td class="d"><p class="userdata"><?php echo $_smarty_tpl->tpl_vars['postings']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['postings_percent']->value;?>
%)<?php if ($_smarty_tpl->tpl_vars['postings']->value>0) {?> &nbsp;<span class="small">[ <a href="index.php?mode=user&amp;action=show_posts&amp;id=<?php echo $_smarty_tpl->tpl_vars['p_user_id']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('show_postings_link');?>
</a> ]</span><?php }?></p></td>
</tr>
<tr>
<td class="c"><p class="userdata"><strong><?php echo $_smarty_tpl->getConfigVariable('postings_per_day');?>
</strong></p></td>
<td class="d"><p class="userdata"><?php echo $_smarty_tpl->tpl_vars['postings_per_day']->value;?>
</p></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['last_posting_subject']->value) {?>
<tr>
<td class="c"><p class="userdata"><strong><?php echo $_smarty_tpl->getConfigVariable('last_posting');?>
</strong></p></td>
<td class="d"><p class="userdata"><?php if ($_smarty_tpl->tpl_vars['last_posting_subject']->value) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['last_posting_time']->value,$_smarty_tpl->getConfigVariable('time_format'));?>
: <a id="user-last-posting" href="index.php?mode=entry&amp;id=<?php echo $_smarty_tpl->tpl_vars['last_posting_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['last_posting_subject']->value;?>
</a><?php } else { ?>-<?php }?></p></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['profile']->value) {?>
<tr>
<td class="c"><p class="userdata"><strong><?php echo $_smarty_tpl->getConfigVariable('user_profile');?>
</strong></p></td>
<td class="d"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['profile']->value)===null||$tmp==='' ? '<p>-</p>' : $tmp);?>
</td>
</tr>
<?php }?>
</table>

<?php if ($_smarty_tpl->tpl_vars['mod']->value||$_smarty_tpl->tpl_vars['admin']->value) {?>
<ul class="adminmenu">
<?php if ($_smarty_tpl->tpl_vars['admin']->value) {?><?php if ($_smarty_tpl->tpl_vars['postings']->value) {?><li><a href="index.php?mode=admin&amp;user_delete_all_entries=<?php echo $_smarty_tpl->tpl_vars['p_user_id']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/delete_entries.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('user_delete_all_entries');?>
</span></a></li><?php }?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['p_user_type']->value==0) {?><li><a href="index.php?mode=user&amp;user_lock=<?php echo $_smarty_tpl->tpl_vars['p_user_id']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['user_is_locked']->value) {?><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/unlock_user.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('user_unlock_account');?>
</span></a><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/lock_user.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('user_lock_account');?>
</span></a><?php }?></li><?php }?>
<?php if ($_smarty_tpl->tpl_vars['admin']->value) {?><li><a href="index.php?mode=admin&amp;edit_user=<?php echo $_smarty_tpl->tpl_vars['p_user_id']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/edit_user.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('user_edit_account');?>
</span></a></li><?php }?>
<?php if ($_smarty_tpl->tpl_vars['admin']->value) {?><li><a href="index.php?mode=admin&amp;delete_user=<?php echo $_smarty_tpl->tpl_vars['p_user_id']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/delete_user.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('user_delete_account');?>
</span></a></li><?php }?>
</ul>
<?php }?>

<?php } else { ?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('user_account_doesnt_exist');?>
</p>
<?php }?>
<?php }} ?>
