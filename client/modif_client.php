<?php require '../pages/header.php'; ?>
<main>
    <div class="row">
        <div class="col-12">
            <div class="case">
                <div class="header-case">
                    <h2>Formulaire modification client</h2>
                </div>
                <div class="body-case">
                    <form action="insert.php" method="POST">
                        <?php $id = $_GET['id'];
                        $clients = $DB->query("SELECT * FROM `client` WHERE id_client = $id");
                        foreach ($clients as $client) : ?>
                        <div class="inputBox">
                            <input type="text" name="entreprise" value="<?= $client->entreprise ?>">
                            <span>Nom Entreprise</span>
                            <i></i>
                        </div><br>
                        <div class="inputBox">
                            <input type="text" name="representant" value="<?= $client->representant ?>">
                            <span>Représentant</span>
                            <i></i>
                        </div><br>
                        <div class="inputBox">
                            <input type="text" name="telephone" value="<?= $client->telephone ?>">
                            <span>Téléphone</span>
                            <i></i>
                        </div><br>
                        <input type="hidden" name="id_client" value="<?= $client->id_client ?>">
                        <?php endforeach; ?>
                        <button class="btn btn-darker" name="modif">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require '../pages/footer.php'; ?>