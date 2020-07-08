<?php 
class Mahasiswa{
    // Wajib
    private $conn;
    private $table = 'mahasiswa';

    // Keperluan query table
    public $id;
    public $nama;
    public $nrp;
    public $email;
    public $jurusan;
    public $gambar;

    public function __construct($db){
        $this->conn = $db;
    }
    
    // Read
    public function read(){
        $stmt = $this->conn->prepare('SELECT * FROM ' . $this->table );
        $stmt->execute();
        return $stmt;
    }

    // Read Single
    public function readSingle(){
        $stmt = $this->conn->prepare('SELECT * FROM ' . $this->table . ' WHERE id= ?');
        $stmt->bindParam(1,$this->id);
        $stmt->execute();
        return $stmt;
    }

    // Create
    public function create(){
        // Query Table
        $query = "INSERT INTO " . $this->table . " SET 
        nama = :nama, nrp = :nrp, email = :email,
         jurusan = :jurusan, gambar = :gambar";
        // Clean Data
        $this->nama = htmlspecialchars(strip_tags($this->nama));
        $this->nrp = htmlspecialchars(strip_tags($this->nrp));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->jurusan = htmlspecialchars(strip_tags($this->jurusan));
        $this->gambar = htmlspecialchars(strip_tags($this->gambar));
        // Binding Data
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama',$this->nama);
        $stmt->bindParam(':nrp',$this->nrp);
        $stmt->bindParam(':email',$this->email);
        $stmt->bindParam(':jurusan',$this->jurusan);
        $stmt->bindParam(':gambar',$this->gambar);
        // Execute
        return $stmt->execute() ? true : false;
    }
}