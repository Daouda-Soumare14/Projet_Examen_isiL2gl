
    <div class="container">
        <div class="card col-md-8 m-auto mt-5">
            <div class="card-header">
                <h2 class="card-title">Creation utilisateur</h2>
            </div>
            <div class="card-body">
                <form class="needs-validation v-stack gap-3" method="post">
                    <div class="form-group"> 
                        <label class="label-form-control" for="username">Nom :</label>
                        <input class="form-control" type="text"  name="nom" required>
                    </div>
                    <div class="form-group">
                        <label class="label-form-control" for="prenom">Prenom :</label>
                        <input class="form-control" type="text" name="prenom" required>
                    </div>
                    <div class="form-group">
                        <label class="label-form-control" for="email">Adresse email :</label>
                        <input class="form-control" type="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label class="label-form-control" for="password">Password :</label>
                        <input class="form-control" type="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label class="label-form-control" for="password">Confirme :</label>
                        <input class="form-control" type="password" name="confirme_password" required>
                    </div>
                    <div class="form-group">
                        <label class="label-form-control" for="tel">Telephone :</label>
                        <input class="form-control" type="phone" name="tel" required>
                    </div>
                    <div class="form-group">
                        <label class="label-form-control" for="profil_id">Profil :</label>
                        <select name="profil_id" id="profil_id" required class="form-control">
                            <option value="" desabled selected>Selectionner un profil</option>
                            <?php foreach($profils as $profil):?>
                            <option value="<?= $profil['id'] ?>"><?= $profil['designation'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit" name="addUser">Creer</button>
                </form>
            </div>
        </div>
    </div>
