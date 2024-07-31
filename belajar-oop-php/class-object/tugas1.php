<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertama</title>
</head>
<body>
    <h2>Tugas Pertama Object</h2>
    <?php
        class Post{
            public $id;
            public $title;
            public $user_id;
            public $description;
        }

        $post = new Post();

        $postId = $post ->id = 12;
        $postTitle = $post ->title = "Malas Coding";
        $postUserId = $post ->user_id = 123456;
        $postDescription = $post ->description = "Akan Aku hadapin coding nih walaupun ngantukan";

        $postId1 = $post ->id = 3;
        $postTitle1 = $post ->title = "Apa Aja Lah...";
        $postUserId1 = $post ->user_id = 123456;
        $postDescription1 = $post ->description = "Gwehh Sudah Muaggg Dengan Semuanya";
?>
    <h2>==== Data ====</h2>
    <p> Id : <?php echo $postId  ?></p>
    <p> Title : <?php echo $postTitle ?></p>
    <p> UserID : <?php echo $postUserId ?></p>
    <p> Description : <?php echo $postDescription ?></p>
    <hr>
    <p> Id : <?php echo $postId  ?></p>
    <p> Title : <?php echo $postTitle ?></p>
    <p> UserID : <?php echo $postUserId ?></p>
    <p> Description : <?php echo $postDescription ?></p>

</body>
</html>