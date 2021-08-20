<?php
	include('dados\dados.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="shortcut icon" href="favicon.png" />
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
                <img src="images\OvosColher2.png" alt="Ovos de colher" title="Ovos de colher">                				
			</article>			
		</section>	
	</main> 	 		
</body>
</html>