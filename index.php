<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
	<h1>CADASTRO</h1><br>
	<form action="inserir.php" method="post">
		<div class="mb-3">
  	<label for="exampleFormControlInput1" class="form-label">Titúlo</label>
  	<input name ="titulo"type="text" class="form-control" id="exampleFormControlInput1" placeholder="digite o titulo">
	</div><br>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
  <textarea name="descricao" class="form-control" id="exampleFormControlTextarea1" rows="3"  placeholder="digite a Descrição"></textarea><br>
</div>
<div><input type="submit" name="Enviar"></div>

		</form>
</body>
</html>