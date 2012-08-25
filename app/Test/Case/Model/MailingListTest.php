<?php
App::uses('MailingList', 'Model');

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
		'app.mailing_list',
		'app.user',
		'app.mailing_lists_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MailingList = ClassRegistry::init('MailingList');
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
