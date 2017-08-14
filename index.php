<?php require_once('bancoInteracao.php'); ?>
<?php 

	$bancoDeDados = new Banco("localhost", "root", "");
	$bancoDeDados->connect();

?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" language="javascript" src="js/script.js" ></script>
	<script type="text/javascript" language="javascript" src="js/jquery.js" ></script>	
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center">Microblog</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<form  method="post">
						<textarea id="content" class="form-control" placeholder="O que está pensando?"></textarea><br>
						<button id="postar" class="btn btn-default" onclick="show(getElementById('content').value);">Publicar</button>
					</form>
				</div>		
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="show" class="box">
					<?php 
						$bancoInteracao = new bancoInteracao($bancoDeDados);
						$posts = $bancoInteracao->getPosts();
						foreach( $posts as $row){
							echo "<div>" . $row['post'] . "</div>" ;
						}
					?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>