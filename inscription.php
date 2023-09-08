<?php
require './regex.php';

$errors = [];

if($_SERVER["REQUEST_METHOD"] == 'POST') {
    //récupération et validation du pseudo
    $pseudo = filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($pseudo)) {
        $errors['pseudo'] = 'Veuillez obligatoirement entrer un pseudo';
    } else {
        $isOk = filter_var($pseudo, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/' . REGEX_PSEUDO . '/')));
        if ($isOk == false) {
            $errors['pseudo'] = 'Le champs n\'est pas valide';
        }
    }
    // récupération et validation de l'email
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL,); //nettoie la chaine de caractère de l'email
    if (empty($email)) {
        $errors['email'] = 'Veuillez obligatoirement entrer un email';
    } else {
        $isOk = filter_var($email, FILTER_VALIDATE_EMAIL); //renvoi l'email ou false
        if ($isOk === false) {
            $errors['email'] = 'l\'email n\'est pas bon';
        }
    }
    //récupération et validation du mot de passe
    $password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);
    $password2 = filter_input(INPUT_POST, 'password2', FILTER_DEFAULT);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    if (empty($password) || (empty($password2))) { // l'opérateur || correspond à 'OU'
        $errors['password'] = 'Veuillez obligatoirement entrer un mot de passe et sa confirmation';
    } else {
        $isOk = filter_var($password, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/' . REGEX_PASSWORD . '/')));
        if ($isOk == false) {
            $errors['password'] = 'Mot de passe non valide (Veuillez respecter la structure ci-dessus)';
        } elseif ($password !== $password2) {
            $errors['password'] = 'Les mots de passe ne sont pas identiques';
        } else {
            //fonction permettant de hashé le mot de passe (il est encrypté, qui sera toujours un string de 60 caractères de long)
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        }
    }
}
?>
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
                <h3 class="text-uppercase text-center text-white py-3">
                    inscription</h3>
            
                <form id="registrationForm" action="" method="POST" novalidate>
                    <fieldset>
                        <p>* Champs requis</p>
                        <div class="mb-3">
                            <label for="pseudo" class="form-label">Pseudo *</label>
                            <input type="text" class="form-control" id="pseudo" name="pseudo" value="<?php $pseudo['pseudo'] ?? '' ?>" placeholder="Entrez votre pseudo" pattern="<?= REGEX_PSEUDO ?>" required>
                            <div id="pseudoHelp" class="form-text error d-none text-danger">Ce champ n'est pas valide</div>
                            <p class="error"> <?= $errors['pseudo'] ?? '' ?> </p>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php $email['email'] ?? '' ?>" pattern="<?= REGEX_EMAIL ?>" placeholder="Entrez votre email" required>
                            <div id="emailHelp" class="form-text error d-none text-danger">Cet email n'est pas valide</div>
                            <p class="error"> <?= $errors['email'] ?? '' ?> </p>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe *</label>
                            <input type="password" class="form-control" name="password" id="password" value="<?php $password['password'] ?? '' ?>" pattern="<?= REGEX_PASSWORD ?>" placeholder="Entrez votre mot de passe" required>
                            <p class="text-white">Le mot de passe doit contenir au moins 8 caractères, incluant des lettres majuscules, des lettres minuscules et des chiffres.</p>
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Confirmation du mot de passe *</label>
                            <input type="password" class="form-control" name="password2" id="password2" value="<?php $password2['password2'] ?? '' ?>" pattern="<?= REGEX_PASSWORD ?>" placeholder="Entrez votre mot de passe à nouveau" require>
                            <div id="passwordCheck" class="form-text error d-none text-danger">Le mot de passe n'est pas identique</div>
                            <p class="error"> <?= $errors['password'] ?? '' ?> </p>
                        </div>
                        <div class="d-flex justify-content-center py-3">
                            <button id="createAccount" type="submit" class="btn">Valider</button>
                        </div>           
                    </fieldset>
                </form>
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

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        const regexPseudo = <?= REGEX_PSEUDO ?>
        const regexPassword = <?= REGEX_PASSWORD ?>
    </script>
    <script defer src="./public/assets/js/script_registration.js"></script>
</body>

</html>