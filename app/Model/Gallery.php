<?php
class Gallery extends AppModel {

 public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );

 public $hasMany = array(
        'Photo' => array(
            'className' => 'Photo',
            'foreignKey' => 'gallery_id',
            'conditions' => array(
                'Photo.gallery_id' => 'Gallery',
            ),
        ),
    );


 public function createWithAttachments($data) {
        // Sanitize your images before adding them
        $photos = array();
        if (!empty($data['Photo'][0])) {
            foreach ($data['Photo'] as $i => $photo) {
                if (is_array($data['Photo'][$i])) {
                    // Force setting the `model` field to this model
                    $photo['gallery_id'] = 'Gallery';

                    // Unset the foreign_key if the user tries to specify it
                    if (isset($photo['gallery_id'])) {
                        unset($photo['gallery_id']);
                    }

                    $photos[] = $photo;
                }
            }
        }
        $data['Photo'] = $photos;

        // Try to save the data using Model::saveAll()
        $this->create();
        if ($this->saveAll($data)) {
            return true;
        }

        // Throw an exception for the controller
        throw new Exception(__("This Gallery could not be saved. Please try again"));
    }
}

?>
