<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 18:23:13
         compiled from "themes\default\subtemplates\index.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:707552b1e811057cc8-71180589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f7ea72c5af3da088d0e55900cdcf8739eb7f515' => 
    array (
      0 => 'themes\\default\\subtemplates\\index.inc.tpl',
      1 => 1353853488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '707552b1e811057cc8-71180589',
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
    'tag_cloud' => 0,
    'latest_postings' => 0,
    'admin' => 0,
    'mod' => 0,
    'usersettings' => 0,
    'THEMES_DIR' => 0,
    'theme' => 0,
    'posting' => 0,
    'read' => 0,
    'tag' => 0,
    'show_spam_link' => 0,
    'total_spam' => 0,
    'hide_spam_link' => 0,
    'delete_spam_link' => 0,
    'threads' => 0,
    'thread' => 0,
    'fold_threads' => 0,
    'element' => 0,
    'data' => 0,
    'category' => 0,
    'replies' => 0,
    'child_array' => 0,
    'level' => 0,
    'settings' => 0,
    'child' => 0,
    'pagination' => 0,
    'mode' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b1e8112672c5_42252677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b1e8112672c5_42252677')) {function content_52b1e8112672c5_42252677($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\studybettertogether\\forum\\modules\\smarty\\plugins\\modifier.replace.php';
?><?php if ($_smarty_tpl->tpl_vars['tag_cloud']->value||$_smarty_tpl->tpl_vars['latest_postings']->value||$_smarty_tpl->tpl_vars['admin']->value||$_smarty_tpl->tpl_vars['mod']->value) {?>
<div id="sidebar">
<a href="index.php?toggle_sidebar=true"><img id="sidebartoggle" class="<?php if ($_smarty_tpl->tpl_vars['usersettings']->value['sidebar']==0) {?>show-sidebar<?php } else { ?>hide-sidebar<?php }?>" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/plain.png" title="<?php echo $_smarty_tpl->getConfigVariable('toggle_sidebar');?>
" alt="[+/-]" width="9" height="9" /></a>
<h3 class="sidebar"><a href="index.php?toggle_sidebar=true" title="<?php echo $_smarty_tpl->getConfigVariable('toggle_sidebar');?>
"><?php echo $_smarty_tpl->getConfigVariable('sidebar');?>
</a></h3>
<div id="sidebarcontent"<?php if ($_smarty_tpl->tpl_vars['usersettings']->value['sidebar']==0) {?> style="display:none;"<?php }?>>
<?php if ($_smarty_tpl->tpl_vars['latest_postings']->value) {?>
<div id="latest-postings">
<h3><?php echo $_smarty_tpl->getConfigVariable('latest_postings_hl');?>
</h3>
<ul id="latest-postings-container">
<?php  $_smarty_tpl->tpl_vars['posting'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['posting']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['latest_postings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['posting']->key => $_smarty_tpl->tpl_vars['posting']->value) {
$_smarty_tpl->tpl_vars['posting']->_loop = true;
?><li><a href="index.php?id=<?php echo $_smarty_tpl->tpl_vars['posting']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['posting']->value['name'];?>
, <?php echo $_smarty_tpl->tpl_vars['posting']->value['formated_time'];?>
<?php if ($_smarty_tpl->tpl_vars['posting']->value['category_name']) {?> (<?php echo $_smarty_tpl->tpl_vars['posting']->value['category_name'];?>
)<?php }?>"><span<?php if ($_smarty_tpl->tpl_vars['read']->value&&in_array($_smarty_tpl->tpl_vars['posting']->value['id'],$_smarty_tpl->tpl_vars['read']->value)) {?> class="read"<?php }?>><?php if ($_smarty_tpl->tpl_vars['posting']->value['pid']==0) {?><strong><?php echo $_smarty_tpl->tpl_vars['posting']->value['subject'];?>
</strong><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['posting']->value['subject'];?>
<?php }?></span><br />
<?php if ($_smarty_tpl->tpl_vars['posting']->value['ago']['days']>1) {?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('posting_several_days_ago'),"[days]",$_smarty_tpl->tpl_vars['posting']->value['ago']['days_rounded']);?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['posting']->value['ago']['days']==0&&$_smarty_tpl->tpl_vars['posting']->value['ago']['hours']==0) {?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('posting_minutes_ago'),"[minutes]",$_smarty_tpl->tpl_vars['posting']->value['ago']['minutes']);?>
<?php } elseif ($_smarty_tpl->tpl_vars['posting']->value['ago']['days']==0&&$_smarty_tpl->tpl_vars['posting']->value['ago']['hours']!=0) {?><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('posting_hours_ago'),"[hours]",$_smarty_tpl->tpl_vars['posting']->value['ago']['hours']),"[minutes]",$_smarty_tpl->tpl_vars['posting']->value['ago']['minutes']);?>
<?php } else { ?><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('posting_one_day_ago'),"[hours]",$_smarty_tpl->tpl_vars['posting']->value['ago']['hours']),"[minutes]",$_smarty_tpl->tpl_vars['posting']->value['ago']['minutes']);?>
<?php }?><?php }?></a></li><?php } ?>
</ul>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['tag_cloud']->value) {?>
<div id="tagcloud">
<h3><?php echo $_smarty_tpl->getConfigVariable('tag_cloud_hl');?>
</h3>
<p id="tagcloud-container"><?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tag_cloud']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['name'] = 'strong_start';
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tag']->value['frequency']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['total']);
?><strong><?php endfor; endif; ?><a href="index.php?mode=search&amp;search=<?php echo $_smarty_tpl->tpl_vars['tag']->value['escaped'];?>
&amp;method=tags"><?php echo $_smarty_tpl->tpl_vars['tag']->value['tag'];?>
</a> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['name'] = 'strong_end';
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tag']->value['frequency']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['total']);
?></strong><?php endfor; endif; ?>
<?php } ?></p>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['admin']->value||$_smarty_tpl->tpl_vars['mod']->value) {?>
<div id="modmenu">
<h3><?php echo $_smarty_tpl->getConfigVariable('options');?>
</h3>
<ul id="mod-options">
<li><a href="index.php?mode=posting&amp;delete_marked=true" class="delete-marked"><?php echo $_smarty_tpl->getConfigVariable('delete_marked_link');?>
</a></li>
<li><a href="index.php?mode=posting&amp;manage_postings=true" class="manage"><?php echo $_smarty_tpl->getConfigVariable('manage_postings_link');?>
</a></li>
<?php if ($_smarty_tpl->tpl_vars['show_spam_link']->value) {?><li><a href="index.php?show_spam=true" class="report"><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('show_spam_link'),"[number]",$_smarty_tpl->tpl_vars['total_spam']->value);?>
</a></li><?php }?>
<?php if ($_smarty_tpl->tpl_vars['hide_spam_link']->value) {?><li><a href="index.php?show_spam=true" class="report"><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('hide_spam_link'),"[number]",$_smarty_tpl->tpl_vars['total_spam']->value);?>
</a></li><?php }?>
<?php if ($_smarty_tpl->tpl_vars['show_spam_link']->value||$_smarty_tpl->tpl_vars['hide_spam_link']->value) {?><li><a href="index.php?mode=search&amp;list_spam=1" class="report"><?php echo $_smarty_tpl->getConfigVariable('list_spam_link');?>
</a></li><?php }?>
<?php if ($_smarty_tpl->tpl_vars['delete_spam_link']->value) {?><li><a href="index.php?mode=posting&amp;delete_spam=true" class="delete-spam"><?php echo $_smarty_tpl->getConfigVariable('delete_spam_link');?>
</a></li><?php }?>
</ul>
</div><?php }?>
</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['threads']->value) {?>
<?php  $_smarty_tpl->tpl_vars['thread'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thread']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['threads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thread']->key => $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->_loop = true;
?>
<ul id="thread-<?php echo $_smarty_tpl->tpl_vars['thread']->value;?>
" class="thread <?php if ($_smarty_tpl->tpl_vars['fold_threads']->value==1) {?>folded<?php } else { ?>expanded<?php }?>">
<?php if (!is_callable('smarty_modifier_replace')) include 'C:\xampp\htdocs\studybettertogether\forum\modules\smarty\plugins\modifier.replace.php';
?><?php if (!function_exists('smarty_template_function_tree')) {
    function smarty_template_function_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<li><a class="<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid']==0&&$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['new']) {?><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['sticky']==1) {?>threadnew-sticky<?php } else { ?>threadnew<?php }?><?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid']==0) {?><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['sticky']==1) {?>thread-sticky<?php } else { ?>thread<?php }?><?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid']!=0&&$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['new']) {?>replynew<?php } else { ?>reply<?php }?><?php if ($_smarty_tpl->tpl_vars['read']->value&&in_array($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'],$_smarty_tpl->tpl_vars['read']->value)) {?> read<?php }?>" href="index.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['spam']==1) {?> title="<?php echo $_smarty_tpl->getConfigVariable('spam');?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['spam']==1) {?><span class="spam"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['subject'];?>
</span><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['subject'];?>
<?php }?></a><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['no_text']) {?> <img class="no-text" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/no_text.png" title="<?php echo $_smarty_tpl->getConfigVariable('no_text_title');?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('no_text_alt');?>
" width="11" height="9" /><?php }?> - <strong><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['user_type']==2) {?><span class="admin" title="<?php echo $_smarty_tpl->getConfigVariable('administrator_title');?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['name'];?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['user_type']==1) {?><span class="mod" title="<?php echo $_smarty_tpl->getConfigVariable('moderator_title');?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['name'];?>
</span><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['name'];?>
<?php }?></strong>, <span id="p<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
" class="tail"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['formated_time'];?>
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid']==0) {?> <a href="index.php?mode=thread&amp;id=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('open_whole_thread');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/complete_thread.png" title="<?php echo $_smarty_tpl->getConfigVariable('open_whole_thread');?>
" alt="[*]" width="11" height="11" /></a><?php }?><?php if ($_smarty_tpl->tpl_vars['admin']->value||$_smarty_tpl->tpl_vars['mod']->value) {?> <a id="marklink_<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
" href="index.php?mode=posting&amp;mark=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('mark_linktitle');?>
"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['marked']==0) {?><img id="markimg_<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/unmarked.png" title="<?php echo $_smarty_tpl->getConfigVariable('mark_linktitle');?>
" alt="[○]" width="11" height="11" /><?php } else { ?><img id="markimg_<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/marked.png" title="<?php echo $_smarty_tpl->getConfigVariable('unmark_linktitle');?>
" alt="[●]" width="11" height="11" title="<?php echo $_smarty_tpl->getConfigVariable('unmark_linktitle');?>
" /><?php }?></a> <a href="index.php?mode=posting&amp;delete_posting=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=index" title="<?php echo $_smarty_tpl->getConfigVariable('delete_posting_title');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/delete_posting.png" title="<?php echo $_smarty_tpl->getConfigVariable('delete_posting_title');?>
" alt="[x]" width="9" height="9" /></a><?php }?>
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['category_name']&&$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid']==0&&$_smarty_tpl->tpl_vars['category']->value<=0) {?> <a href="index.php?mode=index&amp;category=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['category'];?>
" title="<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->getConfigVariable('change_category_link'),"[category]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['category_name']), ENT_QUOTES, 'UTF-8', true);?>
"><span class="category">(<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['category_name'];?>
)</span></a><?php }?><?php if ($_smarty_tpl->tpl_vars['fold_threads']->value==1&&$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid']==0&&$_smarty_tpl->tpl_vars['replies']->value[$_smarty_tpl->tpl_vars['thread']->value]>0) {?> <span class="replies" title="<?php if ($_smarty_tpl->tpl_vars['replies']->value[$_smarty_tpl->tpl_vars['thread']->value]==1) {?><?php echo $_smarty_tpl->getConfigVariable('one_reply');?>
<?php } else { ?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('several_replies'),"[replies]",$_smarty_tpl->tpl_vars['replies']->value[$_smarty_tpl->tpl_vars['thread']->value]);?>
<?php }?>">(<?php echo $_smarty_tpl->tpl_vars['replies']->value[$_smarty_tpl->tpl_vars['thread']->value];?>
)</span><?php }?></span>
<?php if (is_array($_smarty_tpl->tpl_vars['child_array']->value[$_smarty_tpl->tpl_vars['element']->value])) {?>
<ul<?php if ($_smarty_tpl->tpl_vars['fold_threads']->value==1) {?> style="display:none;"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['level']->value<$_smarty_tpl->tpl_vars['settings']->value['deep_reply']) {?>reply<?php } elseif ($_smarty_tpl->tpl_vars['level']->value>=$_smarty_tpl->tpl_vars['settings']->value['deep_reply']&&$_smarty_tpl->tpl_vars['level']->value<$_smarty_tpl->tpl_vars['settings']->value['very_deep_reply']) {?>deep-reply<?php } else { ?>very-deep-reply<?php }?>"><?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['child_array']->value[$_smarty_tpl->tpl_vars['element']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?><?php smarty_template_function_tree($_smarty_tpl,array('element'=>$_smarty_tpl->tpl_vars['child']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>
<?php } ?></ul><?php }?></li><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<?php smarty_template_function_tree($_smarty_tpl,array('element'=>$_smarty_tpl->tpl_vars['thread']->value));?>

</ul>
<?php } ?>
<?php } else { ?>
<p><?php if ($_smarty_tpl->tpl_vars['category']->value!=0) {?><?php echo $_smarty_tpl->getConfigVariable('no_messages_in_category');?>
<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('no_messages');?>
<?php }?></p>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
<ul class="pagination pagination-index">
<?php if ($_smarty_tpl->tpl_vars['pagination']->value['previous']) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['previous'];?>
<?php if ($_smarty_tpl->tpl_vars['category']->value) {?>&amp;category=<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
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
&amp;page=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<?php if ($_smarty_tpl->tpl_vars['category']->value) {?>&amp;category=<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li><?php }?>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['pagination']->value['next']) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['next'];?>
<?php if ($_smarty_tpl->tpl_vars['category']->value) {?>&amp;category=<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
<?php }?>" title="<?php echo $_smarty_tpl->getConfigVariable('next_page_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('next_page_link');?>
</a></li><?php }?>  
</ul>
<?php }?>
<?php }} ?>
