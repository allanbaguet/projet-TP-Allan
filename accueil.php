<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>DofusUniverse</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="./accueil.php">
                <img src="/public/assets/img/panoplies/aventurier/chapeau.png" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top">
            </a>
            <div class="user d-flex">
                <a class="navbar-brand" href="./connexion.php">
                    <button class="btn">
                        <i class="bi bi-person-fill text-white px-3"></i>
                    </button>
                </a>
                <button class="navbar-toggler py-2" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <i class="bi bi-list text-white"></i>
                </button>
            </div>
            <div class="offcanvas offcanvas-end text-bg-dark w-75" tabindex="-1" id="offcanvasRight"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <img src="/public/assets/img/user-img.png" alt="image user" width="55" height="55">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <hr>
                <div class="offcanvas-body">
                    <ul class="navbar-nav" id="nav-offcanvas">
                        <li class="nav-item p-2">
                            <a class="nav-link text-white border rounded w-50 text-center" href="/studio-ankama.html">Histoire d'Ankama</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-white border rounded w-50 text-center" href="./histoire_dofus.html">Histoire de Dofus</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-white border rounded w-50 text-center" href="./lexique.html">Lexique</a>
                        </li>
                        <li class="nav-item d-flex justify-content-center">
                            <button type="button" class="btn" id="button-discord">
                                <a class="nav-link text-white" href="https://discord.gg/3tqqS55S" target="_blank">Discord <i class="bi bi-discord"></i></a>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!---------------------------------DEBUT MODAL CONNEXION-->
    <!-- <div class="modal fade" id="modalUserLogin" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
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
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
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
                <div class="modal-body p-0">
                    <h3 class="modal-title fs-5 text-uppercase py-3 text-center" id="exampleModalToggleLabel">
                        inscription</h3>
                    <div id="bgRegisterModal" class="py-3">
                        <p id="textRegisterModal" class="d-flex text-center p-2">Tu n’as pas encore de
                            compte ?
                            Incrits-toi pour profiter de toutes les fonctionnalités du site !</p>
                        <div class="d-flex justify-content-center">
                            <button id="connectAccount" class="btn" data-bs-target="#modalUserRegister"
                                data-bs-toggle="modal">Créer un compte</button>
                        </div>
                    </div>
                </div>
                <div class="py-3"></div>
            </div>
        </div>
    </div> -->
    <!---------------------------------FIN MODAL CONNEXION-->
    <!---------------------------------DEBUT MODAL INSCRIPTION-->
    <!-- <div class="modal fade" id="modalUserRegister" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5 text-uppercase w-100 text-center" id="exampleModalToggleLabel2">
                        inscription</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="registrationForm" action="inscription.php" method="$_POST">
                        <p>* Champs requis</p>
                        <div class="mb-3">
                            <label for="pseudo" class="form-label">Pseudo *</label>
                            <input type="text" class="form-control" id="pseudo" name="pseudo"
                                aria-describedby="pseudoHelp">
                            <div id="pseudoHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" class="form-control" id="email" name="email"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe *</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Confirmation du mot de passe *</label>
                            <input type="password" class="form-control" name="password2" id="password2">
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button id="createAccount"  data-bs-toggle="modal" type="submit"
                        class="btn">Valider</button>
                </div>
            </div>
        </div>
    </div> -->
    <!---------------------------------FIN MODAL INSCRIPTION-->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1 class="text-uppercase text-center text-white p-5">bienvenue sur dofusuniverse !</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container fluid">
        <div class="row py-4">
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 23rem;" id="bg-color-body-card">
                    <img src="/public/assets/img/studio_ankama.jpeg" class="card-img-top img-fluid" alt="studio-Ankama">
                    <div class="card-body p-0">
                        <h5 class="card-title p-3" id="title-card-white">L'histoire du studio Ankama</h5>
                        <p class="card-text p-3">Trouver ici l’histoire du studio d’Ankama</p>
                        <div class="d-flex justify-content-center card-footer p-2" id="bg-color-top-bottom-card">
                            <a href="./studio-ankama.html" class="btn" id="button-green">Histoire d'Ankama</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->

        <!-- <div class="container fluid"> -->
        <div class="row py-4">
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 23rem;" id="bg-color-body-card">
                    <img src="/public/assets/img/dofus.jpg" class="card-img-top img-fluid" alt="histoire-de-dofus">
                    <div class="card-body p-0">
                        <h5 class="card-title p-3" id="title-card-white">L'histoire de Dofus</h5>
                        <p class="card-text p-3">Trouver ici l’histoire du jeu Dofus</p>
                        <div class="d-flex justify-content-center card-footer p-2" id="bg-color-top-bottom-card">
                            <a href="./histoire_dofus.html" class="btn" id="button-green">Histoire Dofus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->

        <!-- <div class="container fluid"> -->
        <div class="row py-4">
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 23rem;" id="bg-color-body-card">
                    <img src="/public/assets/img/dofus_forum.jpg" class="card-img-top img-fluid" alt="forum-de-dofus">
                    <div class="card-body p-0">
                        <h5 class="card-title p-3" id="title-card-white">Forum Dofus</h5>
                        <p class="card-text p-3">Trouver ici le forum de Dofus</p>
                        <div class="d-flex justify-content-center card-footer p-2" id="bg-color-top-bottom-card">
                            <a href="https://www.dofus.com/fr/forum" class="btn" id="button-green" target="_blank">Forum Dofus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->

        <!-- <div class="container fluid"> -->
        <div class="row py-4">
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 23rem;" id="bg-color-body-card">
                    <img src="/public/assets/img/img-twitter-dofus.png" class="card-img-top img-fluid" alt="twitter">
                    <div class="card-body p-0">
                        <h5 class="card-title p-3" id="title-card-white">Twitter Dofus</h5>
                        <p class="card-text p-3">Trouver ici le twitter de Dofus</p>
                        <div class="d-flex justify-content-center card-footer p-2" id="bg-color-top-bottom-card">
                            <a href="https://twitter.com/DOFUSfr?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="btn" id="button-green" target="_blank">Twitter Dofus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->

        <!-- <div class="container fluid"> -->
        <div class="row py-4">
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 23rem;" id="bg-color-body-card">
                    <img src="/public/assets/img/test-creation-stuff-1.png" class="card-img-top img-fluid"
                        alt="création-utilisateur-1">
                    <div class="card-body p-0">
                        <h5 class="card-title p-3" id="title-card-white">Création utilisateur 1</h5>
                        <p class="card-text p-3">Trouver ici la création d’un utilisateur</p>
                        <div class="d-flex justify-content-center card-footer p-2" id="bg-color-top-bottom-card">
                            <a href="#" class="btn" id="button-green">Voir création</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->

        <!-- <div class="container fluid"> -->
        <div class="row py-4">
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 23rem;" id="bg-color-body-card">
                    <img src="/public/assets/img/test-creation-stuff-2.png" class="card-img-top img-fluid"
                        alt="création-utilisateur-2">
                    <div class="card-body p-0">
                        <h5 class="card-title p-3" id="title-card-white">Création utilisateur 2</h5>
                        <p class="card-text p-3">Trouver ici la création d’un utilisateur</p>
                        <div class="d-flex justify-content-center card-footer p-2" id="bg-color-top-bottom-card">
                            <a href="#" class="btn" id="button-green">Voir création</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid bg-black">
            <div class="row py-2">
                <div class="col text-center">
                    <p>Dofus est un MMORPG édité par Ankama. "DofusUniverse" est un site non-officiel sans aucun lien
                        avec Ankama.
                        Certaines illustrations sont la propriété d'Ankama Studio et de Dofus - <span
                            class="fw-bold">Tous droits réservés</span></p>
                    <p>Copyright &copy; 2023 DofusUniverse.fr</p>
                    <p class="fw-bold">
                        <a href="#" class="text-decoration-none text-decoration-underline text-white">C.G.U</a> - <a
                            href="#" class="text-decoration-none text-decoration-underline text-white">Mentions
                            Légales</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="./assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>