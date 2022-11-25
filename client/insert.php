<?php require '../db.class.php';
$DB = new DB();

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
