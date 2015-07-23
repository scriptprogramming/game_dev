<?php

class Template {

    private $arr;
    private $content;

    public function __construct() {
        $this->arr=array();
    }
    public function assign($key, $value) {
        $this->arr[$key] = $value;
    }

    public function display($datei) {
        if (file_exists($datei)) {

           $this-> content = file_get_contents($datei);
            foreach ($this->arr as $key => $value) {
               $this->content= str_replace('{$'.$key.'}', $value, $this->content);
            }
        }



         echo $this->content;
    }

}
