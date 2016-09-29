<?php /* Smarty version 3.1.27, created on 2016-09-26 13:13:16
         compiled from "C:\web\moda\www\manager\templates\default\resource\staticresource\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:116457e8f4bc4e7522_65058704%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca9cf7f3fa694b6467c3da0133aca086f2149087' => 
    array (
      0 => 'C:\\web\\moda\\www\\manager\\templates\\default\\resource\\staticresource\\create.tpl',
      1 => 1474544627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116457e8f4bc4e7522_65058704',
  'variables' => 
  array (
    'tvOutput' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57e8f4bc7391a6_55317504',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57e8f4bc7391a6_55317504')) {
function content_57e8f4bc7391a6_55317504 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '116457e8f4bc4e7522_65058704';
?>
<div id="modx-panel-static-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>