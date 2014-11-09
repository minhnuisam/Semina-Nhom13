<?php
require_once(_PS_MODULE_DIR_ . 'productaccessories/PrestoChangeoClasses/init.php');

class ProductAccessories extends PrestoChangeoModule
{
 	protected $_full_version = 15000;
 	protected $_last_updated = '';
	
		
	private $_ps_version_id = 0;
	private $_available_hooks = array('extraRight', 'productFooter', 'leftColumn', 'rightColumn');
	private $_hook_option = '';
		
	function __construct()
	{
	
		$ps_version_array = explode('.', _PS_VERSION_);
		$this->_ps_version_id = 10000 * intval($ps_version_array[0]) + 100 * intval($ps_version_array[1]);
		if (count($ps_version_array) >= 3)
			$this->_ps_version_id += intval($ps_version_array[2]);
			
		$this->name = 'productaccessories';
		$this->tab = floatval(substr(_PS_VERSION_,0,3))<1.4?'Presto-Changeo':'front_office_features';
		$this->version = '1.5';
		if (floatval(substr(_PS_VERSION_,0,3)) >= 1.4)
			$this->author = 'Presto-Changeo';
		
		parent::__construct();
		
		if ($this->_ps_version_id >= 10600)	
			$this->bootstrap = true;

		$this->_refreshProperties();
		$this->displayName = $this->l('Product Accessories');
		$this->description = $this->l('Display product accessories in a more visible location.');
		if ($this->upgradeCheck('PAC'))
			$this->warning = $this->l('We have released a new version of the module,') .' '.$this->l('request an upgrade at ').' https://www.presto-changeo.com/en/contact_us';
	}

	function install()
	{
		if (!parent::install())
			return false;
		if (!$this->registerHook('extraright') || !$this->registerHook('header'))
			return false;
		Configuration::updateValue('PRESTO_CHANGEO_UC',time());
		Configuration::updateValue('PA_HOOK_OPTION', $this->_available_hooks[0]);		
		return true;
	}

	public function _refreshProperties()
	{

		$this->_last_updated = Configuration::get('PRESTO_CHANGEO_UC');
		$this->_hook_option = Configuration::get('PA_HOOK_OPTION');

	}
	

	
	/**
	* Returns module content
	*
	* @param array $params Parameters
	* @return string Content
	*/
	function hookExtraRight($params)
	{
		global $smarty, $cookie, $protocol_content, $server_host;

		$product = new Product(intval($_GET['id_product']), true, intval($cookie->id_lang));
		$accessories = $product->getAccessories(intval($cookie->id_lang));
		if (sizeof($accessories) < 1)
			return;
			
		$ps_version  = substr(_PS_VERSION_,0,5);
		$ps_version = str_replace('.', '', $ps_version);
		
		$this->context->smarty->assign('pa_ps_version', $ps_version);
		
		if ($ps_version > 150){
			$imageType = 'medium_default';
		}else{
			$imageType = 'medium';
		}
		
		$this->context->smarty->assign('pa_image', $imageType);
		
		$images = $product->getImages(intval($cookie->id_lang));
		$this->context->smarty->assign('pa_is_image', sizeof($images));
		$this->context->smarty->assign('pa_accessories_dir', $protocol_content.$server_host.__PS_BASE_URI__.'/modules/'.$this->name.'/');
		$this->context->smarty->assign('accessories', $accessories);
		$this->context->smarty->assign('pa_old_img', floatval(substr(_PS_VERSION_,0,3)) < 1.2?'1':'');
		return $this->display(__FILE__, 'productaccessories.tpl');
	}

	function hookHeader()
	{
		global $smarty;
	
		$psv = floatval(substr(_PS_VERSION_,0,3));
		$page_name = '';
		if ($psv >= 1.5)
			$page_name = Dispatcher::getInstance()->getController();
		if ($page_name == '')
			$page_name = $psv >= 1.4 && Configuration::get('PS_FORCE_SMARTY_2') == 0?$smarty->tpl_vars['page_name']->value:$smarty->get_template_vars('page_name');
		if ($page_name != 'product')
			return;
		$ps_version  = floatval(substr(_PS_VERSION_,0,3));
		if ($ps_version < 1.4)
			return $this->display(__FILE__, 'header.tpl');
		else
		{
			
			
			if ($ps_version < 1.5){
				Tools::addCSS(($this->_path).'css/pa.css', 'all');
				Tools::addCSS(($this->_path).'css/jScrollPane.css', 'all');
				Tools::addJS(($this->_path).'js/jquery.mousewheel.js');
				Tools::addJS(($this->_path).'js/jScrollPane.js');
			}else{
				$this->context->controller->addCSS(($this->_path).'css/pa.css', 'all');
				$this->context->controller->addCSS(($this->_path).'css/jScrollPane.css', 'all');
				$this->context->controller->addJS(($this->_path).'js/jquery.mousewheel.js');
				$this->context->controller->addJS(($this->_path).'js/jScrollPane.js');
			}
		}
	}
	
	function hookProductFooter($params)
	{
		global $smarty, $cookie, $protocol_content, $server_host;

		$product = new Product(intval($_GET['id_product']), true, intval($cookie->id_lang));
		$accessories = $product->getAccessories(intval($cookie->id_lang));
		if (sizeof($accessories) < 1)
			return;
			
		$ps_version  = substr(_PS_VERSION_,0,5);
		$ps_version = str_replace('.', '', $ps_version);
		
		$this->context->smarty->assign('pa_ps_version', $ps_version);
		
		if ($ps_version > 150)
			$imageType = 'medium_default';
		else
			$imageType = 'medium';
		
		$this->context->smarty->assign('pa_image', $imageType);
		
		$this->context->smarty->assign('pa_image', $imageType);
		
		$images = $product->getImages(intval($cookie->id_lang));
		$this->context->smarty->assign('pa_is_image', sizeof($images));
		$this->context->smarty->assign('pa_accessories_dir', $protocol_content.$server_host.__PS_BASE_URI__.'/modules/'.$this->name.'/');
		$this->context->smarty->assign('accessories', $accessories);
		$this->context->smarty->assign('pa_old_img', floatval(substr(_PS_VERSION_,0,3)) < 1.2?'1':'');
		return $this->display(__FILE__, 'productaccessoriescenter.tpl');
	}
	
	function hookLeftColumn($params)
	{
		global $smarty, $cookie, $protocol_content, $server_host;
		if (!isset($_GET['id_product']))
			return;
		$product = new Product(intval($_GET['id_product']), true, intval($cookie->id_lang));
		$accessories = $product->getAccessories(intval($cookie->id_lang));
		if (sizeof($accessories) < 1)
			return;
			
		$ps_version  = substr(_PS_VERSION_,0,5);
		$ps_version = str_replace('.', '', $ps_version);
		
		
		
		$this->context->smarty->assign('pa_ps_version', $ps_version);
		
		if ($ps_version > 150)
			$imageType = 'medium_default';
		else
			$imageType = 'medium';
		
		$this->context->smarty->assign('pa_image', $imageType);
		
		$this->context->smarty->assign('pa_image', $imageType);
		
		$images = $product->getImages(intval($cookie->id_lang));
		$this->context->smarty->assign('pa_is_image', sizeof($images));
		$this->context->smarty->assign('pa_accessories_dir', $protocol_content.$server_host.__PS_BASE_URI__.'/modules/'.$this->name.'/');
		$this->context->smarty->assign('accessories', $accessories);
		$this->context->smarty->assign('pa_old_img', floatval(substr(_PS_VERSION_,0,3)) < 1.2?'1':'');
		return $this->display(__FILE__, 'productaccessoriesblock.tpl');
	}	

	function hookRightColumn($params)
	{
		return $this->hookLeftColumn($params);
	}	

	public function getContent()
	{
		$ps_version  = floatval(substr(_PS_VERSION_,0,3));
		
		if (Tools::isSubmit('submitChangeHook'))
		{
			if (Tools::getValue('hook_option') != $this->_hook_option)
			{
				foreach ($this->_available_hooks as $hook)
				{
					if (Tools::getValue('hook_option') == $hook)
						$this->registerHook($hook);
					else
					{
						if ($ps_version >= 1.5)
							$this->unregisterHook(Hook::getIdByName($hook));
						else
							$this->unregisterHook(Hook::get($hook));
					}
				}
			}
			Configuration::updateValue('PA_HOOK_OPTION', Tools::getValue('hook_option'));
		}
		$this->_html = ''.($ps_version >= 1.5 ? ''.($this->_ps_version_id < 10600 ? '<div style="width: 850px; margin: 0 auto;">' : '<div>').'  ' : '').$this->getModuleRecommendations('PAC').'<h2 style="clear:both;padding-top:5px;">'.$this->displayName.' '.$this->version.'</h2>';
		$this->_displayForm();
		return $this->_html.''.($ps_version >= 1.5 ? '</div> ' : '');
	}

    private function _displayForm()
    {
    	global $cookie;
		$ps_version  = floatval(substr(_PS_VERSION_,0,3));
		if ($url = $this->upgradeCheck('PAC'))
			$this->_html .= '
			
			
			'.($this->_ps_version_id < 10600 ? '<fieldset class="width3" style="background-color:#FFFAC6;width:800px;">' : '<div class="panel">' ).'	
				'.($this->_ps_version_id < 10600 ? '<legend>' : '<h3>').'
					<img src="'.$this->_path.'logo.gif" />'.$this->l('New Version Available').'
				'.($this->_ps_version_id < 10600 ? '</legend>' : '</h3>' ).'
			'.$this->l('We have released a new version of the module. For a list of new features, improvements and bug fixes, view the ').'<a href="'.$url.'" target="_index"><b><u>'.$this->l('Change Log').'</b></u></a> '.$this->l('on our site.').'
			<br />
			'.$this->l('For real-time alerts about module updates, be sure to join us on our') .' <a href="http://www.facebook.com/pages/Presto-Changeo/333091712684" target="_index"><u><b>Facebook</b></u></a> / <a href="http://twitter.com/prestochangeo1" target="_index"><u><b>Twitter</b></u></a> '.$this->l('pages').'.
			<br />
			<br />
			'.$this->l('Please').' <a href="https://www.presto-changeo.com/en/contact_us" target="_index"><b><u>'.$this->l('contact us').'</u></b></a> '.$this->l('to request an upgrade to the latest version (Free modules should be downloaded directly from our site again)').'.
			'.($this->_ps_version_id < 10600 ? '</fieldset>' : '</div>' ).'
			
			<br />';
    	$this->_html .= '
			
			'.($this->_ps_version_id < 10600 ? '<fieldset class="width3" style="width:850px">' : '<div class="panel">' ).'
				'.($this->_ps_version_id < 10600 ? '<legend>' : '<h3>').'
					<img src="'.$this->_path.'logo.gif" />'.$this->l('Display Options').'
				'.($this->_ps_version_id < 10600 ? '</legend>' : '</h3>' ).'
				<b style="color:blue">'.$this->l('This module uses the existing PrestaShop product accessories, to add accessories to a product go to the product editor.').'</b>:
				<br />
				<br />
				'.$this->l('The module can be used in 4 different hooks: "Extra Right", "Product Footer", "Left Column", "Right Column".').'<br />
				<form action="'.$_SERVER['REQUEST_URI'].'" name="product_accessories" method="post">
					<select name="hook_option" style="width:110px;'.($this->_ps_version_id >= 10600 ? 'display: inline;':'' ).'" >';
    	foreach ($this->_available_hooks as $hook)
   			$this->_html .= '<option value="'.$hook.'" '.(Tools::getValue('hook_option', $this->_hook_option) == $hook?"selected":"").'>'.$hook.'</option>';
		$this->_html .= '   					
					</select>
					
					<input type="submit" name="submitChangeHook" value="'.$this->l('Update').'" '.($this->_ps_version_id >= 10600 ? 'class="btn btn-default"' : 'class="button" ' ).'  />
				
				</form>	
				
			'.($this->_ps_version_id < 10600 ? '</fieldset>' : '</div>' ).'	
			';
    }	
	
}
?>