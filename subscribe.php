<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <script src="../assets/js/color-modes.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'abonner | FEAARS </title>
</head>
<body>
    <?php
          require 'nav.php'
    ?>

<main class="bg-black min-vh-100">
<h1 class="display-4 fw-normal text-center text-light p-4">Rejoignez la peur !</h1>
      <p class="fs-5 text-center text-light">Des passionés de films paranormaux, underground, et même, fantastique vous propose leurs meuilleurs choix pour des prix bien faibles ! </p>
    <div class="container mx-auto row row-cols-1 row-cols-md-3 mb-3 text-center p-5">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-danger">
          <div class="card-header py-3 text-bg-danger">
            <h4 class="my-0 fw-normal">Mensuel</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">€4.49<small class="text-body-secondary fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Accès à tous les films</li>
              <li>Aucune publicitée </li>
              <li>Accès au support</li>
              <li>Sans Engagement</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-danger">Souscrire</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-danger">
          <div class="card-header py-3 text-bg-danger">
            <h4 class="my-0 fw-normal">Trimestriel</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">€13.49<small class="text-body-secondary fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Accès à tous les films</li>
              <li>Aucune publicitée </li>
              <li>Accès au support</li>
              <li>Sans Engagement</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-danger">Souscrire</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-danger">
          <div class=" py-3 text-bg-danger border-danger">
            <h4 class="my-0 fw-normal">Annuel</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">€36.00<small class="text-body-secondary fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Accès à tous les films</li>
              <li>Aucune publicitée </li>
              <li>Accès au support</li>
              <li>4 mois OFFERT</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-danger">Souscrire</button>
          </div>
        </div>
      </div>
    </div>
    </main>
        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>