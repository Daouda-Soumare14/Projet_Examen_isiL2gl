
<div class="container">
        <div class="card col-md-8 m-auto mt-5">
            <div class="card-header">
                <h2 class="card-title">Ajouter Annonce</h2>
            </div>
            <div class="card-body">
                <form class="needs-validation v-stack gap-3" method="post">
                    <div class="form-group"> 
                        <label class="label-form-control" for="titre">titre :</label>
                        <input class="form-control" type="text"  name="titre" required>
                    </div>
                    <div class="form-group">
                        <label class="label-form-control" for="description">description :</label>
                        <input class="form-control" type="text" name="description" required>
                    </div>
                    <div class="form-group">
                        <label class="label-form-control" for="img">image :</label>
                        <input class="form-control" type="img" name="image" required>
                    </div>
                    <div class="form-group">
                        <label class="label-form-control" for="etat">etat :</label>
                        <input class="form-control" type="text" name="etat" required>
                    </div>
                    <div class="form-group">
                        <label class="label-form-control" for="validate">validate :</label>
                        <input class="form-control" type="text" name="validate" required>
                    </div>
                    <div class="form-group">
                        <label class="label-form-control" for="date_create">date_create :</label>
                        <input class="form-control" type="date" name="date_create" required>
                    </div>
                    <div class="form-group">
                        <label class="label-form-control" for="date_update">date_update :</label>
                        <input class="form-control" type="date" name="date_update" required>
                    </div>
                    <div class="form-group">
                        <label class="label-form-control" for="categorie_id">categorie :</label>
                        <select name="categorie_id" id="categorie_id" required class="form-control">
                            <option value="" desabled selected>Selectionner une Categorie</option>
                            <?php foreach($categories as $categorie):?>
                            <option value="<?= $categorie['id'] ?>"><?= $categorie['designation'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit" name="addCategorie">Creer</button>
                </form>
            </div>
        </div>
    </div>
