
<?php require_once '../../config.php'; ?> 

<?php require_once BLA.'link/header.php';
 
?>
<div class ="col-lg-12 text-center">
    
            <?php if(! empty($_SESSION['successed'])) {?>
                    <h5 class="alert alert-success col-lg-12"><?php echo $_SESSION['successed']?></h5>
                    <?php }?>

        </div>
<div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">View All order</h3>
        
        <table class="table  table-bordered">

            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">mobile</th>
                    <th scope="col">notes</th>
                    <th scope="col">service</th>
                    <th scope="col">city</th>
                    <th scope="col">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                
                <?php $x=0 ; foreach (getrow_all('order') as $order) { ?>
                    <tr>
                  <td><?php echo $x ?> </td>
                  <td> <?php echo $order ['order_name'] ?> </td>
                  <td> <?php echo $order ['order_email'] ?> </td>
                  <td> <?php echo $order ['order_mobile'] ?> </td>
                  <td> <?php echo $order ['order_notes'] ?> </td>
                  <td> 
                    <?php echo (getrows('service','serv_id',$order ['order_serv_id'])) ['serv_name']?> 
                </td>
                <td> 
                    <?php echo (getrows('cities','city_id',$order ['order_city_id'])) ['city_name']?> 
                </td>
                  <td class="text-center"> 
                    <a href="<?php echo BUA.'order\delete.php?id='.$order['order_id'];?>"  class="btn btn-danger">Delete</a>  
                   
                   </td>
                  </tr>
                    <?php $x++;} ?>
            </tbody>
        </table>
    </div>


<?php require_once BLA.'link/footer.php'; ?>
<?php unset($_SESSION['successed'])?>
