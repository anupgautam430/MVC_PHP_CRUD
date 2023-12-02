<?php

class Activity extends Controller{
    public function index(){
        echo"this is a activity controller";

        $this->view('activity');

    }       
}
