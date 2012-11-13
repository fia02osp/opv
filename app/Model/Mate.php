<?php
class Mate extends AppModel {
	 public $validate = array(
        'firstname' => array(
            'rule' => 'notEmpty'
        ),
    );
}