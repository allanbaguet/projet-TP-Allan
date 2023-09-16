    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3 class="text-uppercase text-center text-white py-3">
                    connexion</h3>
                <form id="connexionForm" action="" method="POST">
                    <fieldset>
                        <div class="mb-3">
                            <label for="pseudo" class="form-label">Pseudo</label>
                            <input type="text" class="form-control" id="pseudo" name="pseudo" aria-describedby="pseudoHelp">
                            <div id="pseudoHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="d-flex justify-content-center py-4">
                            <button id="createAccount" type="submit" class="btn">Connexion</button>
                        </div>
                    </fieldset> 
                </form>
            </div>
        </div>
    </div>

    <hr class="hr-2 ">

    <h3 class="py-3 text-white text-center">inscription</h3>


    <div id="bgRegister" class="py-3">
        <p id="textRegister" class="d-flex text-center p-2">Tu n’as pas encore de
            compte ?
            Incrits-toi pour profiter de toutes les fonctionnalités du site !</p>
        <div class="d-flex justify-content-center">
            <a href="/controllers/inscription_controller.php">
                <button id="connectAccount" class="btn">Créer un compte</button>
            </a>
        </div>
    </div>
    <div class="py-3"></div>