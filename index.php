<?php
include './conn.php';

$sql='INSERT INTO `user`(`email`,`password`) VALUES (?,?)';
$execute=$pdo->prepare($sql);
$execute->execute(array('111admin@eemail.commmmmdd','1234md'));
$pdo=null;

?>
