<?php

class UserControllerCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I -> amOnPage('/account/login');

        $I -> fillField('email', 'g00se@gmail.com');
        $I -> fillField('password', 'Goose123');
        $I -> click('submit');

        $I -> seeResponseCodeIs(\Codeception\Util\HttpCode::OK); // 200
    }
}
