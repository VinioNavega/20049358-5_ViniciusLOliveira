<?php
	include('dados\dados.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="shortcut icon" href="favicon.png" />
	<meta charset="utf-8">
	

	<title><?=$empresa["nome"];?></title>
	

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<header class="main_header">
		<div class="main_header_content">
			<a href="#" class="logo"><img src="images\logo.png" height="100" alt="Arte&Vida" title="Arte&Vida">
			</a>			
		</div>		
	</header>
	<nav class="main_header_content_menu">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Quem Somos</a></li>
					<li><a href="#">Contato e Localização</a></li>					
				</ul>
			</nav>
	<main>		
		<section class="main_blog">
			<header class="main_blog_header">
				<h1>Linguagens a serem estudadas nesta disciplina</h1>
			</header>
			<article>
				<header>
					<h2><a href="#" class="category"><?=$conteudo[0]["title"];?><!--HTML-->
					</a></h2>
				</header>
				<a href="#">
                    <img src="html5-386614_640.jpg" alt="Lorem Ipsum is simply" title="Lorem Ipsum is simply">
                </a>
				<p><?php echo substr($conteudo[0]["description"],0, 150);?>...<!--Linguagem de Marcação - Em essência trata-se de um conjunto de regras, códigos e marcadores (ou tags) utilizados para definir principalmente para definir como o conteúdo da página será apresentado.--></p>
			</article>

			<article>
				<header>
					<h2><a href="#" class="category"><?=$conteudo[1]["title"];?><!--CSS--></a></h2>
				</header>
				<a href="#">
                    <img src="css-2189148_640.png" alt="Lorem Ipsum is simply" title="Lorem Ipsum is simply">
                </a>
				<p><?php echo substr($conteudo[1]["description"],0, 150);?>...<!--Cascading Style Sheets é um mecanismo para adicionar estilo a um documento web. O código CSS pode ser aplicado diretamente nas tags ou ficar contido dentro das tags < style >. Também é possível, em vez de colocar a formatação dentro do documento, criar um link para um arquivo CSS que contém os estilos. --></p>
			</article>
			<article>
				<header>
					<h2><a href="#" class="category"><?=$conteudo[2]["title"];?></a></h2>
					<a href="#">
                    <img src="php-2066704_1280.jpg" alt="Lorem Ipsum is simply" title="Lorem Ipsum is simply">
                </a>
					<p><?php echo substr($conteudo[2]["description"],0, 150);?>...<!--Linguagem de Programação - É uma linguagem interpretada e livre que atua do lado do servidor, tem seu melhor uso no desenvolvimento de aplicações web dinâmicas--></p>
				</header>
			</article>
		</section>	
	</main> 	
	<footer>
	<article class="main_optin">
            <div class="main_optin_content">
                <header>
                    <h1><p>VINICIUS LIBORIO DE OLIVEIRA - RA:20049358-5 - CURSO SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET</a></p></h1>                    					
                </header>                
            </div>
        </article>		
	</footer>
</body>
</html>