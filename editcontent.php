<?php
include("db.php"); 
     $id=$_GET['id'];


     $query="SELECT * FROM content WHERE id = '$id'";
     $q=mysqli_query($db,$query);
     $data = array();
     $a=array();
     if($q)
    {
        $dt=mysqli_fetch_array($q);
        print_r($dt);
        //    while($d=mysqli_fetch_assoc($q))
        //    {
        //        $a=$d;

        //        print_r($d);

        //    }
    }

 

    //print_r($d['title']);
    //$data[]=$d;

    //print_r($p);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CMS Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style>
        textarea {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;

    width: 100%;
        }

    </style>


</head>
<body>
    
<!--Hello Username Welcome to this site now you can edit,modify,write content--> 

<!-- Create a form have some values in it and insert it into database  -->

<form method="GET" action="editcontentquery.php?<?=$dt['id']?>">
<div class="card bg-success text-white">
              <div class="card-header">
                <h3 class="card-title">Publish Post</h3>
              </div>
</div>

              <div class="card-body">
              <input type="hidden" name="id" value="<?=$dt['id']?>">
                <b></b><input class="form-control form-control-lg" name="title" type="text" value="<?=$dt['title']?>"></input></b>
                <br>                
                 <input class= "form-control form-control-lg" name="content" class="form-control" value="<?=$dt['content']?>"></input></b>
                <br>
              </div>
              <input class="btn-lg btn-primary" type="submit" name="editquery"> <!--<a href="editcontentquery.php?id=<?=$dt['id']?>" class="text-center btn-lg btn-primary" role="button">Edit This</a></input> -->

             <!--  <a  class="text-center btn-lg btn-primary" href="editcontentquery.php?id=<?=$dt['id']?>">Edit This <i class="icon_close_alt2"></i></a></input> -->

              <!-- /*
Send Variables to next script using get in the address bar and in the next script attach that variables to the database 
              */ -->
              
              <!-- /.card-body -->
            </div> 

    
</form>





