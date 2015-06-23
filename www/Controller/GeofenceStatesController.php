<?php
App::uses('AppController', 'Controller');
/**
 * GeofenceStates Controller
 *
 * @property GeofenceState $GeofenceState
 * @property PaginatorComponent $Paginator
 */
class GeofenceStatesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public $uses = array('GeofenceState','Geofence','Users.User');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GeofenceState->recursive = 0;
		$this->set('geofenceStates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GeofenceState->exists($id)) {
			throw new NotFoundException(__('Invalid geofence state'));
		}
		$options = array('conditions' => array('GeofenceState.' . $this->GeofenceState->primaryKey => $id));
		$this->set('geofenceState', $this->GeofenceState->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GeofenceState->create();
			if ($this->GeofenceState->save($this->request->data)) {
				$this->Session->setFlash(__('The geofence state has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The geofence state could not be saved. Please, try again.'));
			}
		}
		$users = $this->GeofenceState->User->find('list');
		$geofences = $this->GeofenceState->Geofence->find('list');
		$this->set(compact('users', 'geofences'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->GeofenceState->exists($id)) {
			throw new NotFoundException(__('Invalid geofence state'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GeofenceState->save($this->request->data)) {
				$this->Session->setFlash(__('The geofence state has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The geofence state could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GeofenceState.' . $this->GeofenceState->primaryKey => $id));
			$this->request->data = $this->GeofenceState->find('first', $options);
		}
		$users = $this->GeofenceState->User->find('list');
		$geofences = $this->GeofenceState->Geofence->find('list');
		$this->set(compact('users', 'geofences'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->GeofenceState->id = $id;
		if (!$this->GeofenceState->exists()) {
			throw new NotFoundException(__('Invalid geofence state'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->GeofenceState->delete()) {
			$this->Session->setFlash(__('The geofence state has been deleted.'));
		} else {
			$this->Session->setFlash(__('The geofence state could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function set ($geofence_id = null, $user_id = null) {

	}
}
