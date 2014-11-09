<?php /* Smarty version Smarty-3.1.19, created on 2014-11-08 18:27:43
         compiled from "/home/u994114791/public_html/modules/blocksharefb/blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25628368545dfe2f669060-25021256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e68d3cd18d6c849811ddaff619d0d0f9ebd3a48' => 
    array (
      0 => '/home/u994114791/public_html/modules/blocksharefb/blocksharefb.tpl',
      1 => 1415444274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25628368545dfe2f669060-25021256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545dfe2f75ca75_75316102',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545dfe2f75ca75_75316102')) {function content_545dfe2f75ca75_75316102($_smarty_tpl) {?>

<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="_blank"><?php echo smartyTranslate(array('s'=>'Share on Facebook!','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
