<?php
    if(!isset($_SESSION)){
        session_start();
    }
    
    include('./assets/seguranca.php')
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img/logopit.jpg">
    <title>OnPoint - Painel</title>
    <!-- BOOTSTRAP5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--BOOTSTRAP5 ICONS-->
    <link rel="stylesheet" href="./assets/bs5-icons/node_modules/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <div class="container-fluid">
            <a class="navbar-brand" href="" style=color:white>Editar Perfil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <form class="d-flex">
                <a href="../Landing-Page/" class="btn btn-outline-light">
                    <i class="bi bi-info-circle"></i>
                </a>
                <a href="../add_look/index.php" class="btn btn-outline-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed-fill" viewBox="0 0 16 16">
                        <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                </a>
                <a href="../pedir_ajuda/index.html" class="btn btn-outline-light">
                    <i class="bi bi-chat-left-dots"></i>
                </a>
                <a href="../ajudar/index.php" class="btn btn-outline-light">
                    <i class="bi bi-chat-right-quote-fill"></i>
                </a>
                <a href="./assets/logout.php" class="btn btn-outline-light">
                    <i class="bi bi-box-arrow-left"></i>
                </a>
            </form>
            </div>
        </div>
        </nav>

        <div class="espaco">
        </div>

        <div class="container">
        <div class="row">
            <div class="col-2">
            <img src="./img/default.png" class="img-fluid border border-dark border-2 rounded-circle" width="150px" height="150px">
            </div>
            <div class="col-1">
                <h3><?php echo $_SESSION['nome']; ?></h3>
            </div>
            <div class="col-4 bio">
            </div>
            <div class="col-2">
                <p>Seguidores: 200</p>
            </div>
            <div class="col-2">
                <p>Seguindo: 598</p> 
            </div>
        </div>
        </div>

        <div class="espaco">
        </div>

        <div class="container">
        <div class="row">
            <div class="col-4">
            <div class="imagem">
                <img src="./img/default1.png" class="border border-dark border-2" width="300px" height="500px">
            </div>
            </div>	
            <div class="col-4">
            <div class="row">
                <b>Texto postado juntamente com a imagem
                Lorem Ipsum dolor amet amogus</b>
            </div>
            <div class="row">
                <div class="col">
                    Likes: 200
                </div>
                <div class="col">
                    Comentários: 50
                </div>
                <div class="col">
                    Reposts: 10
                </div>
            </div>
            <div class="row">
                <p><p><p><p><p><p><p>
            </div>
            <div class="row">
                <div class="col-2">
                    <img src="./img/default.png" class="img-fluid border border-dark border-2 rounded-circle" width="50px" height="50px">
                </div>
                <div class="col-2">
                    <?php echo $_SESSION["nome"];?>
                </div>
                <div class="row">
                    Bela foto meu amigo você tem um belo shape
                </div>
            </div>
            <div class="row">
                    <p><p>
                </div>
            <div class="row">
                <div class="col-2">
                    <img src="./img/default.png" class="img-fluid border border-dark border-2 rounded-circle" width="50px" height="50px">
                </div>
                <div class="col-2">
                    <?php echo $_SESSION["nome"];?>
                </div>
                <div class="row">
                    Nem chamou né tu vai ver seu filho da ****
                </div>
            </div>
            <div class="row">
                    <p><p>
                </div>
            <div class="row">
                <div class="col-2">
                    <img src="./img/default.png" class="img-fluid border border-dark border-2 rounded-circle" width="50px" height="50px">
                </div>
                <div class="col-2">
                    <?php echo $_SESSION["nome"];?>
                </div>
                <div class="row">
                    Me manda seu zap linda
                </div>
            </div>
            <div class="row">
                    <p><p>
                </div>
            <div class="row">
                <div class="col-2">
                    <img src="./img/default.png" class="img-fluid border border-dark border-2 rounded-circle" width="50px" height="50px">
                </div>
                <div class="col-2">
                    <?php echo $_SESSION["nome"];?>
                </div>
                <div class="row">
                    Poggers
                </div>
            </div>
            </div>
        </div>
        </div>

    <!-- BOOTSRAP5 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>