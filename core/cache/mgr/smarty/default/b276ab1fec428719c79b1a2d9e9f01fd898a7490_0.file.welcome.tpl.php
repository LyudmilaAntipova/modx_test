<?php /* Smarty version 3.1.27, created on 2016-09-27 19:14:40
         compiled from "C:\web\moda\www\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2000157ea9af0affd85_23677065%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b276ab1fec428719c79b1a2d9e9f01fd898a7490' => 
    array (
      0 => 'C:\\web\\moda\\www\\manager\\templates\\default\\welcome.tpl',
      1 => 1474544596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2000157ea9af0affd85_23677065',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57ea9af0b07a80_77707018',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57ea9af0b07a80_77707018')) {
function content_57ea9af0b07a80_77707018 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2000157ea9af0affd85_23677065';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>