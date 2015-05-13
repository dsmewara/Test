<?php
/**
 * @package     ijoomer
 * @subpackage  Step Class
 * @copyright   Copyright (C) 2008 - 2015 ijoomer.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace AcceptanceTester;
use Codeception\Module\WebDriver;

/**
 * Class ExtensionManagerJoomla3Steps
 *
 * @package  AcceptanceTester
 *
 * @since    1.4
 *
 * @link     http://codeception.com/docs/07-AdvancedUsage#StepObjects
 */
class MenusJoomla3Steps extends AdminManagerJoomla3Steps
{
	/**
	 * Function  to Create a New Extension
	 *
	 * @param   String  $ExtensionName  Name of the Extension
	 *
	 * @return void
	 */
	
	public function addCategory($TitleName,$Description)
	{
		$I = $this;
		$I->amOnPage(\MenusJ3Page::$URL);
		$I->verifyNotices(false, $this->checkForNotices(), 'Category Manager Page');
		$I->click("New");
		$I->verifyNotices(false, $this->checkForNotices(), 'Category Manager Page New');
		$I->fillField(\MenusJ3Page::$menutitle,$TitleName);
		$I->fillField(\MenusJ3Page::$menudescription,$Description);
		$I->click(\MenusJ3Page::$menupositionDropDown);
		$I->click(\MenusJ3Page::$menupositionlist);
		$I->click("Save & Close");
		
	}

	/*public function changeState1($state = 'publish')
	{
		$I = $this;
		$I->amOnPage(\MenusJ3Page::$URL);
		$I->verifyNotices(false, $this->checkForNotices(), 'Menus Page');
		$I->click(\MenusJ3Page::$checkAll);	
	    if ($state == 'publish')
		{
			$I->click("publish");
		}
		else
		{
			$I->click("UnPublish");
		}
	}

	*/	
}
