<?php
	require_once "config.php";
	if(isset($_SESSION['id_user'])){
		include_once "classes/BD.class.php";
		$dataquery = @BD::conn()->prepare("SELECT * FROM users WHERE id = ?");
		$dataquery->execute([$_SESSION['id_user']]);
		$logado = $dataquery->fetchObject();

		if(isset($_GET['sair'])){
			unset($_SESSION['id_user']);
			session_destroy();
			echo "<script>location.href='".BASE."';</script>";
		}
	}
?>
<html lang="pt-BR">
	<head>	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content=""/>
		<meta name="author" content="">
		<title>Papum Transportes</title>

		<link href="<?php echo BASE; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

		<link href="<?php echo BASE; ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>

		<link href="<?php echo BASE; ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    	<link href="<?php echo BASE; ?>vendor/font-awesome/fonts/montserrat.css" rel="stylesheet" type="text/css">
    	<link href="<?php echo BASE; ?>vendor/font-awesome/fonts/kaushan-script.css" rel="stylesheet" type="text/css">
    	<link href="<?php echo BASE; ?>vendor/font-awesome/fonts/roboto-slab.css" rel="stylesheet" type="text/css">

    	<link href="<?php echo BASE; ?>css/agency.min.css" rel="stylesheet">
    	<link href="<?php echo BASE; ?>css/jquery.dataTables.min.css" rel="stylesheet">
	</head>
	<body id="page-top" style="background:#f1f1f1;">
		
		