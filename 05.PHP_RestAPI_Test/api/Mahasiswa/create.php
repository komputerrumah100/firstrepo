<?php 
    // Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    // Include Database Dan Table
    include_once '../../config/Database.php';
    include_once '../../models/Mahasiswa.php';

    // Preparing...
    $mahasiswa  = new Database();
    $mahasiswa  = $mahasiswa->connect();
    $mahasiswa  = new Mahasiswa($mahasiswa);

    // Get raw data...
    $data = json_decode(file_get_contents('php://input'));

    if( $data->nama !== '' && 
        $data->nrp !== '' &&
        $data->email !== '' &&
        $data->jurusan !== '' &&
        $data->gambar !== ''
    ){
        $mahasiswa->nama = $data->nama;
        $mahasiswa->nrp = $data->nrp;
        $mahasiswa->email = $data->email;
        $mahasiswa->jurusan = $data->jurusan;
        $mahasiswa->gambar = $data->gambar;
      
        if($mahasiswa->create()){
            print_r(json_encode(array('msg'=>'Success')));
        }else{
            print_r(json_encode(array('msg'=>'Failed')));
        }    

    }else{
            print_r(json_encode(array('msg'=>'Failed')));
    }
