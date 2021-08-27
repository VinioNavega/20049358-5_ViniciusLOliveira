<?php
	
    function HtmlDinamico($tipo){
        $i=0;        
        include('dados\dados.php');    
        foreach ((array)$produtos as $value) {
            switch($tipo){
                case 'I':
                    if ($i==0){
                        echo'<li data-target="#carousel-example-generic" data-slide-to="'.$i.'" class="active"></li>';
                        }else{
                            echo'<li data-target="#carousel-example-generic" data-slide-to="'.$i.'"></li>';
                        }
                        $i++;
                      break;
                case 'S':
                        if ($i==0){
                            echo'<div class="item active">';                
                        }else{
                            echo'<div class="item">';                
                        }
                        echo'<a href="index.php?pagina=pages/produto.php&id='.$value["id"].'" ><img class="carrosel" src="'.$value["imagem"].'" alt="'.$value["title"].'"></a>';
                        echo'  <div class="carousel-caption">';
                        echo'    <p class="hint_prod">'.$value["title"].'</p>';
                        echo'  </div>';
                        echo'</div>';
        
                        $i++;
                      break;
                case 'Q':
                        echo'<article>';
                        echo'	<header>';
                        echo'		<h2>'.$value["title"].'</h2>';
                        echo'	</header>';
                        echo'	<div>';
                        echo'    	<img src="'.$value["imagem"].'" alt="'.$value["title"].'" title="'.$value["title"].'">';
                        echo'	</div>';
                        echo'</article>';
                      break;                
             }
            
        }
    }
