<?php
App::uses('MailingList', 'Mailing.Model');

/**
 * MailingList Test Case
 *
 */
class MailingListTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.mailing.mailing_list',
		'plugin.mailing.user',
		'plugin.mailing.mailing_lists_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MailingList = ClassRegistry::init('Mailing.MailingList');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MailingList);

		parent::tearDown();
	}

}
