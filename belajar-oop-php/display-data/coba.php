<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar constructor</title>
</head>

<body>
    <h1> Belajar constructor</h1>

    <?php
    class user
    {
        //properti global
        public $id, $name, $age, $addres;

        //melakukan konstruksi
        public function __construct($id = null, $name = null, $age = null, $addres = null)
        {
            $this->id = $id;
            $this->name = $name;
            $this->age = $age;
            $this->addres = $addres;
        }
    }

    class students
    {
        //deklarasi variable global
        public $id, $nama, $nilai_pbo, $nilai_web, $nilai_pkk, $kelas;

        public function __construct($datastudents = [])
        {
            //penyetelan 
            $this->id = $datastudents['id'] ?? null;
            $this->nama = $datastudents['nama'] ?? null;
            $this->nilai_pbo = $datastudents['nilai_pbo'] ?? null;
            $this->nilai_web = $datastudents['nilai_web'] ?? null;
            $this->nilai_pkk = $datastudents['nilai_pkk'] ?? null;
            $this->kelas = $datastudents['kelas'] ?? null;
        }

        public function calculateAverage()
        {
            return ($this->nilai_pbo + $this->nilai_web + $this->nilai_pkk) / 3;
        }

        public function calculateGrade()
        {
            $average = $this->calculateAverage();
            if ($average >= 90 && $average <= 100) {
                return 'A';
            } elseif ($average >= 86 && $average < 90) {
                return 'B+';
            } elseif ($average >= 81 && $average < 86) {
                return 'B';
            } elseif ($average >= 75 && $average < 81) {
                return 'C';
            } elseif ($average >= 70 && $average < 75) {
                return 'D';
            } else {
                return 'Remedial';
            }
        }
    }


    $datastudents = [
        [
            'id' => 1,
            'nama' => 'Asep',
            'nilai_pbo' => 69,
            'nilai_web' => 80,
            'nilai_pkk' => 85,
            'kelas' => "11-RPL"
        ],
        [
            'id' => 2,
            'nama' => 'Budiono',
            'nilai_pbo' => 69,
            'nilai_web' => 69,
            'nilai_pkk' => 96,
            'kelas' => "11-RPL"
        ],
        [
            'id' => 3,
            'nama' => 'Kai',
            'nilai_pbo' => 86,
            'nilai_web' => 50,
            'nilai_pkk' => 69,
            'kelas' => "11-RPL"
        ],
        [
            'id' => 4,
            'nama' => 'Cenat',
            'nilai_pbo' => 0,
            'nilai_web' => 35,
            'nilai_pkk' => 0.69,
            'kelas' => "11-RPL"
        ],
        [
            'id' => 5,
            'nama' => 'Dwi',
            'nilai_pbo' => 25,
            'nilai_web' => 75,
            'nilai_pkk' => 69,
            'kelas' => "11-RPL"
        ],
        [
            'id' => 6,
            'nama' => 'Kiana',
            'nilai_pbo' => 90,
            'nilai_web' => 80,
            'nilai_pkk' => 85,
            'kelas' => "12-RPL"
        ],
        [
            'id' => 7,
            'nama' => 'Ambatukam',
            'nilai_pbo' => 35,
            'nilai_web' => 79,
            'nilai_pkk' => 100,
            'kelas' => "12-RPL"
        ],
        [
            'id' => 8,
            'nama' => 'Gedagedi',
            'nilai_pbo' => 90,
            'nilai_web' => 69,
            'nilai_pkk' => 70,
            'kelas' => "12-RPL"
        ],
        [
            'id' => 9,
            'nama' => 'Mas Faldi',
            'nilai_pbo' => 100,
            'nilai_web' => 100,
            'nilai_pkk' => 90,
            'kelas' => "12-RPL"
        ],
        [
            'id' => 10,
            'nama' => 'Ambatron',
            'nilai_pbo' => 95,
            'nilai_web' => 86,
            'nilai_pkk' => 82,
            'kelas' => "12-RPL"
        ]
    ];

    $students = new students();//deklarasi class menjadi objek
    $liststudents = [];//membuat wadah kosong untuk menampung value array yang dibuat
    
    foreach ($datastudents as $students) {//untuk memecah semua array multi-dimensi ke satu dimensi
        $datastudents = new students($students);//memasukkan semua value variable array yang terpecah ke dalam $datastudents
        $liststudents[] = $datastudents;//memasukkan semua value yang tersimpan dalam $datastudents ke dalam $liststudents
    
    }

    $dataSiswaXII = [];
    foreach ($liststudents as $students) {
        if ($students->kelas == "12-RPL") {
            $dataSiswaXII[] = $students;
        }
    }

    $dataSiswaXI = [];
    foreach ($liststudents as $students) {
        if ($students->kelas == "11-RPL") {
            $dataSiswaXI[] = $students;
        }
    }

    ?>

    <h2> Jumlah total semua data siswa : <?php echo count($liststudents) ?> </h2>
    <h2> Jumlah total data siswa kelas siswa 12 : <?php echo count($dataSiswaXII)?> </h2>
    <h2> Jumlah total data siswa kelas siswa 11 : <?php echo count($dataSiswaXI)?> </h2>

    <?php
    foreach ($liststudents as $students) {

        //memanggil function serta mendeklarasikan function...
        $rata_rata = $students->calculateAverage();
        $grade = $students->calculateGrade();

        echo "
            <hr>
            <p> ID : $students->id </p>
        
            <p> NAMA : $students->nama </p>
          
            <p> NILAI_PBO : $students->nilai_pbo </p>
          
            <p> NILAI_WEB : $students->nilai_web </p>
         
            <p> NILAI_PKK : $students->nilai_pkk </p>

            <p> KELAS : $students->kelas </p>

            <p> RATA-RATA : $rata_rata</p>

            <p> GRADE : $grade</p>

            ";
    }
    ?>

</body>

</html>