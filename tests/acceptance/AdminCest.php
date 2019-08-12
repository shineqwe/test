<?php
//include_once 'Yandex\Allure\Codeception\AllureCodeception';
//namespace Example\Tests;

//use PHPUnit_Framework_TestCase;
use Yandex\Allure\Adapter\Support\StepSupport;


class AdminCest
{
    use StepSupport;
    protected $tester;
    public function _before(AcceptanceTester $I)
    {$this->tester = $I;
    }

    public function test(AcceptanceTester $I)
    {
//        $loginPage->login();

        $this->executeStep("This is step one", function () {
            $I = $this->tester;
            $loginPage = new \Page\Login($I);
            $loginPage->login();
        });
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
