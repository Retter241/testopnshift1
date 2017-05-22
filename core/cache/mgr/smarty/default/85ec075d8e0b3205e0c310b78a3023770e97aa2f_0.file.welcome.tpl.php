<?php /* Smarty version 3.1.27, created on 2017-05-23 00:04:05
         compiled from "E:\openserver\OpenServer\domains\lacasa\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1962592352455e2544_61536438%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85ec075d8e0b3205e0c310b78a3023770e97aa2f' => 
    array (
      0 => 'E:\\openserver\\OpenServer\\domains\\lacasa\\manager\\templates\\default\\welcome.tpl',
      1 => 1477814491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1962592352455e2544_61536438',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_592352455e63c3_57681298',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592352455e63c3_57681298')) {
function content_592352455e63c3_57681298 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1962592352455e2544_61536438';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>