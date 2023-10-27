<?php 

class Mahasiswa_model{
    // private $mhs = [
    //     [
    //         "nama" => "Hafizh Faiz Fadhlurrahman",
    //         "nrp" => "213040083",
    //         "email" => "hafizh.213040083@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Dzikra Maula Fidina",
    //         "nrp" => "213040082",
    //         "email" => "dzikra.213040082@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Mesin"
    //         ]
    // ];
    private $table = 'mahasiswa';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllMahasiswa(){
        // $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        // $this->stmt ->execute();
        // return $this->stmt ->fetchALL(PDO::FETCH_ASSOC);
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }
    public function getMahasiswaById($id){
        $this->db->query('SELECT * FROM mahasiswa WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    
}
?>