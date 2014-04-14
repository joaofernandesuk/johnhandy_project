<?php
class GalleriesController extends AppController {
    
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index() {
        $this->set('galleries', $this->Gallery->find('all'));
    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid Gallery'));
        }

        $gallery = $this->Gallery->findById($id);
        if (!$gallery) {
            throw new NotFoundException(__('Invalid Gallery'));
        }
        $this->set('gallery', $gallery);

        $this->set('photos', $this->paginate());
        $photos = $this->Gallery->Photo->find('all');
        $this->set(compact('photos'));
    }

    public function add() {
        if ($this->request->is('post')) {

            $this->Gallery->create();
            if ($this->Gallery->save($this->request->data)) {
                $this->Session->setFlash(__('Your Gallery has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your Gallery.'));
        }
    }

   /* public function add() {
        if ($this->request->is('post')) {
            try {
                $this->Gallery->createWithAttachments($this->request->data);
                $this->Session->setFlash(__('The message has been saved'));
            } catch (Exception $e) {
                $this->Session->setFlash($e->getMessage());
            }
        }
    } */

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid Gallery'));
        }

        $gallery = $this->Gallery->findById($id);
        if (!$gallery) {
            throw new NotFoundException(__('Invalid Gallery'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Gallery->id = $id;
            if ($this->Gallery->save($this->request->data)) {
                $this->Session->setFlash(__('Your Gallery has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your Gallery.'));
        }

        if (!$this->request->data) {
            $this->request->data = $gallery;
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Gallery->delete($id)) {
            $this->Session->setFlash(
                __('The Gallery with id: %s has been deleted.', h($id))
            );
            return $this->redirect(array('action' => 'index'));
        }
    }

}
?>