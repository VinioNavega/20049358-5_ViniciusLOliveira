<?php
	$empresa = array(
		'nome' =>'Arte&Vida Doces',
		'logo'=>'logo.png',
		'contato' => 'Vinicius L. Oliveira',
		'email'=> 'viniciusnavegaoliveira@gmail.com',
		'cep' => '88370-049',
		'quemsomos'=>'Somos pessoas apaixonadas por doces, e estamos sempre buscando sabores e combinações para surpreender você! Trabalhamos com a confecção de trufas recheadas, ovos personalizados, doces para festas, bombons recheados entre outros. Buscamos sempre atender da melhor forma possível e para isso usamos em nossos produtos ingredientes de primeira qualidade, e frutas frescas e da época, por isso nossos sabores podem variar de acordo com a estação do ano, isso é o máximo!!! Estamos felizes com a sua visita e esperamos que tenha gostado dos nossos produtos.'
	);

	return $produtos = array(
		 array('id'=>1, 
		           'title'=> 'Ovos de Colher', 
				   'description' => "Ovos de cololate com um delicioso recheio para se comer ''de colher'' nos sabores: Maracujá, Avelã, Brigadeiro, Dois Amores, Paçoca!! Para outras informações de sabores entre em contato conosco!",				   
				   'imagem'=>'images\OvosColher.png'),
		array('id'=>2, 
		           'title'=> 'Trufas Recheadas', 
				   'description' =>  "Trufas recheadas dos mais diversos sabores, feitos com frutas naturais de época, e ingredientes da melhor qualidade.",				   
				   'imagem'=>'images/trufas.png'),
		array('id'=>3, 
		           'title'=> 'Ovos Personalizados', 
				   'description' => "Personalize o seu presente, você pode nos passar um tema ou idéia que nós personalizamos o seu ovo de colher da forma que lhe for mais agradável",				   
				   'imagem'=>'images/personalizado.png'),
		array('id'=>4, 
		           'title'=> 'Bombom Recheado', 
				   'description' => "Bombons recheados com creme ganachi de vários sabores de frutas e afins.",				   
				   'imagem'=>'images/BomBom.png'),				   
		array('id'=>5, 
		           'title'=> 'Encomendas para Festas', 
				   'description' => "Faça sua encomenda de doces para festas.",
				   'imagem'=>'images/Encomendas.png')
	);