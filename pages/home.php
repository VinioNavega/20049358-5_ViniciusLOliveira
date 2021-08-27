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
<main>		
		<section class="main_contato">       				
			<header class="contato_header">			    
				<h1 class="hint_prod">Conheça os nossos produtos</h1>								
			</header>
      <div class="espaco-topo">

	      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <?php              
              HtmlDinamico("I");
            ?>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">      
            <?php              
              HtmlDinamico("S");
            ?>
          </div>          
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div><!-- carousel slide -->

      </div><!-- espaco_topo -->      
		</section>	
	</main> 	 		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>        
</body>
</html>