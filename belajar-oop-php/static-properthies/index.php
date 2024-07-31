<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Statik Properthies</title>
    <!-- static : nilai tidak berubah/tetap -->

</head>
<body>
    <?php
        class ParentClass{
            //deklarasi properti global
            public static $judul = " hy, saya properti static dari ". __CLASS__;
            // static sebagai keyword
            public static function display(){
                echo self::$judul;
                // self artinya keyword untuk mengakses properti atau function kepunyaan sendiri
            }
        }

        class ChildClass extends ParentClass{
        
           public static $judul = " haloo, saya adalah manusia dari ". __CLASS__; 

           public static function display(){

            echo parent::$judul;
            // parent artinya mengakses properti/function kepunyaan ParentClass ketika dilakukan pewarisan oleh ChildClass
           }

           public static function displayFromChild(){
            echo self::display();
           }
        }
        
        $obj = new ParentClass; 
        $obj2 = new ChildClass; 

    ?>
    <h1><?php echo ParentClass::$judul ?></h1>
    <h1><?php echo $obj->display() ?></h1>
    <h1><?php echo $obj2->display() ?></h1>
    <h1> Judul : <?php echo  ChildClass::displayFromChild(); ?> </h1>
    
</body>
</html>