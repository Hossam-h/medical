<?php
$host='localhost';
$username='root';
$pass='';
$dbname='medical';


$connection=mysqli_connect($host,$username,$pass,$dbname);

if(!$connection){
    echo"erorr is". mysqli_connect_error();
}


function db_insert($sql){
    global $connection;

    $result=mysqli_query($connection,$sql);

 if($result){
     return 'sucsess';
 }else{
     return'error';
 }

}



function getrow_all($table){
    global $connection;

    $sql="SELECT * FROM `$table` ";

    $result=mysqli_query($connection,$sql);

    if($result){
       
       $rows=[];
       if(mysqli_num_rows($result)>0){
        while($row= mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
 
       }
       
       return $rows;
    }
}


//--------------------

function getrows($table,$field,$value){
    global $connection;

    $sql="SELECT * FROM `$table` WHERE `$field`='$value' ";

    $result=mysqli_query($connection,$sql);

    if($result){
       
       $rows=[];
       
       if(mysqli_num_rows($result) > 0){
        $rows[]=mysqli_fetch_assoc($result);
         return $rows[0];        
       }else{
           echo"you not have row";
       }

    }
}

?>