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

    private $dbh;
    private $stmt;

    public function __construct(){
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        }catch(PDOExeption $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt ->execute();
        return $this->stmt ->fetchALL(PDO::FETCH_ASSOC);

;    }
}
?>