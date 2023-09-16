    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3 class="text-uppercase text-center text-white py-3">
                    inscription</h3>
            
                <form id="registrationForm" action="" method="POST" novalidate>
                    <fieldset>
                        <p class="fw-bold">* Champs requis</p>
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
                            <p class="text-white fst-italic">Le mot de passe doit contenir au moins 8 caractères, incluant des lettres majuscules, des lettres minuscules et des chiffres.</p>
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