<?php
App::uses('GeofanceState', 'Model');

/**
 * GeofanceState Test Case
 *
 */
class GeofanceStateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.geofance_state',
		'app.user',
		'app.geofence'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GeofanceState = ClassRegistry::init('GeofanceState');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GeofanceState);

		parent::tearDown();
	}

}
