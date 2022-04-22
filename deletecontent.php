<?php
require("db.php");
$query="SELECT * FROM content";
$run=mysqli_query($db,$query);
$data = array();

while($d=mysqli_fetch_assoc($run)){
    $data[]=$d;

    
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Admins</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View The Content</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <form method="POST" action="deletecontent.php">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                  <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Content</th>   
                        <th>View or Edit</th>
                        <th>Delete</th>                                    
                    </tr>

                    
                  </thead>
                  <tbody>
                    <tr>
                        
                  <?php
                  foreach($data as $dt)
                  {
                  ?>
                    <td>
                        <?=$dt['id']?></td>
                        <td><?=$dt['title']?></td>
                        <td><?=$dt['content']?></td>
                        <td><a class="btn-sm btn-success" href="viewcontent.php?id=<?=$dt['id']?>">View or Edit Content <i class="icon_close_alt2"></i></a></td>  
                        <td><a class="btn-sm btn-danger" href="deletecontent.php?id=<?=$dt['id']?>">Remove Content <i class="icon_close_alt2"></i></a></td>  
                    </tr>
                  <?php
                  }
                  ?>
<?php
 if(isset($_GET['id']))
 {
     print_r($_POST);
     $id=$_GET['id'];
 
     print_r($_POST);
     $query="DELETE FROM content WHERE id='$id'";
     $q=mysqli_query($db,$query);
     if($q)
     {
         echo "Query Executed";
         header('location:deletecontent.php');
     }
     else
     {
         echo"Query not executed";
     }
 }  
?>
                  </tbody>
                </table>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </html>
</body>
</html>