<?php include_once "inc/header.php"; ?>
	<?php
		$url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
		$explode = explode("/", $url);

		if(file_exists("pages/".$explode[0].".php")){
			include_once "pages/".$explode[0].".php";
		}else{
			echo "<h4>ERRO 404</h4><p>Página não encontrada</p>";
		}
	?>

<?php include_once "inc/footer.php"; ?>