<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Constructor</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</head>
<body>
    
    <center><h1>Chukupp Muaggggg</h1></center>
    <h1>===============================================================================</h1>
    <?php
        class Student{
            public $id, $nama, $nilai_pbo, $nilai_web, $nilai_pkk, $kelas;

            public function __construct($dataStudent = [])
            {
                $this->id        = $dataStudent ['id'] ?? null;// kata this : mereferensikan sebuah objek sekarang
                $this->nama      = $dataStudent ['nama'] ?? null;
                $this->nilai_pbo = $dataStudent ['nilai_pbo'] ?? null;
                $this->nilai_web = $dataStudent ['nilai_web'] ?? null;
                $this->nilai_pkk = $dataStudent ['nilai_pkk'] ?? null;
                $this->kelas     = $dataStudent ['kelas'] ?? null;
            }
        }
        $dataStudent = [
            [
                'id'  => 1,
                'nama' => 'Taee', 
                'nilai_pbo' => 69, 
                'nilai_web' => 80, 
                'nilai_pkk' => 85,
                'kelas' => '11-RPL'
            ],
            [
                'id'  => 2,
                'nama' => 'Owen', 
                'nilai_pbo' => 69, 
                'nilai_web' => 69, 
                'nilai_pkk' => 96,
                'kelas' => '11-RPL'
            ],
            [
                'id'  => 3,
                'nama' => 'Pipinn', 
                'nilai_pbo' => 86, 
                'nilai_web' => 50, 
                'nilai_pkk' => 69,
                'kelas' => '11-RPL'
            ],
            [
                'id'  => 4,
                'nama' => 'Fanya', 
                'nilai_pbo' => 0, 
                'nilai_web' => 35, 
                'nilai_pkk' => 0.69,
                'kelas' => '11-RPL'

            ],
            [
                'id'  => 5,
                'nama' => 'Iwrenn', 
                'nilai_pbo' => 25, 
                'nilai_web' => 75, 
                'nilai_pkk' => 69,
                'kelas' => '11-RPL'
            ],
            [
                'id'  => 6,
                'nama' => 'Marcel', 
                'nilai_pbo' => 90, 
                'nilai_web' => 80, 
                'nilai_pkk' => 85,
                'kelas' => '12-RPL'
            ],
            [
                'id'  => 7,
                'nama' => 'Bhensen', 
                'nilai_pbo' => 35, 
                'nilai_web' => 79, 
                'nilai_pkk' => 100,
                'kelas' => '12-RPL'
            ],
            [
                'id'  => 8,
                'nama' => 'Darrel', 
                'nilai_pbo' => 90, 
                'nilai_web' => 69, 
                'nilai_pkk' => 70,
                'kelas' => '12-RPL'
            ],
            [
                'id'  => 9,
                'nama' => 'Hillie', 
                'nilai_pbo' => 100, 
                'nilai_web' => 100, 
                'nilai_pkk' => 90,
                'kelas' => '12-RPL'
            ],
            [
                'id'  => 10,
                'nama' => 'Jhon', 
                'nilai_pbo' => 95, 
                'nilai_web' => 86, 
                'nilai_pkk' => 82,
                'kelas' => '12-RPL'
            ],
        ];

        // melakukan inisialisasi class object

        $student = new Student();//deklarasi class menjadi objek

        $listStudent = [];//untuk menampung value array yang dibuat

        foreach ($dataStudent as $student){//untuk memecah semua array multi-dimensi ke satu dimensi

            $dataStudent = new Student($student);//memasukkan semua value variable array yang terpecah ke dalam datastudent
            $listStudent [] = $dataStudent;//memasukkan semua value yang tersimpan dalam datastudent ke dalam liststudents

        }
       
    ?>

    <h2>Jumlah Data Siswa <?php echo count ($listStudent)?></h2>
    

    <?php

        $dataSiswaKelasXIIRpl = [];
        $dataSiswaKelasXIRpl = [];


        foreach ($listStudent as $student) {
            if ( $student->kelas == '12-RPL'){
                $dataSiswaKelasXIIRpl[] = $student;
            }else{
                $dataSiswaKelasXIRpl [] = $student;
            }
        
            $idStudent = $student->id;
            $rata = intval(round($student->nilai_pbo + $student->nilai_web + $student->nilai_pkk) / 3); 

            if ($rata > 90) {
                $grade = 'A';
            } elseif ($rata > 86) {
                $grade = 'B+';
            } elseif ($rata > 80) {
                $grade = 'B';
            } elseif ($rata > 76) {
                $grade = 'C+';
            } elseif ($rata > 70) {
                $grade = 'C';
            } elseif ($rata > 60) {
                $grade = 'D';
            } else {
                $grade = 'REMEDIAL';
            }
  
            ?>

            
            <p> ID        : <?php echo $student->id ?></p>
            <p> Nama      : <?php echo $student->nama ?></p>
            <p> Nilai PBO : <?php echo $student->nilai_pbo ?></p>
            <p> Nilai Web : <?php echo $student->nilai_web ?></p>
            <p> Nilai PKK : <?php echo $student->nilai_pkk ?></p>
            <p> Rata      : <?php echo $rata ?></p>
            <p> Grade     : <?php echo $grade ?></p>
            <p> Kelas     : <?php echo $student->kelas ?></p>
            <hr>
           
<?php
        }
?>
        <h2>Jumlah Siswa 12 RPL : <?php echo count ($dataSiswaKelasXIIRpl) ?></h2>
        <h2>Jumlah Siswa 11 RPL : <?php echo count ( $dataSiswaKelasXIRpl) ?></h2>  
</body>
</html>