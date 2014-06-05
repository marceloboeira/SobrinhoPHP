<?php
/*
 * ---------------------
 * CONFIGURAÇÕES DO SITE
 * ---------------------
 * var $config type array()
 * 
 */
$config = array(
	'projeto'	=>  'SobrinhoPHP',			//Não Editar
    'titulo'    =>  'Site de WEB2',         //Define nome do título do site
    'descricao' =>  'Descrição do site',    //Define descrição do site

    'banco' => array ('host'	=>'localhost', //Define servicor do banco de dados
    				  'banco'	=> 'meubanco', //Define nome do banco de dados
    				  'usuario'	=> 'root',	   //Define usuario do banco de dados
    				  'senha'	=> 'senha'	   //Define a senha do banco de dados
					 )
);

/*
 * ---------------------
 * VÁRIAVEIS GLOBAIS
 * ---------------------
 * Variáveis utilizadas dentro de classes e funções
 * Jovem - Se não sabe não mexe 
 */
define('BASEPATH',FALSE);
define('CSS_PATH','arquivos/css/');
define('JS_PATH','arquivos/js/');
define('IMG_PATH','arquivos/img/');
define('FONTS_PATH','arquivos/FONTS/');
define('PAGE_PATH','paginas/');
define('PAGE_DEFAULT','paginas/index.php');