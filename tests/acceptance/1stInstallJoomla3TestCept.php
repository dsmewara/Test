<?php
/**
 * @package     ijoomer
 * @subpackage  Cept
 * @copyright   Copyright (C) 2008 - 2015 ijoomer.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Before executing this tests configuration.php is removed at tests/_groups/InstallationGroup.php
$scenario->group('installationJ3');
$scenario->group('Joomla3');

// Load the Step Object Page
$I = new AcceptanceTester\InstallJoomla3SiteConfigurationSteps($scenario);

$I->wantTo('Execute Joomla Installation');
$I->setupConfiguration();

$I = new AcceptanceTester\InstallJoomla3DatabaseSteps($scenario);
$I->setupDatabaseConnection();
$I = new AcceptanceTester\InstallJoomla3FinalisationSteps($scenario);
$I->setupSampleData();

$I = new AcceptanceTester($scenario);
$config = $I->getConfig();
$className = 'AcceptanceTester\Login' . $config['env'] . 'Steps';
$I = new $className($scenario);

$I->wantTo('Execute Log in at Joomla Administrator');
$I->doAdminLogin();

$I = new AcceptanceTester\GlobalConfigurationManagerJoomla3Steps($scenario);
$I->wantTo('Set Error Reporting Level');
$I->setErrorReportingLevel();

