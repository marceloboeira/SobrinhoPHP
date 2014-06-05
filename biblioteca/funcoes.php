<?php

function carrega_scripts(){
    if (func_num_args() > 0) {
        $args = func_get_args();
        $str = "<!-- SCRIPTS -->\n";
        foreach ($args as $arg) {
            if (file_exists(JS_PATH.$arg)) {
                $str .= "<script type='text/javascript' src='" . JS_PATH . $arg . "'></script>\n";
            } else {
                $str .= "<!-- O arquivo " . $arg . " não foi encontrado -->\n";
            }
        }
        echo $str . "<!-- SCRIPTS -->\n";
    } else {
        echo "<!-- NENHUM SCRIPT -->\n";
    }
}

function carrega_estilos(){
    if (func_num_args() > 0) {
        $args = func_get_args();
        $str = "<!-- ESTILOS -->\n";
        foreach ($args as $arg) {
            if (file_exists(CSS_PATH . $arg)) {
                $str .= "<link href='" . CSS_PATH . $arg . "' rel='stylesheet' type='text/css'>\n";
            } else {
                $str .= "<!-- O arquivo " . $arg . " não foi encontrado -->\n";
            }
        }
        echo $str . "<!-- ESTILOS -->\n";
    } else {
        echo "<!-- NENHUM ESTILO -->\n";
    }
}
function carrega_pagina(){
    if(isset($_GET)){
        $_page = '';
        foreach(array_reverse($_GET) as $page => $ignore){
            $_page = $page;
        }
        if(isset($_page)){
            if(file_exists(PAGE_PATH.$_page.'.php')){
                include(PAGE_PATH.$_page.'.php');
            }else{
                include(PAGE_DEFAULT);
            }
        }else{
            include(PAGE_DEFAULT);
        }
       
    }else{
        include(PAGE_DEFAULT);
    }
}

function cria_galeria(){
    $hash = md5(time());
    if (func_num_args() > 0) {
        $args = func_get_args();
        $str = "<!-- IMAGENS --><style>.carousel .item {width: 100%;max-height: 600px;}.carousel .item img {width: 100%;}.carousel .carousel-control {background: none;border: none;top: 50%;}@media (max-width: 767px) {.block {margin-left: -20px;margin-right: -20px;}}</style>\n";
        $str .= "<section class='block'>
                    <div id='".$hash."_slide' class='carousel slide'>
                        <div class='carousel-inner'>\n";
        $count = 0;
        foreach ($args as $arg) {
            if (file_exists(IMG_PATH.$arg)) {
                if($count++ == 0){
                   $str .= "<div class='active item'>
                <img src='".IMG_PATH.$arg."' alt='".$hash."_".$count."' />
            </div>\n"; 
                }else{
                     $str .= "<div class='item'>
                <img src='".IMG_PATH.$arg."' alt='".$hash."_".$count."' />
            </div>\n";
                }
                
            } else {
                $str .= "<!-- A imagem " . $arg . " não foi encontrada -->\n";
            }
        }
        
        $str .= "</div>
        <a class='carousel-control left' href='#".$hash."_slide' data-slide='prev'><i class='fa fa-caret-left'></i></a>
 <a class='carousel-control right' href='#".$hash."_slide' data-slide='next'><i class='fa fa-caret-right'></i></a>
    </div>
</section>\n";
        echo $str . "<!-- IMAGENS -->\n";
    } else {
        echo "<!-- NENHUMA IMAGEM -->\n";
    }
}
