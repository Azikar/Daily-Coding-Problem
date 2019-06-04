<?php
class possition{

    public $string;

    public function __construct($string){
        $this->string=$string;
    }

    public function find_last_x()
    {
        return strrpos($this->string, 'x');
    }

    public function find_first_y()
    {
        return strpos($this->string, 'y');
    }
}
?>