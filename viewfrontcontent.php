<?php
require("db.php");
if(isset($_GET['id']))
{
    $id=$_GET['id'];
$query="SELECT * FROM content WHERE id = '$id'";
$run=mysqli_query($db,$query);
$data=array();

while($d=mysqli_fetch_array($run))
{
    $data=$d;
    //print_r($d['title']);
    //$data[]=$d;
   
   

}   print_r($data); 
 //print_r($data);   
}

//      $q=mysqli_query($db,$query);
//      if($q)
//      {
        
//          echo "Query Executed";
//          header('location:deletecontent.php');
//      }
//      else
//      {
//          echo"Query not executed";
//      }
//  }  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Content</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
    <!-- <form action="editcontent.php?id=<?=$data['id']?>"> -->
    
<div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-exclamation-triangle"></i>   
                  <?=$data['title']?>           
                <!-- <  !-- //print_r($data)//print_r($data['title']?>             -->
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <?=$data['content']?>
                </div>
                <button name="edit">

     <a name="back" class="btn-sm btn-danger" href="index.php"><-- Go Back <i class="icon_close_alt2"></i></a></button>
             <!-- <a name="edit" class="btn-sm btn-danger" href="editcontent.php?id=<?=$data['id']?>">Edit This <i class="icon_close_alt2"></i></a> -->
</form>
</body>
</html>