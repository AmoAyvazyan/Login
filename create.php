<?php
require_once '../log/database.php';

$description = $_POST['description'];

$mysql->query("INSERT INTO `post`(`description`)
VALUES ('$description')");

header('Location: ../post.php ');

