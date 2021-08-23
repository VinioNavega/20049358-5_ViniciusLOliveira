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
	<header class="main_header">		
		<div class="main_header_content">
			<a href="index.php?pagina=pages/quemsomos.php" class="logo"><img src="images\logo.png" height="100" alt="Arte&Vida" title="Arte&Vida">
			</a>			
		</div>						
	</header>	
	<nav class="main_header_content_menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php?pagina=pages/quemsomos.php">Quem Somos</a></li>
			<li><a href="index.php?pagina=pages/contato.php">Contato e Localização</a></li>					
		</ul>
	</nav>
	<main>
		<?php
			if(isset($_GET["pagina"]) && !empty($_GET["pagina"])){
				$pagina =$_GET["pagina"];
				include($pagina);
			}else{
				include("pages/home.php");
			}
		?>
	</main> 	
	<footer>
	<article class="main_optin">
            <div class="main_optin_content">
                <header>
                    <h1><p>VINICIUS LIBORIO DE OLIVEIRA - RA:20049358-5 - CURSO SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET</p></h1>                    					
                </header>                
            </div>
        </article>		
	</footer>
</body>
</html>