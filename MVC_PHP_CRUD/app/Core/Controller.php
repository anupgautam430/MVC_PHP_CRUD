<?php

class Controller{
    public function view($name){
        $filename = "../app/Views/".$name.".view.php";
        if(file_exists($filename)){
            require $filename;
        }else{
            $filename = "../app/Views/error.view.php";
            require $filename;
        }
    }
}