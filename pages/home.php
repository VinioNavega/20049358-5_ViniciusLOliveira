<?php
	include('dados\dados.php');
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
</head>
<body>
	<header class="main_home"></header>	
	<main>		
		<section class="main_blog">
			<header class="main_blog_header">
				<h1>Conheça nossos produtos!!</h1>
				<h2>Todos os nossos doces são feitos com muito amor e carinho além de ingredientes de primeira qualidade.<b> Experimente!</h2>
			</header>
			<article>
				<header>
					<h2>Ovos de colher</h2>
				</header>				
                <img src="images\OvosColher2.png" alt="Ovos de colher" title="Ovos de colher">                				
			</article>
			<article>
				<header>
					<h2>Bom bom recheado</h2>
				</header>				
                <img src="images\BomBom.png" alt="Bom bom recheado" title="Bom bom recheado">                				
			</article>			
			<article>
				<header>
					<h2>Ovos personalizados</h2>
				</header>				
                <img src="images\personalizado.png" alt="Ovos personalizados" title="Ovos personalizados">
			</article>
			<article>
				<header>
					<h2>Trufas recheadas</h2>
				</header>				
                <img src="images\trufas.png" alt="Trufas recheadas" title="Trufas recheadas">
			</article>
			<article>
				<header>
					<h2>Encomendas</h2>
				</header>				
                <img src="images\Encomendas.png" alt="Encomendas" title="Encomendas">
			</article>
		</section>	
	</main> 	 		
</body>
</html>