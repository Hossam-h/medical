<?php require_once '../../config.php'; ?> 

<?php require_once BLA.'link/header.php'; ?>


<?php

if (isset ($_POST['submit'])){
    $name_service=$_POST['name'];
    if(empty ($name_service)){
        echo"<h5 class='alert alert-danger'> the name is empty <h5/>";
    }elseif(trim(strlen($name_service)) <= 3){
        echo"<h5 class='alert alert-danger'> the name is small<h5/>";
    }else {
        $connection=mysqli_connect($host,$username,$pass,$dbname);
    
    $sql=" INSERT INTO  service (serv_name) 
          VALUES ('$name_service')";
         
        $connect= db_insert($sql);
        if($connect){
          echo"<h5 class='alert alert-success'>Added success<h5/>";
        }
    
    }
}
?>


<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New Service</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label >Name Of Service</label>
                <input type="text" name="name" class="form-control" >
            </div>
            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>


<?php require_once BLA.'link/footer.php'; ?>  
