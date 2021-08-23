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
	<header class="main_header"></header>	
	<main>		
		<section class="main_blog">
			<header class="main_blog_header">			    
				<h1>Quem Somos</h1>
			</header>
			<h2 class="quemsomostexto"><?=$empresa["quemsomos"];?></h2>	
			<article>
				<header>
					<h2>Ovos de colher</h2>
				</header>				
				<div>
                	<img src="images\OvosColher2.png" alt="Ovos de colher" title="Ovos de colher">                				
				</div>
			</article>
			<article>
				<header>
					<h2>Bom bom recheado</h2>
				</header>
				<div>
                	<img src="images\BomBom.png" alt="Bom bom recheado" title="Bom bom recheado">                				
				</div>
			</article>			
			<article>
				<header>
					<h2>Ovos personalizados</h2>
				</header>				
				<div>
                	<img src="images\personalizado.png" alt="Ovos personalizados" title="Ovos personalizados">
				</div>
			</article>
			<article>
				<header>
					<h2>Trufas recheadas</h2>
				</header>				
				<div>
                	<img src="images\trufas.png" alt="Trufas recheadas" title="Trufas recheadas">
				</div>
			</article>
			<article>
				<header>
					<h2>Encomendas</h2>
				</header>				
				<div>
       	         <img src="images\Encomendas.png" alt="Encomendas" title="Encomendas">
				</div>
			</article>
			</section>						
	</main> 	 			
</body>
</html>