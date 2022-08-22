<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Accueil</title>
  <link rel="icon" href="./img/compte-panda-tea.svg">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <?php  echo "<link rel='stylesheet' href='" . $cssFile . "'>"; ?>
</head>

<body>
  <!------------------------------------------------------BOOTSTRAP--------------------------------------------------------->
  <header>
    <nav class="navbar fixed-top navbar-expand-lg" id="nav-bar">
      <div class="container-fluid">
        <a class="navbar-brand" href="./?action=accueil"><img
            src="./img/compte-panda-tea.svg" alt="logo site"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="./?action=produits" id="menu-produits">Nos produits</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./?action=packs" id="menu-packs">Nos packs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./?action=apropos" id="menu-propos">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./?action=forum" id="menu-forums">Forums</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./?action=contact" id="menu-contact">Contact</a>
            </li>
          </ul>
          <ul class="navbar-nav text-center">
            <li id="nav-ico">
              <a class="nav-link sup-padding" href="./?action=connexion"><img class="img-compte"
                  src="./img/compte.png" alt="espace client"></a>
            </li>
            <li id="nav-ico">
              <a class="nav-link sup-padding" href="#"><img class="img-panier"
                  src="./img/panier.png" alt="panier"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>