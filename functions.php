<?php
function connect_my_db()
{
    $host="localhost";
    $user="root";
    $password="12345678";
    $db="freshfarm";
    $con=mysqli_connect($host,$user,$password,$db) or die("Sorry unable to connect");
    return $con;
}
function lgac()
{
    $con=connect_my_db();
    $result=mysqli_query($con,"SELECT * FROM customer where custid=".$_SESSION['userid']);
    if(isset($_POST['logout'])) 
    {
        session_destroy();
        header('Location: index.php');
    } 
    if(isset($_POST['addcart'])) 
    {  
        if(!$result)
        {
            header('Location: login.php');
        }
    }
}
?>