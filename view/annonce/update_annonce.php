<div class="container">
    <div class="card col-md-8 m-auto mt-5">
        <div class="card-header">
            <h2 class="card-title">Modification</h2>
        </div>
        <div class="card-body">
            <form class="needs-validation v-stack gap-3" method="post">
                <input type="hidden" name="id" value="<?= $user['id']?>">
                <div class="form-group">
                    <label class="label-form-control" for="titre">Titre :</label>
                    <input class="form-control" type="text" name="titre" required value="<?= $user['titre']?>">
                </div>
                <div class="form-group">
                    <label class="label-form-control" for="description">Description :</label>
                    <input class="form-control" type="text" name="description" required value="<?= $user['description']?>">
                </div>
                <div class="form-group">
                    <label class="label-form-control" for="etat">Etat :</label>
                    <input class="form-control" type="email" name="etat" required value="<?= $user['etat']?>">
                </div>
                <button class="btn btn-primary" type="submit" name="updateAnnonce">Modifier</button>
            </form>
        </div>
    </div>
</div>