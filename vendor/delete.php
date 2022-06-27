<?php
require_once '../config/connect.php';
$id = $_GET['id'];
mysqli_query($mysqli, "DELETE FROM `goods` WHERE `goods`.`id` = '$id'");
header('Location: ../index.php');
