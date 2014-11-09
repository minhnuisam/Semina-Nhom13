<!-- MODULE Accessories -->
{if isset($accessories) AND $accessories}
	<style>
	ul#idTab4
	{ldelim}
		display: none;
	{rdelim}
	</style>
	<script type="text/javascript">
		$(document).ready(function () {ldelim}
			$("#more_info_tabs a").each(function() {ldelim}
			if ($(this).attr('href') == "#idTab4")
				$(this).css('display','none');
			{rdelim});
			
			$('.accessories-block').each(function() {ldelim}
				$(this).parent().hide();
			{rdelim});
		{rdelim});
	</script>
	<div id="pa_container" class="block_content{if $accessories|@count > 5} {if $pa_ps_version >= 160} pa_pf_height16{else} pa_pf_height{/if}{/if}">
		<div class="pa_pf_header">{l s='Accessories' mod='productaccessories'}</div>
		<div class="pa_pf_product_container{if $accessories|@count > 5} scroll-pane{/if}{if $accessories|@count > 5} {if $pa_ps_version >= 160} pa_pfp_height16{else}pa_pfp_height{/if}{/if}">
			<div style="width: {$accessories|@count * 106}px;">
			{foreach from=$accessories item=accessory name=accessories_list}
				<div class="ajax_block_product pa_pf_block{if $accessories|@count > 5}_scroll{/if}">
				{assign var='accessoryLink' value=$link->getProductLink($accessory.id_product, $accessory.link_rewrite, $accessory.category)}
					<h5 class="align_center"><a href="{$accessoryLink|escape:'htmlall':'UTF-8'}" target="_blank">{$accessory.name|truncate:20:'...'|escape:'htmlall':'UTF-8'}</a></h5>
					<div class="pa_pf_image ps_image_{$pa_image}">
						<a href="{$accessoryLink|escape:'htmlall':'UTF-8'}" target="_blank" title="{$accessory.legend|escape:'htmlall':'UTF-8'}" class="product_image">
						<img src="{if $pa_old_img}{$img_prod_dir}{$accessory.id_image}-{$pa_image}.jpg{else}{$link->getImageLink($accessory.link_rewrite, $accessory.id_image, $pa_image)}{/if}" alt="{$accessory.legend|escape:'htmlall':'UTF-8'}" />
					
						</a>
					</div>
					<div class="pa_pf_accessories_price">
						<div class="price">{if !$priceDisplay}{displayWtPrice p=$accessory.price}{else}{displayWtPrice p=$accessory.price_tax_exc}{/if}</div>
						<div class="pa_pf_atc">
							{if $pa_ps_version >= 160}<div class="no-print">{/if}
							<a class="{if $pa_ps_version > 1.6}exclusive button ajax_add_to_cart_button{else}button_small exclusive_small ajax_add_to_cart_button{/if}" href="{$base_dir}cart.php?qty=1&amp;id_product={$accessory.id_product|intval}&amp;token={$static_token}&amp;add" {if $pa_ps_version > 1.6}data-id-product="{$accessory.id_product|intval}"{/if} rel="ajax_id_product_{$accessory.id_product|intval}" title="{l s='Add to cart' mod='productaccessories'}">
								{if $pa_ps_version >= 160}<span> {/if}{l s='Add' mod='productaccessories'} {if $pa_ps_version >= 160}</span> {/if}
							</a>
							{if $pa_ps_version >= 160}</div>{/if}
						</div>
					</div>
				</div>
				{if $smarty.foreach.accessories_list.iteration % 5 == 0}
					
				{/if}
			{/foreach}
			</div>
		</div>
		{if $accessories|@count < 5}
			<div style="height:10px;width:100%;clear:both">&nbsp;</div>
		{/if}
	</div>
	{if $accessories|@count > 5}
		<script type="text/javascript">
			$('document').ready( function() {ldelim}
				$('.pa_pf_product_container').jScrollPane();
			{rdelim});
			$( window ).resize(function()  {ldelim}
				$('.pa_pf_product_container').jScrollPane();
			{rdelim});
		</script>
	{/if}
{/if}
<!-- / MODULE Accessories -->