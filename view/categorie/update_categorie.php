
<div class="container">
        <div class="card col-md-8 m-auto mt-5">
            <div class="card-header">
                <h2 class="card-title">Modifier Categorie</h2>
            </div>
            <div class="card-body">
                <form class="needs-validation v-stack gap-3" method="post">
                    <input class="label-form-control" type="hidden" name="id" required value="<?= $categorie['id']?>">
                    <div class="form-group"> 
                        <label class="label-form-control" for="designation">Designation :</label>
                        <input class="form-control" type="text" name="designation" required value="<?= $categorie['designation']?>">
                    </div>
                    <button class="btn btn-primary" type="submit" name="addCategorie">Creer</button>
                </form> 
            </div>
        </div>
    </div>
