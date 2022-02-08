<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="Welcome_Page_Style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Spare Zone Welcome Page</title>
</head>

<body>

    <div class="container">
        <div class="row  mb-5 mt-3 ">
           
            <div class="col-12 text-center mt-3 mb-5" >
                <h1 style="color: #00FF00;">Welcome to Spare Zone</h1>
               
            </div>
        </div>

        

        <div class="row mt-3 mb-5">
            
            <!--welcome text-->
            
            <div class="col-4 col-sm-4">
                <h3 style="color: rgb(188, 229, 223);" class="mx-auto dblock" style="font-size:20vw; text-shadow: 2px 2px;"> Hello,<br>
                    Log into your <br>
                    account for a <br>
                    quick and easy <br>
                    buying. <br>
                    The biggest  <br>
                    online Vehical Parts <br>
                    selling Company...</h3>
            </div>

            <!--loging box-->

            <div class="col-4 col-sm-4">
                <form class="box" method="post" class="mx-auto dblock" action="Login_Page.php">
                    <h3 style="color: bisque;">Already have an account?</h3>
                   <h5> <button type="submit"target="_blank" style="cursor:pointer; text-decoration: none;">Login here</button></h5>
                </form>
            </div>

            <!--registration box-->

           <div class="col-4 col-sm-4">
            <form class="box" method="post" class="mx-auto dblock" action="Registration_Page.php">
                <h3 style="color: bisque;">New to Spare Zone?</h3>
               <h5> <button type="submit" target="_blank" style="cursor:pointer; text-decoration: none;">Register here</button></h5>
                
            </form>
           </div>

           
           
        </div>

    </div>


</body>
</html>