<?php
include "possition_finder.php";

class calculator{
   
    public $possition;
    public $string;
    public function __construct($string)
    {
        $this->possition=new possition($string);
        $this->string=$string;
    }
    public function calculate()
    {
        
        $last_x=$this->possition->find_last_x();
        $first_y=$this->possition->find_first_y();
        $count_X=$this->get_all_xses($first_y, $last_x);
        $count_y=$this->get_all_ys($first_y, $last_x);
        return min($count_X, $count_y);
    }
    public function get_all_xses($first_y, $last_x){
        $ammount= 0;
        for($i=$first_y; $i<=$last_x; $i++){
            if($this->string[$i]=='x')
                $ammount++;
        }
        return $ammount;
    } 
    public function get_all_ys($first_y, $last_x)
    {
        $ammount= 0;
        for($i=$first_y; $i<=$last_x; $i++){
            if($this->string[$i]=='y')
                $ammount++;
        }
        return $ammount;
    }
}
?>