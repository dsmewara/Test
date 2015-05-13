<?php
/**
 * @package     ijoomer
 * @subpackage  Cept
 * @copyright   Copyright (C) 2008 - 2015 ijoomer.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
$scenario->group('Joomla2');



$I = new AcceptanceTester($scenario);
$config = $I->getConfig();
$className = 'AcceptanceTester\Login' . $config['env'] . 'Steps';
$I = new $className($scenario);

$I->wantTo('Install Extension');
$I->doAdminLogin();
$I = new AcceptanceTester\InstallExtensionJoomla2Steps($scenario);

$I->installExtension('Test');
$I->wantTo('Install ijoomer demo data');
$I->installSampleData();
