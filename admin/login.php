<?php session_start(); ?>

<?php

require_once('../config.php');
 //require_once(BL.'functions\validate.php');
 //echo BL.'functions\validate.php'
 // require_once BLA.'link/header.php'; 

//   if(isset($_SESSION['admin_name'])){
//     header('Location:'.BUA.'index.php');
//   }


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/style.css" >

    <title>Dashboard | Login</title>
  </head>
  <body>


  <?php 
                if (isset($_POST['submit'])) 
                {
                    $password_login=$_POST['password'];
                    $email=$_POST['email'];
                    if(empty($_POST['email']) || empty($_POST['password'])){
                    
                        echo"<h5 class='alert alert-danger'>please type filed<h5/>";
                        
                     }else{
                        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                            echo"<h5 class='alert alert-danger'>not valide email<h5/>";
                        }else{
                            
                            $cheak=getrows('admin','admin_email',$email);
                            
                            $cheak_password=password_verify($password_login,$cheak['admin_pass']);
                            
                                if($cheak_password){
                                    //echo"sc";

                                    $_SESSION['admin_name'] = $cheak['admin_name'];
                                    $_SESSION['admin_email'] = $cheak['admin_email'];
                                    $_SESSION['admin_id'] = $cheak['admin_id'];
                                
                                //echo BUA.'index.php';
                                header("Location:" .BUA. 'index.php');
                                }else{
                                   echo"<h5 class='alert alert-danger'>password not correct<h5/>";;
                                }
                            
                        }
                     }
                
                
                }
        ?>
        



        <div class="cont-login d-flex align-items-center justify-content-around">

            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="border p-5" >
                <div class="row">
              
                    <?php  require BL.'functions/error.php'; ?>
                    <div class="col-sm-12  ">
                        <h3 class="text-center p-3 text-white">Login</h3>
                    </div>
                    <div class="col-sm-6 offset-sm-3 ">
                        <div class="form-group">
                            <label >Email </label>
                            <input type="" name="email" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label >Password </label>
                            <input type="password" name="password" class="form-control" >
                        </div>

                        <div class="form-group">
                           
                            <input type="submit" name="submit" class="form-control btn btn-success"   >
                        </div>
                    </div>
                </div>
                
            </form>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo ASSETS; ?>/js/jquery-3.4.1.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/jquery-3.3.1.slim.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/popper.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/bootstrap.min.js" ></script>




  </body>
</html>