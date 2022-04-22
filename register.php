<?php
include("db.php");

if(isset($_POST['register']))
{
   // print_r($_POST);
    
     $newname=$_POST['newname'];
     $newusername=$_POST['newusername'];
     $newpassword=$_POST['newpassword'];

     echo $newname." ". $newusername ." ".$newpassword;

     if($newname && $newusername && $newpassword == '')
     {
         echo "All Fields are blanks Enter Something !!!!";
     }
   else
   {         
        $query="INSERT INTO admins (name,username,password) VALUES ('$newname','$newusername','$newpassword')";  
        $q=mysqli_query($db,$query);
   }
     if($q)
     {
         //print_r($q);

         
         //print_r("Query Returned".$q);
         echo "<script>alert('Now You Can Login with the username and password !')</script>";

         echo "<script>window.location.href = 'login.php';</script>";        
         //header('location:index.php');
        

     }
     
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple_CMS</title>
</head>
<body>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <form method="POST" action="register.php">
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                            <h3 class="text-center text-info">Admin Register</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Name:</label><br>
                                <input type="text" name="newname" id="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="newusername" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="newpassword" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="register" class="btn btn-info btn-md" value="Register">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="login.php" class="text-info">Login Here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>
