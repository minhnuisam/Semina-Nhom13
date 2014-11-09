<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 15:59:38
         compiled from "/home/u994114791/public_html/admin7231/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1328666808545b387a7816a9-45980859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7d3e9f0012b24f754d158e865bb8fbee7bac6a1' => 
    array (
      0 => '/home/u994114791/public_html/admin7231/themes/default/template/content.tpl',
      1 => 1406817656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1328666808545b387a7816a9-45980859',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b387a7b7a88_82753737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b387a7b7a88_82753737')) {function content_545b387a7b7a88_82753737($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
