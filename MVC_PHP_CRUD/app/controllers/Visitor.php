<?php

class Visitor extends Controller{
    public function index(){
        echo"this is a visitor controller";

        $this->view('visitor');

    }       
}
