    <!---------------------------------DEBUT MODAL CONNEXION-->
    <div class="modal fade" id="modalUserLogin" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
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
                            <button id="createAccount" class="btn" data-bs-target="#modalUserRegister"
                                data-bs-toggle="modal">Créer un compte</button>
                        </div>
                    </div>
                </div>
                <div class="py-3"></div>
            </div>
        </div>
    </div>
    <!---------------------------------FIN MODAL CONNEXION-->
    <!---------------------------------DEBUT MODAL INSCRIPTION-->
    <div class="modal fade" id="modalUserRegister" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5 text-uppercase w-100 text-center" id="exampleModalToggleLabel2">
                        inscription</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Pseudo</label>
                            <input type="text" class="form-control" id="inputRegisterPseudo"
                                aria-describedby="pseudoHelp">
                            <div id="pseudoHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputRegisterEmail"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="inputRegisterPassword">
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button id="connectAccount" data-bs-target="#modalUserLogin" data-bs-toggle="modal" type="submit"
                        class="btn">Valider</button>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------FIN MODAL INSCRIPTION-->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1 class="text-uppercase text-center text-white p-5">l'histoire de Dofus</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 p-3 rounded" id="bgColorText">
                <p>Dofus est un jeu de rôle en ligne massivement multijoueur (MMORPG) français développé
                    et édité par Ankama puis par sa filiale Ankama Games à sa création en 2004.</p>

                <p>Projet débuté par Emmanuel Darras, Camille Chafer et Anthony Roux, sa toute première version
                    — qui proposait uniquement du joueur contre joueur — s'intitulait Arty Slot :
                    Duel et était le quatrième opus de la série Arty Slot. </p>

                <p>De fil en aiguille les développeurs améliorent le jeu, pour
                    en arriver à une phase de bêta-test et changent le nom du jeu en Dofus.
                    Après quelques mois, Dofus sort le 1er septembre 2004 en France.
                    Une version 2.0 sort en 2009, avec de nouveaux graphismes.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row py-5">
            <div class="col-1"></div>
            <div class="col-10 p-3 rounded" id="bgColorText">
                <p>Après son succès durable dans la fin des années 2000 et début 2010, Dofus perd de l'ampleur.</p>

                <p>L'équipe choisit donc de fusionner certains de ses serveurs pour rassembler la communauté. </p>


                <p>La population du jeu est depuis plutôt stable, sur une pente croissante avec de nombreux pics
                    correspondant aux gros événements ou sorties de mises à jour.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row py-2">
            <div class="col-1"></div>
            <div class="col-10 p-3 rounded" id="bgColorText">
                <p>En plus de sa version PC pour Mac, Linux et Windows, Ankama a sorti en 2016
                    une version Mobile intitulée « Dofus Touch ». </p>

                <p>Basée sur une version antérieure du jeu, le portage a depuis profondément divergé au niveau de ses
                    mises à jour,
                    même si une grande partie du contenu est partagé.</p>

                <p>Pour fêter les 15 ans du jeu, Dofus Rétro est lancé sur la version 1.29 du jeu le 24 septembre 2019.
                    Les serveurs Rétro sont depuis maintenus, avec quelques mises à jour ergonomiques.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row py-5">
            <div class="col-1"></div>
            <div class="col-10 p-3 rounded" id="bgColorText">
                <p>Le mercredi 30 septembre 2020, pour célébrer le premier anniversaire des serveurs Dofus Rétro,
                    de nouveaux serveurs spécifiquement « monocomptes » sont ouverts. </p>

                <p>Cette ouverture avait été annoncée un mois auparavant en même temps que l'arrivée de contenus prévus
                    à l'époque mais annulé depuis sur les serveurs Dofus Rétro.</p>

                <p>Installé à Montréal, le studio Ankama Canada est créé le 1er août 2013 par deux salariés d'Ankama. Le
                    groupe, composé de dix employés, est notamment auteur du jeu vidéo Abraca. Pour permettre (entre
                    autres)
                    l'expansion du jeu Wakfu
                    en Chine, la société ouvre début 2014 un studio à Singapour. Ces deux studios, ainsi qu'un autre à
                    São
                    Paulo au Brésil), fermeront rapidement, pour permettre à
                    Ankama de se focaliser sur le Japon et Paris.</p>

                <p>Le groupe Ankama Asia, basé à Manille aux Philippines, et ayant pour but de développer ses jeux dans
                    le
                    monde asiatique, est racheté le 22 mars 2016 par Keywords Studios.
                    Durant ce contrat de quatre ans, Keywords souhaite recruter une vingtaine d'employés de plus.</p>

                <p>En 2018, est créé le Studio No Border, une filiale tokyoïte chargée du développements d'animations
                    japonaises et de jeux vidéo. Thomas Romain, connu pour sa série Code Lyoko, en est le directeur
                    artistique.</p>

                <p>En 2019, Ankama atteint le douzième rang des entreprises Françaises les plus rentables.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row py-5">
            <div class="col-1"></div>
            <div class="col-10 p-3 rounded" id="bgColorText">
                <p>Dofus prend place dans le Monde des Douze, un univers médiéval-fantastique. Les joueurs doivent
                    retrouver six Dofus primordiaux,
                    des œufs de dragons conférant une grande puissance à leur porteur, qui sont dispersés aux quatre
                    coins du monde.</p>

                <p>Le jeu, en monde ouvert, laisse place à la libre orientation des joueurs, pouvant choisir de
                    s'orienter
                    dans le Joueurs contre Joueurs, Joueurs contre Monstres ou l'économie.</p>

                <p>Dofus est un jeu vidéo RPG où les joueurs incarnent un ou plusieurs personnages. </p>

                <p>En tant que joueur, vous y retrouverez une multitude d'armes et d'équipements en tous genres,
                    une vingtaine de métiers différents et plusieurs centaines de monstres répartis en différentes
                    zones sur les 10 000 cartes de jeu (portions de
                    carte, sur lesquelles l'on se déplace d'ailleurs comme sur une carte) formant l'univers de Dofus,
                    dont 95 % ne sont accessibles qu'aux abonnés.</p>

                <p>Les échanges commerciaux dans le jeu sont réglés avec la monnaie de Dofus, le Kama.</p>

                <p>Il est possible d'acheter ressources et items via les HDV (Hôtels De Vente), mais aussi en procédant
                    à des échanges entre joueurs.
                    Ces échanges peuvent être de plusieurs natures : « objets contre objets » ou « objets contre Kamas
                    ».</p>

                <p>Depuis l'arrivée des « Ogrines » ayant permis aux joueurs de posséder plusieurs comptes
                    « gratuitement » et permettant donc à chacun d’être indépendant des autres via ce mode en plus
                    de nombreux avantages par rapport aux joueurs « classiques », ceux jouant avec un seul compte,
                    les échanges, le partage et l'entraide se sont radicalement éloignés de l'esprit et de l’intérêt du
                    MMO.</p>

                <p>Il existe aussi diverses fonctionnalités :</p>

                <ul class="text-white">
                    <li>
                        Créer de l'équipement, amélioration de ces objets ou récolte de ressources
                        par la réalisation de métiers ;
                    </li>
                    <li>
                        Battre des champions de donjons avec des mécaniques de jeu variées et
                        des niveaux de difficultés différents ;
                    </li>
                    <li>
                        Participer à des Tournois ou combats de « Kolizeum »"(Arène) contre d'autres
                        joueurs ;
                    </li>
                    <li>
                        Rencontrer de nouvelles personnes via le côté social développé du jeu
                        (Guildes, Alliances, Groupes) ;
                    </li>
                    <li>
                        Réaliser des quêtes afin de découvrir l'univers du jeu, mais aussi pour
                        acquérir des objets inédits ou des ressources spéciales ;
                    </li>
                    <li>
                        Faire des chasses aux trésors pour l'obtention de ressources spécifiques.
                    </li>
                </ul>
            </div>
        </div>
    </div>