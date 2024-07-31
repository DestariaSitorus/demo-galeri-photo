<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class User{

// parameter : acuan atau nilai tolak ukur
// argumen : nilai yang diisi sebagai acuan

// properti global :
public $id;
public $nama;
public $age;
public $address;

// melakukan konstruksi berdasarkan kepunyaan kita

public function __construct($id, $nama, $age, $address)
{
    $this->id = $id;
    $this->nama = $nama;
    $this->age = $age;
    $this->address = $address;
}

} 
$user = new User(2, "Hyung", 18, "Daegu");
$user2 = new User(2, "Hyung", 18, "Daegu");
?>

 <p> Id : <?php echo $user->id?><p>
    <p> Nama : <?php echo $user->nama?><p>
    <p> Agee : <?php echo $user->age?><p>
    <p> Address : <?php echo $user->address?><p>
    <hr>
    <p> Id : <?php echo $user2->id?><p>
    <p> Nama : <?php echo $user2->nama?><p>
    <p> Agee : <?php echo $user2->age?><p>
    <p> Address : <?php echo $user2->address?><p>
    
</body>
</html>