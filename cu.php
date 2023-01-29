<?php
 session_start();
 require_once "functions.php" ;
 $con=connect_my_db();

 if(isset($_POST['contact']))
  {
    $name=$_POST['name'];
    $pno=$_POST['pno'];
    $message=$_POST['message'];

    $insert = "INSERT INTO messages(`name`,`pno`,`messages`) VALUES ('$name','$pno','$message')";
    $insert=mysqli_query($con,$insert);
    if(!$insert)
    {
        echo mysqli_error($con);
    }
  }
  ?>
<html>
<head>
    <title>Contact Us</title>
    <style>
        body{ padding-bottom:2%;margin:0; background-image:url('img/bg2.jpg'); background-repeat:no-repeat; background-size:cover;position:center; height:100%;width:100%;}

    </style>    
</head>    
<body>
    <center>
        <div id="contactus" class="box tabs">
            <header class="conhead">
            <span class="left" onclick="closetabs();"> &#10060; </span>
                <h1>Contact Us</h1>
            </header>
            <label class="yellow"> Email : vsupport@freshfarm.com </label>
            <hr class="hr">

            <form method="post"><br>
                <div class="row">
                    <div class="col-25">
                        <label for="name">Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="name" name="name" placeholder="Your name..">
                    </div>
                    
                </div><br><br><br>
                <div class="row">
                    <div class="col-25">
                        <label for="pno">Phone Number</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="pno" name="pno" placeholder="Your pno ID..">
                    </div>
                </div><br><br><br>                
                <div class="row">
                    <div class="col-25">
                        <label for="message">Message</label>
                    </div>
                    <div class="col-75">
                        <textarea id="message" name="message" placeholder="Write Message Here.." style="height:100px"></textarea>
                    </div>
                </div><br><br><br>            
                <div class="padding">
                    <input type="submit" class="con" style="float:left;" value="Submit" name="contact">
                </div>                
            </form>
        </div>
    </center>
</body>
<script>
    function closetabs() 
    {
        location.replace("index.php")
    }
</script>    
</html>