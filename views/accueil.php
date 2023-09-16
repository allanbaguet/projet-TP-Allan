
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
                            <a href="/controllers/studio_ankama_controller.php" class="btn" id="button-green">Histoire d'Ankama</a>
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
                            <a href="/controllers/histoire_dofus_controller.php" class="btn" id="button-green">Histoire Dofus</a>
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