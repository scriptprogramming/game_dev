<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Template {
    private $values = array();
    
    public function assign($key, $value) {
        $this->values[$key] = $value;
    }
    
    public function display($target) {
       if(file_exists($target)){
           $content = file_get_contents($target);
           foreach ($this->values as $key => $value) {
               $content = str_replace('{$'.$key.'}', $value, $content);
           }
           echo $content;
       } 
    }

}
