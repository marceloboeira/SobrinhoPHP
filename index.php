<?php
/*
 * Carrega Configurações, Classes e Funções - kidstuff
 */
include('includes/configura.php');
include('includes/bancodedados.php');
include('includes/funcoes.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $config['titulo']; ?> - Feito com <?php echo $config['projeto'] ?></title>
        <meta name="Description" content="<?php echo $config['descricao']; ?>">
        <?php
            carrega_estilos('bootstrap.min.css', 'font-awesome.min.css', 'animate.css');
            carrega_scripts('bootstrap.min.js', 'jquery.min.js');
        ?>
    </head>
    <body>
        <?php carrega_pagina(); ?>
    </body>
</html>