<?php

/**
 * @package     ijoomer
 * @subpackage  Page Class
 * @copyright   Copyright (C) 2008 - 2015 ijoomer.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * Class CategoryManagerJ3Page
 *
 * @since  1.4
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 */
class MenusJ3Page
{
	// Include url of current page
	public static $URL = '/administrator/index.php?option=com_ijoomeradv&view=menus';

	public static $ExtensionName = "//*[@id='adminForm']/table/thead/tr[1]/th[2]/a";

	public static $checkAll = "//input[@onclick='Joomla.checkAll(this)']";

	public static $menutitle="//*[@id='jform_title']";

	public static $menudescription="//*[@id='jform_menudescription']";

	public static $menupositionDropDown="//*[@id='jform_position']";

	public static $menupositionlist="//*[@id='jform_position']/option[2]";

	public static $Description="Testing";

	public static $TitleName"automation";

}
