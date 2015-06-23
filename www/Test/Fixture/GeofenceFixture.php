<?php
/**
 * GeofenceFixture
 *
 */
class GeofenceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'name' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'latitiude' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '8,6', 'unsigned' => false),
		'longitude' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '9,6', 'unsigned' => false),
		'radius' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 1,
			'latitiude' => '',
			'longitude' => '',
			'radius' => 1
		),
	);

}
