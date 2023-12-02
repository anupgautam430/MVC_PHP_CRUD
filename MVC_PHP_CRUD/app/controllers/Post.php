<?php

class Post extends Controller{
    public function index(){
        echo"this is a post controller";

        $this->view('post');

    }       
}
