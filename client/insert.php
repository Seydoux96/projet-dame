<?php require '../db.class.php';

$DB = new DB();

if (isset($_GET['ajout'])) {
    $ent = $_GET['entreprise'];
    $rep = $_GET['representant'];
    $tel = $_GET['telephone'];
    
    $sql = "INSERT INTO client (entreprise, representant, telephone) VALUES (:ent, :rep, :tel)";
    $data = array(
        ":ent" => $ent,
        ":rep" => $rep,
        ":tel" => $tel,
    );
    
    $DB->query($sql, $data);
    
    header("location: client.php");
}

if (isset($_POST['modif'])) {
    $ent = $_POST['entreprise'];
    $rep = $_POST['representant'];
    $tel = $_POST['telephone'];
    $id = $_POST['id_client'];
    
    $sql = "UPDATE client SET entreprise = '$ent', representant = '$rep', telephone = '$tel' WHERE id_client = $id";
    
    $DB->query($sql);
    
    header("location: client.php");
}