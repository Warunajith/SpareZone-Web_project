<?php
session_start();
include('db.php');
$status = "";
if (isset($_POST['code']) && $_POST['code'] != "") {
    $code = $_POST['code'];
    $result = mysqli_query($con, "SELECT * FROM `items` WHERE `code`='$code'");
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $code = $row['code'];
    $price = $row['price'];


    $cartArray = array(
        $code => array(
            'name' => $name,
            'code' => $code,
            'price' => $price,
            'quantity' => 1,

        ));

    if (empty($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = $cartArray;
        //$status = "<div class='box'>Product is added to your cart!</div>";
    } else {
        $array_keys = array_keys($_SESSION["shopping_cart"]);
        if (in_array($code, $array_keys)) {
            //$status = "<div class='box' style='color:red;'>
            //Product is already added to your cart!</div>";
        } else {
            $_SESSION["shopping_cart"] = array_merge(
                $_SESSION["shopping_cart"],
                $cartArray
            );
            //$status = "<div class='box'>Product is added to your cart!</div>";
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
    <link rel="stylesheet" href="view_style.css">
</head>
<body>

<div class="container-fluid">

    <nav class="navbar navbar-expand-sm  navbar-light">
        <!-- Brand/logo -->
        <div class="col-sm-2">
            <a class="navbar-brand" href="home.php">
                <img src="img/icon1.png" alt="logo" style="width:195px; height:100px;">
            </a>
        </div>
        &emsp;&emsp;
        <div class="col-sm-6">

            <form class="navbar-form navbar-left">

                <div class="input-group row">
                    <div class="col-xl-10">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <div class="input-group-btn">
                        <button class="btn btn-success" type="button">
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
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart"
                     viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                                  style="color: aliceblue; font-size:1rem; ">
                   
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
  
</div><br><br>
<!--Common Header Ended-->

<?php

$num=$_GET['pcode'];
$sql= "SELECT `id`, `name`, `price`, `des`, `stock`, `code`, `rate` FROM `items` WHERE code='$num'";     
    $result= $con->query($sql);
    $row = mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="container">
            <div class="product-name ">
            
              <h1 ><?php echo $row['name'];?></h1> 
             
            </div>
     </div>
</div> <br>
<!--Main image and details start-->
<div class="container">
     <div class="row">
         
               
        <div class="col-sm-8">
        <div class="card1" style="width:650px; height:650px;">
            
            <div class="image">
            <img  src="img/<?php echo $row['code'];?>.jpg" class="img-thumbnail" alt="Cinque Terre"  style="width:550px ; height:550px;">
            </div>
            </div>    
        </div><br>
        
        <div class="col-sm-4">
            <div class="data" style="width:350px; height:650px;">
               <div class="price">
                   <h2>Price:</h2>
                   <h3><?php echo 'Rs. '.$row['price'];?></h3>
                </div><br><br>
                <div class="stock" style="width:250px; height:150px;">
                    
                   <?php if($row['stock']>5){?>
                        <h4>Available in Stock</h4>
                 <?php  }else{
                        echo" <h4>Not Available in Stock</h4>";

                 }
       
                   ?>
                </div><br><br>
                
                <div class="text-center">

                    <form method='post' action=''>
                         <input type='hidden' name='code' value="<?php echo $row['code'] ; ?>"/>

                        <button type='submit'  class='btn btn-warning' style='width:200px; height:50px; font-size:25px;'>
                        <strong>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart"
                     viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                        
                        
                        
                        Add to Cart</strong></button>
                    </form>

                </div>
                
            </div>
       </div>
              
         
    </div>
</div><br>
<!--Main image and details end-->


  

<div class="container pt-3">
<div class="card2 ">
 <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/<?php echo $row['code'];?>.jpg" alt="" width="500" height="450">
        </div>
        <div class="carousel-item">
            <img src="img/<?php echo $row['code'];?>.1.jpg" alt="" width="500" height="450">
        </div>
        <div class="carousel-item">
            <img src="img/<?php echo $row['code'];?>.2.jpg" alt="" width="500" height="450">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
 </div>
 </div>
</div><br>

<div class="container">
    
        <div class="description">
            <h3>Description</h3>
         <h6><?php echo $row['des'];?></h6> 
        </div>  
    
</div><br>
<!--Footer begin-->

<div class="container-fluid">

<nav class="navbar navbar-expand-lg bg-dark" style="height: 300px;">
    <div class="container">

        <div class="row">
            
            <div class="col-lg-6 text-left" style="width: 600px;">
              
                <h4 style="color: aliceblue;">Contact us</h4><br>
                        <ul class="nav flex-column" style="color: aliceblue;">
                            <li class="nav-item">Address: No 63, Galle road, Colombo</li><br>
                            <li class="nav-item">Phone: 011-6398746</li><br>
                            <li class="nav-item">Email: sparezone@gmail.com</li><br><br>
                        </ul>

                       
            </div>
            <div class="col-lg-6 ">
                <ul class="nav flex-column" style="color: aliceblue;">
                    <li class="nav-item"><h4 style="color: aliceblue;">Social</h4></li><br>
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                      </svg>
                      &nbsp;
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                      </svg>
                      &nbsp;
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                      </svg>
                      &nbsp;
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
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

