<?php
App::uses('MailingAppModel', 'Mailing.Model');
/**
 * MailingTemplate Model
 *
 * @property MailingMessage $Message
 */
class MailingTemplate extends MailingAppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'des';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'des' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Message' => array(
			'className' => 'MailingMessage',
			'foreignKey' => 'id_templates',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
