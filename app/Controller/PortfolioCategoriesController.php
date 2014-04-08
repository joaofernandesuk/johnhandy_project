<?php
App::uses('AppController', 'Controller');
/**
 * PortfolioCategories Controller
 *
 * @property PortfolioCategory $PortfolioCategory
 * @property PaginatorComponent $Paginator
 */
class PortfolioCategoriesController extends AppController {

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
		$this->PortfolioCategory->recursive = 0;
		$this->set('portfolioCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PortfolioCategory->exists($id)) {
			throw new NotFoundException(__('Invalid portfolio category'));
		}
		$options = array('conditions' => array('PortfolioCategory.' . $this->PortfolioCategory->primaryKey => $id));
		$this->set('portfolioCategory', $this->PortfolioCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PortfolioCategory->create();
			if ($this->PortfolioCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The portfolio category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The portfolio category could not be saved. Please, try again.'));
			}
		}
		$photos = $this->PortfolioCategory->Photo->find('list');
		$this->set(compact('photos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PortfolioCategory->exists($id)) {
			throw new NotFoundException(__('Invalid portfolio category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PortfolioCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The portfolio category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The portfolio category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PortfolioCategory.' . $this->PortfolioCategory->primaryKey => $id));
			$this->request->data = $this->PortfolioCategory->find('first', $options);
		}
		$photos = $this->PortfolioCategory->Photo->find('list');
		$this->set(compact('photos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PortfolioCategory->id = $id;
		if (!$this->PortfolioCategory->exists()) {
			throw new NotFoundException(__('Invalid portfolio category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PortfolioCategory->delete()) {
			$this->Session->setFlash(__('The portfolio category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The portfolio category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
