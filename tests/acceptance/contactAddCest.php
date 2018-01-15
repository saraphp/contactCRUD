<?php

//php vendor/bin/codecept generate:cest acceptance contactAdd

class contactAddCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToAdd(AcceptanceTester $I)
    {
        $I->amOnPage('/infosysta-demo/contact/add');
        $I->fillField('firstname', 'sara');
        $I->fillField('lastname', 'rabie');
        $I->click('Submit');

//        $I->amOnPage('/infosysta-demo/');
//        $I->click('Add');
//        $I->submitForm('#contact_add', array(
//            'firstname' => 'Miles',
//            'lastname' => 'Davis',
//            'company' => 'company',
//            'address' => 'address',
//            'country' => 'Davcis',
//            'city' => 'city',
//            'phone' => '5555555',
//        ));

    }
}
