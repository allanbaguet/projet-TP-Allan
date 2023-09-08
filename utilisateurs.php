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
        <a href="./dashboard.php">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left-square-fill arrow-left m-4" viewBox="0 0 16 16">
                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z" />
            </svg>
        </a>

        <h1 class="text-center mb-4">Utilisateurs</h1>
        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center table-active">
                            <th scope="col">ID</th>
                            <th scope="col">Pseudo</th>
                            <th scope="col">Email</th>
                            <th scope="col">Modification</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr class="text-center">
                            <th scope="row">1</th>
                            <td>Larry</td>
                            <td>test@gmail.com</td>
                            <td class="d-flex justify-content-evenly">
                                <button class="btn btn-transparent">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-transparent">
                                    <i class="bi bi-x-circle"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <th scope="row">2</th>
                            <td>Larry Bird</td>
                            <td>test@gmail.com</td>
                            <td class="d-flex justify-content-evenly">
                                <button class="btn btn-transparent">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-transparent">
                                    <i class="bi bi-x-circle"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <th scope="row">3</th>
                            <td>Larry Birdy</td>
                            <td>test@gmail.com</td>
                            <td class="d-flex justify-content-evenly">
                                <button class="btn btn-transparent">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-transparent">
                                    <i class="bi bi-x-circle"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <th scope="row">4</th>
                            <td>Larry the Bird</td>
                            <td>test@gmail.com</td>
                            <td class="d-flex justify-content-evenly">
                                <button class="btn btn-transparent">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-transparent">
                                    <i class="bi bi-x-circle"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="./assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>