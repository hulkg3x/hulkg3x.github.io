<?php 
require_once('configs/config_site.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="Joel Andrade">
	<meta name="description"
	content="Chamito Ue4 Tutoriais para Unreal Engine 4, Curso de Criando jogo em terceira pessoa do ZERO!">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Inria+Serif|Playfair+Display&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">

	<title><?php echo $title_site; ?></title>
</head>
<body>
	<input type="checkbox" id="bt_menu">
	<label for="bt_menu"><i class="fa fa-bars"></i></label>
	<nav class="menu" id="menutopo">
		<ul>
			<li><a href="?a=home"><i class="fa fa-home"></i> Inicio</a></li>
			<li>
				<a href="#">Cursos <i class="fa fa-angle-down"></i></a>
				<ul>
					<li><a href="?a=tps" title="ThirdPerson Player do Zero">UE4: TPS</a></li>
				</ul>
			</li>
			<li>
				<a href="?a=tutoriais">Tutoriais <i class="fa fa-angle-down"></i></a>
				<ul>
					<li><a href="#">Unreal Engine 4</a></li>
					<li><a href="#">Outros</a></li>
				</ul>
			</li>
			<li><a href="?a=downloads">Downloads</a></li>
			<li><a href="?a=contato">Contato</a></li>
		</ul>

	</nav>
	<div id="content">
		<?php require('configs/pages.php') ?>
		<?php require('pages/rodape.php'); ?>
	</div>
</body>

</html>