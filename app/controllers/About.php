<?php 
class About extends controller{
    public function index($nama= 'Hafizh', $pekerjaan= 'Mahasiswa',$umur = 20)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this -> view('templates/header', $data);
        $this -> view('about/index',$data);
        $this -> view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'pages';
        $this -> view('templates/header',$data);
        $this -> view('about/page', $data);
        $this -> view('templates/footer');
    }
}
?>