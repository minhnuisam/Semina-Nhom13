<?php /* Smarty version Smarty-3.1.19, created on 2014-11-08 10:56:25
         compiled from "/home/u994114791/public_html/admin7231/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1570735439545d9469079be8-42969526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a89b9ec3ec12f9799b63ed8555c98b63c890af9' => 
    array (
      0 => '/home/u994114791/public_html/admin7231/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1406817656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1570735439545d9469079be8-42969526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545d94690ae142_56412027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545d94690ae142_56412027')) {function content_545d94690ae142_56412027($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
