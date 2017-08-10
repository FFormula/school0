<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Open the home/join/login pages');

$I->amOnPage('/');
$I->see('views.home.index', 'p');
$I->seeLink('Join', '/home/join');
$I->seeLink('Login', '/home/login');

$I->amOnPage('/home/join');
$I->see('views.home.join', 'p');
$I->seeElement(['name' => 'UserRecord[username]']);
$I->seeElement(['name' => 'UserRecord[password]']);
$I->seeElement('button', ['type' => 'submit']);

$I->amOnPage('/home/login');
$I->see('views.home.login', 'p');
$I->seeElement(['name' => 'UserRecord[username]']);
$I->seeElement(['name' => 'UserRecord[password]']);
$I->seeElement('button', ['type' => 'submit']);

