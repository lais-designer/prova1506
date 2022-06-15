<?php 
include_once('connect.php');
$id=3;
$titulo="novo titulo";
$descricao="nova descricao";

$stmt=$connect->prepare("UPDATE posts SET titulo = :titulo, descricao = :descricao WHERE id=:id");
$stmt ->bindParam(":id", $id);
$stmt ->bindParam(":titulo", $titulo);
$stmt ->bindParam(":descricao", $descricao);
$stmt->execute();
 ?>