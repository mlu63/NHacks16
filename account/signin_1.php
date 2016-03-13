<!-- PHP to handle DB interactions and login -->
<?php
  include("config.php");
   if (isset($_POST['submit'])) {
         $sql = "SELECT * FROM UserProfile WHERE Email='j.doe@gmail.com' ";
         $result = mysqli_query($db, $sql);
          if (!$result) {
            die("databases query failed.");
          }

          while ($row = mysqli_fetch_assoc($result)) {
            echo $row["Password"];
          }
      mysqli_free_result($result);
   }
?>

<!DOCTYPE html>
<html>
<header>
</header>
<body>
<form action="" method="post" style="height:50px;width:50px;">
    <input type="hidden" name="id" value="1" />           
    <input type="text" name="name" /><br><br>
    <input type="submit" /><br/>
</form>

</body>

