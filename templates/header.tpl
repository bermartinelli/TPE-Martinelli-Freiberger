<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">                    
                        <a class="navbar-brand" href="{BASE_URL}">Biblioteca Virtual</a>                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        {if isset($smarty.session.USER_ID)} <!-- $_SESSION['USER_ID'] -->
                            <a class="nav-link active" aria-current="page" href="logout">Log Out</a>
                            <a class="nav-link active" aria-current="page" href="adminHome">Opciones de Administracion</a>
                            {else}
                            <a class="nav-link active" aria-current="page" href="login">Log in</a>
                            {/if}
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <!-- inicio de contenido principal -->
    <div class="container">
