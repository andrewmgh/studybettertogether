<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 18:23:12
         compiled from "themes\default\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82052b1e810bf84e4-84824454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ded6d6e978966250d298c3c662a7d08bdd0958c0' => 
    array (
      0 => 'themes\\default\\main.tpl',
      1 => 1308341558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82052b1e810bf84e4-84824454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_file' => 0,
    'subnav_location' => 0,
    'subnav_location_var' => 0,
    'page_title' => 0,
    'settings' => 0,
    'keywords' => 0,
    'mode' => 0,
    'THEMES_DIR' => 0,
    'theme' => 0,
    'top' => 0,
    'link_rel_first' => 0,
    'link_rel_prev' => 0,
    'link_rel_next' => 0,
    'link_rel_last' => 0,
    'tid' => 0,
    'user' => 0,
    'user_type' => 0,
    'admin' => 0,
    'menu' => 0,
    'item' => 0,
    'subtemplate' => 0,
    'content' => 0,
    'total_users_online' => 0,
    'total_postings' => 0,
    'total_threads' => 0,
    'registered_users' => 0,
    'registered_users_online' => 0,
    'unregistered_users_online' => 0,
    'forum_time_zone' => 0,
    'forum_time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b1e810d38a39_05335807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b1e810d38a39_05335807')) {function content_52b1e810d38a39_05335807($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\studybettertogether\\forum\\modules\\smarty\\plugins\\modifier.replace.php';
?><?php  $_config = new Smarty_Internal_Config($_smarty_tpl->tpl_vars['language_file']->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("general", 'local'); ?><?php if ($_smarty_tpl->tpl_vars['subnav_location']->value&&$_smarty_tpl->tpl_vars['subnav_location_var']->value) {?><?php $_smarty_tpl->tpl_vars["subnav_location"] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['subnav_location']->value),"[var]",$_smarty_tpl->tpl_vars['subnav_location_var']->value), null, 0);?><?php } elseif ($_smarty_tpl->tpl_vars['subnav_location']->value) {?><?php $_smarty_tpl->tpl_vars['subnav_location'] = new Smarty_variable($_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['subnav_location']->value), null, 0);?><?php }?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->getConfigVariable('language');?>
" dir="<?php echo $_smarty_tpl->getConfigVariable('dir');?>
">
<head>
<title><?php if ($_smarty_tpl->tpl_vars['page_title']->value) {?><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
 - <?php } elseif ($_smarty_tpl->tpl_vars['subnav_location']->value) {?><?php echo $_smarty_tpl->tpl_vars['subnav_location']->value;?>
 - <?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['forum_name'], ENT_QUOTES, 'UTF-8', true);?>
</title>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $_smarty_tpl->getConfigVariable('charset');?>
" />
<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['forum_description'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?><meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /><?php }?>
<?php if ($_smarty_tpl->tpl_vars['mode']->value=='posting') {?>
<meta name="robots" content="noindex" />
<?php }?>
<meta name="generator" content="my little forum <?php echo $_smarty_tpl->tpl_vars['settings']->value['version'];?>
" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/style.min.css" media="all" />
<?php if ($_smarty_tpl->tpl_vars['settings']->value['rss_feed']==1) {?><link rel="alternate" type="application/rss+xml" title="RSS" href="index.php?mode=rss" /><?php }?>
<?php if (!$_smarty_tpl->tpl_vars['top']->value) {?>
<link rel="top" href="./" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['link_rel_first']->value) {?>
<link rel="first" href="<?php echo $_smarty_tpl->tpl_vars['link_rel_first']->value;?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['link_rel_prev']->value) {?>
<link rel="prev" href="<?php echo $_smarty_tpl->tpl_vars['link_rel_prev']->value;?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['link_rel_next']->value) {?>
<link rel="next" href="<?php echo $_smarty_tpl->tpl_vars['link_rel_next']->value;?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['link_rel_last']->value) {?>
<link rel="last" href="<?php echo $_smarty_tpl->tpl_vars['link_rel_last']->value;?>
" />
<?php }?>
<link rel="search" href="index.php?mode=search" />
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/favicon.ico" />
<?php if ($_smarty_tpl->tpl_vars['mode']->value=='entry') {?><link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['settings']->value['forum_address'];?>
index.php?mode=thread&amp;id=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
" /><?php }?>
<script src="index.php?mode=js_defaults&amp;t=<?php echo $_smarty_tpl->tpl_vars['settings']->value['last_changes'];?>
<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>&amp;user_type=<?php echo $_smarty_tpl->tpl_vars['user_type']->value;?>
<?php }?>" type="text/javascript" charset="utf-8"></script>
<script src="js/main.min.js" type="text/javascript" charset="utf-8"></script>
<?php if ($_smarty_tpl->tpl_vars['mode']->value=='posting') {?>
<script src="js/posting.min.js" type="text/javascript" charset="utf-8"></script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['mode']->value=='admin') {?>
<script src="js/admin.min.js" type="text/javascript" charset="utf-8"></script>
<?php }?>
</head>

<body>
<!--[if IE]><div id="ie"><![endif]-->

<div id="top">

<div id="logo">
<?php if ($_smarty_tpl->tpl_vars['settings']->value['home_linkname']) {?><p class="home"><a href="<?php echo $_smarty_tpl->tpl_vars['settings']->value['home_linkaddress'];?>
"><?php echo $_smarty_tpl->tpl_vars['settings']->value['home_linkname'];?>
</a></p><?php }?>
<h1><a href="./" title="<?php echo $_smarty_tpl->getConfigVariable('forum_index_link_title');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['forum_name'], ENT_QUOTES, 'UTF-8', true);?>
</a></h1>
</div>

<div id="nav">


<ul id="usermenu">
<!--
<?php if ($_smarty_tpl->tpl_vars['user']->value) {?><li><a href="index.php?mode=user&amp;action=edit_profile" title="<?php echo $_smarty_tpl->getConfigVariable('profile_link_title');?>
"><strong><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</strong></a></li><li><a href="index.php?mode=user" title="<?php echo $_smarty_tpl->getConfigVariable('user_area_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('user_area_link');?>
</a></li><?php 


?><li><a href="index.php?mode=admin" title="<?php echo $_smarty_tpl->getConfigVariable('admin_area_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('admin_area_link');?>
</a></li><?php 



?><li><a href="index.php?mode=login" title="<?php echo $_smarty_tpl->getConfigVariable('log_out_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('log_out_link');?>
</a></li><?php } else { ?><li><a href="index.php?mode=login" title="<?php echo $_smarty_tpl->getConfigVariable('log_in_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('log_in_link');?>
</a></li><?php if ($_smarty_tpl->tpl_vars['settings']->value['register_mode']!=2) {?><li><a href="index.php?mode=register" title="<?php echo $_smarty_tpl->getConfigVariable('register_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('register_link');?>
</a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['settings']->value['user_area_public']) {?><li><a href="index.php?mode=user" title="<?php echo $_smarty_tpl->getConfigVariable('user_area_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('user_area_link');?>
</a></li><?php }?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['menu']->value) {?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><li><a href="index.php?mode=page&amp;id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['linkname'];?>
</a></li><?php } ?>
<?php }?>
-->
</ul>



<form id="topsearch" action="index.php" method="get" title="<?php echo $_smarty_tpl->getConfigVariable('search_title');?>
" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
"><div><input type="hidden" name="mode" value="search" /><label for="search-input"><?php echo $_smarty_tpl->getConfigVariable('search_marking');?>
</label>&nbsp;<input id="search-input" type="text" name="search" value="<?php echo $_smarty_tpl->getConfigVariable('search_default_value');?>
" /><!--&nbsp;<input type="image" src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/images/submit.png" alt="[&raquo;]" />--></div></form></div>
</div>

<div id="subnav">
<div id="subnav-1"><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme']->value)."/subtemplates/subnavigation_1.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<div id="subnav-2"><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme']->value)."/subtemplates/subnavigation_2.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
</div>

<div id="content">
<?php if ($_smarty_tpl->tpl_vars['subtemplate']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme']->value)."/subtemplates/".((string)$_smarty_tpl->tpl_vars['subtemplate']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? '' : $tmp);?>

<?php }?>
</div>

<div id="footer">
<div id="footer-1"><?php if ($_smarty_tpl->tpl_vars['total_users_online']->value) {?>

<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('counter_users_online'),"[total_postings]",$_smarty_tpl->tpl_vars['total_postings']->value),"[total_threads]",$_smarty_tpl->tpl_vars['total_threads']->value);?>

<?php } else { ?>
<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('counter'),"[total_postings]",$_smarty_tpl->tpl_vars['total_postings']->value),"[total_threads]",$_smarty_tpl->tpl_vars['total_threads']->value);?>

<?php }?><br />
<?php if ($_smarty_tpl->tpl_vars['forum_time_zone']->value) {?><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('forum_time_with_time_zone'),'[time]',$_smarty_tpl->tpl_vars['forum_time']->value),'[time_zone]',$_smarty_tpl->tpl_vars['forum_time_zone']->value);?>
<?php } else { ?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('forum_time'),'[time]',$_smarty_tpl->tpl_vars['forum_time']->value);?>
<?php }?></div>

</div>



<!--[if IE]></div><![endif]-->

</body>
</html>
<?php }} ?>
