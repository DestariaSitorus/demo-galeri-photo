<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Menggunakan Komponent</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</head>
<body>
    
    <center><h1>Belajar Komponent</h1></center>
    <center><h1>===============================================================================</h1></center>
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

   <!-- <h2>Jumlah Data Siswa <?php echo count ($listStudent)?></h2>-->
    



    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                   #
                </th>
                <th scope="col" class="px-6 py-3">
                    NAMA
                </th>
                <th scope="col" class="px-6 py-3">
                    KELAS
                </th>
                <th scope="col" class="px-6 py-3">
                    NILAI PBO
                </th>
                <th scope="col" class="px-6 py-3">
                    NILAI WEB
                </th>
                <th scope="col" class="px-6 py-3">
                    NILAI PKK
                </th>
                <th scope="col" class="px-6 py-3">
                    NILAI RATA-RATA
                </th>
                <th scope="col" class="px-6 py-3">
                    PREDIKAT
                </th>
            </tr>
        </thead>
        <tbody>
            <!-- melakukan pengecekan dan menampilkan data -->
             <?php

             if ( count($listStudent) > 0 ) {
                // melakukan looping / membongkar data
                foreach ($listStudent as $key => $siswa) {
                    $rata_rata = $siswa->hitungRata();
                    $grade = $siswa->calculateGrade();
                    $bulat = round($rata_rata);
                    ?>
                     <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   <?php echo $key + 1; ?>
                </th>
                <td class="px-6 py-4">
                    <?php echo $siswa->nama ?>
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
            </tr>
                    <?php
                }
             } else {
                echo "
                <div> data belum ada </div>
                ";
             }

            ?>

<!--
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
            </tr>
            -->
        </tbody>
    </table>
</div>

</body>
</html>