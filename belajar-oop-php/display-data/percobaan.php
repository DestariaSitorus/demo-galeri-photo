<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Constructor</title>
</head>
<body>
    
    <center><h1>Chukupp Muaggggg</h1></center>
    <h1>===============================================================================</h1>
    <?php
        class Student{
            public $id, $nama, $nilai_pbo, $nilai_web, $nilai_pkk, $kelas;

            public function __construct($dataStudent = [])
            {
                $this->id        = $dataStudent ['id'] ?? null;
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

        $student = new Student();

        $listStudent = [];

        foreach ($dataStudent as $student){
            $dataStudent = new Student($student);
            $listStudent [] = $dataStudent;
        }
       
    ?>

    <h2>Jumlah Data Siswa <?php echo count ($listStudent)?></h2>
    

    <?php
        $dataSiswaKelasXIIRpl = [];
        foreach ($listStudent as $studentS) {
            if ( $studentS->kelas == '12-RPL'){
                $dataSiswaKelasXIIRpl[] = $studentS;
            }
        
            $idStudent = $studentS->id;
            $rata = intval(round($studentS->nilai_pbo + $studentS->nilai_web + $studentS->nilai_pkk) / 3); 


            echo "
            <p> ID        : $studentS->id</p>
            <p> Nama      : $studentS->nama</p>
            <p> Nilai PBO : $studentS->nilai_pbo</p>
            <p> Nilai Web : $studentS->nilai_web</p>
            <p> Nilai PKK : $studentS->nilai_pkk</p>
            <p> Rata : $rata</p>
            <p> Kelas     : $studentS->kelas</p>
            <hr>
            ";

            $dataSiswaKelasXIRpl = [];
            foreach ($listStudent as $student) {
                if ( $student->kelas == '11-RPL'){
                    $dataSiswaKelasXIRpl[] = $student;
                }
            }
        }

        ?>
        

        <h2>Jumlah Siswa 12 RPL = <?php echo count ($dataSiswaKelasXIIRpl) ?></h2>
        <h2>Jumlah Siswa 11 RPL = <?php echo count ($dataSiswaKelasXIRpl) ?></h2>  
</body>
</html>