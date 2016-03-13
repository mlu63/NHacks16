<?php 
  if (isset($_SESSION['loggedin']) == true) {
    $btn_status = "btn-large btn-rnd waves-effect waves-light orange";
    $log_in_or_nah = ""
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Gamers Make Sense</title>

  <!-- CSS  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

  <!-- Logged in --> 
  <!--
  <?php
  if ($_SESSION['loggedin'] == true) {
  ?>-->
  <nav class="orange" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo">GC</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="account/signin.html">My Profile</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="account/signin.html">My Profile</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center light-blue-text">Gamers Make <strong>¢</strong>ents</h1>
      <div class="row center">
        <h5 class="header col s12 light">A Trading Platform for Lending Games.</h5>
      </div>
      <br><br>
      <br><br>
      <div class="row center">
        <div href="#" class="btn-large btn-rnd waves-effect waves-light orange">Lend a Game</div>
      </div>
      <div class="row center">
      <a href="borrow/gamebrowser.html" class="btn-large btn-rnd waves-effect waves-light orange">Borrow a Game</a>
    </div>
    <br><br>
    <br><br>
    <br><br>
    </div>
  </div>

  <!-- Not logged in -->
<!--
  <?php
  } else {
  ?> -->
  <nav class="orange" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo">GC</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="account/signin.html">Login</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="account/signin.html">Login</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center light-blue-text">Gamers Make <strong>¢</strong>ents</h1>
      <div class="row center">
        <h5 class="header col s12 light">A Trading Platform for Lending Games.</h5>
      </div>
      <br><br>
      <br><br>
      <div class="row center">
        <div href="#" class="btn-large btn disabled btn-rnd">Lend a Game</div>
      </div>
      <div class="row center">
      <a href="borrow/gamebrowser.html" class="btn-large btn-rnd waves-effect waves-light orange">Borrow a Game</a>
    </div>
    <br><br>
    <br><br>
    <br><br>
    </div>
  </div>

<!--
  <?php
  }
  ?>
-->
  <!-- Footer -->

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
       <!-- <div class="col l6 s12"> -->

          <p class="grey-text text-lighten-4" align="center">NHacks'16 Project
          </br>
          <p class = "grey-text text-lighten-4" align="center">Created by <strong>Michael, Santanu, Aditya, and Joe.</strong>

    </div>
    <div class="footer-copyright">
      <div class="container" align="center">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
