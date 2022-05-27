<?php
require_once 'log/database.php';

$posts = $mysql->query("SELECT * FROM `post`");
$posts = mysqli_fetch_all($posts);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="post.css">
</head>
<body>
<div class="container mt-4">

    <h3><?=$_COOKIE['user'] ?></h3>
    <div class="out">
        <a href="log/exit.php" class="btn btn-dark mt-4" >Log out</a>
    </div>
    <div style="width: 80%">
        <table >
            <?php
                foreach ($posts as $post){
            ?>
            <tr>
                <td>
                    <ul>
                        <li><?=$post[1] ?>.</li>
                    </ul>
                </td>
                <td>
                    <a class="btn btn-outline-warning edit" href="edit.php?id = <?=$post[0] ?>">Edit</a>
                </td>
                <td>
                    <a class="btn btn-outline-danger edit" href="crud/delete.php?id = <?=$post[0] ?>">Delete</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>

    <a href="add.php" class="btn btn-info mt-4">Add</a>

</div>
</body>
</html>