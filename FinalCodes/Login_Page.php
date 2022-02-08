<?php 
session_start();
include('db.php');
if(isset($_REQUEST['login'])){


    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];

    
    $result= $con->query("SELECT `customer_id`, `Fname`, `email`, `password` FROM `customer`");
    
    while($row=$result->fetch_array()){

        if($row['email']==$email && $row['password']==md5($password)){

            
            $_SESSION['username']=$row['Fname'];
            $_SESSION['userid']=$row['customer_id'];

            header('Location:home.php');

            break;

        }
        else{
            
        }

    }?>
    <script>
            alert("Invalid E-mail or Password");
    </script>
  <?php

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="Login_Page_Style.css">
    <title>Login</title>
</head>
<body>
    

    <div class="container">

        <div class="row bottom maintab">
      
            <div class="col-12">
                <img class="bottom imgicon" src="images/icon.png" alt="logo" style="width:180px; height:100px;">
                
            </div>
             
        </div>
        

        <div class="login"><h2>Login Here</h2></div>
       
        
        <div class="main">
        
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
               

                <div class="row">

                    <div class="col-3"></div>
                    <div class="name col-5">
                        <label for="#">Email</label><br>
                        <input type="email" name="email" placeholder="Enter Email" class="box" required="required">
                    </div>
                    

                </div>

                

                <div class="row">

                    <div class="col-3"></div>
                    <div class="name col-5">
                        <label for="#">Password</label>
                        <input type="password" name="password" placeholder="Enter Password" class="box" required="required">
                    </div>
                   

                </div>


                
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-8">
                       <button type="submit" name="login" class="btn1 mt-3 mb-5 bg-primary" >Login</button>
                    </div>
                </div>

                
            </form>
        </div>


       

    </div>

    

</body>
</html>