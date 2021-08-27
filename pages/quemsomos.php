<?php
	include('dados\dados.php');
	include('function\functions.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>	
	<meta charset="UTF-8">
    <meta name="description" content="Arte&Vida Doces">
    <meta name="keywords" content="Doces, Ovos de Colher, Trufas, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	

	<title><?=$empresa["nome"];?></title>
	

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    
	
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">		
</head>
<body>
	<header class="main_header"></header>	
	<main>		
		<section class="main_blog">
			<header class="main_blog_header">			    
				<h1 class="hint_prod">Quem Somos</h1>
			</header>
			<h2 class="quemsomostexto"><?=$empresa["quemsomos"];?></h2>	
			<?php				
				HtmlDinamico("Q");
			?>
			</section>						
	</main> 	 			
</body>
</html>