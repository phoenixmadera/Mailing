<?php
App::uses('MailingTemplate', 'Mailing.Model');

/**
 * MailingTemplate Test Case
 *
 */
class MailingTemplateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.mailing.mailing_template'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MailingTemplate = ClassRegistry::init('Mailing.MailingTemplate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MailingTemplate);

		parent::tearDown();
	}

}
