<?php 

class About extends Controller{
    public function index(){
        $this->view('about/index');
    }

    public function contact(){
        $this->view('about/contact');
    }
}