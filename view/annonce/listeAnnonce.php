<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Annonces</h1>
        <a type="button" class="btn btn-primary float-end mb-2" href="?p=annonce/add_annonce">
            Nouveau
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
            </svg>
        </a>

        <table id="myDataTable" class="display table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITRE</th>
                    <th>IMAGE</th>
                    <th>DESCRIPTION</th>
                    <th>ETAT</th>
                    <th>VALIDATE</th>
                    <th>DATE_CREATION</th>
                    <th>DATE_UPDATE</th>
                    <th>CATEGORIE_ID</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($annonces as $annonce) { ?>
                    <tr>
                        <td><?php echo $annonce['id'] ?></td>
                        <td><?php echo $annonce['titre'] ?></td>
                        <td></td>

                        <td><?php echo $annonce['description'] ?></td>
                        <td><?php echo $annonce['etat'] ?></td>
                        <td><?php echo $annonce['validate'] ?></td>
                        <td><?php echo $annonce['date_creation'] ?></td>
                        <td><?php echo $annonce['date_update'] ?></td>
                        <td><?php echo $annonce['categorie_id'] ?></td>
                        <td>
                            <a href="?id=<?= $annonce['id'] ?>&p=annonce/update_annonce" type="button" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                </svg>
                            </a>
                            <a type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteDocteurModal<?php echo $d['id']; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                </svg>
                            </a>
                        </td>
                    </td>
                    </tr>
                <?php }; ?>
            </tbody>
        </table>
    </div>
</main>
