
<!-- PHP to handle DB interactions and login -->
<?php
  include("config.php");
  session_start();

  // if (isset($_POST['name']) && $_POST['name'] !== '') 
  if($_SERVER["REQUEST_METHOD"] == "POST") {

    $myemail = mysqli_real_escape_string($db, $_POST['email']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT * FROM UserProfile WHERE Email='.$myemail.' AND Password='.$mypassword.'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //$active = $row['active'];
    $count = mysqli_num_rows($result);
    if ($count == 1) {
      session_register("myemail");
      $_SESSION['login_user'] = $myemail;
      header("location: welcome.php");
    } else {
      $error = "Invalid Information";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Authentication Page</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

  <!-- Header -->

  <nav class="orange" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="../index.html" class="brand-logo">GC</a>
  </nav>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Log In.</h1>

      <br><br>
      <br><br>
      <div class="row">
        <form action = "" method = "POST" class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate">
              <label for="email">E-mail</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>

          <br><br>

          <div class="row center">
            <a href="" id="download-button" input type="submit" class="btn-large btn-rnd waves-effect waves-light light-blue lighten-1">Authenticate</a>
          </div>-->
          <!-- TEST BUTTON -->

          <!--<input type="submit" value="go"/>-->

        </form>
      </div>

    </div>
    <br><br>
    <br><br>
    <br><br>
    </div>
  </div>

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
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>

  </body>
</html>


