<?php
class Project extends AppModel {

    
    public $hasMany = array(
        'Mate' => array(
            'className'     => 'Mate',
            'foreignKey'    => 'project_id',
            'order'         => 'Mate.created DESC',
            'dependent'     => false
        )
    );

	public $validate = array(
        'topic' => array(
            'rule' => 'notEmpty'
        ),
    );

}