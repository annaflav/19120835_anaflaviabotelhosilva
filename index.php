<!-- pàgina index para servir de base para a exibição HTML -->
<?php include_once('functions/core.php');?>
<!DOCTYPE html>

<head lang="pt-BR">

    <!-- tags meta necessárias para o bootstrap funcionar corretamente -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=title();?></title>

    <!-- Aqui serão carregados os css, que são os 'styles' do projeto -->

    <!-- Fonte Awesome é usado para os ícones -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

    <!-- Bootstrap é uma biblioteca com várias funções prontas que facilitam na criação de páginas web -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- MDBootstrap é um extensão mais completa do bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">

    <!-- São as regras css do site -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div><?php include_once('pages/header.php');?></div>

    <div><?php load_page()?></div>

    <div><?php include('pages/footer.html');?></div>
    
    
    <!-- JQuery é uma biblioteca javascript que já trás bastante funções prontas -->
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- Popper é necessário para o bootstrap funcionar corretamente -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!-- Funções próprias do site -->
    <script type="text/javascript" src="js/scripts.js"></script>
</body>