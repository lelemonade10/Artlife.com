<?php

$host="localhost";
$user="root";
$password="";
$db="demo";

$dbhandler = mysqli_connect($host, $user, $password);
mysqli_select_db($dbhandler, $db);

if(isset($_POST['username']))
{
    $uname = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from loginform where user = '".$uname."' AND pass = '".$password."' limit 1"; 

    $result = mysqli_query($dbhandler, $sql);

    if(mysqli_num_rows($result) == 1)
    {
        header('Location: http://localhost/ArtlifeProject/main-page.html');
        //echo "Fuck Your Password";
        exit();
    }
    else{
        echo "Wrong Password";
        exit();
    }
}
?>