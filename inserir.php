<?php 
 include_once('connect.php');

 $titulo = $_POST['titulo'];
 $descricao = $_POST['descricao'];

 echo "enviado com sucesso!";

 $stmt = $connect->prepare ("INSERT INTO posts(titulo, descricao) VALUES(:titulo, :descricao)");
 $stmt->bindParam(":titulo", $titulo);
 $stmt->bindParam(":descricao", $descricao);
 $stmt->execute();


 ?>