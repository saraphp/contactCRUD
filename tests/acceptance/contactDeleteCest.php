<?php


class contactDeleteCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToDelete(AcceptanceTester $I)
    {
        $I->amOnPage('/infosysta-demo/');
        $I->click('Delete');

    }
}
