<?php
 session_start();
 require_once "functions.php" ;
 $con=connect_my_db();   
 $uname=$_POST['user'];
 $pwd=$_POST['pass'];
 $sql="SELECT * FROM farmer WHERE email='$uname' AND password='$pwd' ";

 if(isset($_POST['login']))
  {
    if(mysqli_error($con))
    echo "<br>Error = ".mysqli_error($con);
    $result=mysqli_query($con,$sql);
    $login=mysqli_num_rows($result)==1&&(!preg_match('/([\'"])/', $_POST['pass']));
    if($login)
      {
        $userinfo=mysqli_fetch_assoc($result);
        $_SESSION['userid']=$userinfo['farmerid'];
        header("location:addpro.php");
        exit();
      } 
    if(!$login)
      {
        echo '<script type="text/javascript"> alert("hiii"); </script>'; 
      }
  }
?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="mycss.css">
        <style>
                .fix{position:absolute;}.lft{left:2%;} .top{top:7%;}
                .row{width:100%;}
                .col{width:33.33%; float:left; padding-bottom: 2%; font-size: 25px;}
                .col a{text-decoration:none; color:blue;}
            </style>
        </head>
    <body>
        <center>
            <div id="login">
                <header class="loghead">
                    <h1>Log In</h1> 
                </header>  
                don't have an account? <a href="fsignup.php"><u> Sign Up </u></a> 
                <hr class="hr">
                <form method="POST">
                    <div class="padding">            
                        <label for="user">Username :</label>            
                        <input type="text" id="user" name="user" placeholder="User Name" />
                    </div>
                    <div class="padding">
                        <label for="pass">Password :</label>
                        <input type="password" id="pass" name="pass" placeholder="Password" />
                    </div>
                    <div class="padding">
                        <input type="submit" class="mybtn" value="Login" name="login">
                    </div>
                    <br>
                </form>   
            </div>
        </center>
    </body>
</html>