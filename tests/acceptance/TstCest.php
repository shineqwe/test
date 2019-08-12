<?php
//include_once '/home/user/auto_test/tests/_support/Page/MyCustomExtension.php';
include_once '../_bootstrap.php';
include_once '../../vendor/autoload.php';

class TstCest
{

    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {

        $I->wait(1);
    }
}
