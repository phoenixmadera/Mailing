<?php
App::uses('MailingMessage', 'Mailing.Model');

/**
 * MailingMessage Test Case
 *
 */
class MailingMessageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.mailing.mailing_message'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MailingMessage = ClassRegistry::init('Mailing.MailingMessage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MailingMessage);

		parent::tearDown();
	}

}
