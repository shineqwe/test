<?php
namespace Page;

class Login
{
    // include url of current page
    public static $URL = '/?logout=YES#popup=login-auth';

    public static $usernameField = '//input[@type="text"]';
    public static $passwordField = '//input[@type="password"]';
    public static $loginButton = '//button[@class="button orange"]';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var AcceptanceTester
     */
    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function login($name='9516652533', $password='developer123')
    {
        $I = $this->tester;
        if ($I->loadSessionSnapshot('login')) {
            return;
        }
        $I->amOnPage(self::$URL);
//        $I->submitForm('//form[@class="v-form"]', [
//            '#autofocus' => $name,
//            'password' => $password
//        ]);
        $I->fillField(self::$usernameField, $name);
        $I->fillField(self::$passwordField, $password);
        $I->click(self::$loginButton);
        $I->amOnPage('/');
        $I->waitForText('Выход', 5);

        $I->saveSessionSnapshot('login');

        return $this;
    }
}
