<?php require '../pages/header.php'; ?>
<main>
    <div class="row">
        <div class="col-8">
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
                                <?php $clients = $DB->query("SELECT * FROM `client`");
                                foreach ($clients as $client) : ?>
                                    <tr>
                                        <td><?= $client->entreprise ?></td>
                                        <td><?= $client->representant ?></td>
                                        <td><?= $client->telephone ?></td>
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
        <div class="col-4">
            <div class="case">
                <div class="header-case">
                    <h2>Formulaire client</h2>
                </div>
                <div class="body-case">
                    <form action="insert.php" method="GET">
                        <div class="inputBox">
                            <input type="text" name="entreprise" required>
                            <span>Nom Entreprise</span>
                            <i></i>
                        </div><br>
                        <div class="inputBox">
                            <input type="text" name="representant" required>
                            <span>Représentant</span>
                            <i></i>
                        </div><br>
                        <div class="inputBox">
                            <input type="text" name="telephone" required>
                            <span>Téléphone</span>
                            <i></i>
                        </div><br>
                        <button class="btn btn-darker">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require '../pages/footer.php'; ?>