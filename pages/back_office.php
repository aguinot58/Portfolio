<?php

    session_start();

    if (!isset($_SESSION['logged'])){
        $_SESSION['logged'] = 'non';
    }

    if (!isset($_SESSION['admin'])){
        $_SESSION['admin'] = 'non';
    }

    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);

    if ($curPageName == "index.php") {
        $lien = "./";
    } else {
        $lien = "./../";
    }

?>
    
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Admin_Portfolio Aymeric Guinot</title>
        <link rel="shortcut icon" type="image/ico" href="./../img/icon.png">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        </style>
        <link rel="stylesheet" href="./../css/back_office.css"/>
    
    </head>

    <body>

        <header>
            <!-- Fixed navbar -->
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="./../index.php">Portfolio</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?PHP

                    if ($_SESSION['logged'] == 'oui') {

                        echo '<div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="./../pages/back_office.php">Accueil Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="./../pages/back_projet.php">Projets</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="./../pages/back_msg.php">Messages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="./../pages/logout.php">Déconnexion</a>
                                </li>
                            </ul>
                        </div>';

                    } 

                    ?>
                </div>
            </nav>
        </header>

        <main class="flex-shrink-0">

            <?php

                if ($_SESSION['logged'] == 'oui') {

                    echo '<div class="container pt-5">
                        <div class="col mt-5 mx-auto">
                            <a class="text-decoration-none text-dark" href="./../pages/back_projet.php">
                                <div class="card shadow p-3 mb-5 bg-white rounded w-75 mx-auto">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                        <img class="bd-placeholder-img img-fluid" src="./../img/projects.jpg" width="100%" height="250" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Projets</h5>
                                                <p class="card-text">Ici vous pouvez ajouter, modifier ou supprimer des projets du portfolio.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col mt-4 mb-5">
                            <a class="text-decoration-none text-dark" href="./../pages/back_msg.php">
                                <div class="card shadow p-3 mb-5 bg-white rounded w-75 mx-auto">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img class="bd-placeholder-img img-fluid" src="./../img/message.png" width="100%" height="250" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Messages</h5>
                                                <p class="card-text">Ici vous pouvez consulter, répondre ou supprimer les messages transmis par les utilisateurs.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>';
                } else {

                    echo '<div class="wrapper fadeInDown mt-5">
                            <div id="formContent">
                            <!-- Tabs Titles -->
                        
                            <!-- Icon -->
                            <div class="fadeIn first mt-3">
                                <img src="./../img/icon.png" id="icon" alt="Icone utilisateur" />
                            </div>
                        
                            <!-- Login Form -->
                            <form id="form_login" method="POST" onsubmit="return valider_form_login()" action="login.php">
                                <input type="text" id="login" class="fadeIn second mt-3" name="login" placeholder="Identifiant">
                                <input type="password" id="password" class="fadeIn third mt-3 mb-3" name="password" placeholder="Mot de passe">
                                <input type="submit" class="fadeIn fourth" value="Se connecter">
                            </form>
                        
                            <!-- Remind Passowrd -->
                            <div id="formFooter">
                                <a class="underlineHover" href="#">Mot de passe oublié?</a>
                            </div>
                        
                            </div>
                        </div>';

                }

            ?>
        </main>

        <footer class="footer mt-auto py-3 bg-dark">
            <span class="text-muted d-flex justify-content-center"><p>Aymeric Guinot <span class="rouge">© 2022</span> | <a href="mentions.html" >mentions <span class="rouge">légales</span></a></p></span>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src='./javascript/main.js'></script>
    </body>
    
</html>


