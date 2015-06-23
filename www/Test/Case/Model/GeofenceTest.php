<?php
App::uses('Geofence', 'Model');

/**
 * Geofence Test Case
 *
 */
class GeofenceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.geofence'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Geofence = ClassRegistry::init('Geofence');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Geofence);

		parent::tearDown();
	}

}
