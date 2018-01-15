<?php


class contactEditCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToEdit(AcceptanceTester $I)
    {
//        $I->amOnPage('/infosysta-demo/contact/edit/1');
//        $I->fillField('firstname', 'sara');
//        $I->fillField('lastname', 'rabie');
//        $I->click('Submit');
        $I->amOnPage('/infosysta-demo/');
        $I->click('Edit');
        $contact_id = $I->grabTextFrom('#contact_id');
        $I->submitForm('#contact_update', array(
            'firstname' => 'Miles',
            'lastname' => 'Davis',
            'company' => 'company',
            'address' => 'address',
            'country' => 'Davcis',
            'city' => 'city',
            'phone' => '44444',
            'contact_id' => 25,
        ));
    }
}
