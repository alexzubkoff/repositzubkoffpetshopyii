<?php
class DogPet extends Pet{
    static function model($className=__CLASS__) {
        return parent::model($className);
    }
 
    function defaultScope(){
        return array(
            'condition'=>"type='Dog'",
        );
    }
}

