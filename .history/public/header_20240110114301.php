<!DOCTYPE html>
<html lang="fr">

<head>
<!-- Linking BoxIcon for Icon -->
<!-- <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'> -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="../images/logo.png">
<link href="../css/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="icon" type="image/x-icon" href="../images/logo.ico">
<meta name="description" content="Nous vous proposons des hébergements dans un camping à Dompierre sur Besbre dans le département de l'Allier à 5 km du parc d'attractions le Pal.">
<title>Accueil Camping Le Pal </title>

<style>
    @media only screen and (max-width: 767px) {
      .text-center p {
        font-size: 9px; /* Ajustez la taille de police selon vos préférences */
      }
    }
  </style>
</head>  

<?php
// Exemple d'en-têtes de mise en cache pour les images (à placer dans le fichier PHP)
header('Cache-Control: max-age=86400'); // 1 jour
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT');
?>

<header>
  
    <nav id="mainNavigation">
      <div class="pt-2 text-center border-bottom ">

      <img src="../images/logo.webp" alt="Logo Les caravanes De La Besbre" style="height:160px " class="img-fluid logo ">

        <div class=" navbar-brand fs-2 textLogo">Les Caravanes De La Besbre <span class="orange">.</span></div>

        <img src="../images/papillons.gif" alt="Papillons" style="height:100px " class="img-fluid">
      </div>


      <div class="navbar-expand-md ">
        <div class=" text-center  ">

          <button class="navbar-toggler w-75  navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="../images/hamburger.webp" alt="Hamburger navbar" class="me-2 mt-1" style="height: 30px;"><span class="align-middle mt-1">Menu </span>
          </button>

        </div>

        <div class="text-center mt-3 collapse navbar-collapse " id="navbarSupportedContent">

          <ul class="navbar-nav mx-auto" id="menu">

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="informations.php">Informations</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="tourisme.php">Tourisme</a>
            </li>

            <li class="nav-item">
  <a class="nav-link" href="https://www.lepal.com/" target="_blank">Billets Le Pal</a>
</li>


            <li class="nav-item">
              <a class="nav-link" href="camping.php">Le Camping</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="souvenirDeVacances.php">Souvenirs De Vacances</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="#contact">Contact</a>
            </li>

          </ul>

        </div>
      </div>
 


  </nav>
 

  <div class="container-fluid text-center m-0 ">
    <img src="../images/banner3.webp" alt="Banner les caravanes de la besbre" class="banner ">
  </div>

  </header>