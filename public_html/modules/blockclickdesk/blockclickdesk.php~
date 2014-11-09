<?php
/*
* 2007-2011 PrestaShop 
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2011 PrestaShop SA
*  @version  Release: $Revision: 8783 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_'))
	exit;

class Blockclickdesk extends Module
{
	/* @var boolean error */
	protected $error = false;
	
	public function __construct()
	{
		$this->name = 'blockclickdesk';
		$this->tab = 'front_office_features';
		$this->version = '2.0';
		$this->author = 'ClickDesk';
		$this->need_instance = 0;
		$this->module_key="0d03f0a08793acf22bb0e4b82590fe1c";

	 	parent::__construct();

		$this->displayName = $this->l('Clickdesk live chat block');
		$this->description = $this->l('Adds a Clickdesk Block.');
		$this->confirmUninstall = $this->l('Are you sure  ?');
	}
	
	public function install()
	{
		if (!parent::install() OR
			!$this->registerHook('leftColumn') OR
!Configuration::updateValue('PS_BLOCKCLICK_WIDGETID', ''))
			return false;
		return true;
	}
	
	public function uninstall()
	{
		if (!parent::uninstall() OR 
			!Configuration::deleteByName('PS_BLOCKCLICK_WIDGETID'))
			return false;
		return true;
	}
	
	public function hookLeftColumn($params)
	{
		global $cookie, $smarty;
		
		$smarty->assign(array(
			'widgetid' => Configuration::get('PS_BLOCKCLICK_WIDGETID'),
		));
		if (! Configuration::get('PS_BLOCKCLICK_WIDGETID'))
			return false;
		return $this->display(__FILE__, 'blockclickdesk.tpl');
	}
	
	public function hookRightColumn($params)
	{
		return $this->hookLeftColumn($params);
	}

 
	public function getContent()
	{
		$this->_html = '<h2>'.$this->displayName.'</h2>
		<script type="text/javascript" src="'.$this->_path.'blocklink.js"></script>';

 
 
 
		if (isset($_REQUEST['cdwidgetid']))
		{ 
				Configuration::updateValue('PS_BLOCKCLICK_WIDGETID', $_REQUEST['cdwidgetid']);
		}
 

		$this->_displayForm();


		return $this->_html;
	}
	
	private function _displayForm()
	{
		global $cookie;
		/* Language */
		$defaultLanguage = (int)(Configuration::get('PS_LANG_DEFAULT'));
 
		$widgetid = Configuration::get('PS_BLOCKCLICK_WIDGETID');

		$this->_html .= '
		<script type="text/javascript">
			id_language = Number('.$defaultLanguage.');
		</script>
		<fieldset>
			<legend><img src="'.$this->_path.'add.png" alt="" title="" /> '.$this->l('Widget Id').'</legend>
			<form method="post" action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'">
		        ';
 
			$this->_html .= '
		 
				<label>'.$this->l('Widget Id:').'</label>
				<div class="margin-form"><input type="text" name="cdwidgetid" id="cdwidgetid" value="'.$widgetid.'" /><sup> </sup></div>
	 
				<div class="margin-form">
					<input type="submit" class="button" name="submitLinkAdd" value="'.$this->l('Update').'" />
				</div>
			</form>
		</fieldset>';

  $livily_server_url = "http://my.clickdesk.com/";

  $livily_dash = $livily_server_url . "widgets-wp.jsp?cdplugin=prestashop&wpurl=";

  $path = "http://" . $_SERVER['HTTP_HOST'] . "" . Tools::safeOutput($_SERVER['REQUEST_URI']);

  $path = urlencode($path);

  $cdurl = $livily_dash . $path;

		if(strlen($widgetid) != 0){
			$mssg = urlencode("Plugin has been installed successfully.");
			$cdurl = $cdurl ."&mssg=".$mssg;
		}
		$this->_html .='
		<fieldset>


			<iframe width="100%" border="0" height="1200px" src="'.$cdurl.'" scrolling="yes">
			</iframe>


		</fieldset>
		';
	}
 
}
