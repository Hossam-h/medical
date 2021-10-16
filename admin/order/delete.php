 
<?php
session_start();
//echo"ok";
$host='localhost';
$username='root';
$pass='';
$dbname='medical';


$connection=mysqli_connect($host,$username,$pass,$dbname);

if($connection){
    
    $id=$_GET['id'];
    
    $sql="SELECT order_id from `order` WHERE order_id = $id";
    $result=mysqli_query($connection,$sql);
    

    if($result){
        
        if(mysqli_num_rows($result)>0){
            
        $sql=" DELETE FROM `order` WHERE order_id = $id";
        $delete_order=mysqli_query($connection,$sql);

        if($delete_order){
        $_SESSION['successed'] = 'order is deleted';        
        header('location:index.php');
         }  
      }
    }
}



?>