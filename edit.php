<?php
require_once 'log/database.php';

$post_id = $_GET['id_'];
$result = mysqli_query($mysql, "SELECT * FROM `post`
                  WHERE `id` = '$post_id'");
$edit = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="container mt-4" >
        <h4><?=$_COOKIE['user'] ?></h4>
        <form class="form-floating " style="width: 60%"  method="post" action="crud/update.php">
            <input type="hidden" name="id" value="<?= $post_id ?>">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                      name="description" typeof="text" style="height: 200px"> <?= $edit['description'] ?> </textarea>
            <label for="floatingTextarea2">Write your post</label>
            <input class="btn btn-outline-warning mt-4" type="submit" value=" Edit ">
        </form>
        <a href="post.php" class="btn btn-outline-dark mt-4" >Back</a>
    </div>
</body>
</html>

