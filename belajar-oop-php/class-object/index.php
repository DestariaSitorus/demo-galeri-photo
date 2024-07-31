<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-Object</title>
</head>
<body>
    <center><h1>Belajar Class Object</h1></center>

    <?php
        // pergertian class = blueprint(cetakan)
        class User {
            // deklarasi properti global
            public $id;
            public $user_name;
            public $email;
        }

        // melakan instansiasi atau inisialisasi
        // melakukan tranform(merubah dari sebuah class ke sebuah object)
        $user = new User();
        
        // melakukan pemberian nilai

        $userId1 = $user ->user_name = "DestaPane";
        $userName1 = $user ->id = 1;
        $userEmail1 = $user ->email = "Destaria@gmail.com";

        $userId2 = $user ->user_name = "Taehyung";
        $userName2 = $user ->id = 2;
        $userEmail2 = $user ->email = "Taehyung@gmail.com";
        
    ?>

    <h2>==== Data User ====</h2>
    <p> Id : <?php echo $userName1 ?></p>
    <p> Nama : <?php echo $userId1 ?></p>
    <p> Email : <?php echo $userEmail1 ?></p>
    <hr>
    <p> Id : <?php echo $userName2 ?></p>
    <p> Nama : <?php echo $userId2 ?></p>
    <p> Email : <?php echo $userEmail2 ?></p>
    
    
</body>
</html>