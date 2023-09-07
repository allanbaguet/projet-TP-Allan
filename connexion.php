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
            <a class="navbar-brand" href="#">
                <img src="/public/assets/img/panoplies/aventurier/chapeau.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            </a>
            <div class="user d-flex">
                <!-- <a class="navbar-brand" href="./connexion.php"> -->
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
                        <li class="nav-item p-2">
                            <a class="nav-link text-white" href="/studio-ankama.html">Histoire d'Ankama</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-white" href="./histoire_dofus.html">Histoire de Dofus</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-white" href="./lexique.html">Lexique</a>
                        </li>
                        <li class="nav-item d-flex justify-content-center">
                            <button type="button" class="btn" id="button-discord">
                                <a class="nav-link text-white" href="#">Discord <i class="bi bi-discord"></i></a>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form>
                    <fieldset>
                        <legend></legend>
                        <div class="mb-3">
                            <label for="mailPseudo" class="form-label">Pseudo ou adresse mail</label>
                            <input type="email" class="form-control" id="mailPseudo" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button id="connectAccount" type="submit" class="btn">Connexion</button>
                        </div>
                        
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalUserLogin" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header ">
                    <h3 class="modal-title fs-5 text-uppercase w-100 text-center" id="exampleModalToggleLabel">connexion
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Pseudo ou adresse mail</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button id="connectAccount" type="submit" class="btn">Connexion</button>
                        </div>
                    </form>
                </div>
                <hr class="hr-2">
                    <h3 class="modal-title fs-5 text-uppercase py-3 text-center" id="exampleModalToggleLabel">
                        inscription</h3>
                    <div id="bgRegisterModal" class="py-3">
                        <p id="textRegisterModal" class="d-flex text-center p-2">Tu n’as pas encore de
                            compte ?
                            Incrits-toi pour profiter de toutes les fonctionnalités du site !</p>
                        <div class="d-flex justify-content-center">
                            <button id="createAccount" class="btn" data-bs-target="#modalUserRegister" data-bs-toggle="modal">Créer un compte</button>
                        </div>
                    </div>
                <div class="py-3"></div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid bg-black">
            <div class="row py-2">
                <div class="col text-center">
                    <p>Dofus est un MMORPG édité par Ankama. "DofusUniverse" est un site non-officiel sans aucun lien
                        avec Ankama.
                        Certaines illustrations sont la propriété d'Ankama Studio et de Dofus - <span class="fw-bold">Tous droits réservés</span></p>
                    <p>Copyright &copy; 2023 DofusUniverse.fr</p>
                    <p class="fw-bold">
                        <a href="#" class="text-decoration-none text-decoration-underline text-white">C.G.U</a> - <a href="#" class="text-decoration-none text-decoration-underline text-white">Mentions
                            Légales</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="./assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>