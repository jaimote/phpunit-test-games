<?php

class Operations {
    
    public function __constructor(){

    }

    public function sum($n1, $n2){
        if($n1 == NULL || $n2 == NULL) throw new InvalidArgumentException("los valores no son númericos");
        return $n1 + $n2;
    }

    public function division($n1, $n2){
        return $n1 / $n2;
    }
}
?>