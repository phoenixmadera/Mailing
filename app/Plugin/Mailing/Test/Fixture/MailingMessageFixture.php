<?php
/**
 * MailingMessageFixture
 *
 */
class MailingMessageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'from' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 110, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'from_email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'subject' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 110, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'sent' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'id_users' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'id_templates' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_template_idx' => array('column' => 'id_templates', 'unique' => 0),
			'id_users' => array('column' => 'id_users', 'unique' => 0),
			'id_users_idx' => array('column' => 'id_users', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'from' => 'Lorem ipsum dolor sit amet',
			'from_email' => 'Lorem ipsum dolor sit amet',
			'subject' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-08-25 00:02:37',
			'sent' => '2012-08-25 00:02:37',
			'id_users' => 1,
			'id_templates' => 1
		),
	);

}
