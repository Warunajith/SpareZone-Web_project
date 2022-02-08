<?php 
session_start();
include('db.php');

if(isset($_REQUEST['verify'])){
       

   

        if($_REQUEST['entercode']==$_SESSION['vcode']){

            $last_customer_id=$con->query("SELECT MAX(customer_id) FROM customer");
            $last_customer_id=$last_customer_id->fetch_array();
            $last_customer_id=intval($last_customer_id[0]);
            $next_customer_id=$last_customer_id+1;

            $sql="INSERT INTO customer values ( '".$next_customer_id."',
                                                '".$_SESSION['Fname']."',
                                                '".$_SESSION['Lname']."',
                                                '".$_SESSION['$email']."',
                                                '".md5($_SESSION['password'])."',
                                                '".$_SESSION['address']."',
                                                '".$_SESSION['phonenumber']."',
                                                '".$_SESSION['district']."',
                                                '".$_SESSION['hometown']."',
                                                '".$_SESSION['postalcode']."'
                                            )";

            $result	=$con->query($sql);

            header('Location:Welcome_page.php');
        }
        else{
            echo" Enetred Code is Wrong";
        }

   


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
    <title>Verify</title>
</head>
<body>
    

    <div class="container">

        <div class="row bottom maintab">
      
            <div class="col-12">
                <img class="bottom imgicon" src="images/icon.png" alt="logo" style="width:180px; height:100px;">
                
            </div>
             
        </div>
        

        <div class="login"><h2>Verify Here</h2></div>
       
        
        <div class="main">
        
            <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
               

                <div class="row">

                    <div class="col-3"></div>
                    <div class="name col-5">
                        
                        <input type="text" name="entercode" placeholder="Enter the code" class="box" required="required">
                    </div>
                    

                </div>


                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-8">
                       <button type="submit" name="verify" class="btn1 mt-3 mb-5 bg-danger" >Verify</button>
                    </div>
                </div>

                
            </form>
        </div>


       

    </div>

    

</body>
</html>