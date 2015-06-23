<?php
App::uses('AppModel', 'Model');
/**
 * GeofenceState Model
 *
 * @property User $User
 * @property Geofence $Geofence
 */
class GeofenceState extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Geofence' => array(
			'className' => 'Geofence',
			'foreignKey' => 'geofence_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
