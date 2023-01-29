<!DOCTYPE html>
<html>
  <head>
    <title>Add-Products</title>    

    <style>
      * { box-sizing: border-box; }
      body,html{margin:0; background-image:url('img/blue.jpg'); background-repeat:no-repeat; background-size:cover;position:center; height:100%;width:100%;}
      fieldset{width:90%; border-radius:5px; border-color:#01FF00;}
      .bg{position:fixed; overflow-x:hidden; background-image:url('back.jpg'); background-repeat:no-repeat; background-size:cover;position:center; height:100%;width:100%;}
      .box{position:absolute; padding-left:3%;padding-right:3%;padding-bottom:3%; width:100%; color:white; font-size:20px; background-color:rgba(000,000,000,0.700); box-shadow: 0px 8px 16px 0px rgba(0,0,0,1.0); border-radius:15px;}
      .mybtn{width:10%; padding:1%; background-color:#7b3d11; color:white; border:none; border-radius:5px; box-shadow:0px 3px 8px 0px rgba(0,0,0,1.0);}
      .mybtn:hover{background-color:#F7642D; font-size:16px; color:white; box-shadow: 0px 8px 16px 0px rgba(0,0,0,1.0);}
      .h1{ color:white; border-radius:15px; text-align: center;}
      input[type=text],[type=number], select, textarea { width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical; }
      label { padding: 12px 12px 12px 0; display: inline-block; }    
      .container { border-radius: 5px; padding: 20px; padding-left: 5%; }
      .col-15 { float: left; width: 15%; margin-top: 6px; }
      .col-65 { float: left; width: 65%; margin-top: 6px; }
      .row:after { content: ""; display: table; clear: both; }
      .right{float:right;} .left{float:left;}
      form,label{cursor: pointer;}
      @media screen and (max-width: 600px) { .col-15, .col-65,input[type=submit] { width: 100%;  margin-top: 10; } select{height:20%;} }
    </style>
  </head>
<body>
  <div class="bg">
    <div class="box">
              <br>  
              <h1 class="h1">Add Product</h1>
              <form method="post">
                <div>
                    <br>
                    <input type="submit" value="Home" name="dash" class="mybtn left" />
                    <input type="submit" value="logout" name="logout" class="mybtn right" />
                    <br><br><br><br>
                </div>
            </form>  
              <center>
                <fieldset>
                  <legend>Add-Products</legend>
                  <div class="container">
                    <h1>Select the products and enter the price of the products</h1><br><br>

                    <form method="post">
                        <div class="row">
                            <div class="col-65">
                                <label class="container">Apple
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-15">
                              <input type="number" id="sid" name="sid" placeholder="Price" value="some value" />
                            </div> 
                        </div>
                          
                        <div class="row">
                            <div class="col-65">                      
                                <label class="container">Tomato
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-15">
                              <input type="number" id="sid" name="sid" placeholder="Price" min="1"/>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-65">
                                <label class="container">Dragon Fruit
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-15">
                              <input type="number" id="sid" name="sid" placeholder="Price" value="some value" />
                            </div> 
                        </div>
                          
                        <div class="row">
                            <div class="col-65">                      
                                <label class="container">Carrot
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-15">
                              <input type="number" id="sid" name="sid" placeholder="Price" min="1"/>
                            </div> 
                        </div>
                      <div class="row">
                          <br><br>
                        <input type="submit" value="Update" name="edit" class="mybtn" /> &nbsp;
                      </div><br><br>
                    </form>
                  </div>
                </fieldset>
              </center>
    </div>
  </div>
</body>
</html>