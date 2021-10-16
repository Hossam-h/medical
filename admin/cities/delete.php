 
<?php
session_start();

$host='localhost';
$username='root';
$pass='';
$dbname='medical';


$connection=mysqli_connect($host,$username,$pass,$dbname);

if($connection){
    
    $id=$_GET['id'];
    $sql="SELECT city_id from cities WHERE city_id=$id";
    $result=mysqli_query($connection,$sql);
    

    if($result){
        
        if(mysqli_num_rows($result)>0){
            
        $sql=" DELETE FROM cities WHERE city_id=$id";
        $delete_city=mysqli_query($connection,$sql);

        if($delete_city)
        $_SESSION['successed']= 'City is deleted';
        
        header('location:index.php');
        }
    }
}



?>