<?php
session_start();
require_once ('db.php');

$_SESSION['error']=[];
$errors=array();

$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];




 if (isset($_POST['submit'])){
 
if (empty($name)){
echo "<pre>";
$_SESSION['error'][]="name empty";
echo "<pre/>";
}
   
if (empty($email)){
 
    $_SESSION['error'][] ="email empty";
}elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) ){
    echo "<pre>";
    $_SESSION['error'][] = "theris no email";
echo "<pre/>";
    
}
   
if (empty($password)){
    
echo "<pre>";
$_SESSION['error'][] = "theris no pass";
echo "<pre/>";
}else{
    $password_hash=password_hash($_POST['password'],PASSWORD_DEFAULT);
}
   
                    


 }
 if (!empty ($_SESSION['error'])){
 header('location:../../medical/admin/admins/add.php');
 }else{
    $connection=mysqli_connect($host,$username,$pass,$dbname);
    //$password_hash=password_hash($password,PASSWORD_DEFAULT);

   //die($password_hash);       
    $sql=" INSERT INTO admin (admin_name,admin_email,admin_pass) 
          VALUES ('$name','$email','$password_hash') ";
         
        $connect= db_insert($sql);
         if($connect){
            $_SESSION['success']='sucess';
            header('location:../../medical/admin/admins/add.php');
        }

}

?>

