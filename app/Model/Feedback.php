<?php
App::uses('AppModel', 'Model');

class Feedback extends AppModel {

 public $validate = array(
 		'name' => array(
            'rule' => 'notEmpty'
        ),
 		'email' => array(
            'rule' => 'notEmpty'
        ),
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
 public $actsAs = array(
        'Captcha' => array(
            'field' => 'captcha',
            'error' => 'Captcha code entered invalid'
        )
    );
}
?>