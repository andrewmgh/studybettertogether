<?php /* Smarty version Smarty-3.1.15, created on 2014-01-28 16:09:46
         compiled from "themes\default\subtemplates\admin.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2632752b1e827f02ed2-11389556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43480ddd29ba0f076743f14186e3eea2c4725601' => 
    array (
      0 => 'themes\\default\\subtemplates\\admin.inc.tpl',
      1 => 1390923675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2632752b1e827f02ed2-11389556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b1e828c30743_42423200',
  'variables' => 
  array (
    'language_file' => 0,
    'action' => 0,
    'saved' => 0,
    'settings' => 0,
    'languages' => 0,
    'l' => 0,
    'time_zones' => 0,
    'tz' => 0,
    'themes' => 0,
    't' => 0,
    'input_edit_delay' => 0,
    'input_edit_max_time_period' => 0,
    'input_edit_min_time_period' => 0,
    'input_avatar_max_width' => 0,
    'input_avatar_max_height' => 0,
    'input_avatar_max_filesize' => 0,
    'input_upload_max_width' => 0,
    'input_upload_max_height' => 0,
    'input_upload_max_filesize' => 0,
    'settings_sorted' => 0,
    'entries_in_not_existing_categories' => 0,
    'categories' => 0,
    'key' => 0,
    'val' => 0,
    'errors' => 0,
    'error' => 0,
    'categories_count' => 0,
    'categories_list' => 0,
    'c' => 0,
    'THEMES_DIR' => 0,
    'theme' => 0,
    'new_category' => 0,
    'accession' => 0,
    'category_id' => 0,
    'edit_category' => 0,
    'edit_accession' => 0,
    'category_name' => 0,
    'move_categories' => 0,
    'new_user' => 0,
    'send_error' => 0,
    'search_user' => 0,
    'pagination' => 0,
    'mode' => 0,
    'search_user_encoded' => 0,
    'method' => 0,
    'id' => 0,
    'p_category' => 0,
    'order' => 0,
    'descasc' => 0,
    'item' => 0,
    'result_count' => 0,
    'no_users_in_selection' => 0,
    'ul' => 0,
    'userdata' => 0,
    'page' => 0,
    'profil_length' => 0,
    'signature_length' => 0,
    'word' => 0,
    'inactive' => 0,
    'edit_user_id' => 0,
    'edit_user_name' => 0,
    'avatar' => 0,
    'delete_avatar' => 0,
    'edit_user_type' => 0,
    'user_email' => 0,
    'email_contact' => 0,
    'user_hp' => 0,
    'user_real_name' => 0,
    'user_gender' => 0,
    'user_birthday' => 0,
    'user_location' => 0,
    'profile' => 0,
    'signature' => 0,
    'user_language' => 0,
    'user_time_zone' => 0,
    'user_time_difference' => 0,
    'user_theme' => 0,
    'new_posting_notification' => 0,
    'new_user_notification' => 0,
    'selected_users_count' => 0,
    'selected_users' => 0,
    'user_delete_entries' => 0,
    'ar_username' => 0,
    'ar_email' => 0,
    'ar_send_userdata' => 0,
    'smilies' => 0,
    'smiley_files' => 0,
    'graphical_captcha_available' => 0,
    'font_available' => 0,
    'captcha_posting' => 0,
    'captcha_email' => 0,
    'captcha_register' => 0,
    'stop_forum_spam' => 0,
    'bad_behavior' => 0,
    'akismet_key' => 0,
    'akismet_entry_check' => 0,
    'akismet_mail_check' => 0,
    'akismet_check_registered' => 0,
    'save_spam' => 0,
    'auto_delete_spam' => 0,
    'not_accepted_words' => 0,
    'banned_ips' => 0,
    'banned_user_agents' => 0,
    'message' => 0,
    'backup_files' => 0,
    'file' => 0,
    'file_number' => 0,
    'delete_backup_files' => 0,
    'backup_file' => 0,
    'backup_file_date' => 0,
    'safe_mode_warning' => 0,
    'mysql_error' => 0,
    'instruction' => 0,
    'update_files' => 0,
    'update_file' => 0,
    'update_from_version' => 0,
    'update_to_version' => 0,
    'update_errors' => 0,
    'update_items' => 0,
    'update_new_version' => 0,
    'update_download_url' => 0,
    'update_message' => 0,
    'email_list' => 0,
    'input_logins' => 0,
    'input_days' => 0,
    'code_1' => 0,
    'code_2' => 0,
    'code_3' => 0,
    'code_4' => 0,
    'code_5' => 0,
    'title' => 0,
    'pages' => 0,
    'content' => 0,
    'menu_linkname' => 0,
    'access' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b1e828c30743_42423200')) {function content_52b1e828c30743_42423200($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\studybettertogether\\forum\\modules\\smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\studybettertogether\\forum\\modules\\smarty\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\studybettertogether\\forum\\modules\\smarty\\plugins\\modifier.date_format.php';
?><?php  $_config = new Smarty_Internal_Config($_smarty_tpl->tpl_vars['language_file']->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("admin", 'local'); ?>
<?php if ($_smarty_tpl->tpl_vars['action']->value=='settings') {?>
<?php if ($_smarty_tpl->tpl_vars['saved']->value) {?><p class="ok"><?php echo $_smarty_tpl->getConfigVariable('settings_saved');?>
</p><?php }?>
<form id="settings" action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('forum_name');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('forum_name_desc');?>
</span></td>
<td class="d"><input type="text" name="forum_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['forum_name'], ENT_QUOTES, 'UTF-8', true);?>
" size="40" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('forum_description');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('forum_description_desc');?>
</span></td>
<td class="d"><input type="text" name="forum_description" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['forum_description'], ENT_QUOTES, 'UTF-8', true);?>
" size="40" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('forum_address');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('forum_address_desc');?>
</span></td>
<td class="d"><input type="text" name="forum_address" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['forum_address'], ENT_QUOTES, 'UTF-8', true);?>
" size="40" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('forum_email');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('forum_email_desc');?>
</span></td>
<td class="d"><input type="text" name="forum_email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['forum_email'], ENT_QUOTES, 'UTF-8', true);?>
" size="40" /></td>
</tr>

<?php if ($_smarty_tpl->tpl_vars['languages']->value) {?>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('default_language');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('default_language_desc');?>
</span></td>
<td class="d"><select name="language_file" size="1">
<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['l']->value['identifier'];?>
"<?php if ($_smarty_tpl->tpl_vars['l']->value['identifier']==$_smarty_tpl->tpl_vars['settings']->value['language_file']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['l']->value['title'];?>
</option>
<?php } ?>
</select></td>
</tr>
<?php }?>

<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('default_time_zone');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('default_time_zone_desc');?>
</span></td>
<td class="d">
<?php if ($_smarty_tpl->tpl_vars['time_zones']->value) {?>
<p>
<select id="time_zone" name="time_zone" size="1">
<option value=""<?php if ($_smarty_tpl->tpl_vars['settings']->value['time_zone']=='') {?> selected="selected"<?php }?>></option>
<?php  $_smarty_tpl->tpl_vars['tz'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tz']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['time_zones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tz']->key => $_smarty_tpl->tpl_vars['tz']->value) {
$_smarty_tpl->tpl_vars['tz']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['tz']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['tz']->value==$_smarty_tpl->tpl_vars['settings']->value['time_zone']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tz']->value;?>
</option>
<?php } ?>
</select>
</p>
<?php } else { ?>
<p><label for="time_difference"><?php echo $_smarty_tpl->getConfigVariable('default_time_difference');?>
</label><br /><input id="time_difference" type="text" name="time_difference" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['time_difference'];?>
" size="5" /></p>
<?php }?>
</td>
</tr>

<?php if ($_smarty_tpl->tpl_vars['themes']->value) {?>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('default_theme');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('default_theme_desc');?>
</span></td>
<td class="d"><select name="theme" size="1">
<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['identifier'];?>
"<?php if ($_smarty_tpl->tpl_vars['t']->value['identifier']==$_smarty_tpl->tpl_vars['settings']->value['theme']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['title'];?>
</option>
<?php } ?>
</select></td>
</tr>
<?php }?>

<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('home_link');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('home_link_desc');?>
</span></td>
<td class="d"><input type="text" name="home_linkaddress" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['home_linkaddress'], ENT_QUOTES, 'UTF-8', true);?>
" size="40" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('home_link_name');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('home_link_name_desc');?>
</span></td>
<td class="d"><input type="text" name="home_linkname" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['home_linkname'], ENT_QUOTES, 'UTF-8', true);?>
" size="40" /></td>
</tr>

<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('terms_of_use_settings');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('terms_of_use_settings_desc');?>
</span></td>
<td class="d"><p><input id="terms_of_use_agreement" type="checkbox" name="terms_of_use_agreement" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['terms_of_use_agreement']==1) {?> checked="checked"<?php }?> /><label id="terms_of_use_agreement_label" for="terms_of_use_agreement" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['terms_of_use_agreement']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('terms_of_use_settings_enabled');?>
</label></p>
<p><label id="terms_of_use_url_label" for="terms_of_use_url" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['terms_of_use_agreement']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('terms_of_use_url');?>
</label><br /><input id="terms_of_use_url" type="text" name="terms_of_use_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['terms_of_use_url'], ENT_QUOTES, 'UTF-8', true);?>
" size="40" /></p></td>
</tr>

<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('accession');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('accession_desc');?>
</span></td>
<td class="d"><input id="access_for_all" type="radio" name="access_for_users_only" value="0"<?php if ($_smarty_tpl->tpl_vars['settings']->value['access_for_users_only']==0) {?> checked="checked"<?php }?> /><label id="access_for_all_label" for="access_for_all" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['access_for_users_only']==0) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('all_users');?>
</label><br />
<input id="access_for_users_only" type="radio" name="access_for_users_only" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['access_for_users_only']==1) {?> checked="checked"<?php }?> /><label id="access_for_users_only_label" for="access_for_users_only" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['access_for_users_only']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('only_registered_users');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('post_permission');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('post_permission_desc');?>
</span></td>
<td class="d"><input id="entries_by_all" type="radio" name="entries_by_users_only" value="0"<?php if ($_smarty_tpl->tpl_vars['settings']->value['entries_by_users_only']==0) {?> checked="checked"<?php }?> /><label id="entries_by_all_label" for="entries_by_all" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['entries_by_users_only']==0) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('all_users');?>
</label><br />
<input id="entries_by_users" type="radio" name="entries_by_users_only" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['entries_by_users_only']==1) {?> checked="checked"<?php }?> /><label id="entries_by_users_label" for="entries_by_users" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['entries_by_users_only']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('only_registered_users');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('register_permission');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('register_permission_desc');?>
</span></td>
<td class="d"><input id="register_mode_0" type="radio" name="register_mode" value="0"<?php if ($_smarty_tpl->tpl_vars['settings']->value['register_mode']==0) {?> checked="checked"<?php }?> /><label id="register_mode_0_label" for="register_mode_0" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['register_mode']==0) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('register_self');?>
</label><br />
<input id="register_mode_1" type="radio" name="register_mode" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['register_mode']==1) {?> checked="checked"<?php }?> /><label id="register_mode_1_label" for="register_mode_1" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['register_mode']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('register_self_locked');?>
</label><br />
<input id="register_mode_2" type="radio" name="register_mode" value="2"<?php if ($_smarty_tpl->tpl_vars['settings']->value['register_mode']==2) {?> checked="checked"<?php }?> /><label id="register_mode_2_label" for="register_mode_2" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['register_mode']==2) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('register_only_admin');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('user_area');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('user_area_desc');?>
</span></td>
<td class="d"><input id="public" type="radio" name="user_area_public" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['user_area_public']==1) {?> checked="checked"<?php }?> /><label id="public_label" for="public" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['user_area_public']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('public_accessible');?>
</label><br />
<input id="not_public" type="radio" name="user_area_public" value="0"<?php if ($_smarty_tpl->tpl_vars['settings']->value['user_area_public']==0) {?> checked="checked"<?php }?> /><label id="not_public_label" for="not_public" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['user_area_public']==0) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('accessible_reg_users_only');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('latest_postings');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('latest_postings_desc');?>
</span></td>
<td class="d"><input type="text" name="latest_postings" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['latest_postings'], ENT_QUOTES, 'UTF-8', true);?>
" size="5" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('tag_cloud');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('tag_cloud_desc');?>
</span></td>
<td class="d"><input id="tag_cloud" type="checkbox" name="tag_cloud" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['tag_cloud']==1) {?> checked="checked"<?php }?> /><label id="tag_cloud_label" for="tag_cloud" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['tag_cloud']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('enable_tag_cloud');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_postings');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('edit_postings_desc');?>
</span></td>
<td class="d">
<?php $_smarty_tpl->tpl_vars["settings_edit_delay"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['edit_delay'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["input_edit_delay"] = new Smarty_variable("<input type=\"text\" name=\"edit_delay\" value=\"".((string)$_smarty_tpl->tpl_vars['settings_edit_delay']->value)."\" size=\"3\" />", null, 0);?>

<p><input id="show_if_edited" type="checkbox" name="show_if_edited" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_if_edited']==1) {?> checked="checked"<?php }?> /><label id="show_if_edited_label" for="show_if_edited" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_if_edited']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('show_if_edited'),"[minutes]",$_smarty_tpl->tpl_vars['input_edit_delay']->value);?>
</label><br />
<input id="dont_reg_edit_by_admin" type="checkbox" name="dont_reg_edit_by_admin" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['dont_reg_edit_by_admin']==1) {?> checked="checked"<?php }?> /><label id="dont_reg_edit_by_admin_label" for="dont_reg_edit_by_admin" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['dont_reg_edit_by_admin']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('dont_show_edit_by_admin');?>
</label><br />
<input id="dont_reg_edit_by_mod" type="checkbox" name="dont_reg_edit_by_mod" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['dont_reg_edit_by_mod']==1) {?> checked="checked"<?php }?> /><label id="dont_reg_edit_by_mod_label" for="dont_reg_edit_by_mod" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['dont_reg_edit_by_mod']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('dont_show_edit_by_mod');?>
</label></p>

<p><em><?php echo $_smarty_tpl->getConfigVariable('edit_own_postings');?>
</em></p>
<p><input id="edit_own_postings_all" type="radio" name="user_edit" value="2"<?php if ($_smarty_tpl->tpl_vars['settings']->value['user_edit']==2) {?> checked="checked"<?php }?> /><label id="edit_own_postings_all_label" for="edit_own_postings_all" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['user_edit']==2) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('edit_own_postings_all');?>
</label><br />
<input id="edit_own_postings_users" type="radio" name="user_edit" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['user_edit']==1) {?> checked="checked"<?php }?> /><label id="edit_own_postings_users_label" for="edit_own_postings_users" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['user_edit']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('edit_own_postings_users');?>
</label><br />
<input id="edit_own_postings_disabled" type="radio" name="user_edit" value="0"<?php if ($_smarty_tpl->tpl_vars['settings']->value['user_edit']==0) {?> checked="checked"<?php }?> /><label id="edit_own_postings_disabled_label" for="edit_own_postings_disabled" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['user_edit']==0) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('edit_own_postings_disabled');?>
</label></p>

<fieldset id="user_edit_details" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['user_edit']==0) {?>inactive<?php } else { ?>active<?php }?>">
<?php $_smarty_tpl->tpl_vars["settings_edit_max_time_period"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['edit_max_time_period'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["input_edit_max_time_period"] = new Smarty_variable("<input type=\"text\" id=\"edit_max_time_period\" name=\"edit_max_time_period\" value=\"".((string)$_smarty_tpl->tpl_vars['settings_edit_max_time_period']->value)."\" size=\"3\" />", null, 0);?>
<p><label id="edit_max_time_period_label" for="edit_max_time_period"><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('edit_max_time_period'),"[minutes]",$_smarty_tpl->tpl_vars['input_edit_max_time_period']->value);?>
</label></p>
<?php $_smarty_tpl->tpl_vars["settings_edit_min_time_period"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['edit_min_time_period'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["input_edit_min_time_period"] = new Smarty_variable("<input type=\"text\" name=\"edit_min_time_period\" value=\"".((string)$_smarty_tpl->tpl_vars['settings_edit_min_time_period']->value)."\" size=\"3\" />", null, 0);?>
<p><input id="user_edit_if_no_replies" type="checkbox" name="user_edit_if_no_replies" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['user_edit_if_no_replies']==1) {?> checked="checked"<?php }?> /><label id="user_edit_if_no_replies_label" for="user_edit_if_no_replies" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['user_edit_if_no_replies']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('user_edit_if_no_replies'),"[minutes]",$_smarty_tpl->tpl_vars['input_edit_min_time_period']->value);?>
</label></p>
</fieldset>

</td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('bbcode');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('bbcode_desc');?>
</span></td>
<td class="d"><input id="bbcode" type="checkbox" name="bbcode" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['bbcode']==1) {?> checked="checked"<?php }?> /><label id="bbcode_label" for="bbcode" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['bbcode']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('bbcodes_enabled');?>
</label><br />
<input id="bbcode_img" type="checkbox" name="bbcode_img" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['bbcode_img']==1) {?> checked="checked"<?php }?> /><label id="bbcode_img_label" for="bbcode_img" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['bbcode_img']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('bbcodes_img_enabled');?>
</label><br />
<input id="bbcode_flash" type="checkbox" name="bbcode_flash" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['bbcode_flash']==1) {?> checked="checked"<?php }?> /><label id="bbcode_flash_label" for="bbcode_flash" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['bbcode_flash']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('bbcodes_flash_enabled');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('smilies');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('smilies_desc');?>
</span></td>
<td class="d"><input id="smilies" type="checkbox" name="smilies" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['smilies']==1) {?> checked="checked"<?php }?> /><label id="smilies_label" for="smilies" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['smilies']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('smilies_enabled');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('enamble_avatars');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('enamble_avatars_desc');?>
</span></td>
<td class="d"><p><input id="avatars_profiles_postings" type="radio" name="avatars" value="2"<?php if ($_smarty_tpl->tpl_vars['settings']->value['avatars']==2) {?> checked="checked"<?php }?> /><label id="avatars_profiles_postings_label" for="avatars_profiles_postings" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['avatars']==2) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('avatars_profiles_postings');?>
</label><br />
<input id="avatars_profiles" type="radio" name="avatars" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['avatars']==1) {?> checked="checked"<?php }?> /><label id="avatars_profiles_label" for="avatars_profiles" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['avatars']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('avatars_profiles');?>
</label><br />
<input id="avatars_disabled" type="radio" name="avatars" value="0"<?php if ($_smarty_tpl->tpl_vars['settings']->value['avatars']==0) {?> checked="checked"<?php }?> /><label id="avatars_disabled_label" for="avatars_disabled" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['avatars']==0) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('disabled');?>
</label></p>

<?php $_smarty_tpl->tpl_vars["settings_avatar_max_width"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['avatar_max_width'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["input_avatar_max_width"] = new Smarty_variable("<input id=\"avatar_max_width\" type=\"text\" name=\"avatar_max_width\" value=\"".((string)$_smarty_tpl->tpl_vars['settings_avatar_max_width']->value)."\" size=\"3\" />", null, 0);?>
<?php $_smarty_tpl->tpl_vars["settings_avatar_max_height"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['avatar_max_height'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["input_avatar_max_height"] = new Smarty_variable("<input type=\"text\" name=\"avatar_max_height\" value=\"".((string)$_smarty_tpl->tpl_vars['settings_avatar_max_height']->value)."\" size=\"3\" />", null, 0);?>
<?php $_smarty_tpl->tpl_vars["settings_avatar_max_filesize"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['avatar_max_filesize'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["input_avatar_max_filesize"] = new Smarty_variable("<input type=\"text\" name=\"avatar_max_filesize\" value=\"".((string)$_smarty_tpl->tpl_vars['settings_avatar_max_filesize']->value)."\" size=\"3\" />", null, 0);?>
<p><label id="max_avatar_size_label" for="avatar_max_width" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['avatars']==0) {?>inactive<?php } else { ?>active<?php }?>"><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('max_avatar_size'),"[width]",$_smarty_tpl->tpl_vars['input_avatar_max_width']->value),"[height]",$_smarty_tpl->tpl_vars['input_avatar_max_height']->value),"[filesize]",$_smarty_tpl->tpl_vars['input_avatar_max_filesize']->value);?>
</label></p></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('upload_images');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('upload_images_desc');?>
</span></td>
<td class="d"><p><input id="upload_images_all" type="radio" name="upload_images" value="3"<?php if ($_smarty_tpl->tpl_vars['settings']->value['upload_images']==3) {?> checked="checked"<?php }?> /><label id="upload_images_all_label" for="upload_images_all" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['upload_images']==3) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('upload_enabled_all');?>
</label><br />
<input id="upload_images_users" type="radio" name="upload_images" value="2"<?php if ($_smarty_tpl->tpl_vars['settings']->value['upload_images']==2) {?> checked="checked"<?php }?> /><label id="upload_images_users_label" for="upload_images_users" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['upload_images']==2) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('upload_enabled_users');?>
</label><br />
<input id="upload_images_admins_mods" type="radio" name="upload_images" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['upload_images']==1) {?> checked="checked"<?php }?> /><label id="upload_images_admins_mods_label" for="upload_images_admins_mods" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['upload_images']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('upload_enabled_admins_mods');?>
</label><br />
<input id="upload_images_disabled" type="radio" name="upload_images" value="0"<?php if ($_smarty_tpl->tpl_vars['settings']->value['upload_images']==0) {?> checked="checked"<?php }?> /><label id="upload_images_disabled_label" for="upload_images_disabled" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['upload_images']==0) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('disabled');?>
</label></p>
<?php $_smarty_tpl->tpl_vars["settings_upload_max_width"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['upload_max_img_width'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["input_upload_max_width"] = new Smarty_variable("<input id=\"upload_max_img_width\" type=\"text\" name=\"upload_max_img_width\" value=\"".((string)$_smarty_tpl->tpl_vars['settings_upload_max_width']->value)."\" size=\"3\" />", null, 0);?>
<?php $_smarty_tpl->tpl_vars["settings_upload_max_height"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['upload_max_img_height'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["input_upload_max_height"] = new Smarty_variable("<input type=\"text\" name=\"upload_max_img_height\" value=\"".((string)$_smarty_tpl->tpl_vars['settings_upload_max_height']->value)."\" size=\"3\" />", null, 0);?>
<?php $_smarty_tpl->tpl_vars["settings_upload_max_img_size"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['upload_max_img_size'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["input_upload_max_filesize"] = new Smarty_variable("<input type=\"text\" name=\"upload_max_img_size\" value=\"".((string)$_smarty_tpl->tpl_vars['settings_upload_max_img_size']->value)."\" size=\"3\" />", null, 0);?>
<p><label id="max_upload_size_label" for="upload_max_img_width" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['upload_images']==0) {?>inactive<?php } else { ?>active<?php }?>"><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('max_upload_size'),"[width]",$_smarty_tpl->tpl_vars['input_upload_max_width']->value),"[height]",$_smarty_tpl->tpl_vars['input_upload_max_height']->value),"[filesize]",$_smarty_tpl->tpl_vars['input_upload_max_filesize']->value);?>
</label></p></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('autolink');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('autolink_desc');?>
</span></td>
<td class="d"><input id="autolink" type="checkbox" name="autolink" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['autolink']==1) {?> checked="checked"<?php }?> /><label id="autolink_label" for="autolink" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['autolink']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('autolink_enabled');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('count_views');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('count_views_desc');?>
</span></td>
<td class="d"><input id="count_views" type="checkbox" name="count_views" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['count_views']==1) {?> checked="checked"<?php }?> /><label id="count_views_label" for="count_views" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['count_views']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('views_counter_enabled');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('rss_feed');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('rss_feed_desc');?>
</span></td>
<td class="d"><input id="rss_feed" type="checkbox" name="rss_feed" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['rss_feed']==1) {?> checked="checked"<?php }?> /><label id="rss_feed_label" for="rss_feed" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['rss_feed']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('rss_feed_enabled');?>
</label></td>
</tr>

<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('threads_per_page');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('threads_per_page_desc');?>
</span></td>
<td class="d"><input type="text" name="threads_per_page" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['threads_per_page'], ENT_QUOTES, 'UTF-8', true);?>
" size="5" /></td>
</tr>

<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('auto_lock_old_threads');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('auto_lock_old_threads_desc');?>
</span></td>
<td class="d"><input type="text" name="auto_lock_old_threads" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['auto_lock_old_threads'], ENT_QUOTES, 'UTF-8', true);?>
" size="5" /></td>
</tr>

<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('count_users_online');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('count_users_online_desc');?>
</span></td>
<td class="d"><input type="text" name="count_users_online" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['count_users_online'], ENT_QUOTES, 'UTF-8', true);?>
" size="5" /></td>
</tr>

<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('forum_enabled_marking');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('forum_enabled_desc');?>
</span></td>
<td class="d"><p><input id="forum_enabled" type="checkbox" name="forum_enabled" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['forum_enabled']==1) {?> checked="checked"<?php }?> /><label id="forum_enabled_label" for="forum_enabled" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['forum_enabled']==1) {?>active<?php } else { ?>inactive<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('forum_enabled');?>
</label></p>
<p><label id="forum_disabled_message_label" for="forum_disabled_message" class="<?php if ($_smarty_tpl->tpl_vars['settings']->value['forum_enabled']==1) {?>inactive<?php } else { ?>active<?php }?>"><?php echo $_smarty_tpl->getConfigVariable('forum_disabled_message');?>
</label><br /><input id="forum_disabled_message" type="text" name="forum_disabled_message" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['forum_disabled_message'], ENT_QUOTES, 'UTF-8', true);?>
" size="40" /></p></td>
</tr>
<tr>
<td class="c">&nbsp;</td>
<td class="d"><p class="small"><input id="clear_chache" type="checkbox" name="clear_cache" value="1" /><label for="clear_chache"><?php echo $_smarty_tpl->getConfigVariable('clear_chache');?>
</label></p>
<p><input type="submit" name="settings_submit" value="<?php echo $_smarty_tpl->getConfigVariable('settings_submit_button');?>
" /></p></td>
</tr>
</table>
</div>
</form>
<p style="margin-top:10px;"><a class="stronglink" href="index.php?mode=admin&amp;action=advanced_settings"><?php echo $_smarty_tpl->getConfigVariable('advanced_settings_link');?>
</a></p>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='advanced_settings') {?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['nr'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['name'] = 'nr';
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['settings_sorted']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->tpl_vars['settings_sorted']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']]['key'];?>
</strong></td>
<td class="d"><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['settings_sorted']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']]['key'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings_sorted']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']]['val'], ENT_QUOTES, 'UTF-8', true);?>
" /></td>
</tr>
<?php endfor; endif; ?>
<tr>
<td class="c">&nbsp;</td>
<td class="d"><input type="submit" name="settings_submit" value="<?php echo $_smarty_tpl->getConfigVariable('settings_submit_button');?>
" /></td>
</tr>
</table>
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='categories') {?>
<?php if ($_smarty_tpl->tpl_vars['entries_in_not_existing_categories']->value>0) {?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div style="margin:0px 0px 20px 0px; padding:10px; border:1px dotted red;">
<input type="hidden" name="mode" value="admin" />
<p><?php echo $_smarty_tpl->getConfigVariable('entries_in_not_ex_cat');?>
</p>
<p><input type="radio" name="entry_action" value="delete" checked="checked" /><?php echo $_smarty_tpl->getConfigVariable('entries_in_not_ex_cat_del');?>
<br />
<input type="radio" name="entry_action" value="move" /><?php echo $_smarty_tpl->getConfigVariable('entries_in_not_ex_cat_mov');?>

<select class="kat" size="1" name="move_category">
<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['key']->value!=0) {?><option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option><?php }?>
<?php } ?>
</select>
</p>
<p><input type="submit" name="entries_in_not_existing_categories_submit" value="<?php echo $_smarty_tpl->getConfigVariable('submit_button_ok');?>
"></p>
</div>
</form>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('error_headline');?>
</p>
<ul>
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
<?php $_smarty_tpl->tpl_vars["error"] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mysec']['index']], null, 0);?>
<li><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['error']->value);?>
</li>
<?php endfor; endif; ?>
</ul>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['categories_count']->value>0) {?>
<table id="sortable" class="normaltab" cellspacing="1" cellpadding="5">
<thead>
<tr>
<th><?php echo $_smarty_tpl->getConfigVariable('category_name');?>
</th>
<th><?php echo $_smarty_tpl->getConfigVariable('category_accession');?>
</th>
<th><?php echo $_smarty_tpl->getConfigVariable('category_topics');?>
</th>
<th><?php echo $_smarty_tpl->getConfigVariable('category_entries');?>
</th>
<th>&#160;</th>
</tr>
</thead>
<tbody id="items">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['row'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['row']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['name'] = 'row';
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categories_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total']);
?>
<?php echo smarty_function_cycle(array('values'=>"a,b",'assign'=>'c'),$_smarty_tpl);?>

<tr id="id_<?php echo $_smarty_tpl->tpl_vars['categories_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['id'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
">
<td><strong><?php echo $_smarty_tpl->tpl_vars['categories_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['name'];?>
</strong></td>
<td><?php if ($_smarty_tpl->tpl_vars['categories_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['accession']==2) {?><?php echo $_smarty_tpl->getConfigVariable('cat_accessible_admin_mod');?>
<?php } elseif ($_smarty_tpl->tpl_vars['categories_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['accession']==1) {?><?php echo $_smarty_tpl->getConfigVariable('cat_accessible_reg_users');?>
<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('cat_accessible_all');?>
<?php }?></td>
<td><?php echo $_smarty_tpl->tpl_vars['categories_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['threads_in_category'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['categories_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['postings_in_category'];?>
</td>
<td><a href="index.php?mode=admin&amp;edit_category=<?php echo $_smarty_tpl->tpl_vars['categories_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/edit.png" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
" width="16" height="16" /></a> &nbsp; <a href="index.php?mode=admin&amp;delete_category=<?php echo $_smarty_tpl->tpl_vars['categories_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/delete.png" title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
" width="16" height="16"/></a> &nbsp; <a href="index.php?mode=admin&amp;move_up_category=<?php echo $_smarty_tpl->tpl_vars['categories_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/arrow_up.png" alt="<?php echo $_smarty_tpl->getConfigVariable('up');?>
" title="<?php echo $_smarty_tpl->getConfigVariable('up');?>
" width="16" height="16" /></a>&nbsp;<a href="index.php?mode=admin&amp;move_down_category=<?php echo $_smarty_tpl->tpl_vars['categories_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/arrow_down.png" alt="<?php echo $_smarty_tpl->getConfigVariable('down');?>
" title="<?php echo $_smarty_tpl->getConfigVariable('down');?>
" width="16" height="16" /></a></td>
</tr>
<?php endfor; endif; ?>
</tbody>
</table>
<?php } else { ?>
<p><?php echo $_smarty_tpl->getConfigVariable('no_categories');?>
</p>
<?php }?>
<br />
<form action="index.php" method="post" class="normalform" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<label for="new_category" class="main"><?php echo $_smarty_tpl->getConfigVariable('new_category');?>
</label><br />
<input id="new_category" type="text" name="new_category" size="25" value="<?php if ($_smarty_tpl->tpl_vars['new_category']->value) {?><?php echo $_smarty_tpl->tpl_vars['new_category']->value;?>
<?php }?>" /><br /><br />
<strong><?php echo $_smarty_tpl->getConfigVariable('category_accessible_by');?>
</strong><br />
<input id="cat_accessible_all" type="radio" name="accession" value="0"<?php if (!$_smarty_tpl->tpl_vars['accession']->value||'acession'==0) {?> checked="checked"<?php }?> /><label for="cat_accessible_all"><?php echo $_smarty_tpl->getConfigVariable('cat_accessible_all');?>
</label><br />
<input id="cat_accessible_reg_users" type="radio" name="accession" value="1"<?php if ('acession'==1) {?> checked="checked"<?php }?> /><label for="cat_accessible_reg_users"><?php echo $_smarty_tpl->getConfigVariable('cat_accessible_reg_users');?>
</label><br />
<input id="cat_accessible_admin_mod" type="radio" name="accession" value="2"<?php if ('acession'==2) {?> checked="checked"<?php }?> /><label for="cat_accessible_admin_mod"><?php echo $_smarty_tpl->getConfigVariable('cat_accessible_admin_mod');?>
</label><br /><br />
<input type="submit" value="<?php echo $_smarty_tpl->getConfigVariable('submit_button_ok');?>
" />
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='edit_category') {?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('error_headline');?>
</p>
<ul>
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
<?php $_smarty_tpl->tpl_vars["error"] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mysec']['index']], null, 0);?>
<li><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['error']->value);?>
</li>
<?php endfor; endif; ?>
</ul>
<?php }?>
<form action="index.php" method="post" class="normalform" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
" />
<strong><?php echo $_smarty_tpl->getConfigVariable('edit_category');?>
</strong><br />
<input type="text" name="category" value="<?php echo $_smarty_tpl->tpl_vars['edit_category']->value;?>
" size="25" /><br /><br />
<strong><?php echo $_smarty_tpl->getConfigVariable('category_accessible_by');?>
</strong><br />
<input id="cat_accessible_all" type="radio" name="accession" value="0"<?php if ($_smarty_tpl->tpl_vars['edit_accession']->value==0) {?> checked="checked"<?php }?> /><label for="cat_accessible_all"><?php echo $_smarty_tpl->getConfigVariable('cat_accessible_all');?>
</label><br />
<input id="cat_accessible_reg_users" type="radio" name="accession" value="1"<?php if ($_smarty_tpl->tpl_vars['edit_accession']->value==1) {?> checked="checked"<?php }?> /><label for="cat_accessible_reg_users"><?php echo $_smarty_tpl->getConfigVariable('cat_accessible_reg_users');?>
</label><br />
<input id="cat_accessible_admin_mod" type="radio" name="accession" value="2"<?php if ($_smarty_tpl->tpl_vars['edit_accession']->value==2) {?> checked="checked"<?php }?> /><label for="cat_accessible_admin_mod"><?php echo $_smarty_tpl->getConfigVariable('cat_accessible_admin_mod');?>
</label><br /><br />
<input type="submit" name="edit_category_submit" value="<?php echo $_smarty_tpl->getConfigVariable('submit_button_ok');?>
" />
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='delete_category') {?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('error_headline');?>
</p>
<ul>
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
<?php $_smarty_tpl->tpl_vars["error"] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mysec']['index']], null, 0);?>
<li><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['error']->value);?>
</li>
<?php endfor; endif; ?>
</ul>
<?php }?>
<h2><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('delete_category_hl'),"[category]",$_smarty_tpl->tpl_vars['category_name']->value);?>
</h2>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('caution');?>
</p>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="category_id" value="<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
" />
<p><input type="radio" name="delete_mode" value="complete" checked="checked" /> <?php echo $_smarty_tpl->getConfigVariable('delete_category_compl');?>
</p></td>
<p><input type="radio" name="delete_mode" value="keep_entries" /> <?php if ($_smarty_tpl->tpl_vars['categories_count']->value<=1) {?><?php echo $_smarty_tpl->getConfigVariable('del_cat_keep_entries');?>

<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('del_cat_move_entries');?>

<select class="kat" size="1" name="move_category">
<option value="0">&nbsp;</option>
<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['move_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['key']->value!=0) {?><option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option><?php }?>
<?php } ?>
</select>
<?php }?>
<p><input type="submit" name="delete_category_submit" value="<?php echo $_smarty_tpl->getConfigVariable('delete_category_submit');?>
" /></p>
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='user') {?>
<?php if ($_smarty_tpl->tpl_vars['new_user']->value&&!$_smarty_tpl->tpl_vars['send_error']->value) {?><p class="ok"><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('new_user_registered'),"[name]",$_smarty_tpl->tpl_vars['new_user']->value);?>
</p><?php } elseif ($_smarty_tpl->tpl_vars['new_user']->value&&$_smarty_tpl->tpl_vars['send_error']->value) {?><p class="caution"><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('new_user_reg_send_error'),"[name]",$_smarty_tpl->tpl_vars['new_user']->value);?>
</p><?php }?>


<div id="usernav">
<div id="usersearch">
<label for="search-user"><?php echo $_smarty_tpl->getConfigVariable('search_user');?>
</label><form action="index.php" method="get" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="action" value="user" />
<input id="search-user" type="text" name="search_user" value="<?php if ($_smarty_tpl->tpl_vars['search_user']->value) {?><?php echo $_smarty_tpl->tpl_vars['search_user']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('search_user_default_value');?>
<?php }?>" size="25" alt="<?php echo $_smarty_tpl->getConfigVariable('search_user_default_value');?>
" />
</div>
</form>
</div>
<div id="userpagination">
<?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
<ul class="pagination pagination-index">
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
<?php }?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<?php if ($_smarty_tpl->tpl_vars['p_category']->value&&$_smarty_tpl->tpl_vars['p_category']->value>0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;?>
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

<?php if ($_smarty_tpl->tpl_vars['result_count']->value>0) {?>
<?php if ($_smarty_tpl->tpl_vars['no_users_in_selection']->value) {?><p class="caution"><?php echo $_smarty_tpl->getConfigVariable('no_users_in_sel');?>
</p><?php }?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">
<tr>
<th>&nbsp;</th>
<!--<th><a href="index.php?mode=admin&amp;action=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?>&amp;order=user_id&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value=="ASC"&&$_smarty_tpl->tpl_vars['order']->value=="user_id") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('order_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('user_id');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value=="user_id"&&$_smarty_tpl->tpl_vars['descasc']->value=="ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value=="user_id"&&$_smarty_tpl->tpl_vars['descasc']->value=="DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>-->
<th><a href="index.php?mode=admin&amp;action=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?>&amp;order=user_name&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value=="ASC"&&$_smarty_tpl->tpl_vars['order']->value=="user_name") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('order_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('user_name');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value=="user_name"&&$_smarty_tpl->tpl_vars['descasc']->value=="ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value=="user_name"&&$_smarty_tpl->tpl_vars['descasc']->value=="DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th><a href="index.php?mode=admin&amp;action=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?>&amp;order=user_email&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value=="ASC"&&$_smarty_tpl->tpl_vars['order']->value=="user_email") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('order_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('user_email');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value=="user_email"&&$_smarty_tpl->tpl_vars['descasc']->value=="ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value=="user_email"&&$_smarty_tpl->tpl_vars['descasc']->value=="DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th><a href="index.php?mode=admin&amp;action=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?>&amp;order=user_type&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value=="ASC"&&$_smarty_tpl->tpl_vars['order']->value=="user_type") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('order_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('user_type');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value=="user_type"&&$_smarty_tpl->tpl_vars['descasc']->value=="ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value=="user_type"&&$_smarty_tpl->tpl_vars['descasc']->value=="DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th><a href="index.php?mode=admin&amp;action=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?>&amp;order=registered&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value=="ASC"&&$_smarty_tpl->tpl_vars['order']->value=="registered") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('order_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('user_registered');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value=="registered"&&$_smarty_tpl->tpl_vars['descasc']->value=="ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value=="registered"&&$_smarty_tpl->tpl_vars['descasc']->value=="DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th><a href="index.php?mode=admin&amp;action=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?>&amp;order=logins&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value=="ASC"&&$_smarty_tpl->tpl_vars['order']->value=="logins") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('order_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('user_logins');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value=="logins"&&$_smarty_tpl->tpl_vars['descasc']->value=="ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value=="logins"&&$_smarty_tpl->tpl_vars['descasc']->value=="DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th><a href="index.php?mode=admin&amp;action=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?>&amp;order=last_login&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value=="ASC"&&$_smarty_tpl->tpl_vars['order']->value=="last_login") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('order_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('last_login');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value=="last_login"&&$_smarty_tpl->tpl_vars['descasc']->value=="ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value=="last_login"&&$_smarty_tpl->tpl_vars['descasc']->value=="DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th><a href="index.php?mode=admin&amp;action=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?>&amp;order=user_lock&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value=="ASC"&&$_smarty_tpl->tpl_vars['order']->value=="user_lock") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('order_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('lock');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value=="user_lock"&&$_smarty_tpl->tpl_vars['descasc']->value=="ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value=="user_lock"&&$_smarty_tpl->tpl_vars['descasc']->value=="DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th colspan="2">&nbsp;</th>
</tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['row'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['row']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['name'] = 'row';
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['userdata']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total']);
?>
<?php echo smarty_function_cycle(array('values'=>"a,b",'assign'=>'c'),$_smarty_tpl);?>

<tr class="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
">
<td style="width:10px;"><input type="checkbox" name="selected[]" value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['user_id'];?>
" /></td>
<td><?php if ($_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['inactive']) {?><span title="<?php echo $_smarty_tpl->getConfigVariable('user_inactive');?>
" style="font-weight:bold;color:red;"><?php echo $_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['user_name'];?>
</span><?php } else { ?><a href="index.php?mode=user&amp;show_user=<?php echo $_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['user_id'];?>
" title="<?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('show_userdata_linktitle'),"[user]",$_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['user_name']);?>
"><strong><?php echo $_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['user_name'];?>
</strong></a><?php }?></td>
<td><span class="small"><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['user_email'];?>
" title="<?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('mailto_user_lt'),"[user]",$_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['user_name']);?>
"><?php echo $_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['user_email'];?>
</a></span></td>
<td><span class="small"><?php if ($_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['user_type']==2) {?><?php echo $_smarty_tpl->getConfigVariable('admin');?>
<?php } elseif ($_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['user_type']==1) {?><?php echo $_smarty_tpl->getConfigVariable('mod');?>
<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('user');?>
<?php }?></span></td>
<td><span class="small"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['registered_time'],$_smarty_tpl->getConfigVariable('time_format'));?>
</span></td>
<td><span class="small"><?php echo $_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['logins'];?>
</span></td>
<td><span class="small"><?php if ($_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['logins']>0) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['last_login_time'],$_smarty_tpl->getConfigVariable('time_format'));?>
<?php } else { ?>&nbsp;<?php }?></span></td>
<td><span class="small"><?php if ($_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['user_type']>0) {?><?php if ($_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['user_lock']==0) {?><?php echo $_smarty_tpl->getConfigVariable('unlocked');?>
<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('locked');?>
<?php }?><?php } elseif ($_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['user_lock']==0) {?><a href="index.php?mode=admin&amp;user_lock=<?php echo $_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['user_id'];?>
<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('lock_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('unlocked');?>
</a><?php } else { ?><a style="color:red;" href="index.php?mode=admin&amp;user_lock=<?php echo $_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['user_id'];?>
<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;?>
<?php }?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('unlock_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('locked');?>
</a><?php }?></span></td>
<td><a href="index.php?mode=admin&amp;edit_user=<?php echo $_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['user_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/edit.png" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
" width="16" height="16" /></a></td>
<td><a href="index.php?mode=admin&amp;delete_user=<?php echo $_smarty_tpl->tpl_vars['userdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['user_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/delete.png" title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
" width="16" height="16" /></a></td>
</tr>
<?php endfor; endif; ?>
</table>

<div id="admin-usernav-bottom">

<div id="selectioncontrols">
<img id="arrow-selected" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/arrow_selected.png" alt="&#x2191;" width="24" height="14" /> <input type="submit" name="delete_selected_users" value="<?php echo $_smarty_tpl->getConfigVariable('delete_selected_users');?>
" title="<?php echo $_smarty_tpl->getConfigVariable('delete_users_sb_title');?>
" />
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
<?php }?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<?php if ($_smarty_tpl->tpl_vars['p_category']->value&&$_smarty_tpl->tpl_vars['p_category']->value>0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;?>
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
</div>
</form>
<?php } else { ?>
<p><em><?php echo $_smarty_tpl->getConfigVariable('no_users');?>
</em></p>
<?php }?>
<ul class="adminmenu">
<li><a href="index.php?mode=admin&amp;action=register"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/add_user.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('add_user');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=email_list"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/email_list.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('email_list');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=clear_userdata"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/delete.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('clear_userdata');?>
</span></a></li>
</ul>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='edit_user') {?>
<?php  $_config = new Smarty_Internal_Config($_smarty_tpl->tpl_vars['language_file']->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("user_edit", 'local'); ?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('error_headline');?>
</p>
<ul>
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
<?php $_smarty_tpl->tpl_vars["error"] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mysec']['index']], null, 0);?>
<li><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['error']->value),"[profile_length]",$_smarty_tpl->tpl_vars['profil_length']->value),"[profile_maxlength]",$_smarty_tpl->tpl_vars['settings']->value['profile_maxlength']),"[signature_length]",$_smarty_tpl->tpl_vars['signature_length']->value),"[signature_maxlength]",$_smarty_tpl->tpl_vars['settings']->value['signature_maxlength']),"[word]",$_smarty_tpl->tpl_vars['word']->value);?>
</li>
<?php endfor; endif; ?>
</ul>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['inactive']->value) {?><p class="caution"><?php echo $_smarty_tpl->getConfigVariable('caution');?>
</p><p><?php echo $_smarty_tpl->getConfigVariable('activate_note');?>
 <a href="index.php?mode=admin&amp;activate=<?php echo $_smarty_tpl->tpl_vars['edit_user_id']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('activate_link');?>
</a></p><?php }?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="edit_user_id" value="<?php echo $_smarty_tpl->tpl_vars['edit_user_id']->value;?>
" />
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_name');?>
</strong></td>
<td class="d"><input type="text" size="40" name="edit_user_name" value="<?php echo $_smarty_tpl->tpl_vars['edit_user_name']->value;?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['name_maxlength'];?>
" /></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['avatar']->value) {?>
<tr>
<td class="c"><p class="userdata"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_avatar');?>
</strong></p></td>
<td class="d"><p class="userdata"><img src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['image'];?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('avatar_img_alt');?>
" width="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['height'];?>
" /><br />
<input id="delete_avatar" type="checkbox" name="delete_avatar" value="1"<?php if ($_smarty_tpl->tpl_vars['delete_avatar']->value=="1") {?> checked="checked"<?php }?> /><label for="delete_avatar"><?php echo $_smarty_tpl->getConfigVariable('delete_avatar');?>
</label></p>
</td>
</tr>
<?php }?>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_type');?>
</strong></td>
<td class="d"><input id="edit_user_type_0" type="radio" name="edit_user_type" value="0"<?php if ($_smarty_tpl->tpl_vars['edit_user_type']->value==0) {?> checked="checked"<?php }?> /><label for="edit_user_type_0"><?php echo $_smarty_tpl->getConfigVariable('user');?>
</label><br /><input id="edit_user_type_1" type="radio" name="edit_user_type" value="1"<?php if ($_smarty_tpl->tpl_vars['edit_user_type']->value==1) {?> checked="checked"<?php }?> /><label for="edit_user_type_1"><?php echo $_smarty_tpl->getConfigVariable('mod');?>
</label><br /><input id="edit_user_type_2" type="radio" name="edit_user_type" value="2"<?php if ($_smarty_tpl->tpl_vars['edit_user_type']->value==2) {?> checked="checked"<?php }?> /><label for="edit_user_type_2"><?php echo $_smarty_tpl->getConfigVariable('admin');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_email');?>
</strong></td>
<td class="d"><input type="text" size="40" name="user_email" value="<?php echo $_smarty_tpl->tpl_vars['user_email']->value;?>
" /><br />
<span class="small"><input id="email_contact" type="checkbox" name="email_contact" value="1"<?php if ($_smarty_tpl->tpl_vars['email_contact']->value==1) {?> checked="checked"<?php }?> /><label for="email_contact"><?php echo $_smarty_tpl->getConfigVariable('edit_user_email_contact');?>
</label></span></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_hp');?>
</strong></td>
<td class="d"><input type="text" size="40" name="user_hp" value="<?php echo $_smarty_tpl->tpl_vars['user_hp']->value;?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['hp_maxlength'];?>
" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_real_name');?>
</strong></td>
<td class="d"><input type="text" size="40" name="user_real_name" value="<?php echo $_smarty_tpl->tpl_vars['user_real_name']->value;?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['name_maxlength'];?>
" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_gender');?>
</strong></td>
<td class="d">
<input id="user_gender_1" type="radio" name="user_gender" value="1"<?php if ($_smarty_tpl->tpl_vars['user_gender']->value=="1") {?> checked="checked"<?php }?> /><label for="user_gender_1"><?php echo $_smarty_tpl->getConfigVariable('male');?>
</label><br />
<input id="user_gender_2" type="radio" name="user_gender" value="2"<?php if ($_smarty_tpl->tpl_vars['user_gender']->value=="2") {?> checked="checked"<?php }?> /><label for="user_gender_2"><?php echo $_smarty_tpl->getConfigVariable('female');?>
</label>
</td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_birthday');?>
</strong></td>
<td class="d"><input type="text" size="40" name="user_birthday" value="<?php echo $_smarty_tpl->tpl_vars['user_birthday']->value;?>
" /> <span class="small">(<?php echo $_smarty_tpl->getConfigVariable('birthday_format');?>
)</span></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_location');?>
</strong></td>
<td class="d"><input type="text" size="40" name="user_location" value="<?php echo $_smarty_tpl->tpl_vars['user_location']->value;?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['location_maxlength'];?>
" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_profile');?>
</strong></td>
<td class="d"><textarea cols="65" rows="4" name="profile"><?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
</textarea></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_signature');?>
</strong></td>
<td class="d"><textarea cols="65" rows="4" name="signature"><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</textarea></td>
</tr>

<?php if ($_smarty_tpl->tpl_vars['languages']->value) {?>
<tr>
<td class="c"><strong><label for="user_language"><?php echo $_smarty_tpl->getConfigVariable('edit_user_language');?>
</label></strong></td>
<td class="d">
<select id="user_language" name="user_language" size="1">
<option value=""<?php if ($_smarty_tpl->tpl_vars['user_language']->value=='') {?> selected="selected"<?php }?>></option>
<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['l']->value['identifier'];?>
"<?php if ($_smarty_tpl->tpl_vars['l']->value['identifier']==$_smarty_tpl->tpl_vars['user_language']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['l']->value['title'];?>
</option>
<?php } ?>
</select>
</td>
</tr>
<?php }?>

<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_time_zone');?>
</strong></td>
<td class="d">
<?php if ($_smarty_tpl->tpl_vars['time_zones']->value) {?>
<p>
<select id="user_time_zone" name="user_time_zone" size="1">
<option value=""<?php if ($_smarty_tpl->tpl_vars['user_time_zone']->value=='') {?> selected="selected"<?php }?>></option>
<?php  $_smarty_tpl->tpl_vars['tz'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tz']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['time_zones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tz']->key => $_smarty_tpl->tpl_vars['tz']->value) {
$_smarty_tpl->tpl_vars['tz']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['tz']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['tz']->value==$_smarty_tpl->tpl_vars['user_time_zone']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tz']->value;?>
</option>
<?php } ?>
</select>
</p>
<?php }?>
<p><span class="small"><label for="user_time_difference"><?php echo $_smarty_tpl->getConfigVariable('edit_user_time_difference');?>
</label></span><br /><input id="user_time_difference" type="text" size="6" name="user_time_difference" value="<?php echo $_smarty_tpl->tpl_vars['user_time_difference']->value;?>
" maxlength="6" /></p>
</td>
</tr>

<?php if ($_smarty_tpl->tpl_vars['themes']->value) {?>
<tr>
<td class="c"><strong><label for="user_theme"><?php echo $_smarty_tpl->getConfigVariable('edit_user_theme');?>
</label></strong></td>
<td class="d">
<select id="user_theme" name="user_theme" size="1">
<option value=""<?php if ($_smarty_tpl->tpl_vars['user_theme']->value=='') {?> selected="selected"<?php }?>></option>
<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['identifier'];?>
"<?php if ($_smarty_tpl->tpl_vars['t']->value['identifier']==$_smarty_tpl->tpl_vars['user_theme']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['title'];?>
</option>
<?php } ?>
</select>
</td>
</tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['edit_user_type']->value==2||$_smarty_tpl->tpl_vars['edit_user_type']->value==1) {?>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_notification');?>
</strong></td>
<td class="d"><input id="new_posting_notification" type="checkbox" name="new_posting_notification" value="1"<?php if ($_smarty_tpl->tpl_vars['new_posting_notification']->value=="1") {?> checked="checked"<?php }?> /><label for="new_posting_notification"><?php echo $_smarty_tpl->getConfigVariable('admin_mod_notif_posting');?>
</label><br />
<input id="new_user_notification" type="checkbox" name="new_user_notification" value="1"<?php if ($_smarty_tpl->tpl_vars['new_user_notification']->value=="1") {?> checked="checked"<?php }?> /><label for="new_user_notification"><?php echo $_smarty_tpl->getConfigVariable('admin_mod_notif_register');?>
</label></td>
</tr>
<?php }?>
<tr>
<td class="c">&nbsp;</td>
<td class="d"><input type="submit" name="edit_user_submit" value="<?php echo $_smarty_tpl->getConfigVariable('userdata_submit_button');?>
" /></td>
</tr>
</table>
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='delete_users') {?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('caution');?>
</p>
<p><?php if ($_smarty_tpl->tpl_vars['selected_users_count']->value>1) {?><?php echo $_smarty_tpl->getConfigVariable('delete_users_confirmation');?>
<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('delete_user_confirmation');?>
<?php }?></p>
<ul>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['nr'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['name'] = 'nr';
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['selected_users']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<li><a href="index.php?mode=user&amp;show_user=<?php echo $_smarty_tpl->tpl_vars['selected_users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']]['id'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['selected_users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']]['name'];?>
</strong></a></li>
<?php endfor; endif; ?>
</ul>
<br />
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['nr'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['name'] = 'nr';
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['selected_users']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<input type="hidden" name="selected_confirmed[]" value="<?php echo $_smarty_tpl->tpl_vars['selected_users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']]['id'];?>
" />
<?php endfor; endif; ?>
<input type="submit" name="delete_confirmed" value="<?php echo $_smarty_tpl->getConfigVariable('delete_submit');?>
" />
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='user_delete_entries') {?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('caution');?>
</p>
<p><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('delete_entries_of_user_confirm'),"[user]",$_smarty_tpl->tpl_vars['user_delete_entries']->value['user']);?>
</p>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="user_delete_entries" value="<?php echo $_smarty_tpl->tpl_vars['user_delete_entries']->value['id'];?>
" />
<input type="submit" name="delete_confirmed" value="<?php echo $_smarty_tpl->getConfigVariable('delete_submit');?>
" />
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='register') {?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('error_headline');?>
</p>
<ul>
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
<?php $_smarty_tpl->tpl_vars["error"] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mysec']['index']], null, 0);?>
<li><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['error']->value);?>
</li>
<?php endfor; endif; ?>
</ul>
<?php }?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<p><label for="ar_username" class="main"><?php echo $_smarty_tpl->getConfigVariable('register_username');?>
</label><br />
<input id="ar_username" type="text" size="25" name="ar_username" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['ar_username']->value)===null||$tmp==='' ? '' : $tmp);?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['name_maxlength'];?>
" /></p>
<p><label for="ar_email" class="main"><?php echo $_smarty_tpl->getConfigVariable('register_email');?>
</label><br />
<input id="ar_email" type="text" size="25" name="ar_email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['ar_email']->value)===null||$tmp==='' ? '' : $tmp);?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['email_maxlength'];?>
" /></p>
<p><label for="ar_pw" class="main"><?php echo $_smarty_tpl->getConfigVariable('register_pw');?>
</label><br />
<input id="ar_pw" type="password" size="25" name="ar_pw" maxlength="50" /></p>
<p><label for="ar_pw_conf" class="main"><?php echo $_smarty_tpl->getConfigVariable('register_pw_conf');?>
</label><br />
<input id="ar_pw_conf" type="password" size="25" name="ar_pw_conf" maxlength="50" /></p>
<p><input id="ar_send_userdata" type="checkbox" name="ar_send_userdata" value="true"<?php if ($_smarty_tpl->tpl_vars['ar_send_userdata']->value) {?> checked="checked"<?php }?> /> <label for="ar_send_userdata"><?php echo $_smarty_tpl->getConfigVariable('register_send_userdata');?>
</label></p>
<p><input type="submit" name="register_submit" value="<?php echo $_smarty_tpl->getConfigVariable('submit_button_ok');?>
" /></p>
</div>
</form>
<p class="small"><?php echo $_smarty_tpl->getConfigVariable('register_exp');?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='smilies') {?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('error_headline');?>
</p>
<ul>
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
<?php $_smarty_tpl->tpl_vars["error"] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mysec']['index']], null, 0);?>
<li><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['error']->value);?>
</li>
<?php endfor; endif; ?>
</ul>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['smilies']==1) {?>
<table id="sortable" class="normaltab" border="0" cellpadding="5" cellspacing="1">
<thead>
<tr>
<th><?php echo $_smarty_tpl->getConfigVariable('smiley_image');?>
</th>
<th><?php echo $_smarty_tpl->getConfigVariable('smiley_codes');?>
</th>
<th><?php echo $_smarty_tpl->getConfigVariable('smiley_title');?>
</th>
<th>&#160;</th>
</tr>
</thead>
<tbody id="items">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['row'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['row']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['name'] = 'row';
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['smilies']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total']);
?>
<?php echo smarty_function_cycle(array('values'=>"a,b",'assign'=>'c'),$_smarty_tpl);?>

<tr id="id_<?php echo $_smarty_tpl->tpl_vars['smilies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['id'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
">
<td><img src="images/smilies/<?php echo $_smarty_tpl->tpl_vars['smilies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['smilies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['code_1'];?>
" /></td>
<td><?php echo $_smarty_tpl->tpl_vars['smilies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['codes'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['smilies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['title'];?>
</td>
<td>

<a href="index.php?mode=admin&amp;edit_smiley=<?php echo $_smarty_tpl->tpl_vars['smilies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/edit.png" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
" width="16" height="16" /></a> &nbsp; <a href="index.php?mode=admin&amp;delete_smiley=<?php echo $_smarty_tpl->tpl_vars['smilies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/delete.png" title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
" width="16" height="16"/></a> &nbsp; <a href="index.php?mode=admin&amp;move_up_smiley=<?php echo $_smarty_tpl->tpl_vars['smilies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/arrow_up.png" alt="<?php echo $_smarty_tpl->getConfigVariable('move_up');?>
" title="<?php echo $_smarty_tpl->getConfigVariable('move_up');?>
" width="16" height="16" /></a><a href="index.php?mode=admin&amp;move_down_smiley=<?php echo $_smarty_tpl->tpl_vars['smilies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/arrow_down.png" alt="<?php echo $_smarty_tpl->getConfigVariable('move_down');?>
" title="<?php echo $_smarty_tpl->getConfigVariable('move_down');?>
" width="16" height="16" /></a>

</td>

</tr>
<?php endfor; endif; ?>
</tbody>
</table>
<?php if ($_smarty_tpl->tpl_vars['smiley_files']->value) {?>
<form action="index.php" method="post" class="normalform" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin">
<table style="margin-top:20px;">
<tr>
<td><label for="add_smiley"><?php echo $_smarty_tpl->getConfigVariable('add_smiley');?>
</label></td>
<td><label for="smiley_code"><?php echo $_smarty_tpl->getConfigVariable('add_smiley_code');?>
</label></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>
<select id="add_smiley" name="add_smiley" size="1">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['nr'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['name'] = 'nr';
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['smiley_files']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<option value="<?php echo $_smarty_tpl->tpl_vars['smiley_files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['smiley_files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']];?>
</option>
<?php endfor; endif; ?>
</select>
</select></td>
<td><input id="smiley_code" type="text" name="smiley_code" size="10" /></td>
<td><input type="submit" value="<?php echo $_smarty_tpl->getConfigVariable('submit_button_ok');?>
" /></td>
</tr>
</table>
</div>
</form>
<?php } else { ?>
<p style="margin-top:20px;"><em><?php echo $_smarty_tpl->getConfigVariable('no_other_smilies_in_folder');?>
</em></p>
<?php }?>
<?php } else { ?>
<p><em><?php echo $_smarty_tpl->getConfigVariable('smilies_disabled');?>
</em></p>
<?php }?>
<ul class="adminmenu">
<li><?php if ($_smarty_tpl->tpl_vars['settings']->value['smilies']==1) {?><a href="index.php?mode=admin&amp;disable_smilies=true"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/smilies_disable.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('disable_smilies');?>
</span></a><?php } else { ?><a href="index.php?mode=admin&amp;enable_smilies=true"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/smilies.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('enable_smilies');?>
</span></a><?php }?></li>
</ul>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='spam_protection') {?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('error_headline');?>
</p>
<ul>
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
<?php $_smarty_tpl->tpl_vars["error"] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mysec']['index']], null, 0);?>
<li><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['error']->value);?>
</li>
<?php endfor; endif; ?>
</ul>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['saved']->value) {?><p class="ok"><?php echo $_smarty_tpl->getConfigVariable('spam_protection_saved');?>
</p><?php }?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">

<tr>
<td class="c" style="width:30%;"><strong><?php echo $_smarty_tpl->getConfigVariable('captcha');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('captcha_desc');?>
<?php if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value||!$_smarty_tpl->tpl_vars['font_available']->value) {?><br /><?php echo $_smarty_tpl->getConfigVariable('captcha_graphical_desc');?>
<?php }?></span></td>
<td class="d">
 <table border="0" cellpadding="0" cellspacing="3">
  <tr>
   <td><strong><?php echo $_smarty_tpl->getConfigVariable('captcha_posting');?>
</strong></td>
   <td><input id="captcha_posting_0" type="radio" name="captcha_posting" value="0"<?php if ($_smarty_tpl->tpl_vars['captcha_posting']->value==0) {?> checked="checked"<?php }?> /><label for="captcha_posting_0"><?php echo $_smarty_tpl->getConfigVariable('captcha_disabled');?>
</label></td>
   <td><input id="captcha_posting_1" type="radio" name="captcha_posting" value="1"<?php if ($_smarty_tpl->tpl_vars['captcha_posting']->value==1) {?> checked="checked"<?php }?> /><label for="captcha_posting_1"><?php echo $_smarty_tpl->getConfigVariable('captcha_mathematical');?>
</label></td>
   <td><input id="captcha_posting_2" type="radio" name="captcha_posting" value="2"<?php if ($_smarty_tpl->tpl_vars['captcha_posting']->value==2) {?> checked="checked"<?php }?><?php if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value) {?> disabled="disabled"<?php }?> /><label for="captcha_posting_2"<?php if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value) {?> class="unavailable"<?php }?>><?php echo $_smarty_tpl->getConfigVariable('captcha_graphical');?>
<?php if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value||!$_smarty_tpl->tpl_vars['font_available']->value) {?><sup>*</sup><?php }?></label></td>
  </tr>
  <tr>
   <td><strong><?php echo $_smarty_tpl->getConfigVariable('captcha_email');?>
</strong></td>
   <td><input id="captcha_email_0" type="radio" name="captcha_email" value="0"<?php if ($_smarty_tpl->tpl_vars['captcha_email']->value==0) {?> checked="checked"<?php }?> /><label for="captcha_email_0"><?php echo $_smarty_tpl->getConfigVariable('captcha_disabled');?>
</label></td>
   <td><input id="captcha_email_1" type="radio" name="captcha_email" value="1"<?php if ($_smarty_tpl->tpl_vars['captcha_email']->value==1) {?> checked="checked"<?php }?> /><label for="captcha_email_1"><?php echo $_smarty_tpl->getConfigVariable('captcha_mathematical');?>
</label></td>
   <td><input id="captcha_email_2" type="radio" name="captcha_email" value="2"<?php if ($_smarty_tpl->tpl_vars['captcha_email']->value==2) {?> checked="checked"<?php }?><?php if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value) {?> disabled="disabled"<?php }?> /><label for="captcha_email_2"<?php if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value) {?> class="unavailable"<?php }?>><?php echo $_smarty_tpl->getConfigVariable('captcha_graphical');?>
<?php if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value||!$_smarty_tpl->tpl_vars['font_available']->value) {?><sup>*</sup><?php }?></label></td>
  </tr>
  <tr>
   <td><strong><?php echo $_smarty_tpl->getConfigVariable('captcha_register');?>
</strong></td>
   <td><input id="captcha_register_0" type="radio" name="captcha_register" value="0"<?php if ($_smarty_tpl->tpl_vars['captcha_register']->value==0) {?> checked="checked"<?php }?> /><label for="captcha_register_0"><?php echo $_smarty_tpl->getConfigVariable('captcha_disabled');?>
</label></td>
   <td><input id="captcha_register_1" type="radio" name="captcha_register" value="1"<?php if ($_smarty_tpl->tpl_vars['captcha_register']->value==1) {?> checked="checked"<?php }?> /><label for="captcha_register_1"><?php echo $_smarty_tpl->getConfigVariable('captcha_mathematical');?>
</label></td>
   <td><input id="captcha_register_2" type="radio" name="captcha_register" value="2"<?php if ($_smarty_tpl->tpl_vars['captcha_register']->value==2) {?> checked="checked"<?php }?><?php if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value) {?> disabled="disabled"<?php }?> /><label for="captcha_register_2"<?php if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value) {?> class="unavailable"<?php }?>><?php echo $_smarty_tpl->getConfigVariable('captcha_graphical');?>
<?php if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value||!$_smarty_tpl->tpl_vars['font_available']->value) {?><sup>*</sup><?php }?></label></td>
  </tr>
 </table>
 <?php if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value||!$_smarty_tpl->tpl_vars['font_available']->value) {?>
 <p class="xsmall"><sup>*</sup> <?php if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value) {?><?php echo $_smarty_tpl->getConfigVariable('gr_captcha_not_available');?>
<?php } elseif (!$_smarty_tpl->tpl_vars['font_available']->value) {?><?php echo $_smarty_tpl->getConfigVariable('gr_captcha_no_font');?>
<?php }?></p>
 <?php }?>
</td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('stop_forum_spam');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('stop_forum_spam_desc');?>
</span></td>
<td class="d"><input id="stop_forum_spam" type="checkbox" name="stop_forum_spam" value="1"<?php if ($_smarty_tpl->tpl_vars['stop_forum_spam']->value==1) {?> checked="checked"<?php }?> /><label for="stop_forum_spam"><?php echo $_smarty_tpl->getConfigVariable('stop_forum_spam_enable');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('bad_behavior');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('bad_behavior_desc');?>
</span></td>
<td class="d"><input id="bad_behavior" type="checkbox" name="bad_behavior" value="1"<?php if ($_smarty_tpl->tpl_vars['bad_behavior']->value==1) {?> checked="checked"<?php }?> /><label for="bad_behavior"><?php echo $_smarty_tpl->getConfigVariable('bad_behavior_enable');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('akismet');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('akismet_desc');?>
</span></td>
<td class="d"><p><?php echo $_smarty_tpl->getConfigVariable('akismet_key');?>
<br />
<input type="text" name="akismet_key" value="<?php echo $_smarty_tpl->tpl_vars['akismet_key']->value;?>
" size="25" /></p>
<p><input id="akismet_entry_check" type="checkbox" name="akismet_entry_check" value="1"<?php if ($_smarty_tpl->tpl_vars['akismet_entry_check']->value==1) {?> checked="checked"<?php }?> /><label for="akismet_entry_check"><?php echo $_smarty_tpl->getConfigVariable('akismet_entry');?>
</label><br />
<input id="akismet_mail_check" type="checkbox" name="akismet_mail_check" value="1"<?php if ($_smarty_tpl->tpl_vars['akismet_mail_check']->value==1) {?> checked="checked"<?php }?> /><label for="akismet_mail_check"><?php echo $_smarty_tpl->getConfigVariable('akismet_mail');?>
</label><br />
<input id="akismet_check_registered" type="checkbox" name="akismet_check_registered" value="1"<?php if ($_smarty_tpl->tpl_vars['akismet_check_registered']->value==1) {?> checked="checked"<?php }?> /><label for="akismet_check_registered"><?php echo $_smarty_tpl->getConfigVariable('akismet_registered');?>
</label></p>
<p><input id="save_spam" type="checkbox" name="save_spam" value="1"<?php if ($_smarty_tpl->tpl_vars['save_spam']->value==1) {?> checked="checked"<?php }?> /><label for="save_spam"><?php echo $_smarty_tpl->getConfigVariable('akismet_save_spam');?>
</label><br />
<?php echo $_smarty_tpl->getConfigVariable('akismet_auto_delete_spam');?>
<br />
<input type="text" name="auto_delete_spam" value="<?php echo $_smarty_tpl->tpl_vars['auto_delete_spam']->value;?>
" size="5" /></p></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('not_accepted_words');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('not_accepted_words_desc');?>
</span></td>
<td class="d"><textarea name="not_accepted_words" cols="35" rows="10"><?php echo $_smarty_tpl->tpl_vars['not_accepted_words']->value;?>
</textarea></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('banned_ips');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('banned_ips_desc');?>
</span></td>
<td class="d"><textarea name="banned_ips" cols="35" rows="5"><?php echo $_smarty_tpl->tpl_vars['banned_ips']->value;?>
</textarea></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('banned_user_agents');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('banned_user_agents_desc');?>
</span></td>
<td class="d"><textarea name="banned_user_agents" cols="35" rows="5"><?php echo $_smarty_tpl->tpl_vars['banned_user_agents']->value;?>
</textarea></td>
</tr>
<tr>
<td class="c">&nbsp;</td>
<td class="d"><input type="submit" name="spam_protection_submit" value="<?php echo $_smarty_tpl->getConfigVariable('spam_protection_submit');?>
" /></td>
</tr>
</table>
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='reset_uninstall') {?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('caution');?>
</p>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme']->value)."/subtemplates/errors.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>

<h2><?php echo $_smarty_tpl->getConfigVariable('reset_forum');?>
</h2>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<p><input id="delete_postings" type="checkbox" name="delete_postings" value="true" /><label for="delete_postings"> <?php echo $_smarty_tpl->getConfigVariable('delete_postings');?>
</label></p>
<p><input id="delete_userdata" type="checkbox" name="delete_userdata" value="true" /><label for="delete_userdata"> <?php echo $_smarty_tpl->getConfigVariable('delete_userdata');?>
</label></p>
<p><?php echo $_smarty_tpl->getConfigVariable('admin_confirm_password');?>
<br />
<input type="password" size="20" name="confirm_pw" /> <input type="submit" name="reset_forum_confirmed" value="<?php echo $_smarty_tpl->getConfigVariable('reset_forum_submit');?>
" /></p>
</div>
</form>

<hr style="margin:20px 0px 20px 0px; border-top: 1px dotted #808080; border-left: 0; border-right: 0; border-bottom: 0; height: 1px;"/>

<h2><?php echo $_smarty_tpl->getConfigVariable('uninstall_forum');?>
</h2>
<p><?php echo $_smarty_tpl->getConfigVariable('uninstall_forum_exp');?>
</p>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<p><?php echo $_smarty_tpl->getConfigVariable('reset_uninstall_conf_pw');?>
<br />
<input type="password" size="20" name="confirm_pw" /> <input type="submit" name="uninstall_forum_confirmed" value="<?php echo $_smarty_tpl->getConfigVariable('uninstall_forum_submit');?>
" /></p>
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='backup') {?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme']->value)."/subtemplates/errors.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['message']->value) {?><p class="ok"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['message']->value);?>
</p><?php }?>
<?php if ($_smarty_tpl->tpl_vars['backup_files']->value) {?>
<form id="selectform" action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="delete_backup_files_confirm" value="" />
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">
<tr>
<th>&#160;</th>
<th><?php echo $_smarty_tpl->getConfigVariable('backup_file');?>
</th>
<th><?php echo $_smarty_tpl->getConfigVariable('backup_date');?>
</th>
<th><?php echo $_smarty_tpl->getConfigVariable('backup_size');?>
</th>
<th>&#160;</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backup_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
<?php echo smarty_function_cycle(array('values'=>"a,b",'assign'=>'c'),$_smarty_tpl);?>

<tr class="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
">
<td style="width:10px;"><input type="checkbox" name="delete_backup_files[]" value="<?php echo $_smarty_tpl->tpl_vars['file']->value['file'];?>
" /></td>
<td><?php echo $_smarty_tpl->tpl_vars['file']->value['file'];?>
</td>
<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['file']->value['date'],$_smarty_tpl->getConfigVariable('time_format'));?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['file']->value['size'];?>
</td>
<td><a href="index.php?mode=admin&amp;download_backup_file=<?php echo $_smarty_tpl->tpl_vars['file']->value['file'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/disk.png" title="<?php echo $_smarty_tpl->getConfigVariable('download_backup_file');?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('download_backup_file');?>
" width="16" height="16" /></a> &#160; <a href="index.php?mode=admin&amp;restore=<?php echo $_smarty_tpl->tpl_vars['file']->value['file'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/restore.png" title="<?php echo $_smarty_tpl->getConfigVariable('restore');?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('restore');?>
" width="16" height="16" /></a> &#160; <a href="index.php?mode=admin&amp;delete_backup_files[]=<?php echo $_smarty_tpl->tpl_vars['file']->value['file'];?>
" onclick="return delete_backup_confirm(this, '<?php echo rawurlencode($_smarty_tpl->getConfigVariable('delete_backup_file_confirm'));?>
')"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/delete.png" title="<?php echo $_smarty_tpl->getConfigVariable('delete_backup_file');?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('delete_backup_file');?>
" width="16" height="16" /></a></td>
</tr>
<?php } ?>
</table>
<div id="selectioncontrols"><img id="arrow-selected" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/arrow_selected.png" alt="" width="24" height="14" /> <input type="submit" name="delete_selected_backup_files" value="<?php echo $_smarty_tpl->getConfigVariable('delete_selected');?>
" /></div>
</div>
</form>
<?php } else { ?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('caution');?>
</p>
<p><?php echo $_smarty_tpl->getConfigVariable('backup_note');?>
</p>
<!--<p><em>No backup files available.</em></p>-->
<?php }?>
<ul class="adminmenu">
<li><a href="index.php?mode=admin&amp;create_backup=0"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/backup.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('create_backup_complete');?>
</span></a></li>
<li><span class="small"><?php echo $_smarty_tpl->getConfigVariable('only_create_backup_of');?>
 <a href="index.php?mode=admin&amp;create_backup=1"><span><?php echo $_smarty_tpl->getConfigVariable('backup_entries');?>
</span></a>, <a href="index.php?mode=admin&amp;create_backup=2"><span><?php echo $_smarty_tpl->getConfigVariable('backup_userdata');?>
</span></a>, <a href="index.php?mode=admin&amp;create_backup=3"><span><?php echo $_smarty_tpl->getConfigVariable('backup_settings');?>
</span></a>, <a href="index.php?mode=admin&amp;create_backup=4"><span><?php echo $_smarty_tpl->getConfigVariable('backup_categories');?>
</span></a>, <a href="index.php?mode=admin&amp;create_backup=5"><span><?php echo $_smarty_tpl->getConfigVariable('backup_pages');?>
</span></a>, <a href="index.php?mode=admin&amp;create_backup=6"><span><?php echo $_smarty_tpl->getConfigVariable('backup_smilies');?>
</span></a>, <a href="index.php?mode=admin&amp;create_backup=7"><span><?php echo $_smarty_tpl->getConfigVariable('backup_banlists');?>
</span></a></span></li>
</ul>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='delete_backup_files_confirm') {?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('caution');?>
</p>
<p><?php if ($_smarty_tpl->tpl_vars['file_number']->value==1) {?><?php echo $_smarty_tpl->getConfigVariable('delete_backup_file_confirm');?>
<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('delete_backup_files_confirm');?>
<?php }?></p>
<ul>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['nr'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['name'] = 'nr';
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['delete_backup_files']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<li><?php echo $_smarty_tpl->tpl_vars['delete_backup_files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']];?>
</li>
<?php endfor; endif; ?>
</ul>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['nr'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['name'] = 'nr';
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['delete_backup_files']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<input type="hidden" name="delete_backup_files[]" value="<?php echo $_smarty_tpl->tpl_vars['delete_backup_files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']];?>
" />
<?php endfor; endif; ?>
<input type="submit" name="delete_backup_files_confirm" value="<?php echo $_smarty_tpl->getConfigVariable('delete_backup_submit');?>
" />
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='restore') {?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('caution');?>
</p>
<p><?php echo $_smarty_tpl->getConfigVariable('restore_confirm');?>
</p>
<p><strong><?php echo $_smarty_tpl->tpl_vars['backup_file']->value;?>
</strong> - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['backup_file_date']->value,$_smarty_tpl->getConfigVariable('time_format'));?>
</p>
<?php if ($_smarty_tpl->tpl_vars['safe_mode_warning']->value) {?><p class="caution"><?php echo $_smarty_tpl->getConfigVariable('restore_safe_mode_warning');?>
</p>
<p style="color:red;"><?php echo $_smarty_tpl->getConfigVariable('restore_safe_mode_note');?>
</p><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('error_headline');?>
</p>
<ul>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['error'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['error']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['name'] = 'error';
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['error']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['error']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['error']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['error']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['error']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['error']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['total']);
?>
<?php $_smarty_tpl->tpl_vars["error"] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['error']['index']], null, 0);?>
<li><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['error']->value),"[mysql_error]",$_smarty_tpl->tpl_vars['mysql_error']->value);?>
</li>
<?php endfor; endif; ?>
</ul>
<?php }?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="backup_file" value="<?php echo $_smarty_tpl->tpl_vars['backup_file']->value;?>
" />
<p><?php echo $_smarty_tpl->getConfigVariable('admin_confirm_password');?>
<br /><input type="password" name="restore_password" size="25"/></p>
<p><input type="submit" name="restore_submit" value="<?php echo $_smarty_tpl->getConfigVariable('restore_submit');?>
" onclick="document.getElementById('throbber-submit').style.visibility = 'visible';" /> <img id="throbber-submit" style="visibility:hidden;" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/throbber_submit.gif" alt="" width="16" height="16" /></p>
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='update') {?>
<p style="margin-bottom:25px;"><span style="background:yellow; padding:5px;"><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('update_current_version'),"[version]",$_smarty_tpl->tpl_vars['settings']->value['version']);?>
</span></p>

<h3><?php echo $_smarty_tpl->getConfigVariable('update_instructions_hl');?>
</h3>
<ul>
<?php  $_smarty_tpl->tpl_vars['instruction'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['instruction']->_loop = false;
 $_from = $_smarty_tpl->getConfigVariable('update_instructions'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['instruction']->key => $_smarty_tpl->tpl_vars['instruction']->value) {
$_smarty_tpl->tpl_vars['instruction']->_loop = true;
?>
<li><?php echo $_smarty_tpl->tpl_vars['instruction']->value;?>
</li>
<?php } ?>
</ul>

<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme']->value)."/subtemplates/errors.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['message']->value) {?><p class="ok"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['message']->value);?>
</p><?php }?>
<?php if ($_smarty_tpl->tpl_vars['update_files']->value) {?>
<h3><?php echo $_smarty_tpl->getConfigVariable('update_available_files');?>
</h3>
<ul>
<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['update_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
<li><a href="index.php?mode=admin&amp;run_update=<?php echo $_smarty_tpl->tpl_vars['file']->value['filename'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('update_file_title');?>
"><?php echo $_smarty_tpl->tpl_vars['file']->value['filename'];?>
</a></li>
<?php } ?>
</ul>
<?php } else { ?>
<p><em><?php echo $_smarty_tpl->getConfigVariable('update_no_files_available');?>
</em></p>
<?php }?>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='run_update') {?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('caution');?>
</p>
<p><?php echo $_smarty_tpl->getConfigVariable('update_confirm');?>
</p>
<p><strong><?php echo $_smarty_tpl->tpl_vars['update_file']->value;?>
</strong><?php if ($_smarty_tpl->tpl_vars['update_from_version']->value&&$_smarty_tpl->tpl_vars['update_to_version']->value) {?> <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('update_file_details'),"[update_from_version]",$_smarty_tpl->tpl_vars['update_from_version']->value),"[update_to_version]",$_smarty_tpl->tpl_vars['update_to_version']->value);?>
<?php }?></p>
<p style="color:red;font-weight:bold;"><?php echo $_smarty_tpl->getConfigVariable('update_note');?>
</p>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme']->value)."/subtemplates/errors.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="update_file_submit" value="<?php echo $_smarty_tpl->tpl_vars['update_file']->value;?>
" />
<p><?php echo $_smarty_tpl->getConfigVariable('admin_confirm_password');?>
<br /><input type="password" name="update_password" size="25"/></p>
<p><input type="submit" name="update_submit" value="<?php echo $_smarty_tpl->getConfigVariable('update_submit');?>
" onclick="document.getElementById('throbber-submit').style.visibility = 'visible';" /> <img id="throbber-submit" style="visibility:hidden;" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/throbber_submit.gif" alt="" width="16" height="16" /></p>
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='update_done') {?>
<?php if ($_smarty_tpl->tpl_vars['update_errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('error_headline');?>
</p>
<ul>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['mysec'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['name'] = 'mysec';
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['update_errors']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<?php $_smarty_tpl->tpl_vars["error"] = new Smarty_variable($_smarty_tpl->tpl_vars['update_errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mysec']['index']], null, 0);?>
<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
<?php endfor; endif; ?>
</ul>
<?php } else { ?>
<p class="ok"><?php echo $_smarty_tpl->getConfigVariable('update_successful');?>
</p>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['update_items']->value) {?>
<p><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('update_items_note'),"[version]",$_smarty_tpl->tpl_vars['update_new_version']->value);?>
</p>
<ul class="filelist">
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['update_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<li><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/<?php if ($_smarty_tpl->tpl_vars['item']->value['type']==0) {?>folder.png<?php } else { ?>file.png<?php }?>" alt="[<?php if ($_smarty_tpl->tpl_vars['item']->value['type']==0) {?><?php echo $_smarty_tpl->getConfigVariable('folder_alt');?>
<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('file_alt');?>
<?php }?>]" width="16" height="16" /><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</li>
<?php } ?>
</ul>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['update_download_url']->value) {?><p class="small"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('update_download'),"[[","<a href=\"".((string)$_smarty_tpl->tpl_vars['update_download_url']->value)."\">"),"]]","</a>");?>
</p><?php }?>
<?php if ($_smarty_tpl->tpl_vars['update_message']->value) {?><?php echo $_smarty_tpl->tpl_vars['update_message']->value;?>
<?php }?>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='email_list') {?>
<textarea onfocus="this.select()" onclick="this.select()" readonly="readonly" cols="60" rows="15"><?php echo $_smarty_tpl->tpl_vars['email_list']->value;?>
</textarea>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='clear_userdata') {?>
<?php if ($_smarty_tpl->tpl_vars['no_users_in_selection']->value) {?><p class="caution"><?php echo $_smarty_tpl->getConfigVariable('no_users_in_selection');?>
</p><?php }?>
<?php $_smarty_tpl->tpl_vars["input_logins"] = new Smarty_variable("<input type=\"text\" name=\"logins\" value=\"".((string)$_smarty_tpl->tpl_vars['logins']->value)."\" size=\"4\" />", null, 0);?>
<?php $_smarty_tpl->tpl_vars["input_days"] = new Smarty_variable("<input type=\"text\" name=\"days\" value=\"".((string)$_smarty_tpl->tpl_vars['days']->value)."\" size=\"4\" />", null, 0);?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<p><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('clear_userdata_condition'),"[logins]",$_smarty_tpl->tpl_vars['input_logins']->value),"[days]",$_smarty_tpl->tpl_vars['input_days']->value);?>
 <input type="submit" name="clear_userdata" value="<?php echo $_smarty_tpl->getConfigVariable('submit_button_ok');?>
" /></p>
</div>
</form>
<p class="small"><?php echo $_smarty_tpl->getConfigVariable('clear_userdata_note');?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='edit_smiley') {?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('error_headline');?>
</p>
<ul>
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
<?php $_smarty_tpl->tpl_vars["error"] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mysec']['index']], null, 0);?>
<li><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['error']->value);?>
</li>
<?php endfor; endif; ?>
</ul>
<?php }?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_smilies_smiley');?>
</strong></td>
<td class="d"><select name="file" size="1">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['nr'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['name'] = 'nr';
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['smiley_files']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<option value="<?php echo $_smarty_tpl->tpl_vars['smiley_files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']];?>
"<?php if ($_smarty_tpl->tpl_vars['file']->value==$_smarty_tpl->tpl_vars['smiley_files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['smiley_files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']];?>
</option>
<?php endfor; endif; ?>
</select></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_smilies_codes');?>
</strong></td>
<td class="d"><input type="text" name="code_1" size="7" value="<?php echo $_smarty_tpl->tpl_vars['code_1']->value;?>
" /> <input type="text" name="code_2" size="7" value="<?php echo $_smarty_tpl->tpl_vars['code_2']->value;?>
" /> <input type="text" name="code_3" size="7" value="<?php echo $_smarty_tpl->tpl_vars['code_3']->value;?>
" /> <input type="text" name="code_4" size="7" value="<?php echo $_smarty_tpl->tpl_vars['code_4']->value;?>
" /> <input type="text" name="code_5" size="7" value="<?php echo $_smarty_tpl->tpl_vars['code_5']->value;?>
" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_smilies_title');?>
</strong></td>
<td class="d"><input type="text" name="title" size="25" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" /></td>
</tr>
<tr>
<td class="c">&nbsp;</td>
<td class="d"><input type="submit" name="edit_smiley_submit" value="<?php echo $_smarty_tpl->getConfigVariable('submit_button_ok');?>
" /></td>
</tr>
</table>
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='pages') {?>
<?php if ($_smarty_tpl->tpl_vars['pages']->value) {?>
<table id="sortable" class="normaltab" cellspacing="1" cellpadding="5">
<thead>
<tr>
<th><?php echo $_smarty_tpl->getConfigVariable('page_title');?>
</th>
<th><?php echo $_smarty_tpl->getConfigVariable('page_menu_linkname');?>
</th>
<th><?php echo $_smarty_tpl->getConfigVariable('page_access');?>
</th>
<th>&#160;</th>
</tr>
</thead>
<tbody id="items">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['page'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['page']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['name'] = 'page';
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total']);
?>
<?php echo smarty_function_cycle(array('values'=>"a,b",'assign'=>'c'),$_smarty_tpl);?>

<tr id="id_<?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['id'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
">
<td><a href="index.php?mode=page&amp;id=<?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['title'];?>
"><strong class="control"><?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['title'];?>
</strong></a></td>
<td><span class="small"><?php if ($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['menu_linkname']!='') {?><?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['menu_linkname'];?>
<?php } else { ?>&nbsp;<?php }?></span></td>
<td><span class="small"><?php if ($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['access']==1) {?><?php echo $_smarty_tpl->getConfigVariable('page_access_reg_users');?>
<?php } elseif ($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['access']==0) {?><?php echo $_smarty_tpl->getConfigVariable('page_access_public');?>
<?php }?></span></td>
<td><a href="index.php?mode=admin&amp;edit_page=<?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/edit.png" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
" width="16" height="16" /></a> &#160; <a href="index.php?mode=admin&amp;delete_page=<?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/delete.png" title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
" width="16" height="16"/></a> &nbsp; <a href="index.php?mode=admin&amp;move_up_page=<?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/arrow_up.png" alt="<?php echo $_smarty_tpl->getConfigVariable('move_up');?>
" title="<?php echo $_smarty_tpl->getConfigVariable('move_up');?>
" width="16" height="16" /></a>&nbsp;<a href="index.php?mode=admin&amp;move_down_page=<?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/arrow_down.png" alt="<?php echo $_smarty_tpl->getConfigVariable('move_down');?>
" title="<?php echo $_smarty_tpl->getConfigVariable('move_down');?>
" width="16" height="16" /></a></td>
</tr>
<?php endfor; endif; ?>
</tbody>
</table>
<?php } else { ?>
<p><?php echo $_smarty_tpl->getConfigVariable('no_pages');?>
</p>
<?php }?>
<ul class="adminmenu"><li><a href="index.php?mode=admin&amp;action=edit_page"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/add_page.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('add_page_link');?>
</span></a></li></ul>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='edit_page') {?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('error_headline');?>
</p>
<ul>
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
<?php $_smarty_tpl->tpl_vars["error"] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mysec']['index']], null, 0);?>
<li><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['error']->value);?>
</li>
<?php endfor; endif; ?>
</ul>
<?php }?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<?php if ($_smarty_tpl->tpl_vars['id']->value) {?><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" /><?php }?>
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('page_title');?>
</strong></td>
<td class="d"><input type="text" name="title" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? '' : $tmp);?>
" size="50" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('page_content');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('page_content_desc');?>
</span></td>
<td class="d"><textarea name="content" cols="70" rows="20"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? '' : $tmp);?>
</textarea></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('page_menu_linkname');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('page_menu_linkname_desc');?>
</span></td>
<td class="d"><input type="text" name="menu_linkname" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['menu_linkname']->value)===null||$tmp==='' ? '' : $tmp);?>
" size="50" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('page_access');?>
</strong></td>
<td class="d"><input type="radio" name="access" value="0"<?php if ($_smarty_tpl->tpl_vars['access']->value==0) {?> checked="checked"<?php }?> /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('page_access_public');?>
</span> <input type="radio" name="access" value="1"<?php if ($_smarty_tpl->tpl_vars['access']->value==1) {?> checked="checked"<?php }?> /><span class="small"><?php echo $_smarty_tpl->getConfigVariable('page_access_reg_users');?>
</span></td>
</tr>

<tr>
<td class="c">&nbsp;</td>
<td class="d"><input type="submit" name="edit_page_submit" value="<?php echo $_smarty_tpl->getConfigVariable('edit_page_submit');?>
" /></td>
</tr>
</table>
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='delete_page') {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('caution');?>
</p>
<p><?php echo $_smarty_tpl->getConfigVariable('delete_page_confirm');?>
</p>
<p><strong><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</strong></p>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
" />
<input type="submit" name="delete_page_submit" value="<?php echo $_smarty_tpl->getConfigVariable('delete_page_submit');?>
" />
</div>
</form>
<?php } else { ?>
<p><?php echo $_smarty_tpl->getConfigVariable('page_doesnt_exist');?>
</p>
<?php }?>
<?php } else { ?>
<ul class="adminmenu">
<li><a href="index.php?mode=admin&amp;action=settings"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/settings.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('forum_settings_link');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=user"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/user.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('user_administr_link');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=categories"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/categories.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('category_administr_link');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=smilies"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/smilies.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('smilies_administr_link');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=pages"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/pages.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('pages_administr_link');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=spam_protection"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/spam_protection.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('spam_protection_link');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=backup"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/backup.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('backup_restore_link');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=update"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/update.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('update_link');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=reset_uninstall"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/delete.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->getConfigVariable('reset_uninstall_link');?>
</span></a></li>
</ul>
<?php }?>
<?php }} ?>
