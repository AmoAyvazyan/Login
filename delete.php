<?php
require_once '../log/database.php';

print_r($_GET);

$id = $_GET['id_'];
$mysql->query("DELETE FROM post WHERE `post`.`id` ='$id'");

header('Location: ../post.php');