<?php 
 class mahasiswa{
     //property

     var $nim; 
     var $nama;
     var $jurusan;
     var $alamat;
     var $data=array();
    //method

     function simpan(){
        $mahasiswa = [
            'nim' => 'H12100021',
            'nama' => 'Deni Caur',
            'jurusan' => 'FMIPA'
          ];
          
        
        print json_encode($mahasiswa);
     }
     function update(){

    }
    function delete(){

    }
    function tampil(){

    } 

 }
//proses instasiasi dalam pembuatan objek dari class mahasiswa
 $deni= new mahasiswa();

 echo $deni->simpan();
?>