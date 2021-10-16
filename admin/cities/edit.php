
<?php require_once '../../config.php'; ?> 

<?php require_once BLA.'link/header.php'; ?>


<?php

if(isset($_GET['id']) && is_numeric($_GET['id'])){

if($connection){
    
    $id=$_GET['id'];
    $sql="SELECT * from cities WHERE city_id=$id";
    $result=mysqli_query($connection,$sql);
    

    if($result){
       
        
        if(mysqli_num_rows($result)>0){
        
         $sql=" SELECT * FROM cities WHERE city_id=$id";
        $edit_city=mysqli_query($connection,$sql);
         $data=mysqli_fetch_assoc($edit_city);

        
    }
}

}
}else {
    header('location:'.BUA);
}
?>


<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New City</h3>
        <form method="post" action="<?php echo  BUA.'cities\update.php?id='.$_GET['id']; ?>">
            <div class="form-group">
                <label >Name Of City</label>
                <input type="text" name="name" class="form-control" value="<?php echo $data['city_name'] ?>" >
            </div>
            
            <button type="submit" name="submit" class="btn btn-success">Update</button>
        </form>
       
    </div>


<?php require_once BLA.'link/footer.php'; ?>  
