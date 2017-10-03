<?php /* Smarty version Smarty-3.1.7, created on 2017-09-26 17:19:01
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/History.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158771940659ca8c05d72e06-06994026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b090de54482c82b3bc5e4e9ab4670814bfb4d46' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/History.tpl',
      1 => 1496723290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158771940659ca8c05d72e06-06994026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ca8c05dbc4f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ca8c05dbc4f')) {function content_59ca8c05dbc4f($_smarty_tpl) {?>
<div class="HistoryContainer"><div class="historyButtons btn-group" role="group" aria-label="..."><button type="button" class="btn btn-default" onclick='Vtiger_Detail_Js.showUpdates(this);'><?php echo vtranslate("LBL_UPDATES",$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button></div><div class='data-body'></div></div><?php }} ?>