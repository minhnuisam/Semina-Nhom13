<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 16:25:45
         compiled from "/home/u994114791/public_html/modules/productaccessories/productaccessoriescenter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:453808643545b3e99696cb1-11622455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e668362caccd0d81ce73ae5e2418e6df886577c7' => 
    array (
      0 => '/home/u994114791/public_html/modules/productaccessories/productaccessoriescenter.tpl',
      1 => 1415066307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '453808643545b3e99696cb1-11622455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessories' => 0,
    'pa_ps_version' => 0,
    'accessory' => 0,
    'link' => 0,
    'accessoryLink' => 0,
    'pa_image' => 0,
    'pa_old_img' => 0,
    'img_prod_dir' => 0,
    'priceDisplay' => 0,
    'base_dir' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b3e99896d09_32319579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b3e99896d09_32319579')) {function content_545b3e99896d09_32319579($_smarty_tpl) {?><!-- MODULE Accessories -->
<?php if (isset($_smarty_tpl->tpl_vars['accessories']->value)&&$_smarty_tpl->tpl_vars['accessories']->value) {?>
	<style>
	ul#idTab4
	{
		display: none;
	}
	</style>
	<script type="text/javascript">
		$(document).ready(function () {
			$("#more_info_tabs a").each(function() {
			if ($(this).attr('href') == "#idTab4")
				$(this).css('display','none');
			});
			
			$('.accessories-block').each(function() {
				$(this).parent().hide();
			});
		});
	</script>
	<div id="pa_container" class="block_content<?php if (count($_smarty_tpl->tpl_vars['accessories']->value)>5) {?> <?php if ($_smarty_tpl->tpl_vars['pa_ps_version']->value>=160) {?> pa_pf_height16<?php } else { ?> pa_pf_height<?php }?><?php }?>">
		<div class="pa_pf_header"><?php echo smartyTranslate(array('s'=>'Accessories','mod'=>'productaccessories'),$_smarty_tpl);?>
</div>
		<div class="pa_pf_product_container<?php if (count($_smarty_tpl->tpl_vars['accessories']->value)>5) {?> scroll-pane<?php }?><?php if (count($_smarty_tpl->tpl_vars['accessories']->value)>5) {?> <?php if ($_smarty_tpl->tpl_vars['pa_ps_version']->value>=160) {?> pa_pfp_height16<?php } else { ?>pa_pfp_height<?php }?><?php }?>">
			<div style="width: <?php echo count($_smarty_tpl->tpl_vars['accessories']->value)*106;?>
px;">
			<?php  $_smarty_tpl->tpl_vars['accessory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accessories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['accessories_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->key => $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['accessories_list']['iteration']++;
?>
				<div class="ajax_block_product pa_pf_block<?php if (count($_smarty_tpl->tpl_vars['accessories']->value)>5) {?>_scroll<?php }?>">
				<?php $_smarty_tpl->tpl_vars['accessoryLink'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['accessory']->value['id_product'],$_smarty_tpl->tpl_vars['accessory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['accessory']->value['category']), null, 0);?>
					<h5 class="align_center"><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['accessoryLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" target="_blank"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['accessory']->value['name'],20,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></h5>
					<div class="pa_pf_image ps_image_<?php echo $_smarty_tpl->tpl_vars['pa_image']->value;?>
">
						<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['accessoryLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" target="_blank" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['legend'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="product_image">
						<img src="<?php if ($_smarty_tpl->tpl_vars['pa_old_img']->value) {?><?php echo $_smarty_tpl->tpl_vars['img_prod_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['accessory']->value['id_image'];?>
-<?php echo $_smarty_tpl->tpl_vars['pa_image']->value;?>
.jpg<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['accessory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['accessory']->value['id_image'],$_smarty_tpl->tpl_vars['pa_image']->value);?>
<?php }?>" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['legend'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
					
						</a>
					</div>
					<div class="pa_pf_accessories_price">
						<div class="price"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['accessory']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['accessory']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></div>
						<div class="pa_pf_atc">
							<?php if ($_smarty_tpl->tpl_vars['pa_ps_version']->value>=160) {?><div class="no-print"><?php }?>
							<a class="<?php if ($_smarty_tpl->tpl_vars['pa_ps_version']->value>1.6) {?>exclusive button ajax_add_to_cart_button<?php } else { ?>button_small exclusive_small ajax_add_to_cart_button<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
cart.php?qty=1&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['accessory']->value['id_product']);?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
&amp;add" <?php if ($_smarty_tpl->tpl_vars['pa_ps_version']->value>1.6) {?>data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['accessory']->value['id_product']);?>
"<?php }?> rel="ajax_id_product_<?php echo intval($_smarty_tpl->tpl_vars['accessory']->value['id_product']);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'productaccessories'),$_smarty_tpl);?>
">
								<?php if ($_smarty_tpl->tpl_vars['pa_ps_version']->value>=160) {?><span> <?php }?><?php echo smartyTranslate(array('s'=>'Add','mod'=>'productaccessories'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['pa_ps_version']->value>=160) {?></span> <?php }?>
							</a>
							<?php if ($_smarty_tpl->tpl_vars['pa_ps_version']->value>=160) {?></div><?php }?>
						</div>
					</div>
				</div>
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['accessories_list']['iteration']%5==0) {?>
					
				<?php }?>
			<?php } ?>
			</div>
		</div>
		<?php if (count($_smarty_tpl->tpl_vars['accessories']->value)<5) {?>
			<div style="height:10px;width:100%;clear:both">&nbsp;</div>
		<?php }?>
	</div>
	<?php if (count($_smarty_tpl->tpl_vars['accessories']->value)>5) {?>
		<script type="text/javascript">
			$('document').ready( function() {
				$('.pa_pf_product_container').jScrollPane();
			});
			$( window ).resize(function()  {
				$('.pa_pf_product_container').jScrollPane();
			});
		</script>
	<?php }?>
<?php }?>
<!-- / MODULE Accessories --><?php }} ?>
