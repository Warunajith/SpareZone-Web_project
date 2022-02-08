
<?php 

session_start();
include('db.php');
if(isset($_REQUEST['register'])){

    $Fname=$_REQUEST['Fname'];
    $Lname=$_REQUEST['Lname'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
    $Cpassword=$_REQUEST['Cpassword'];
    $address=$_REQUEST['address'];
    $phonenumber=$_REQUEST['phonenumber'];
    $district=$_REQUEST['district'];
    $hometown=$_REQUEST['hometown'];
    $postalcode=$_REQUEST['postalcode'];
    

    $emailcheck=$con->query("SELECT email FROM customer");
    $available=0;
    while($row=$emailcheck->fetch_array()){

        if($row[0]==$email){
            $available=1;
            break;
        }
        else{
            $available=0;
        }


    }

    if($password!=$Cpassword)
    {
        ?>
    <script>
            alert(" Confirmation Password is not matching. Please Try again! ");
    </script>
  <?php
        
    }
    elseif($available==1)
    {  ?>
        <script>
                alert("E-mail is already registered . Please check your E-mail");
        </script>
      <?php
        
    }
    else{


        $_SESSION['Fname']=$Fname;
        $_SESSION['Lname']=$Lname;
        $_SESSION['$email']=$email;
        $_SESSION['password']=$password;
        $_SESSION['address']=$address;
        $_SESSION['phonenumber']=$phonenumber;
        $_SESSION['district']=$district;
        $_SESSION['hometown']=$hometown;
        $_SESSION['postalcode']=$postalcode;

        $min=100000;
        $max=999999;
        $vcode=rand($min,$max);
        $_SESSION['vcode']=$vcode;

        $to= $email;
        $subject="Verification of E-mail";
        $message="<h3>Hello ".$Fname." ,<br><br>This is the verification Code of your account. Please Enter this Code in verify box and activate your account.</h3><h1>".$vcode."</h1><h3> Thank you!<br>The SpareZone Team</h3>";
        $headers='From: [project.sparezone]@gmail.com' . "\r\n" .
                    'MIME-Version: 1.0' . "\r\n" .
                    'Content-type: text/html; charset=utf-8';

        if(mail($to,$subject,$message,$headers)){
            echo "E-Mail sent Successfully\n ".$vcode."";
            header('Location:verify.php');
        }
        else{
            echo "E-Mail sent Failed";
        }
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

  <link rel="stylesheet" href="Registration_Page_Style.css">
    <title>Registration</title>
</head>
<body>
    

    <div class="container">

        <div class="row bottom maintab">
        
            <div class="col-12">
                <img class="bottom imgicon" src="images/icon.png" alt="logo" style="width:180px; height:100px;">
                
            </div>
             
        </div>
        <br>
        <div class="register"><h2>Register Here</h2></div>
        <div class="main">
        
            <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="row">


                    <div class="name col-5">
                        <label for="#">First Name</label>
                        <input type="text" name="Fname" placeholder="Enter First Name" class="box" required="required" >
                    </div>
                    <div class="name col-5">
                        <label for="#">Last Name</label>
                        <input type="text" name="Lname" placeholder="Enter Last Name" class="box">
                    </div>

                </div>

                <div class="row">


                    <div class="name col-12">
                        <label for="#">Address</label><br>
                        <input type="address" name="address" placeholder="Enter Address" class="box" required="required" >
                    </div>


                </div>

                <div class="row">


                    <div class="name col-5">
                        <label for="#">Email</label>
                        <input type="email" name="email" placeholder="Enter Email" class="box" required="required">
                    </div>
                    

                </div>

                <div class="row">


                    <div class="name col-5">
                        <label for="#">Password</label>
                        <input type="password" name="password" placeholder="Enter Password" class="box" required="required">
                    </div>
                    <div class="name col-5">
                        <label for="#">Confirm Password</label>
                        <input type="password" name="Cpassword" placeholder="Re-enter Password" class="box" required="required">
                    </div>

                </div>


                <div class="row">


                    <div class="name col-5">
                        <label for="#">Phone Number</label>
                        <input type="text" name="phonenumber" placeholder="Enter Phone Number" class="box" required="required" >
                    </div>
                    

                </div>

                <div class="row">


                    <div class="name col-5">
                        <label for="#">Distric</label>
                        <input type="text" name="district" placeholder="Enter Distric" class="box" required="required" >
                    </div>
                    <div class="name col-5">
                        <label for="#">Home Town</label>
                        <input type="text" name="hometown" placeholder="Enter Town" class="box" required="required">
                    </div>

                </div>

                <div class="row">


                    <div class="name col-5">
                        <label for="#">Postal Code</label>
                        <input type="text" name="postalcode" placeholder="Enter Postal Code" class="box" required="required" >
                    </div>


                </div>

                

                
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-9">
                       <button type="submit" name="register" class="btn1 mt-3 mb-5" >Sign Up</button>
                    </div>
                </div>

                
            </form>
        </div>

    </div>

    

</body>
</html>