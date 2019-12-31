<?php 
$pagina = isset( $_GET['a'] ) ? $_GET['a'] : '';
if($pagina=='')
	include ('pages/home.php');
elseif(file_exists("pages/".$pagina.'.php')){
	include ("pages/".$pagina.'.php');
}		
elseif(file_exists("pages/".$pagina.'.php')){
	include ("pages/".$pagina.'.php');
}
else 
	include ('pages/404.php');
?>