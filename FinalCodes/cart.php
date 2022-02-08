<?php
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["code"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
      }		
}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>SpareZone</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>

<div class="container-fluid">

    <nav class="navbar navbar-expand-lg  navbar-light">
        <!-- Brand/logo -->
        <div class="col-sm-2">
            <a class="navbar-brand" href="home.php">
                <img src="img/icon1.png" alt="logo" style="width:195px; height:100px;">
            </a>
        </div>
        &emsp;&emsp;
        <div class="col-sm-6">

            <form class="navbar-form navbar-left" action="">

                <div class="input-group row">
                    <div class="col-xl-10">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <div class="input-group-btn">
                        <button class="btn btn-success" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" fill="currentColor"
                                 class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>

                    </div>
                </div>
            </form>
        </div>

        <div class="col-sm-4" style="width: 300px;">

            <ul class="navbar-nav">
            <li class="nav-item dropdown">

<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" >
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
         class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd"
              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
    </svg>


    &nbsp;<strong>Hello!</strong> <?php echo "<strong>".$_SESSION['username']."</strong>"; ?>&nbsp;
    </a>
    <!--Get the User NAME HERE-->
    <!--Get the User NAME HERE-->
    <!--Get the User NAME HERE-->
    <div class="dropdown-menu">
<a class="dropdown-item" href="Login_Page.php">Log Out</a>

</div>
</li>

                <li class="nav-item">
                    <a href="cart.php">

                        <button class="btn btn-default" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                 class="bi bi-cart"
                                 viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>

                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                                  style="color: aliceblue; font-size:1rem;">
                                  <?php
                    if (!empty($_SESSION["shopping_cart"])) {
                        $cart_count = count(array_keys($_SESSION["shopping_cart"]));
                        echo $cart_count;
                    }
                    else{
                        echo"0";
                    }

                    ?>
                                </span>

                        </button>

                    </a>
                </li>
            </ul>
        </div>
    </nav>

</div>

<div class="container">
<nav class="navbar navbar-expand-sm bg-dark">
        <ul class="nav nav-pills">
            <li class="nav-item active">
                <a class="nav-link text-white " href="home.php"><h5>Home</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="shop.php?page=<?php echo"Breaks";?>"><h5>Breaks & Suspension</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="shop.php?page=<?php echo"BodyParts";?>"><h5>Body Parts & Mirrors</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="shop.php?page=<?php echo"Lights";?>"><h5>Lights</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="shop.php?page=<?php echo"EngineParts";?>"><h5>Engine Parts</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="shop.php?page=<?php echo"ElectricalParts";?>"><h5>Electrical Parts</h5></a>
            </li>
        </ul>
    </nav>
</div>
<!--Common Header Ended-->
<!--Table begins-->
<br><br>
<div class="container">
    <div class="row">

        <div class="col-sm-9">

            <h4>Shopping Cart</h4>

            <?php
                    $total_price = 0;
                    if(isset($_SESSION["shopping_cart"])){
                    
            ?>



            <table class="table table-bordered">
                <thead>
                <tr>

                    <th>Product Name</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th></th>

                </tr>
                </thead>
                <tbody>

                <?php		
                    foreach ($_SESSION["shopping_cart"] as $product){
                ?>


                <tr>

                    <td>
                        
                        <img src="img/<?php echo "" . $product['code'] . ""; ?>.jpg" class="img-responsive" alt="Berry Lace Dress"
                                                     style="width:60px ; height:60px;">
                    
                    
                        <?php echo $product["name"]; ?>
                   </td>



                    <td><?php echo "Rs".$product["price"]; ?></td>
                    <td>

                    <form method='post' action=''>

                        <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                        <input type='hidden' name='action' value="change" />

                            <select name='quantity' class='quantity bg-warning' onChange="this.form.submit()" style="width:50px; height:30px;">
                                <option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
                                
                                <option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
                                
                                <option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
                                
                                <option <?php if($product["quantity"]==4) echo "selected";?>  value="4">4</option>
                               
                                <option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
                                
                            </select>

                        </form>

                    </td>
                    <td><?php echo "Rs.".$product["price"]*$product["quantity"]; ?></td>
                    <td>


                    <form method='post' action=''>
                    <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                    <input type='hidden' name='action' value="remove" />
                    <button type='submit' class='btn btn-default'>

                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="#A70845"
                             class="bi bi-file-x-fill " viewBox="0 0 16 16">
                            <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM6.854 6.146 8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 1 1 .708-.708z"/>
                        </svg>

                    </button>
                    </form>         

                        


                    </td>
                </tr>
                <?php
                        $total_price += ($product["price"]*$product["quantity"]);
                }
                ?>

                </tbody>
            </table>
            <?php
                }else{
                    echo "<br><h3> Your cart is empty!</h3>";
                    }
            ?>
        </div>
        <div class="col-sm-3">

            <div class="card bg-light text-dark" style="width:300px; height:450px;">
                <div class="card-body">


                    <table class="table ">
                        <thead>
                        <h5>Cart Total</h5><br>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Subtotal</td>
                            <td><strong><?php echo "Rs.".$total_price.".00"; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Delivery Charges</td>
                            <td><strong>0.00</strong></td>
                        </tr>
                        <tr>
                            <td>Discount</td>
                            <td><strong>0.00</strong></td>
                        </tr>
                        <tr class="bg-success text-light">
                            <td><strong>Grand Total</strong></td>
                            <td><h5><?php echo "Rs.".$total_price.".00"; ?></h5></td>
                        </tr>


                        </tbody>
                    </table>
                    <br>
                    <div style="text-align: center;">
                    <a href="checkout.php">
                        <button type="button" class="btn btn-danger"  style="width:250px; height:50px;"><strong>Proceed to Checkout</strong></button>
                </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br>
<br>
<!--Footer begin-->

<div class="container-fluid " style="position: fixed-bottom;">

    <nav class="navbar navbar-expand-lg bg-dark" style="height: 300px;">
        <div class="container" style="position: fixed-bottom;">

            <div class="row">

                <div class="col-lg-6 text-left" style="width: 600px;">

                    <h4 style="color: aliceblue;">Contact us</h4><br>
                    <ul class="nav flex-column" style="color: aliceblue;">
                        <li class="nav-item">Address: No 63, Galle road, Colombo</li>
                        <br>
                        <li class="nav-item">Phone: 011-6398746</li>
                        <br>
                        <li class="nav-item">Email: sparezone@gmail.com</li>
                        <br><br>
                    </ul>


                </div>
                <div class="col-lg-6 ">
                    <ul class="nav flex-column" style="color: aliceblue;">
                        <li class="nav-item"><h4 style="color: aliceblue;">Social</h4></li>
                        <br>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                 class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                            &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                 class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                            </svg>
                            &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                 class="bi bi-twitter" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                            </svg>
                            &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                 class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </li>
                    </ul>

                </div>
                <div class="row">
                    <div class="col-lg-12 " style="width:1000px;text-align: center;">

                        <h6 style="color: aliceblue;">Copyright ©2021 All rights reserved</h6>
                    </div>
                </div>

    </nav>

</div>


<!--Footer End-->


</body>
</html>