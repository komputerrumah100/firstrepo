<?php 
    // Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: DELETE');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    // Include Database Dan Table
    include_once '../../config/Database.php';
    include_once '../../models/Mahasiswa.php';

    // Preparing...
    $mahasiswa  = new Database();
    $mahasiswa  = $mahasiswa->connect();
    $mahasiswa  = new Mahasiswa($mahasiswa);

    // Preparing...
    $data = json_decode(file_get_contents('PHP://input'));
    
    if( !empty($data->id) ){

        $mahasiswa->id = $data->id;

        if($mahasiswa->del($mahasiswa->id)){
            print_r(json_encode(array('msg'=>'Success')));
        }else{
            print_r(json_encode(array('Error'=>'Failed')));
        }    

    }else{
            print_r(json_encode(array('Error'=>'Failed')));
    }
