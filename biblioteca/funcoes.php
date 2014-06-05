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
