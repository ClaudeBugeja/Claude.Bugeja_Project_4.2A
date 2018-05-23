<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    
    <head>
        <title>Redefined</title>
        <link rel="icon" href="images/blacklogo.png" type="image" width="20" height="20">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="Login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body style="background-color:#F5F5F5; width:100%;">
        <br/>
        
        <div class="row nopadding" style="width:100%;">
            <div class="col-lg-2 col-sm-2 nopadding"></div>
        <div class="col-lg-8 col-sm-12 nopadding" style="text-align: center;">
            <a href="index.php">
                <img id="logo" src="images/Black_Logo.png">
            </a>
        </div>
            <div class="col-lg-2 col-sm-2 nopadding"></div>
        </div>
        <br/>
        <div class="row nopadding" style="width:100%;">
            <div class="col-lg-4 col-sm-4 nopadding"></div>
        <div class="col-lg-2 nopadding" style="background-color:white; height:100%;">
          
                <div onclick="myFunction()" class="col-lg-12">
                    <h5 style="text-align: center; margin:5%;">NEW TO REDIFINED?</h5>
                </div>
     
        </div>
        
        <div class="col-lg-2 nopadding" style="background-color:white; height:100%; border-left: 2px solid black;">
                <div onclick="myFunction()" class="col-lg-12">
                    <h5 style="text-align: center; margin:5%;">ALREADY REGISTERED?</h5>
                </div>

        </div>
            <div class="col-lg-4 nopadding"></div>
        </div>
        <br/> 
        <div class="row nopadding" style="width:100%;">
            <div class="col-lg-4 nopadding"></div>
        <div class="col-lg-4 nopadding" style="background-color:white; height:100%;">
            <br/>
            
            <div  id="LogIn">
                <h5   style="font-weight: bold; text-align: center;">SIGN IN WITH EMAIL</h5>
                <form method="POST" action="Data.php">
                  <div class="form-group" style="margin-left:5%; margin-right:5%;">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                  
                
                  </div>
                  <div class="form-group" style="margin-left:5%; margin-right:5%;">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="Password" placeholder="Password">
                    <a href="FPass.php" style="color:black;">
                        <small id="emailHelp" class="form-text text-muted">Forgot Password?</small></a>
                    </div>
                    <?php
                    if(isset($_POST['Submit'])){
                        $Username = $_POST["email"];
                        $Password = $_POST["Password"];
                        require_once("Connection_Project.php");
                        $query = "select AccountID, Email, Password, FirstName from user where Email = '$Username' and Password = '$Password'";
                        $result = mysqli_query($conn, $query);
                           if(mysqli_num_rows($result) == 0){
                                   $row = mysqli_fetch_row($result);
                                   echo "<p style='color:red; margin-left:5%;'>$row[1] Email or Password does not exist</p>";
                               }
                            else{
                                require_once("Connection_Project.php");
                                $row = mysqli_fetch_row($result);
                                $email = $row[1];
                                $_SESSION['Email'] = $email;
                                $name = $row[3];
                                $_SESSION['name'] = $name;
                                $AccountID =  $row[0];  
                                $_SESSION['AccountID'] = $AccountID;
                                 echo "<p style='margin-left:5%;'>Name is $_SESSION[Email] <br/></p>";
                                echo "<p style='margin-left:5%;'>Name is $_SESSION[name] <br/></p>";
                                echo "<p style='margin-left:5%;'>Your AccountID is $_SESSION[AccountID]</p>";
                            }
        }
        
                    ?>
                    
                    <button type="submit" class="btn btn-primary" style="margin-left:5%; margin-right:5%;" name="Submit" href="inde.php">Submit</button>

                </form>
                <br/>
            </div>
            
            
            <div id="SignUp">
            <h5   style="font-weight: bold; text-align: center;">SIGN UP USING YOUR EMAIL ADRESS</h5>
                <br/>
            <div class="container">
            <form method="POST" action="Data.php">
              <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control"  aria-describedby="emailHelp" name="Email">
                <small id="emailHelp" class="form-text text-muted">We'll send your order confirmation here.</small>
              </div>
               <div class="form-group">
                <label for="exampleInputPassword1">First Name</label>
                <input type="text" class="form-control"  name="FirstName">
               </div>
                <div class="form-group">
                <label>Second Name</label>
                <input type="text" class="form-control" name="Surname">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="Password">
              </div>
              
                <br/>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
             </form>
                <br/>
            </div>
        </div>
            </div>
        
            <div class="col-lg-4 nopadding"></div>
        </div>
        <?php
            
           if(isset($_POST['submit'])){
            $name = $_POST['FirstName'];
            $username = $_POST['Email'];
            $numbers = $_POST['Surname'];
            $comments = $_POST['Password'];
            $emailTo = 'claude.bugeja.b42219@mcast.edu.mt'; #later
            $Pass = "Mcast11001";
            require_once("Connection_Project.php");
            $query = "select Email from user where Email = '$username'";
            $result = mysqli_query($conn, $query)
                        or die ("Error in query" . mysqli_error($conn));;
               if(mysqli_num_rows($result) > 0){
                       $row = mysqli_fetch_row($result);
                       echo "$row[0] Email is taken";
                   }
               else{
                    
                    $query = "INSERT INTO user (Email, Password, FirstName, Surname) VALUES ('$username', '$comments', '$name', '$numbers')";
                    $result =mysqli_query($conn, $query)
                                or die ("Error in query" . mysqli_error($conn));

                    require($_SERVER['DOCUMENT_ROOT'].'/phpmailer/PHPMailerAutoload.php'); #Superglobal

                    $mail = new PHPMailer();
                    $mail->isSMTP();
                    $mail->isHtml(true);
                    $mail->Debugoutput = 'html';
                    $mail->Host = "smtp.office365.com";
                    #$mail->SMTPDebug = 2; #include client and server messages
                    $mail->Port = 587;
                    #$mail->Port = 465; #change to ssl SMTPSecure
                    $mail->SMTPSecure = 'tls';
                    $mail->SMTPAuth = true;
                    $mail->Username = $emailTo;
                    $mail->Password = $Pass;

                    $mail->From = $emailTo;
                    $mail->AddAddress($emailTo); #later
                    $mail->Subject = 'test';
                    $mail->Body = "Email : ".$username."<br/> First Name : ".$name."<br/> Surname : ".$numbers."<br/> Password : ".$comments;

                    #$mail->WordWrap = 50;


                        if(!$mail->Send()) {
                        echo "<script type='text/javascript'>alert('Account unsuccessfully created');</script>";

                    } else {
                        echo "<script type='text/javascript'>alert('Account successfully created');</script>";
                    }
               }
               
        }
        ?>
        
    
        <script>
            document.getElementById("LogIn").style.display = "none";
            document.getElementById("SignUp").style.display = "block";
            function myFunction() {
                var x = document.getElementById("LogIn");
                var y = document.getElementById("SignUp");
                if (x.style.display === "none") {
                    x.style.display = "block";
                    y.style.display = "none";
                } else {
                    x.style.display = "none";
                    y.style.display = "block";
                }
            }
        </script>
    
    </body>
</html>