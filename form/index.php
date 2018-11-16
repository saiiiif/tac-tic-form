<?php include"../includes/db.php"; 

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/plugins/loginStyle.css" rel="stylesheet" >              
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
       <!-- Icon here please -->
      <h1>       </h1>
    </div>

<?php    
echo "<script>   swal('wrong username or password','','warning');  </script>";

?>
    <!-- Login Form -->
    <form  method="post" action="loginfunction.php">

      <input type="text"  class="fadeIn second" name="username1" placeholder="username" >
      <input type="password"  class="fadeIn third" name="user_password1" placeholder="password" >
      <input type="submit" class="fadeIn fourth" value="Log In" name="login">
      
    </form>
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="../index.php">Go back to the Website if your not authorized</a>
      <?php if (isset($_SESSION['nb']))
      { if ($_SESSION['nb']==3)
          {
         echo "<script>   swal('mot de passe érroné 3 fois ');  </script>";
         sleep (7);
          }
      {echo $_SESSION['nb'];}
      }
?>
    </div>
  </div>
</div>








 