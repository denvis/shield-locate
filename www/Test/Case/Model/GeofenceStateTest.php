<?php
App::uses('GeofenceState', 'Model');

/**
 * GeofenceState Test Case
 *
 */
class GeofenceStateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.geofence_state',
		'app.user',
		'app.geofence',
		'app.geofance_state'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GeofenceState = ClassRegistry::init('GeofenceState');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GeofenceState);

		parent::tearDown();
	}

}
