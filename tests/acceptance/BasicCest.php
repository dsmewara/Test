<?php
class BasicCest
{
    // test
    public function checkLogin(\AcceptanceTester $I) 
    {
        $I->wantTo('log in as regular user');
        $I->amOnPage('/administrator/index.php');
   		$I->fillField('username','admin');
		$I->fillField('passwd','admin');
		$I->click('Log in');
		//$I->see('Users');
    }
   /* public function installjoomlaExtension(\AcceptanceTester $I)
    {
    	$I->see('Extensions');
		$I->click('//*[@id=\'menu\']/li[6]/a/span');
		$I->click('//*[@id=\'menu\']/li[6]/ul/li[1]/a');
		$I->attachFile('//*[@id=\'install_package\']', 'com_community_pro_3.2.0.4.zip');
		$I->wait(5);
		$I->click('//*[@id=\'upload\']/fieldset/div[2]/input');
		$I->wait(5);
		$I->click('//*[@id=\'menu\']/li[5]/a/span');
		$I->click('//*[@id=\'menu\']/li[5]/ul/li[1]/a');
		$I->wait(5);
		$I->click('//*[@id=\'step-one\']/div[1]/div/a');
		$I->wait(25);
		$I->click('//*[@id=\'btn-next\']');
		$I->wait(15);
    }*/
}
?>