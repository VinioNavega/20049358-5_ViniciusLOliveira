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
    <link rel="stylesheet" href="css/bootstrap.css">		
</head>
<body>
    <?php
        if (isset($_GET["id"]) && !empty($_GET["id"])) {
            $id = $_GET["id"];
        } else {
            return 0;
        }
        foreach ($produtos as $value) {
            if ($value["id"] == $id) {
    ?>
	<header class="main_header"></header>	
	<main>		
		<section class="main_blog">
			<header class="main_blog_header">			    				
                <h1 class="hint_prod"><?=$value["title"];?></a></h1>
			</header>			
			<div>				            
                <h2 class="quemsomostexto"><?=$value["description"];?></h2>				   				   
				<div>
                	<img class="carrosel" src=<?=$value["imagem"];?> alt=<?=$value["title"];?> title=<?=$value["title"];?>>                				
				</div>
                <h2><a href="index.php?pagina=pages/home.php">VOLTAR</a></h2>
            </div>            
		<section>                
	</main>     
    <?php
	} else {
		//
	}
    }
?>	 			
</body>
</html>