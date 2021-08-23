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
			    <img src="images\logo.png" height="100" alt="Arte&Vida" title="Arte&Vida">
				<h1 class="h1-quemsomos">Quem Somos</h1>
			</header>
			<article>
				<header>
					<h2>Ovos de colher</h2>
				</header>				
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.991486327761!2d-48.64740098434363!3d-26.903765299312468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d8cc043d4c174b%3A0x564c51f89d3aa0fb!2sR.%20Joaquim%20Rodrigues%2C%2085%20-%20S%C3%A3o%20Pedro%2C%20Navegantes%20-%20SC%2C%2088370-049!5e0!3m2!1spt-BR!2sbr!4v1629683122157!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>           				
			</article>			
		</section>	
	</main> 	 		
</body>
</html>