<?php
 session_start();
 require_once "functions.php" ;
 $con=connect_my_db();   
 $uname=$_POST['user'];
 $pwd=$_POST['pass'];
 $sql="SELECT * from customer where email='$uname' AND pwd='$pwd' limit 1";

  if(isset($_POST['sign']))
  {
    $exist = mysqli_query($con, "SELECT * FROM customer WHERE email = '{$uname}'");
    $sqli="INSERT INTO `customer`( `customer_name`, `address`, `country_id`, `state_id`, `city_id`, `pincode`, `contact_no`, `mobile_no`, `email_id`, `password`, `customer_type`, `status`) VALUES ('$_POST[customername]','$_POST[address]','$_POST[country]','$_POST[state]','$_POST[city]','$_POST[pincode]','$_POST[cntctnum]','$_POST[mblnum]','$_POST[email_id]','$_POST[password]','$_POST[customertype]','$_POST[status]')";	
    if(mysqli_num_rows($exist) > 0)
    {
        echo '<script type="text/javascript"> alert("Username already exist!!!"); </script>';
    }
    else
    {
        $signup=mysqli_query($con,$sqli);
        $result=mysqli_query($con,$sql);
        $userinfo=mysqli_fetch_assoc($result);
        $_SESSION['userid']=$userinfo['custid'];
        header("location:login.php");
        if(!$signup)
        {
            echo mysqli_error($con);
        }
    }
    if(mysqli_error($con))
    echo "<br>Error = ".mysqli_error($con);
  }
?>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="mycss.css">
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
                .mybtn{width:30%; padding: 5% 35% 5% 15%; background-color:rgb(255, 0, 0); color:white; border:none; border-radius:5px; box-shadow:0px 3px 8px 0px rgba(0,0,0,1.0);text-align:center;}
                .mybtn:hover{ background-color:blue; color:white; box-shadow: 0px 8px 16px 0px rgba(0,0,0,1.0);}
                .padding{padding-left:5%; padding-top:5%;}         .padtop{ padding-top:30%; }   .padrit{padding-right:5%; padding-top:2%;}  .padleft{padding-left:5%; padding-top:2%;} 
                .padl{padding-left:40%; padding-top:20%; padding-right:15%;}
                span{cursor:pointer;}
                #signup a{text-decoration:none;color:white;}
                .col-15 { float: left; width: 15%; margin-top: 6px; }
                .col-65 { float: left; width: 65%; margin-top: 6px; }
                .row:after { content: ""; display: table; clear: both; }
                label { padding: 12px 12px 12px 0; display: inline-block; color:#fff;}    
                .container { border-radius: 5px; padding: 20px; padding-left: 5%; }
            </style>
        </head>
    <body>
        <center>
            <div id="signup">
                <header class="loghead">
                    <h1>Sign Up</h1> 
                </header> 
                already have an account? <a href="index.php"> Log In </a> 
                <hr class="hr">
                <form method="POST">
                    <div class="row">
                        <div class="col-15">            
                            <label for="user">customername :</label> 
                        </div>
                        <div class="col-65">           
                            <input type="text" id="user" name="customername" placeholder="User Name" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-15">
                            <label for="pass">address :</label>
                        </div>
                        <div class="col-65"> 
                            <input type="text" id="pass" name="address" placeholder="Password" /></br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-15">   
                            <label for="pass">country :</label>
                        </div>
                        <div class="col-65">          
                            <input type="text" id="rpass" name="country" placeholder="Re-Enter the Password" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-15">    
                            <label for="pass">state :</label>
                        </div>
                        <div class="col-65">           
                            <input type="text" id="rpass" name="state" placeholder="Re-Enter the Password" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-15">      
                            <label for="pass">city :</label>
                        </div>
                        <div class="col-65">  
                            <input type="text" id="rpass" name="city" placeholder="Re-Enter the Password" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-15">      
                            <label for="pass">pincode :</label>
                        </div>
                        <div class="col-65">
                            <input type="text" id="rpass" name="pincode" placeholder="Re-Enter the Password" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-15">               
                            <label for="user">cntctnum :</label>
                        </div>
                        <div class="col-65">
                            <input type="text" id="user" name="cntctnum" placeholder="User Name" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-15">    
                            <label for="pass">mblnum :</label>
                        </div>
                        <div class="col-65">
                            <input type="text" id="pass" name="mblnum" placeholder="Password" /></br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-15">        
                            <label for="pass">email_id :</label>
                        </div>
                        <div class="col-65">
                            <input type="text" id="rpass" name="email_id" placeholder="Re-Enter the Password" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-15">        
                            <label for="pass"> Password :</label>
                        </div>
                        <div class="col-65">
                            <input type="password" id="rpass" name="password" placeholder="Re-Enter the Password" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-15">    
                        <input type="submit" class="mybtn" value="SignUp" name="sign">
                    </div>
                    <br>
                </form>    
            </div>
        </center>
    </body> 

</html>