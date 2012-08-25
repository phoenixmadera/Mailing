<?php
App::uses('MailingAppModel', 'Mailing.Model');
/**
 * MailingList Model
 *
 * @property User $User
 */
class MailingList extends MailingAppModel {

/**
 * This makes the e-mail list return with all his respectives users.
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'User' => array(
			'className' => 'MailingUser',
			'joinTable' => 'mailing_lists_users',
			'foreignKey' => 'id_lists',
			'associationForeignKey' => 'id_users',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
