<?php
App::uses('AppController', 'Controller');

class PhotosController extends AppController {

    var $name = 'Photos';

    function index() {
        $this->Photo->recursive = 0;
        $this->paginate = array(
            'limit' => 6,
            'order' => array('Photo.gallery_id' => 'asc' )
        );
        $this->set('photos', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid image', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('photo', $this->Photo->read(null, $id));
    }

    function add() {
        if (!empty($this->data)) {
            $this->Photo->create();
            if ($this->Photo->save($this->data)) {
                $this->Session->setFlash(__('The image has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The image could not be saved. Please, try again.', true));
            }
        }
        $galleries = $this->Photo->Gallery->find('list');
        $this->set(compact('galleries'));
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid image', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Photo->save($this->data)) {
                $this->Session->setFlash(__('The image has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The image could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Photo->read(null, $id);
        }
        $galleries = $this->Photo->Gallery->find('list');
        $this->set(compact('galleries'));
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for image', true));
            $this->redirect(array('action'=>'index'));
        }
        if ($this->Photo->delete($id)) {
            $this->Session->setFlash(__('Image deleted', true));
            $this->redirect(array('action'=>'index'));
        }
        $this->Session->setFlash(__('Image was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }
}
?>