<?php /* Smarty version Smarty-3.1.19, created on 2014-11-08 17:38:27
         compiled from "/home/u994114791/public_html/modules/productcomments/views/templates/admin/list_action_approve.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1732798433545df2a30fa521-23256556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b79e16cb6ca931d595545ec7d90a3f2b4cd6466c' => 
    array (
      0 => '/home/u994114791/public_html/modules/productcomments/views/templates/admin/list_action_approve.tpl',
      1 => 1413805391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1732798433545df2a30fa521-23256556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545df2a3184dc7_45495493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545df2a3184dc7_45495493')) {function content_545df2a3184dc7_45495493($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="btn btn-success" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-check"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
