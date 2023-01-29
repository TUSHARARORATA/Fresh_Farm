<?php
 session_start();
 require_once "functions.php" ;
 $con=connect_my_db();   
 $uname=$_POST['user'];
 $pwd=$_POST['pass'];
 $sql="SELECT * FROM customer WHERE email='$uname' AND password='$pwd' ";

 if(isset($_POST['login']))
  {
    if(mysqli_error($con))
    echo "<br>Error = ".mysqli_error($con);
    $result=mysqli_query($con,$sql);
    $login=mysqli_num_rows($result)==1&&(!preg_match('/([\'"])/', $_POST['pass']));
    if($login)
      {
        $userinfo=mysqli_fetch_assoc($result);
        $_SESSION['userid']=$userinfo['custid'];
        header("location:index.php");
        exit();
      } 
    if(!$login)
      {
        echo '<script type="text/javascript"> alert("You Have Entered Incorrect Email/Password !!!"); </script>'; 
      }
  }
?>
<html>
    <head>
        <title>Login</title>
        <style>
            body{background-image:url("img/sign.png");background-repeat:no-repeat; background-size:cover;}
                .fix{position:absolute;}.lft{left:2%;} .top{top:7%;}
                .row{width:100%;}
                .col{width:33.33%; float:left; padding-bottom: 2%; font-size: 25px;}
                .col a{text-decoration:none; color:blue;}
                /* closable tabs */
                input[type=text],input[type=password], select, textarea{ width: 50%; padding: 12px; border: 1px rgb(255, 81, 0);box-shadow: 0px 1px 2px 0px rgba(0,0,0,1.0); border-radius: 4px; }
                u{color:blue;}
                .box{top:0%; z-index:10; position:absolute; padding-top:1%; padding-right:3%; padding-bottom:3%; padding-left:3%; width:93%; height:90%; color:Black; font-size:20px; background: inherit;  border-radius:15px;}
                .btn{background-color:inherit; color:black; font-size:16px; border:inherit;}
                .col-25 { float: left; width: 15%; margin-top: 10px; }
                .col-75 { float: left; width: 75%; margin-top: 6px; }
                .con{width:15%; padding:1%; background-color:rgb(255, 0, 0); color:white; border:none; border-radius:15px; box-shadow:0px 3px 8px 0px rgba(0,0,0,1.0);}
                .con:hover{ background-color:blue; font-size:16px; color:white; box-shadow: 0px 8px 16px 0px rgba(0,0,0,1.0);}
                .conhead{ color:white; border:15px;}
                .left{ float:left; }          .right{ float:right; } .yellow{color:yellow;}
                .loghead{padding:0.5%; color:white; border:15px;}
                label{color:white; font-size:x-large;}
                .mybtn{width:25%; padding: 2%; background-color:rgb(255, 0, 0); color:white; border:none; border-radius:15px; box-shadow:0px 3px 8px 0px rgba(0,0,0,1.0);}
                .mybtn:hover{ background-color:blue; font-size:16px; color:white; box-shadow: 0px 8px 16px 0px rgba(0,0,0,1.0);}
                .padding{padding-left:5%; padding-top:5%;}         .padtop{ padding-top:30%; }   .padrit{padding-right:5%; padding-top:2%;}  .padleft{padding-left:5%; padding-top:2%;} 
                .padl{padding-left:40%; padding-top:20%; padding-right:15%;}
                span{cursor:pointer;}
                #login a{text-decoration:none;color:white;}
            </style>
        </head>
    <body>
        <center>
            <div id="login">
                <header class="loghead">
                    <h1>Log In</h1> 
                </header>  
                don't have an account? <a href="agree.html"> Sign Up </a> 
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