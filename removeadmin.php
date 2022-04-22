<?php
require 'db.php';
 if(isset($_GET['id']))
{
    print_r($_POST);
    $id=$_GET['id'];

    print_r($_POST);
    $query="DELETE FROM admins WHERE id='$id'";
    $q=mysqli_query($db,$query);
    if($q)
    {
        echo "Query Executed";
        header('location:viewadmins.php');
    }
    else
    {
        echo"Query not executed";
    }
}  

// }
// else{
//     echo"Button is not set";
// }

?>