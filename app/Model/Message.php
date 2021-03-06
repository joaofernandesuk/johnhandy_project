<?php
class Message extends AppModel {
    public $hasMany = array(
        'Video' => array(
            'className' => 'Gallery',
            'foreignKey' => 'foreign_key',
            'conditions' => array(
                'Video.model' => 'Message',
            ),
        ),

        'Photo' => array(
            'className' => 'Gallery',
            'foreignKey' => 'foreign_key',
            'conditions' => array(
                'Photo.model' => 'Message',
            ),
        ),
    );
}
?>