<?php require '../db.class.php'; 
$DB = new DB(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabbord</title>
        <link rel="stylesheet" href="../awesome/css/all.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <input type="checkbox" name="" id="menu">
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2><span class="fa fa-gauge"> </span> Aluminum</h2>
            </div>
        
            <div class="sidebar-menu">
                <ul>
                    <li><a href="../dashboard/dashboard.php" class=""><span class="fa fa-dashboard"></span> <span>Tableau de bord</span></a></li>
                    <li><a href="../client/client.php"><span class="fa fa-user"></span> <span>Clients</span></a></li>
                    <li><a href="../facture/facture.php"><span class="fa fa-file-invoice"></span> <span>Facture</span></a></li>
                    <!--li><a href=""><span class="fa fa-line-chart"></span> <span>Statistiques</span></a></li>
                    <li><a href=""><span class="fa fa-address-book"></span> <span>A-propos</span></a></li>
                    <li><a href=""><span class="fa fa-clipboard"></span> <span>Projets</span></a></li>
                    <li><a href=""><span class="fa fa-money-bill"></span> <span>Bilans</span></a></li>
                    <li><a href=""><span class="fa fa-registered"></span> <span>Enregistrement</span></a></li>
                    <li><a href=""><span class="fa fa-user"></span> <span>Contact</span></a></li-->
                </ul>
            </div>
        </div>
        <div class="content">
            <header>
                <p><label for="menu"><span class="fa fa-bars"></span></label><span class="accueil">Accueil</span></p>
                <div class="search-wrapp">
                    <span class="fa fa-search"></span>
                    <input type="search" name="" placeholder="recherche">
                </div>
            
                <div id="dropdown" class="user-wrapp">
                    <div>
                        <h4>Alassane</h4>
                        <small>Admin</small>
                    </div>
                    <img src="images/pp.jpg" width="30" height="30" class="logo-admin">
                    <div class="dropdown-content">
                        <p>Profil</p>
                        <p>Deconnexion</p>
                    </div>
                </div>
            </header>