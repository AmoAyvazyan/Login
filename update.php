<?php
require_once '../log/database.php';
print_r($_POST);

$id = $_POST['id'];
$description = $_POST['description'];
$mysql->query("UPDATE `post` SET `description` = '$description' WHERE `post`.`id` = '$id'");

header('Location: ../post.php');