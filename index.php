<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Album example · Bootstrap v5.3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Signika:wght@300..700&display=swap" rel="stylesheet">
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      
      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .sinister {
        background: url("./img/sinister.png") no-repeat right 60%; 
      }

      body {
        font-family: "Signika", sans-serif;
        font-optical-sizing: auto;
        font-weight: 200;
        font-style: normal;
        font-variation-settings:
        "GRAD" 0;
      }

      .red-btn {
        background-color: #b90000;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
  </head>
  <body>
        <?php
          require 'nav.php';
        ?>
<main>
  <section class="sinister py-5 text-center p-5 container-fluid">
    <div class="row py-lg-5">
      <div class="col-lg-4 ms-auto me-5">
        <div class="bg-dark bg-opacity-75 rounded-2">
        <img src="./img/sinister-title.png" alt="" style="width: 350px;" class="p-1">
        <h1 class="text-light">Maintenant disponible !</h1>
        </div>
      </div>
    </div>
  </section>
  <div class="container-fluid">
    <div class="col text-center">
      <div class="row bg-black p-5 text-light">
        <h3 class="">FEAARS, une plateforme de streaming entièrement dédié au meilleur du cinéma d'horreur !</h3>
        <p>On a tous une petite envie de frissons de temps à autre, à ce moment-là, on rentre en jeu pour vous proposez nos meilleures recommandations de films pour sauter et frissonner de peur.</p>
        <h1>🍿👻</h1>
      </div>
    </div>
  </div>

  <div class="album py-5 bg-black bg-gradient">
    <div class="container">
      <h1 class="text-left text-light  mb-5 ">Du sang frais : </h1>
      <div class="row row-cols-1 row-cols-sm-3 row-cols-md-4 g-2">
        <div class="col animate__animated animate__fadeInLeft">
          <div class="card shadow-sm">
            <img src="./img/movies/saw.png" width="100%" height="405" alt="">
            <div class="card-body">
              <h4>Saw</h4>
              <small class="text-body-secondary">Thriller - Gore • </small>
              <small class="text-body-secondary fw-bold">16+</small>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group flex-fill">
                  <button type="button" class="btn btn-sm btn-outline-danger">Regarder</button>
                  <button type="button" class="btn btn-sm btn-outline-dark">Plus</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col animate__animated animate__fadeInLeft">
          <div class="card shadow-sm">
            <img src="./img/movies/sinister.jpeg" width="100%" height="405" alt="">
            <div class="card-body">
              <h4>Sinister</h4>
              <small class="text-body-secondary">Épouvante • </small>
              <small class="text-body-secondary fw-bold">12+</small>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group flex-fill">
                  <button type="button" class="btn btn-sm btn-outline-danger">Regarder</button>
                  <button type="button" class="btn btn-sm btn-outline-dark">Plus</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col animate__animated animate__fadeInLeft">
          <div class="card shadow-sm">
            <img src="./img/movies/vhs2.jpg" width="100%" height="405" alt="">
            <div class="card-body">
              <h4>V/H/S/2</h4>
              <small class="text-body-secondary">Found footage - Film à sketchs • </small>
              <small class="text-body-secondary fw-bold">16+</small>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group flex-fill">
                  <button type="button" class="btn btn-sm btn-outline-danger">Regarder</button>
                  <button type="button" class="btn btn-sm btn-outline-dark">Plus</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col animate__animated animate__fadeInLeft">
          <div class="card shadow-sm">
            <img src="./img/movies/gummo.jpg" width="100%" height="405" alt="">
            <div class="card-body">
              <h4>Gummo</h4>
              <small class="text-body-secondary">Indépendant - Drame • </small>
              <small class="text-body-secondary fw-bold">16+</small>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group flex-fill">
                  <button type="button" class="btn btn-sm btn-outline-danger">Regarder</button>
                  <button type="button" class="btn btn-sm btn-outline-dark">Plus</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="album py-5 bg-black ">
    <div class="container">
      <h1 class="text-left text-light  mb-5 ">Vivez le personnage ! (Found footage) : </h1>
      <div class="row row-cols-1 row-cols-sm-3 row-cols-md-4 g-2">
        <div class="col animate__animated animate__fadeInLeft">
          <div class="card shadow-sm">
            <img src="./img/movies/vhs2.jpg" width="100%" height="405" alt="">
            <div class="card-body">
              <h4>V/H/S/2</h4>
              <small class="text-body-secondary">Found footage - Film à sketchs • </small>
              <small class="text-body-secondary fw-bold">16+</small>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group flex-fill">
                  <button type="button" class="btn btn-sm btn-outline-danger">Regarder</button>
                  <button type="button" class="btn btn-sm btn-outline-dark">Plus</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col animate__animated animate__fadeInLeft">
          <div class="card shadow-sm">
            <img src="./img/movies/afflicted.jpg" width="100%" height="405" alt="">
            <div class="card-body">
              <h4>Afflicted</h4>
              <small class="text-body-secondary">Found footage - Drame • </small>
              <small class="text-body-secondary fw-bold">16+</small>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group flex-fill">
                  <button type="button" class="btn btn-sm btn-outline-danger">Regarder</button>
                  <button type="button" class="btn btn-sm btn-outline-dark">Plus</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col animate__animated animate__fadeInLeft">
          <div class="card shadow-sm">
            <img src="./img/movies/vhs-viral.jpg" width="100%" height="405" alt="">
            <div class="card-body">
              <h4>V/H/S Viral</h4>
              <small class="text-body-secondary">Found Footage - Film à sketchs • </small>
              <small class="text-body-secondary fw-bold">16+</small>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group flex-fill">
                  <button type="button" class="btn btn-sm btn-outline-danger">Regarder</button>
                  <button type="button" class="btn btn-sm btn-outline-dark">Plus</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col animate__animated animate__fadeInLeft">
          <div class="card shadow-sm">
            <img src="./img/movies/grave-encounters.webp" width="100%" height="405" alt="">
            <div class="card-body">
              <h4>Grave Encounters</h4>
              <small class="text-body-secondary">Found footage - Paranormal • </small>
              <small class="text-body-secondary fw-bold">12+</small>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group flex-fill">
                  <button type="button" class="btn btn-sm btn-outline-danger">Regarder</button>
                  <button type="button" class="btn btn-sm btn-outline-dark">Plus</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col animate__animated animate__fadeInLeft">
          <div class="card shadow-sm">
            <img src="./img/movies/rec.jpg" width="100%" height="405" alt="">
            <div class="card-body">
              <h4>REC</h4>
              <small class="text-body-secondary">Found footage - Paranormal • </small>
              <small class="text-body-secondary fw-bold">12+</small>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group flex-fill">
                  <button type="button" class="btn btn-sm btn-outline-danger">Regarder</button>
                  <button type="button" class="btn btn-sm btn-outline-dark">Plus</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col animate__animated animate__fadeInLeft">
          <div class="card shadow-sm">
            <img src="./img/movies/pa3.jpg" width="100%" height="405" alt="">
            <div class="card-body">
              <h4>Paranormal Activity 3</h4>
              <small class="text-body-secondary">Found footage - Paranormal • </small>
              <small class="text-body-secondary fw-bold">12+</small>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group flex-fill">
                  <button type="button" class="btn btn-sm btn-outline-danger">Regarder</button>
                  <button type="button" class="btn btn-sm btn-outline-dark">Plus</button>
                </div>
              </div>
            </div>
          </div>
        </div>
       <div class="col animate__animated animate__fadeInLeft">
          <div class="card shadow-sm">
            <img src="./img/movies/host.jpg" width="100%" height="405" alt="">
            <div class="card-body">
              <h4>Host</h4>
              <small class="text-body-secondary">Found footage - Paranormal • </small>
              <small class="text-body-secondary fw-bold">12+</small>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group flex-fill">
                  <button type="button" class="btn btn-sm btn-outline-danger">Regarder</button>
                  <button type="button" class="btn btn-sm btn-outline-dark">Plus</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col animate__animated animate__fadeInLeft">
          <div class="card shadow-sm">
            <img src="./img/movies/vhs.jpeg" width="100%" height="405" alt="">
            <div class="card-body">
              <h4>V/H/S</h4>
              <small class="text-body-secondary">Found footage - Film à sketchs • </small>
              <small class="text-body-secondary fw-bold">16+</small>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group flex-fill">
                  <button type="button" class="btn btn-sm btn-outline-danger">Regarder</button>
                  <button type="button" class="btn btn-sm btn-outline-dark">Plus</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<footer class="text-body-secondary py-5 bg-black">
  <div class="d-flex justify-content-center">
    <a class="m-3 link-offset-3 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-light" href="#">🍪 Gestion des cookies et RGPD</a>
    <a class="m-3 link-offset-3 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-light" href="#">Conditions Générales d'Utilisation</a>
    <a class="m-3 link-offset-3 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-light" href="#">Mentions légales</a>
    <a class="m-3 link-offset-3 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-light" href="#">F.A.Q</a>
    <a class="m-3 link-offset-3 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-light flex-1" href="#">Revenir en haut</a>
  </div>
</footer>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>
