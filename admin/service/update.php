
<?php require_once '../../config.php'; ?> 
<?php require_once BLA.'link/header.php';?>
<?php

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    if(isset($_POST['submit'])){
$id=$_GET['id'];
if (isset ($_POST['submit'])){
    
    $name_serve=$_POST['name'];
    if(empty ($name_serve)){
        echo"<h5 class='alert alert-danger'> the name is empty <h5/>";
    }elseif(trim(strlen($name_serve)) <= 3){
        echo"<h5 class='alert alert-danger'> the name is small<h5/>";
    }else {
        

        $connection=mysqli_connect($host,$username,$pass,$dbname);
        if($connection){
    $sql="UPDATE  service SET serv_name = '$name_serve' WHERE serv_id=$id" ;
         
        $connect= db_insert($sql);
        if($connect){
            echo '<h2 class="alert alert-success text-center ">City is Updated<h2/>';
            header('refresh:1;url='.BUA.'service\\');
        }
}
    
    }
}
}
}else {
    header('location:'.BUA);
}
?>

<?php require_once BLA.'link/footer.php'; ?>
