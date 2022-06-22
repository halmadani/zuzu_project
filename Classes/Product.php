<?php 

class Product{
    public $id;
    public $name;
    public $amount;

    public function __construct()
    {
        settype($this->id, 'integer');
    }

}


?>