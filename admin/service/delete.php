 
<?php
session_start();

$host='localhost';
$username='root';
$pass='';
$dbname='medical';


$connection=mysqli_connect($host,$username,$pass,$dbname);

if($connection){
    
    $id=$_GET['id'];
    $sql="SELECT serv_id from service WHERE serv_id=$id";
    $result=mysqli_query($connection,$sql);
    

    if($result){
        
        if(mysqli_num_rows($result)>0){
            
        $sql=" DELETE FROM `service` WHERE serv_id =$id ";
        $delete_serve=mysqli_query($connection,$sql);

        if($delete_serve)
        //die('ok');
        $_SESSION['successed']= 'serve is deleted';
        
        header('location:index.php');
        }
    }
}



?>