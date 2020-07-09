<?php 
    // Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    // Include Database Dan Table
    include_once '../../config/Database.php';
    include_once '../../models/Mahasiswa.php';

    // Preparing...
    $mahasiswa  = new Database();
    $mahasiswa  = $mahasiswa->connect();
    $mahasiswa  = new Mahasiswa($mahasiswa);

    // Get raw data...
    $data = json_decode(file_get_contents('php://input'));

    if( !empty($data->id) ){
        
    }else{
        print_r(json_encode(array('Error'=>'Bad Request')));
    }