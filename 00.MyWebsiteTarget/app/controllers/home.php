<?php 

class Home extends Controller{
    public function index(){
        $data['baseurl'] = BASEURL;
        $data['allData'] = $this->model('ModelMahasiswa')->viewAllData();
        $this->view('home/index',$data);
        
    }
}