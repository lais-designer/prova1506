<?php 
include_once('connect.php');

$id= 3;
 $stmt = $connect->prepare ("DELETE FROM posts WHERE id=:id");
 $stmt->bindParam(":titulo", $titulo);
 $stmt->execute();


 ?>