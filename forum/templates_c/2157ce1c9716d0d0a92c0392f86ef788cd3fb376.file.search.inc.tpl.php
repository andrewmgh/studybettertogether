<?php /* Smarty version Smarty-3.1.15, created on 2013-12-18 21:46:04
         compiled from "themes\default\subtemplates\search.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3168452b2179c7e9f66-07357938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2157ce1c9716d0d0a92c0392f86ef788cd3fb376' => 
    array (
      0 => 'themes\\default\\subtemplates\\search.inc.tpl',
      1 => 1353853152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3168452b2179c7e9f66-07357938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list_spam' => 0,
    'search' => 0,
    'categories' => 0,
    'category' => 0,
    'key' => 0,
    'p_category' => 0,
    'val' => 0,
    'settings' => 0,
    'method' => 0,
    'search_results' => 0,
    'search_results_count' => 0,
    'read' => 0,
    'THEMES_DIR' => 0,
    'theme' => 0,
    'page_browse' => 0,
    'mode' => 0,
    'action' => 0,
    'search_encoded' => 0,
    'id' => 0,
    'order' => 0,
    'descasc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b2179c974840_37507383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b2179c974840_37507383')) {function content_52b2179c974840_37507383($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\studybettertogether\\forum\\modules\\smarty\\plugins\\modifier.replace.php';
?><?php if (!$_smarty_tpl->tpl_vars['list_spam']->value) {?>
<form action="index.php" method="get" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div style="margin-bottom:20px;">
<input type="hidden" name="mode" value="search" />
<input type="text" name="search" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['search']->value)===null||$tmp==='' ? '' : $tmp);?>
" size="30" />
<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
<select size="1" name="p_category">
<option value="0"<?php if ($_smarty_tpl->tpl_vars['category']->value==0) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getConfigVariable('all_categories');?>
</option>
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
</select>
<?php }?>
<input type="submit" name="search_submit" value="<?php echo $_smarty_tpl->getConfigVariable('search_submit_button');?>
" /><?php if ($_smarty_tpl->tpl_vars['settings']->value['tags']>0) {?><br />
<span class="small"><input id="searchfulltext" type="radio" name="method" value="0"<?php if ($_smarty_tpl->tpl_vars['method']->value=='fulltext') {?> checked="checked"<?php }?> /><label for="searchfulltext"><?php echo $_smarty_tpl->getConfigVariable('search_fulltext');?>
</label> <input id="searchtags" type="radio" class="search-radio" name="method" value="tags"<?php if ($_smarty_tpl->tpl_vars['method']->value=='tags') {?> checked="checked"<?php }?> /><label for="searchtags"><?php echo $_smarty_tpl->getConfigVariable('search_tags');?>
</label></span><?php }?>
</div></form>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['search']->value||$_smarty_tpl->tpl_vars['list_spam']->value) {?>
<?php if ($_smarty_tpl->tpl_vars['search_results']->value) {?>
<p><?php if ($_smarty_tpl->tpl_vars['search_results_count']->value>1) {?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('several_postings_found'),"[number]",$_smarty_tpl->tpl_vars['search_results_count']->value);?>
<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('one_posting_found');?>
<?php }?></p>
<ul class="searchresults">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['result'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['result']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['result']['name'] = 'result';
$_smarty_tpl->tpl_vars['smarty']->value['section']['result']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['search_results']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['result']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['result']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['result']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['result']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['result']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['result']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['result']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['result']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['result']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['result']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['result']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['result']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['result']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['result']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['result']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['result']['total']);
?>
<li><a class="<?php if ($_smarty_tpl->tpl_vars['search_results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['result']['index']]['pid']==0) {?>thread-search<?php } else { ?>reply-search<?php }?><?php if ($_smarty_tpl->tpl_vars['read']->value&&in_array($_smarty_tpl->tpl_vars['search_results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['result']['index']]['id'],$_smarty_tpl->tpl_vars['read']->value)) {?> read<?php }?>" href="index.php?id=<?php echo $_smarty_tpl->tpl_vars['search_results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['result']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['search_results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['result']['index']]['subject'];?>
</a><?php if ($_smarty_tpl->tpl_vars['search_results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['result']['index']]['no_text']) {?> <img class="no-text" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/no_text.png" title="<?php echo $_smarty_tpl->getConfigVariable('no_text_title');?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('no_text_alt');?>
" width="11" height="9" /><?php }?> - <strong><?php echo $_smarty_tpl->tpl_vars['search_results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['result']['index']]['name'];?>
</strong>, <span id="p<?php echo $_smarty_tpl->tpl_vars['search_results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['result']['index']]['id'];?>
" class="tail"><?php echo $_smarty_tpl->tpl_vars['search_results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['result']['index']]['formated_time'];?>
 <a href="index.php?mode=thread&amp;id=<?php echo $_smarty_tpl->tpl_vars['search_results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['result']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('open_whole_thread');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/complete_thread.png" alt="<?php echo $_smarty_tpl->getConfigVariable('open_whole_thread');?>
" width="11" height="11" /></a> <?php if ($_smarty_tpl->tpl_vars['search_results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['result']['index']]['category']) {?><a href="index.php?mode=index&amp;category=<?php echo $_smarty_tpl->tpl_vars['search_results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['result']['index']]['category'];?>
"><span class="category">(<?php echo $_smarty_tpl->tpl_vars['search_results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['result']['index']]['category_name'];?>
)</span></a><?php }?></span></li>
<?php endfor; endif; ?>
</ul>
<?php if ($_smarty_tpl->tpl_vars['page_browse']->value&&$_smarty_tpl->tpl_vars['page_browse']->value['total_items']>$_smarty_tpl->tpl_vars['page_browse']->value['items_per_page']) {?>
<ul class="pagination">
<?php if ($_smarty_tpl->tpl_vars['page_browse']->value['previous_page']!=0) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
<?php if ($_smarty_tpl->tpl_vars['list_spam']->value) {?>&amp;list_spam=1<?php }?><?php if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['search_encoded']->value) {?>&amp;search=<?php echo $_smarty_tpl->tpl_vars['search_encoded']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['method']->value&&$_smarty_tpl->tpl_vars['method']->value!='fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page_browse']->value['previous_page']>1) {?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['page_browse']->value['previous_page'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['p_category']->value&&$_smarty_tpl->tpl_vars['p_category']->value>0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;?>
<?php }?>" title="<?php echo $_smarty_tpl->getConfigVariable('previous_page_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('previous_page_link');?>
</a></li><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['x'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['x']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['name'] = 'x';
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['page_browse']->value['browse_array']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total']);
?>
<?php if ($_smarty_tpl->tpl_vars['page_browse']->value['browse_array'][$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]==$_smarty_tpl->tpl_vars['page_browse']->value['page']) {?><li><span class="current"><?php echo $_smarty_tpl->tpl_vars['page_browse']->value['browse_array'][$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']];?>
</span></li><?php } elseif ($_smarty_tpl->tpl_vars['page_browse']->value['browse_array'][$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]==0) {?><li>&hellip;</li><?php } else { ?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
<?php if ($_smarty_tpl->tpl_vars['list_spam']->value) {?>&amp;list_spam=1<?php }?><?php if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['search_encoded']->value) {?>&amp;search=<?php echo $_smarty_tpl->tpl_vars['search_encoded']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['method']->value&&$_smarty_tpl->tpl_vars['method']->value!='fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page_browse']->value['browse_array'][$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]>1) {?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['page_browse']->value['browse_array'][$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['p_category']->value&&$_smarty_tpl->tpl_vars['p_category']->value>0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['page_browse']->value['browse_array'][$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']];?>
</a></li><?php }?>
<?php endfor; endif; ?>
<?php if ($_smarty_tpl->tpl_vars['page_browse']->value['next_page']!=0) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
<?php if ($_smarty_tpl->tpl_vars['list_spam']->value) {?>&amp;list_spam=1<?php }?><?php if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['search_encoded']->value) {?>&amp;search=<?php echo $_smarty_tpl->tpl_vars['search_encoded']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['method']->value&&$_smarty_tpl->tpl_vars['method']->value!='fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['page_browse']->value['next_page'];?>
<?php if ($_smarty_tpl->tpl_vars['p_category']->value&&$_smarty_tpl->tpl_vars['p_category']->value>0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;?>
<?php }?>" title="<?php echo $_smarty_tpl->getConfigVariable('next_page_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('next_page_link');?>
</a></li><?php }?>
</ul>
<?php }?>
<?php } else { ?>
<p><?php echo $_smarty_tpl->getConfigVariable('no_postings_found');?>
</p>
<?php }?>
<?php }?>

<?php }} ?>
