<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>DofusUniverse</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="./accueil.php">
                <img src="/public/assets/img/panoplies/aventurier/chapeau.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            </a>
            <div class="user d-flex">
                <a class="navbar-brand" href="./connexion.php">
                    <button class="btn">
                        <i class="bi bi-person-fill text-white px-3"></i>
                    </button>
                </a>
                <button class="navbar-toggler py-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <i class="bi bi-list text-white"></i>
                </button>
            </div>
            <div class="offcanvas offcanvas-end text-bg-dark w-75" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <img src="/public/assets/img/user-img.png" alt="image user" width="55" height="55">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <hr>
                <div class="offcanvas-body">
                    <ul class="navbar-nav" id="nav-offcanvas">
                        <li class="nav-item py-1">
                            <a class="nav-link text-white text-center fs-3 border rounded" href="./dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-white border rounded w-50 text-center" href="./utilisateurs.php">Utilisateurs</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-white border rounded w-50 text-center" href="./donjons_dash.php">Donjons</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-white border rounded w-50 text-center" href="./guides_dash.php">Guides</a>
                        </li>
                        <hr class="my-2">
                        <li class="nav-item p-2">
                            <a class="nav-link text-white border rounded w-50 text-center" href="./accueil.php">Retour au site</a>
                        </li>
                        <!-- <li class="nav-item d-flex justify-content-center">
                            <button type="button" class="btn" id="button-discord">
                                <a class="nav-link text-white" href="#">Discord <i class="bi bi-discord"></i></a>
                            </button>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <a href="./guides_dash.php">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left-square-fill arrow-left m-4" viewBox="0 0 16 16">
                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z" />
            </svg>
        </a>
        <h1 class="text-center">Création de page guide preset 1</h1>
        <row>
            <div class="col">
                <form action="" method="POST" id="myForm">

                    <div class="mb-3 row">
                        <label for="titleDj" class="col-sm-4 col-form-label">Titre (élément fixe)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control titleDj" id="titleDj" name="titleDj">
                            <!-- <small id="titleDjSmall" class="d-none text-danger">Cette valeur est
                                incorrecte!</small> -->
                        </div>
                    </div>
                    <!-- j'ai retiré le titre dans la div à cloner car il n'y a qu'un titre par page -->
                    <!-- il n'y a que les screens et textarea à cloner -->

                    <div class="mb-3 row">
                        <label for="descriptDj" class="col-sm-4 col-form-label">Descriptif (élément fixe)</label>
                        <div class="col-sm-8">
                            <textarea class="form-control descriptDj" name="descriptDj" id="descriptDj"></textarea>
                            <!-- <small id="descriptDjSmall" class="d-none text-danger">Cette valeur est
                                    incorrecte!</small> -->
                        </div>
                    </div>
                            <!-- ici le titre et le textarea est fixe pour ce preset -->
                    
                    <div id="toClone">

                        <div class="mb-3 row">
                            <label for="titleDj" class="col-sm-4 col-form-label">Titre</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control titleDj" id="titleDj" name="titleDj">
                                <!-- <small id="titleDjSmall" class="d-none text-danger">Cette valeur est
                                incorrecte!</small> -->
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="screenDj" class="col-sm-4 col-form-label">Screen</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control email" name="screenDj" id="screenDj">
                                <!-- <small id="screenDjSmall" class="d-none text-danger">Cette valeur est incorrecte!</small> -->
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="descriptDj" class="col-sm-4 col-form-label">Descriptif</label>
                            <div class="col-sm-8">
                                <textarea class="form-control descriptDj" name="descriptDj" id="descriptDj"></textarea>
                                <!-- <small id="descriptDjSmall" class="d-none text-danger">Cette valeur est
                                    incorrecte!</small> -->
                            </div>
                        </div>


                    </div>
                    <!-- les div cloné s'ajouterons dans cette div ci dessous vite -->
                    <div id="clones"></div>
                    <div class="d-flex justify-content-evenly">
                        <div id="clonePreset" class="btn btn-lg btn-primary mb-3"> + </div>

                        <button type="submit" class="btn" id="button-green">Création</button>

                        <button id="removeClone" type="button" class="btn btn-danger btn-lg mb-3"> - </button>

                    </div>

                </form>
                <!-- <div id="datas"></div> -->
            </div>
        </row>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script defer src="./public/assets/js/script_dungeon.js"></script>

</body>

</html>