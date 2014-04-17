<?php
App::uses('AppController', 'Controller');

class FeedbacksController extends AppController {
    
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session', 'MathCaptcha', 'Captcha' => array('rotate' => true));

    public function captcha()  {
        $this->autoRender = false;
        $this->Captcha->generate();
    }

    public function index() { 
    	$this->set('feedbacks', $this->Feedback->find('all'));
        $this->paginate = array(
            'limit' => 10,
            'order' => array('Feedback.created' => 'desc' )
        );
        $this->set('feedbacks', $this->paginate());
    }

    public function view($id) { 
    	if (!$id) {
            throw new NotFoundException(__('Invalid Feedback'));
        }

        $feedback = $this->Feedback->findById($id);
        if (!$feedback) {
            throw new NotFoundException(__('Invalid Feedback'));
        }
        $this->set('feedback', $feedback);
    }

    public function add() { 
    	if ($this->request->is('post')) {

            $this->Feedback->create();
            if ($this->Feedback->save($this->request->data)) {
                $this->Session->setFlash(__('Your Feedback has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your Feedback.'));
        }
    }

    public function edit($id = null) { 
    	if (!$id) {
            throw new NotFoundException(__('Invalid Feedback'));
        }

        $feedback = $this->Feedback->findById($id);
        if (!$feedback) {
            throw new NotFoundException(__('Invalid Feedback'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Feedback->id = $id;
            if ($this->Feedback->save($this->request->data)) {
                $this->Session->setFlash(__('Your Feedback has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your Feedback.'));
        }

        if (!$this->request->data) {
            $this->request->data = $feedback;
        }
    }

    public function delete($id) { 
    	if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Feedback->delete($id)) {
            $this->Session->setFlash(
                __('The Feedback with id: %s has been deleted.', h($id))
            );
            return $this->redirect(array('action' => 'index'));
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////// FOR CUSTOMERS //////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////


    public function customer_index() { 
    	$this->set('feedbacks', $this->Feedback->find('all'));
        $this->paginate = array(
            'limit' => 5,
            'order' => array('Feedback.created' => 'desc' )
        );
        $this->set('feedbacks', $this->paginate());
    }

    public function customer_add() { 

    	/* $this->set('captcha', $this->MathCaptcha->getCaptcha()); */


    	if ($this->request->is('post')) {
    		$this->Feedback->setCaptcha($this->Captcha->getCode());
    		$this->Feedback->set($this->data);
            $this->Feedback->create();
            /* if ($this->MathCaptcha->validate($this->request->data['Feedback']['captcha'])) { */
	            if ($this->Feedback->save($this->request->data)) {
	            	$this->Session->setFlash(__('Captcha code validated successfully', 'flash_good'));
	                $this->Session->setFlash(__('Your Feedback has been saved.'));
	                return $this->redirect(array('action' => 'customer_index'));
	            }
           		$this->Session->setFlash(__('Unable to add your Feedback.'));
           	
           	/* } else {
        		$this->Session->setFlash('The result of the calculation was incorrect. Please, try again.');
      		} */
        }
    }

    public function customer_view($id) { 
    	if (!$id) {
            throw new NotFoundException(__('Invalid Feedback'));
        }

        $feedback = $this->Feedback->findById($id);
        if (!$feedback) {
            throw new NotFoundException(__('Invalid Feedback'));
        }
        $this->set('feedback', $feedback);
    }
}
?>