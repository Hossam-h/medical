
<?php require_once '../../config.php'; ?> 

<?php require_once BLA.'link/header.php';
 
?>
<div class ="col-lg-12 text-center">
    
            <?php if(! empty($_SESSION['successed'])) {?>
                    <h5 class="alert alert-success col-lg-12"><?php echo $_SESSION['successed']?></h5>
                    <?php }?>

        </div>
<div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">View All Service</h3>
        
        <table class="table  table-bordered">

            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                
                <?php $x=0 ; foreach (getrow_all('service') as $serve) { ?>
                    <tr>
                  <td><?php echo $x ?> </td>
                  <td> <?php echo $serve ['serv_name'] ?> </td>
                  <td class="text-center"> 
                    <a href="<?php echo BUA.'service\delete.php?id='.$serve['serv_id'];?>"  class="btn btn-danger">Delete</a>  
                   <a href="<?php echo BUA.'service\edit.php?id='.$serve['serv_id'];?>" class="btn btn-success">Update</a>
                   </td>
                  </tr>
                    <?php $x++;} ?>
            </tbody>
        </table>
    </div>


<?php require_once BLA.'link/footer.php'; ?>
<?php unset($_SESSION['successed'])?>
