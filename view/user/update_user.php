<div class="container">
    <div class="card col-md-8 m-auto mt-5">
        <div class="card-header">
            <h2 class="card-title">Modification</h2>
        </div>
        <div class="card-body">
            <form class="needs-validation v-stack gap-3" method="post">
                <input type="hidden" name="id" value="<?= $user['id']?>">
                <div class="form-group">
                    <label class="label-form-control" for="username">Nom :</label>
                    <input class="form-control" type="text" name="nom" required value="<?= $user['nom']?>">
                </div>
                <div class="form-group">
                    <label class="label-form-control" for="prenom">Prenom :</label>
                    <input class="form-control" type="text" name="prenom" required value="<?= $user['prenom']?>">
                </div>
                <div class="form-group">
                    <label class="label-form-control" for="email">Adresse email :</label>
                    <input class="form-control" type="email" name="email" required value="<?= $user['email']?>">
                </div>
                <div class="form-group">
                    <label class="label-form-control" for="tel">Telephone :</label>
                    <input class="form-control" type="phone" name="tel" required value="<?= $user['tel']?>">
                </div>
                <button class="btn btn-primary" type="submit" name="updateUser">Modifier</button>
            </form>
        </div>
    </div>
</div>