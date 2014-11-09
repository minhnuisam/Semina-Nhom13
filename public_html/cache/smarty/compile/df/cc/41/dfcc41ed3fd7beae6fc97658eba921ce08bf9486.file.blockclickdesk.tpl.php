<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 16:01:53
         compiled from "/home/u994114791/public_html/modules/blockclickdesk/blockclickdesk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206065604545b39012f7b59-16690174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfcc41ed3fd7beae6fc97658eba921ce08bf9486' => 
    array (
      0 => '/home/u994114791/public_html/modules/blockclickdesk/blockclickdesk.tpl',
      1 => 1415252862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206065604545b39012f7b59-16690174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widgetid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b3901334237_07716861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b3901334237_07716861')) {function content_545b3901334237_07716861($_smarty_tpl) {?><!-- Block clickdesk module --> 

	<?php if ($_smarty_tpl->tpl_vars['widgetid']->value!='') {?>

<script type='text/javascript'>
var _glc =_glc || [];
_glc.push('<?php echo $_smarty_tpl->tpl_vars['widgetid']->value;?>
');
var glcpath = (('https:' == document.location.protocol) ? 'https://my.clickdesk.com/clickdesk-ui/browser/' : 'http://contactuswidget.appspot.com/clickdesk-ui/browser/');

var glcp = (('https:' == document.location.protocol) ? 'https://' : 'http://');
var glcspt = document.createElement('script'); glcspt.type = 'text/javascript'; glcspt.async = true;glcspt.src = glcpath + 'livechat-new.js';

var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(glcspt, s);
</script>

	<?php }?>
<?php }} ?>
