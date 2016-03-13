

<!-- PHP to handle DB interactions and login -->
<?php
  include("config.php");
  session_start();

  //if (isset($_POST['email']) && $_POST['email'] !== '') {
  if($_SERVER["REQUEST_METHOD"] == "POST") {

    $myemail = mysqli_real_escape_string($db, $_POST['email']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT * FROM UserProfile WHERE Email='$myemail' AND Password='$mypassword'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
      //session_register("myemail");
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


      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>


  <!-- Header -->
  <br><br>
  <nav class="orange" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="../index.html" class="brand-logo">GC</a>
  </nav>

      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
        
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Email  :</label><input type = "text" name = "email" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
          
            </div>
        
         </div>
      
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



