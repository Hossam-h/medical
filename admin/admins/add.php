
<?php require_once '../../config.php'; ?>    
<?php require_once BLA.'link/header.php'; ?> 




<?php if(! empty($_SESSION['success'])):?>
    <ul class="container">
                                    
                                       
    <li class="alert alert-success"><?= $_SESSION['success'] ?> </li>

                                    
    </ul>

    <?php endif;?>   

<div class="col-sm-6 offset-sm-3 border p-3" >
        <h3 class="text-center p-3 bg-primary text-white">Add New Admin</h3>
        <form method="post" action="../../functions/validate.php" >
            <div class="form-group">
                <label >Name </label>
                <input type="text" name="name" class="form-control" >
            </div>

            <div class="form-group">
                <label >Email </label>
                <input type="" name="email" class="form-control" >
            </div>

            <div class="form-group">
                <label >Password </label>
                <input type="password" name="password" class="form-control" >
            </div>

            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
    
    </div>
    
    
    <div class="container">
<?php if (! empty($_SESSION['error'])): ?> 

<div class="alert alert-danger" >

 <ul>

   <?php foreach ($_SESSION['error'] as $error): ?>
      
      <li> <?= $error ;?> </li>

   <?php endforeach; ?>
 </ul>

</div> 
<?php endif;?>


    
    
    <?php
    if (! empty($_SESSION['error'])){
    unset($_SESSION["error"]);
}else{
   // unset($_SESSION["success"]);
}
    ?>

    <?php require_once BLA.'link/footer.php'; ?>
