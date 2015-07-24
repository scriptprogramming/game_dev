<?php

class Template {

    private $arr = array();

    public function assign($key, $value) {
        $this->arr[$key] = $value;
    }

    public function display($filename) {
        if (file_exists($filename)) {
            $content = file_get_contents($filename);
            if (!empty($this->arr)) {
                foreach ($this->arr as $key => $value) {
                    $content = str_replace('{$' . $key . '}', $value, $content);
                }
            }
            echo $content;
        } else {
            echo 'file not found';
        }
    }

}
