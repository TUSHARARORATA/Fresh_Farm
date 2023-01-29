<?php
 session_start();
 require_once "functions.php" ;
 $con=connect_my_db();   
 $uname=$_POST['user'];
 $pwd=$_POST['pass'];
 $sql="SELECT * from farmer where email='$uname' AND pwd='$pwd' limit 1";

  if(isset($_POST['sign']))
  {
    $exist = mysqli_query($con, "SELECT * FROM farmer WHERE email = '{$uname}'");
    $sql="INSERT INTO farmer(seller_name, seller_address, state_id, country_id, city_id, pincode, contact_number, mobile_no, email_id, password, bank_name, bank_branch, bank_IFSC, bank_acno, status) VALUES ('$_POST[sellername]','$_POST[selleraddress]','$_POST[state]','$_POST[country]','$_POST[city]','$_POST[pincode]','$_POST[contactnumber]','$_POST[mbnumber]','$_POST[emailid]','$_POST[password]','$_POST[bankname]','$_POST[branch]','$_POST[ifsccode]','$_POST[bankacnumber]','Active')";	
    if(mysqli_num_rows($exist) > 0)
    {
        echo '<script type="text/javascript"> alert("Username already exist!!!"); </script>';
    }
    else
    {
        $signup=mysqli_query($con,$sqli);
        $result=mysqli_query($con,$sql);
        $userinfo=mysqli_fetch_assoc($result);
        $_SESSION['userid']=$userinfo['farmerid'];
        header("location:flogin.php");
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
                .fix{position:absolute;}.lft{left:2%;} .top{top:7%;}
                .row{width:100%;}
                .col{width:33.33%; float:left; padding-bottom: 2%; font-size: 25px;}
                .col a{text-decoration:none; color:blue;}
            </style>
        </head>
    <body>
        <center>
            <div id="signup">
                <header class="loghead">
                    <h1>Sign Up</h1> 
                </header> 
                already have an account? <a href="flogin.php"><u> Log In </u></a> 
                <hr class="hr">
                <form method="POST">
                    <div class="padding">            
                        <label for="user">customername :</label>            
                        <input type="text" id="user" name="customername" placeholder="User Name" />
                    </div>
                    <div class="padding">
                        <label for="pass">address :</label>
                        <input type="text" id="pass" name="address" placeholder="Password" /></br>
                    </div>
                    <div class="padding">    
                        <label for="pass">country :</label>
                        <input type="text" id="rpass" name="country" placeholder="Re-Enter the Password" />
                    </div>
                    <div class="padding">    
                        <label for="pass">state :</label>
                        <input type="text" id="rpass" name="state" placeholder="Re-Enter the Password" />
                    </div>
                    <div class="padding">    
                        <label for="pass">city :</label>
                        <input type="text" id="rpass" name="city" placeholder="Re-Enter the Password" />
                    </div>
                    <div class="padding">    
                        <label for="pass">pincode :</label>
                        <input type="text" id="rpass" name="pincode" placeholder="Re-Enter the Password" />
                    </div>
                    <div class="padding">            
                        <label for="user">cntctnum :</label>            
                        <input type="text" id="user" name="cntctnum" placeholder="User Name" />
                    </div>
                    <div class="padding">
                        <label for="pass">mblnum :</label>
                        <input type="text" id="pass" name="mblnum" placeholder="Password" /></br>
                    </div>
                    <div class="padding">    
                        <label for="pass">email_id :</label>
                        <input type="text" id="rpass" name="email_id" placeholder="Re-Enter the Password" />
                    </div>
                    <div class="padding">    
                        <label for="pass"> Password :</label>
                        <input type="password" id="rpass" name="password" placeholder="Re-Enter the Password" />
                    </div>
                    <div class="padding">
                        <input type="submit" class="mybtn" value="SignUp" name="sign">
                    </div>
                    <br>
                </form>    
            </div>
        </center>
    </body> 

</html>