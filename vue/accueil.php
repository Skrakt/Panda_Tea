<main>
    <img class="img-background" src="img/accueil/panda-tea-background.jpg" alt="bannière">
    <h1 class="T1">Thés & Infusions bien-être pour toute la famille</h1>
    <h2 class="T2">100% Biologiques. Sachets en coton mousseline.</h2>
    <?php  echo "<link rel='stylesheet' href='" . $cssFile . "'>"; ?>
    
    <!--------------------------------------------------------FLEX--------------------------------------------------->

    <section class="nouveautes">
      <article class="detox-slim">
        <div class="fond-text-flex">
          <p class="T3">Démarrer une cure détox</p>
          <p class="T4">Minceur & Digestion</p>
        </div>
      </article>
      <article class="selection">
        <div class="fond-text-flex">
          <p class="T3">Sélection remise en forme</p>
          <p class="T4">Arriver en forme pour l'été</p>
        </div>
      </article>
      <article class="enfant">
        <div class="fond-text-flex">
          <p class="T3">Tisanes pour les enfants</p>
          <p class="T4">Infusions à déguster en famille</p>
        </div>
      </article>
    </section>

    <div class="titre-align">
      <h3 class="T5">Sélection d'été </h3>
      <h3 class="T6"> | Préparer les beaux jours</h3>
    </div>

    <!--------------------------------------------------------GRID--------------------------------------------------->

    <section class="ete">
      <article class="the-matcha">
        <div class="fond-text-grid">
          <p class="T3">Thé Matcha cérémonie bio</p>
          <p class="T4">Originaire du Japon</p>
        </div>
      </article>
      <article class="fouet-matcha">
        <div class="fond-text-grid">
          <p class="T3">Fouet à Matcha en bamboo</p>
          <p class="T4">En bamboo naturel</p>
        </div>
      </article>
      <article class="video-matcha">
        <video class="video" src="img/accueil/matchalate.mp4">
      </article>
    </section>

    <!------------------------------------------------------BOOTSTRAP--------------------------------------------------------->

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active center-block" data-bs-interval="10000">
          <img class="img-caroussel" src="./img/accueil/URBAN_BOTTLE_PURPLE_4_2048X1365_PNG24_540x.png" class="d-block w-100"
            alt="Urban-bottle">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img class="img-caroussel" src="./img/accueil/urbanbottlemint1_540x.jpg" class="d-block w-100"
            alt="Coffret">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </main>
