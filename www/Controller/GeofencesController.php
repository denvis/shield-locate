<?php
App::uses('AppController', 'Controller');
/**
 * Geofences Controller
 *
 * @property Geofence $Geofence
 * @property PaginatorComponent $Paginator
 */
class GeofencesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Geofence->recursive = 0;
		$this->set('geofences', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Geofence->exists($id)) {
			throw new NotFoundException(__('Invalid geofence'));
		}
		$options = array('conditions' => array('Geofence.' . $this->Geofence->primaryKey => $id));
		$this->set('geofence', $this->Geofence->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Geofence->create();
			if ($this->Geofence->save($this->request->data)) {
				$this->Session->setFlash(__('The geofence has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The geofence could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Geofence->exists($id)) {
			throw new NotFoundException(__('Invalid geofence'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Geofence->save($this->request->data)) {
				$this->Session->setFlash(__('The geofence has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The geofence could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Geofence.' . $this->Geofence->primaryKey => $id));
			$this->request->data = $this->Geofence->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Geofence->id = $id;
		if (!$this->Geofence->exists()) {
			throw new NotFoundException(__('Invalid geofence'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Geofence->delete()) {
			$this->Session->setFlash(__('The geofence has been deleted.'));
		} else {
			$this->Session->setFlash(__('The geofence could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
