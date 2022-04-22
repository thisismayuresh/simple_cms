<?php
include("db.php");
//print_r($_POST);


if(!isset($_SESSION))
{
session_start();
echo "Good";
//print_r($_SESSION);

}
if(isset($_POST['submit']) && $_POST['title'] && $_POST['content']  !='')
{
     print_r($_POST);     
     $title=$_POST['title'];
     $content=$_POST['content'];

     $query="INSERT INTO content (title,content) VALUES ('$title','$content')";
     $q=mysqli_query($db,$query);
     if($q)
     {
         echo "$q";
     }
     else
     {
         echo "Problem While Executing Query";
     }


}
else
{
    echo "<script>alert('Please Enter the Title and Content !')</script>";
}
   




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

<form method="POST" action="admin.php">
<div class="card bg-success text-white">
              <div class="card-header">
                <h3 class="card-title">Publish Content</h3>
              </div>
</div>

              <div class="card-body">
                <b></b><input class="form-control form-control-lg" name="title" type="text" placeholder="Enter Title"></input></b>
                <br>
                 <textarea class="form-control" name="content" type="text" placeholder="Enter Content"></textarea>
                <br>
              </div>
              <input type="submit" name="submit" class="btn btn-block btn-warning btn-lg"></input>
              
              <!-- /.card-body -->
            </div> 
</form>


<form  method="POST" action="viewadmins.php">

<input type="submit" value="View Admins" name="ViewAdmins" class="btn-sm btn-success"></input>

</form>

<form  method="POST" action="register.php">

<input type="submit" value="Add Admins" name="AddAdmins" class="btn-sm btn-success"></input>

</form>

<form  method="POST" action="deletecontent.php">

<input type="submit" value="Delete Content" name="AddAdmins" class="btn-sm btn-success"></input>

</form>

<form  method="POST" action="deletecontent.php">

<input type="submit" value="Edit or View Content" name="AddAdmins" class="btn-sm btn-success"></input>

</form>


</body>
</html>





