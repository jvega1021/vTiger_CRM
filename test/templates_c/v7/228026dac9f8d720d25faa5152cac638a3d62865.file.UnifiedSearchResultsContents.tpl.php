<?php /* Smarty version Smarty-3.1.7, created on 2017-09-26 18:53:28
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/UnifiedSearchResultsContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68465646359caa228256a10-72510786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '228026dac9f8d720d25faa5152cac638a3d62865' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/UnifiedSearchResultsContents.tpl',
      1 => 1496723290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68465646359caa228256a10-72510786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'LISTVIEW_ENTRIES_COUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59caa2282a652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59caa2282a652')) {function content_59caa2282a652($_smarty_tpl) {?>
<div class="col-lg-12 listViewPageDiv moduleSearchResults">
    <div class="row">
        <div class="col-lg-8">
            <h4 class="searchModuleHeader"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4>
        </div>
        <div class="col-lg-4 pull-right">
                <?php $_smarty_tpl->tpl_vars['RECORD_COUNT'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value, null, 0);?>
                <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Pagination.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SHOWPAGEJUMP'=>true), 0);?>

        </div>
    </div>
    <div class="row">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ListViewContents.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SEARCH_MODE_RESULTS'=>true), 0);?>

    </div>
</div><?php }} ?>