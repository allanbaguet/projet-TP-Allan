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