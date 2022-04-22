<?php
require("db.php");
if(isset($_GET['editquery']))
{
    $id=$_GET['id'];
    $title=$_GET['title'];
    $content=$_GET['content'];

    //print_r($_GET['id']."<br>".$_GET['title']."<br>".$_GET['content']);
     $query = "UPDATE content SET title='$title',content='$content' WHERE id=$id";
    

    $run = mysqli_query($db,$query);
    if($run)
    {
        //if if navigate user to view conent it is giving error
         echo "<script>window.location.href='deletecontent.php';</script>";                    
    }

    else
    {
        echo"query not executed";
        //redirect user where he can reinsert values
    }

}
else
{
    echo "Not Clicket any Button";
}

// 


//var_dump($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Query</title>
</head>
<body>

</body>
</html>