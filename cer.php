<?php
    session_start(); 
    require_once "functions.php" ;
    $con=connect_my_db();
    lgac();
?>
<html>
    <head>
        <title>Cereals</title>
        <link rel="stylesheet" href="css/mystyle.css">
    </head>
    <body>
            <br>
            <h1 class="ff"><a href="index.html" class="name">FRESH FARM</a></h1>
            <div class="navbar" >
                <div class="dropdown">
                    <button class="dropbtn">Farmers Kits&#11183; </button> &nbsp;&nbsp;
                    <div class="dropdown-content">
                        <a href="machinary.html">Machinery and equipment</a>
                        <a href="of.html">organic fertilizers</a>
                        <a href="cf.html">chemical fertilizers</a>
                        <a href="uf.html">urea fertilizers</a>                        
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Farmers market &#11183; </button> &nbsp;&nbsp;
                    <div class="dropdown-content">
                        <a href="fru.html">Fruit</a> 
                        <a href="cer.html">cereals and pulses</a>
                        <a href="seeds.html">seeds</a>
                        <a href="veg.html">Vegetables</a>
                        <a href="dry.html">Dryfruits and nuts</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">My account &#11183; </button> &nbsp;&nbsp;
                    <div class="dropdown-content">
                        <a href="">Farmer Login</a>
                        <a href="">Customer Login</a>
                    </div>
                </div>
            </div>
<h2 style="text-align:center">Farmer's Market</h2>
<center>
<form method="post">
    <form
    <table>
        <tr>
            <td>
                <div class="pcard col2">
                <img src="img/toordaal.jpg" alt="Toordal">
                <h1>Toordal</h1>
                    <p class="price">$19.99</p>
                    <input type="number" class="kg" placeholder="in kg" pattern="[0-9]"></input><br><br>
                    <input type="submit" name="addcart" class="ac" value="Add to Cart"></input>
                </div>
            </td>
            <td>
                <div class="pcard col2">
                <img src="img/moongdaal.jpg" alt="Moongdaal">
                <h1>Moongdaal</h1>
                    <p class="price">$19.99</p>
                    <input type="number" class="kg" placeholder="in kg" pattern="[0-9]"></input><br><br>
                    <input type="submit" name="addcart" class="ac" value="Add to Cart"></input>
                </div>
            </td>
            <td>
                <div class="pcard col2">
                <img src="img/kalachanna.jpg" alt="Kalachanna">
                <h1>Kalachanna</h1>
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

