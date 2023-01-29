<?php
    session_start(); 
    require_once "functions.php" ;
    $con=connect_my_db();
    lgac();
?>
<html>
    <head>
        <title>machinary</title>
        <link rel="stylesheet" href="css/mystyle.css">
    </head>
    <body>
            <br>
            <h1 class="ff"><a href="index.php" class="name">FRESH FARM</a></h1>
            <div class="navbar" >
                <div class="dropdown">
                    <button class="dropbtn">Farmers Kits&#11183; </button> &nbsp;&nbsp;
                    <div class="dropdown-content">
                        <a href="machinary.php">Machinery and equipment</a>
                        <a href="of.php">organic fertilizers</a>
                        <a href="cf.php">chemical fertilizers</a>
                        <a href="uf.php">urea fertilizers</a>                        
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Farmers market &#11183; </button> &nbsp;&nbsp;
                    <div class="dropdown-content">
                        <a href="fru.php">Fruit</a> 
                        <a href="cer.php">cereals and pulses</a>
                        <a href="seeds.php">seeds</a>
                        <a href="veg.php">Vegetables</a>
                        <a href="dry.php">Dryfruits and nuts</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">My account &#11183; </button> &nbsp;&nbsp;
                    <div class="dropdown-content">
                        <a href="flogin.php">Farmer Login</a>
                        <a href="login.php">Customer Login</a>
                            <form method="post">
                                <div>
                                    <br>
                                    <input type="submit" value="logout" name="logout" class="mybtn right">
                                </div>
                            </form>
                    </div>
                </div>
            </div>
<h2 style="text-align:center">Farmer's Market</h2>
<center>
<form method="post">
    <table>
        <tr>
            <td>
                <div class="pcard col2">
                <img src="img/tiller.jpg" alt="Tiller">
                <h1>Tiller</h1>
                    <p class="price">$19.99</p>
                    <input type="number" class="kg" placeholder="in kg" pattern="[0-9]"></input><br><br>
                    <input type="submit" name="addcart"  class="ac" value="Add to Cart"></input>
                </div>
            </td>
            <td>
                <div class="pcard col2">
                <img src="img/sd.jpg" alt="Seed Drill">
                <h1>Seed Drill</h1>
                    <p class="price">$19.99</p>
                    <input type="number" class="kg" placeholder="in kg" pattern="[0-9]"></input><br><br>
                    <input type="submit" name="addcart"  class="ac" value="Add to Cart"></input>
                </div>
            </td>
            <td>
                <div class="pcard col2">
                <img src="img/plough.jpg" alt="Plough">
                <h1>Plough</h1>
                    <p class="price">$19.99</p>
                    <input type="number" class="kg" placeholder="in kg" pattern="[0-9]"></input><br><br>
                    <input type="submit" name="addcart" class="ac" value="Add to Cart"></input>
                </div>
            </td>
        </tr>
    </table>
</form>
</center>
</body>
</html>

