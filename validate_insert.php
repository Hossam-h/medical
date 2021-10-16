<?php  require 'config.php';  ?>
<?php

if (isset ($_POST['submit'])){
    
    $name_serv=$_POST['service'] ;
    $email=$_POST['email'];
    $phone=$_POST['mobile'];
    $city_name=$_POST['city'];
    $name=$_POST['name'];
    $note=$_POST['notes'];

   $connection=mysqli_connect($host,$username,$pass,$dbname);
    if($connection){

   
        $sql=" INSERT INTO  `order` (order_name, order_email, order_mobile, order_notes, order_serv_id, order_city_id) 
          VALUES ('$name', '$email', '$phone', '$note', '$name_serv', '$city_name') ";
         
        $connect= db_insert($sql);
        if($connect){
          
          header('location:index.php');
        }

        
    } 

    
}
?>

