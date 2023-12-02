<?php

class Officer extends Controller{
    public function index(){
        echo"this is a officer controller";

        $this->view('officer');

    }       
}
