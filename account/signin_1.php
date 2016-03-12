<!-- PHP to handle DB interactions and login -->
<?php
  $host = "gamesexchange.ckfgkbliiowl.us-east-1.rds.amazonaws.com";
  $user = "teamshawerma";
  $pass = "shawerma1";
  $db = "gamesexchange";
  //$port = 3306;

  $connection = mysqli_connect($host, $user, $pass, $db);
  if (mysqli_connect_errno()) {
    die("database connection failed :" .
    mysqli_connect_error() .
    "(" . mysqli_connect_errno() . ")");
  }

  // check if the e-mail is set
  if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // ****** MIGHT BE ISSUES WITH THIS QUERY ******
    $query = 'SELECT * FROM UserProfile WHERE Email="'.$email.'" AND Password="'.$password.'" LIMIT 1';
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
      // code here to validate login, for now echo
      echo "Success!";
      exit();
    } else {
      echo "Fail";
      exit();
    }
    mysqli_free_result($result);
  }

  // Close the Connection
  mysqli_close($connection);
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
        <form class="col s12">
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
        </form>
      </div>
      
      <br><br>
      <div class="row center">
        <a href="" id="download-button" class="btn-large btn-rnd waves-effect waves-light light-blue lighten-1">Authenticate</a>
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
