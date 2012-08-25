<?php
App::uses('MailingUser', 'Mailing.Model');

/**
 * MailingUser Test Case
 *
 */
class MailingUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.mailing.mailing_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MailingUser = ClassRegistry::init('Mailing.MailingUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MailingUser);

		parent::tearDown();
	}

}
