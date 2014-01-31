<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 22:03:49
         compiled from "themes\default\upload_image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1119052b21bc50f05e3-66184990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b101ce48ec07dc5bc4fd26fccbedfc84a3cb108' => 
    array (
      0 => 'themes\\default\\upload_image.tpl',
      1 => 1297542784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1119052b21bc50f05e3-66184990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_file' => 0,
    'settings' => 0,
    'page_title' => 0,
    'subnav_location' => 0,
    'THEMES_DIR' => 0,
    'browse_images' => 0,
    'form' => 0,
    'errors' => 0,
    'error' => 0,
    'width' => 0,
    'height' => 0,
    'filesize' => 0,
    'max_width' => 0,
    'max_height' => 0,
    'max_filesize' => 0,
    'server_max_filesize' => 0,
    'theme' => 0,
    'uploaded_file' => 0,
    'image_downsized' => 0,
    'new_width' => 0,
    'new_height' => 0,
    'new_filesize' => 0,
    'previous' => 0,
    'next' => 0,
    'images' => 0,
    'start' => 0,
    'images_per_page' => 0,
    'c' => 0,
    'admin' => 0,
    'mod' => 0,
    'current' => 0,
    'delete_confirm' => 0,
    'delete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b21bc520d8a8_21235199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b21bc520d8a8_21235199')) {function content_52b21bc520d8a8_21235199($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\studybettertogether\\forum\\modules\\smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\studybettertogether\\forum\\modules\\smarty\\plugins\\function.cycle.php';
?><?php  $_config = new Smarty_Internal_Config($_smarty_tpl->tpl_vars['language_file']->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("general", 'local'); ?><?php  $_config = new Smarty_Internal_Config($_smarty_tpl->tpl_vars['language_file']->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("upload_image", 'local'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->getConfigVariable('language');?>
">
<head>
<title><?php echo $_smarty_tpl->tpl_vars['settings']->value['forum_name'];?>
<?php if ($_smarty_tpl->tpl_vars['page_title']->value) {?> - <?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
<?php } elseif ($_smarty_tpl->tpl_vars['subnav_location']->value) {?> - <?php echo $_smarty_tpl->tpl_vars['subnav_location']->value;?>
<?php }?></title>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $_smarty_tpl->getConfigVariable('charset');?>
" />
<style type="text/css">

<!--
body          { color: #000000; background: #ffffff; margin:0; padding:0; font-family: verdana, arial, sans-serif; font-size: 13px; }
img           { border:none; }
#header       { margin:0; padding:0; background:#f9f9f9; border-bottom: 1px solid #bacbdf; height:24px; font-size:13px; line-height:22px; }
#nav-1        { margin:0; padding:0 0 0 5px; float:left; }
#nav-2        { margin:0; padding:0 5px 0 0; float:right; }
#wrapper      { margin:0; padding:20px; }
h1            { font-family: verdana, arial, sans-serif; font-size: 18px; font-weight: bold; }
p             { font-family: verdana, arial, sans-serif; font-size: 13px; line-height: 19px; }
.caution      { padding: 0px 0px 0px 20px; color: red; font-weight: bold; background-image:url(<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/caution.png); background-repeat:no-repeat; background-position: left; }
.ok           { padding: 0px 0px 0px 20px; font-weight:bold; color:red; background-image:url(<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/tick.png); background-repeat:no-repeat; background-position: left; }
img.delete    { max-width:300px; max-height:150px; }
img.uploaded  { max-width:300px; max-height:110px; /*cursor:pointer;*/ }
img.browse    { max-width:320px; cursor:pointer; }
.deletelink   { font-size:11px; padding-left:13px; background:url(<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/bg_sprite_3.png) no-repeat 0 -47px; }
.small        { font-size:11px; line-height:16px; }
code          { font-family:"courier new", courier; color:#000080; }
a:link        { color:#0000cc; text-decoration: none; }
a:visited     { color:#0000cc; text-decoration: none; }
a:hover       { color:#0000ff; text-decoration: underline; }
a:active      { color:#ff0000; text-decoration: none; }
table         { width:100%; margin:5px 0 0 0; padding:0; }
td            { text-align:center; }
-->

</style>
<script type="text/javascript">/* <![CDATA[ */
function insertCode(image_url) {
 	if (opener && opener.mlfBBCodeButton) {
		var bbcodeButton = opener.mlfBBCodeButton;
		if (!bbcodeButton.canInsert()) 
			return;
		var buttonGroup = bbcodeButton.getButtonGroup();	
		var txtarea = buttonGroup.getTextArea();
		txtarea.insertTextRange( txtarea.getSelection() + "[img]" + image_url + "[/img]" );
	}
	//self.close();
}
/* ]]> */</script>
<?php if ($_smarty_tpl->tpl_vars['browse_images']->value) {?>
<script type="text/javascript">/* <![CDATA[ */
function getMaxWidth()
 {
  if(document.getElementById('imgtab'))
   {
    var maxWidth = document.getElementById('imgtab').offsetWidth-20;
    var obj=getElementsByClassName('browse');
    for(i=0;i<obj.length;i++)
     {
      obj[i].style.maxWidth=maxWidth+'px';
     }
   }
 }
window.onload = getMaxWidth;
window.onresize = getMaxWidth;
/* ]]> */</script>
<?php }?>
</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['form']->value) {?>
<div id="wrapper">
<h1><?php echo $_smarty_tpl->getConfigVariable('upload_image_hl');?>
</h1>
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
<li><?php $_smarty_tpl->tpl_vars["error"] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mysec']['index']], null, 0);?><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['error']->value),"[width]",$_smarty_tpl->tpl_vars['width']->value),"[height]",$_smarty_tpl->tpl_vars['height']->value),"[filesize]",$_smarty_tpl->tpl_vars['filesize']->value),"[max_width]",$_smarty_tpl->tpl_vars['max_width']->value),"[max_height]",$_smarty_tpl->tpl_vars['max_height']->value),"[max_filesize]",$_smarty_tpl->tpl_vars['max_filesize']->value),"[server_max_filesize]",$_smarty_tpl->tpl_vars['server_max_filesize']->value);?>
</li>
<?php endfor; endif; ?>
</ul>
<?php }?>
<form id="uploadform" action="index.php" method="post" enctype="multipart/form-data" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="upload_image" />
<p><input type="file" name="probe" size="17" /></p>
<p><input type="submit" name="" value="<?php echo $_smarty_tpl->getConfigVariable('upload_image_button');?>
" onclick="document.getElementById('throbber-submit').style.visibility='visible'" /> <img id="throbber-submit" style="visibility:hidden;" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/throbber_submit.gif" alt="" width="16" height="16" /></p>
</div>
</form>
<p class="small"><a href="index.php?mode=upload_image&amp;browse_images=1"><?php echo $_smarty_tpl->getConfigVariable('browse_uploaded_images');?>
</a></p>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['uploaded_file']->value) {?>
<div id="wrapper">
<h1><?php echo $_smarty_tpl->getConfigVariable('upload_image_hl');?>
</h1>
<p class="ok"><?php echo $_smarty_tpl->getConfigVariable('upload_successful');?>
</p>

<noscript><p><?php echo $_smarty_tpl->getConfigVariable('insert_image_exp_no_js');?>
</p>
<p><code>[img]images/uploaded/<?php echo $_smarty_tpl->tpl_vars['uploaded_file']->value;?>
[/img]</code></p></noscript>
<img class="uploaded" src="images/uploaded/<?php echo $_smarty_tpl->tpl_vars['uploaded_file']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('insert_image');?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('insert_image');?>
" />
<?php if ($_smarty_tpl->tpl_vars['image_downsized']->value) {?><p class="small"><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('image_downsized'),"[width]",$_smarty_tpl->tpl_vars['new_width']->value),"[height]",$_smarty_tpl->tpl_vars['new_height']->value),"[filesize]",$_smarty_tpl->tpl_vars['new_filesize']->value);?>
</p><?php }?>
</div>
<script type="text/javascript">/* <![CDATA[ */ insertCode('images/uploaded/<?php echo $_smarty_tpl->tpl_vars['uploaded_file']->value;?>
'); /* ]]> */</script>
<?php } elseif ($_smarty_tpl->tpl_vars['browse_images']->value) {?>
<div id="header">
<div id="nav-1"><a href="index.php?mode=upload_image"><?php echo $_smarty_tpl->getConfigVariable('back');?>
</a></div>
<div id="nav-2"><?php if ($_smarty_tpl->tpl_vars['previous']->value) {?>[ <a href="index.php?mode=upload_image&amp;browse_images=<?php echo $_smarty_tpl->tpl_vars['previous']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('previous_page_link_title');?>
">&laquo;</a> ]<?php }?><?php if ($_smarty_tpl->tpl_vars['previous']->value&&'next') {?> <?php }?><?php if ($_smarty_tpl->tpl_vars['next']->value) {?>[ <a href="index.php?mode=upload_image&amp;browse_images=<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('next_page_link_title');?>
">&raquo;</a> ]<?php }?></div>
</div>
<?php if ($_smarty_tpl->tpl_vars['images']->value) {?>
<table id="imgtab" border="0" cellpadding="5" cellspacing="1">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['nr'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['name'] = 'nr';
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['images']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['start'] = (int) $_smarty_tpl->tpl_vars['start']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['max'] = (int) $_smarty_tpl->tpl_vars['images_per_page']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['max']);
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
<?php echo smarty_function_cycle(array('values'=>"odd,even",'assign'=>'c'),$_smarty_tpl);?>

<tr class="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
">
<td><img class="browse" src="images/uploaded/<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('insert_image');?>
" onclick="insertCode('images/uploaded/<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']];?>
'); self.close();" alt="<?php echo $_smarty_tpl->getConfigVariable('insert_image');?>
" /><?php if ($_smarty_tpl->tpl_vars['admin']->value||$_smarty_tpl->tpl_vars['mod']->value) {?><br /><a class="deletelink" href="index.php?mode=upload_image&amp;delete=<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']];?>
&amp;current=<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('delete');?>
</a><?php }?></td>
</tr>
<?php endfor; endif; ?>
</table>
<?php } else { ?>
<div id="wrapper">
<p><?php echo $_smarty_tpl->getConfigVariable('no_images');?>
</p>
</div>
<?php }?>
<?php } elseif ($_smarty_tpl->tpl_vars['delete_confirm']->value) {?>
<div id="header">
<div id="nav-1"><a href="index.php?mode=upload_image&amp;browse_images=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['current']->value)===null||$tmp==='' ? '1' : $tmp);?>
"><?php echo $_smarty_tpl->getConfigVariable('back');?>
</a></div>
</div>
<div id="wrapper">
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('delete_image_confirm');?>
</p>
<p><img class="delete" src="images/uploaded/<?php echo $_smarty_tpl->tpl_vars['delete']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['delete']->value;?>
" /></p>
<form id="uploadform" action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="upload_image" />
<input type="hidden" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['delete']->value;?>
" />
<?php if ($_smarty_tpl->tpl_vars['current']->value) {?><input type="hidden" name="current" value="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
" /><?php }?>
<input type="submit" name="delete_confirm" value="<?php echo $_smarty_tpl->getConfigVariable('delete_image_button');?>
" />
</div>
</form>
</div>
<?php } else { ?>
<div id="wrapper">
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('image_upload_not_enabled');?>
</p>
</div>
<?php }?>
</body>
</html>
<?php }} ?>
