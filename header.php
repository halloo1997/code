<?php
  //PORTFOLIO SITE OF CHARIESA ROOZENDAAL
  //Copyright 2018
    $p = (isset($_GET['p'])) ? $_GET['p'] : 'home';
?>

<!DOCTYPE html>
<html>
  <head>
      <title>Portfolio - Chariesa Roozendaal</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta charset="utf-8" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="/assets/css/style.css" />
  </head>
<body>
  <header>
      <div class="content">
          <div class="content-inside">
      <div class="container">
        <div class="row mt-4">
          <div class="col-md-12 text-center">
            <a href="/" class="text-dark"><h2>Chariesa Roozendaal</h2></a>
              <hr width="30%">
          </div>
        </div>
        <div class="col-md-6 offset-md-3 text-center">
            <nav class="navbar navbar-expand-lg main-nav">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><img src="images/bars-solid.png"</span>


                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link text-dark <?php if($p == 'home') echo "font-weight-bold";?>" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark <?php if($p == 'mijn-werk') echo "font-weight-bold";?>" href="/?p=mijn-werk">Mijn Werk</a>
                    </li>
                      <li class="nav-item">
                      <a class="nav-link text-dark <?php if($p == 'vaardigheden') echo "font-weight-bold";?>" href="/?p=vaardigheden">Vaardigheden</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark <?php if($p == 'contact') echo "font-weight-bold";?> " href="/?p=contact">Contact</a>
                    </li>
                  </ul>
                </div>
            </div>
      </div>
          </div>
      </div>
            </nav>

  </header>
<div class="content container"> <!-- Begin content -->
