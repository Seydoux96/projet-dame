<?php require '../pages/header.php'; ?>
<main>
    <div class="row">
        <div class="col-12">
            <div class="case">
                <div class="header-case">
                    <h2>Listes des clients</h2>
                </div>
                <div class="body-case">
                    <div class="tableau">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>Entreprise</td>
                                    <td>Représentant</td>
                                    <td>Téléphone</td>
                                    <td>Actions</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $commandes = $DB->query("SELECT * FROM `commande`");
                                foreach ($commandes as $commande) : ?>
                                    <tr>
                                        <td><?= $commande->id_client ?></td>
                                        <td><?= $commande->total ?></td>
                                        <td><?= $commande->date_fac ?></td>
                                        <td>
                                            <a href="#"><i class="fa fa-pen-to-square"></i></a>
                                            <p style="color: white;">&</p>
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require '../pages/footer.php'; ?>