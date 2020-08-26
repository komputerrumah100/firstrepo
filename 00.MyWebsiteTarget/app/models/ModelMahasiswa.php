<?php 

class ModelMahasiswa{
    private $table = 'mahasiswa';
    private $db;
    private $stmt;

    public function __construct()
    {
        try{
            $this->db = new Database();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function insertData($data){
        $this->db->setQuery('INSERT INTO ' . $this->table . ' VALUE (isi sendiri)');
    }

    public function viewAllData(){
        $this->db->setQuery('SELECT * FROM ' . $this->table);
        $this->db->execute();
        if($this->db->rowCount() > 0):
            $this->stmt = $this->db->getAllresult();
            return $this->stmt;
        endif;
        return [];
    }

}