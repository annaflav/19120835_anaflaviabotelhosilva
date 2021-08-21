<?php

// Funções core do site

function load_page()
{
    // Função responsável por carregar a página correta

    //Descobre qual é a url e carrega a página de acordo
    if (!isset($_GET['u'])) {
        require("pages/home.php");
    } else if(in_array($_GET['u'] , ['sobre', 'contato'])) {
        require("pages/{$_GET['u']}.php");
    }else if ($_GET['u'] == 'produto'){
        require_once("dados/loja.php");
        $prod = produto($_GET['i']);
        require("pages/produto.php");
    }
}

function is_active($page)
{
    return $_GET['u'] == $page ? 'active' : '';
}

function title(){
    $txt = "Loja 123 - ";
    if (!isset($_GET['u'])) {
        return $txt."Seja bem vindo";
    } else if(in_array($_GET['u'] , ['sobre', 'contato'])) {
        return $txt.ucfirst($_GET['u']);
    }else{
        return $txt."Produto";
    }
}