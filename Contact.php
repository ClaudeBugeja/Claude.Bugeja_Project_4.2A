<!DOCTYPE html>
<html>
    <head>
        <title>Redefined</title>
        <link rel="icon" href="images/blacklogo.png" type="image" width="20" height="20">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Home.css">
    </head>
    <body>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                 
          
          <button  class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" ></span>
          </button >
                
                <a class="navbar-brand" href="index.php">
                <img id="logo" src="images/logo-white.png" alt="">
              </a> 
                
                <a href="Data.php">
                    <img  id="profile"  src="images/profile.png" width="20" height="20">
                </a>
                
                  <a href="Search.php">
               <img id="searchmob" src="images/searching.png" style="width: 20px; height: 20px; ">
              </a>  
                
                <a href="Cart.php" >
                   <img id="bag" src="images/bag-logo.png" width="20" height="20">
                </a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              
           <ul class="navbar-nav" style="width: 100%;">
                
                  <li class="nav-item active">
                    <a class="nav-link" href="Mobile.php">Mobile<span class="sr-only">(current)</span></a>
                  </li>
                    <hr/>
                  <li class="nav-item active">
                    <a class="nav-link" href="Mobile.php">Computing</a>
                     
                  </li>
               <hr/>
                  <li class="nav-item active">
                    <a class="nav-link disabled" href="Mobile.php">Peripherals</a>
                     
                  </li>
                <hr/>
                    <li class="nav-item active">
                    <a class="nav-link disabled" href="Mobile.php">Vision</a>
                  
                  </li>
              <hr/>
                    <li class="nav-item active">
                    <a class="nav-link disabled" href="Mobile.php">Sound</a>

                  </li>
              <hr/>
                    <li class="nav-item active">
                    <a class="nav-link disabled" href="Mobile.php">Gaming</a>
                  </li>
               <hr/>

             
                </ul>
              <a href="Data.php" style="margin-left:10%; margin-right: 5%;">
               <img id="profiledesk" src="images/profile.png" href="inde1.html" style="width: 20px; height: 20px; ">
              </a>
              
             
             <a href="Search.php" style="margin-right: 5%;">
               <img id="search" src="images/searching.png" style="width: 20px; height: 20px; ">
              </a>     
                  
              <a href="Cart.php" style="margin-right: 5%;">
               <img id="bagdesk" src="images/bag-logo.png" style="width: 20px; height: 20px;">
              </a> 
              
              <form action="index.php" method="post">
              <button type="submit" style="margin-right: 5%; border:none;" name="logout">
               <img src="images/logout.png" href="inde1.html" style="margin-bottom:20%; width: 20px; height: 20px; ">
              </button>
              </form>
              <?php
                if(isset($_POST['logout'])){
                    session_destroy();
                }
              ?>
          </div>
                             
               
            </div>
        </nav>
        
        <br/>
        
        <h1 class="display-1" style="font-style: oblique; text-align:center;">Contact Us</h1>
        
        <br/>
        
        <form action="Contact.php" style="margin-left:10%; margin-right:10%;" method="post" >
            
             <div class="form-group">
           
            <input type="text" class="form-control"  placeholder="Name" name="Client">
            
          </div>
            <br/>
          <div class="form-group">
         
            <input type="email" class="form-control"  placeholder="Email" name="ClientEmail">
          </div>
            <br/>
          <div class="form-group">
         
            <input type="text" class="form-control"  placeholder="Number" name="ClientNumber">
          </div>
            <br/>
         <div class="form-group">
           
            <textarea type="text" id="comments" name="comments" class='form-control col-sm-10'></textarea>
          </div>
            <br/>
            <hr/>
            
          <input type="submit" value="Submit information" name="submit" class='btn btn-primary'/>
        </form>
                      
        <br/>
              <!--Footer-->
      <footer class="page-footer font-small stylish-color-dark pt-4 mt-4" style="background-color:#E8E8E8">
      
          <!--Footer Links-->
          <div class="container text-center text-md-left">
      
              <!-- Footer links -->
              <div class="row text-center text-md-left mt-3 pb-3">
      
                  <!--First column-->
                  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                      <h6 class="text-uppercase mb-4 font-weight-bold">REDEFINED</h6>
                      <p>Redefining Shopping in every way. Cheapest prices , the best client support and the most user-friendly website out there to encourage every demographic to get onboard in redifine shopping.</p>
                  </div>
                  <!--/.First column-->
      
                  <hr class="w-100 clearfix d-md-none">
      
                  <!--Second column-->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                      <h6 class="text-uppercase mb-4 font-weight-bold">Information</h6>
                      <p><a href="OpenHours.php" style="color: black;">Opening Hours</a></p>
                      <p><a href="AboutUs.php" style="color: black;">About Us</a></p>
                      <p><a href="Contact.php" style="color: black;">Contact Us</a></p>
                    
                  </div>
                  <!--/.Second column-->
      
                  <hr class="w-100 clearfix d-md-none">
      
                  
      
                  
      
                  <!--Fourth column-->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                      <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                      <p><img src="images/homeLogo.png" style="width: 7%;"> Malta, RBT 1121, Rabat</p>
                      <p><img src="images/envelopeLogo.png" style="width: 7%;"> Claude.Bugeja09@Gmail.com</p>
                      <p><img src="images/phoneLogo.png" style="width: 7%;"> + 356 234 567 88</p>
                      <p><img src="images/homePhoneLogo.png" style="width: 7%;"> + 21 234 567 89</p>
                  </div>
                  <!--/.Fourth column-->
      
              </div>
              <!-- Footer links -->
      
              <hr>
      
              <div class="row py-3 d-flex align-items-center">
      
                  <!--Grid column-->
                  <div class="col-md-8 col-lg-7">
      
                      <!--Copyright-->
                      <p class="text-center text-md-left grey-text">© 2018 Copyright: <a href="inde1.html" style="color: black;"><strong> Redefined.com</strong></a></p>
                      <!--/.Copyright-->
      
                  </div>
                  <!--Grid column-->
      
                  <!--Grid column-->
                  
      
              </div>
      
          </div>
      
      </footer>
      <!--/.Footer-->
                <script>
            document.getElementById('searchmob').style.display = "none";
            document.getElementById('bagdesk').style.display = "none";
            document.getElementById('profiledesk').style.display = "none";
            function myFunction(x) {
                if (x.matches) { // If media query matches
                    document.getElementById('profile').style.display = "block";
                    document.getElementById('bag').style.display = "block";
                    document.getElementById('searchmob').style.display = "block";
                    document.getElementById('bagdesk').style.display = "none";
                    document.getElementById('profiledesk').style.display = "none";
                    document.getElementById('search').style.display = "none";
                } else {
                    document.getElementById('searchmob').style.display = "none";
                    document.getElementById('search').style.display = "block";
                    document.getElementById('profile').style.display = "none";
                    document.getElementById('bag').style.display = "none";
                    document.getElementById('bagdesk').style.display = "block";
                    document.getElementById('profiledesk').style.display = "block";
                }
            }
            var x = window.matchMedia("(max-width: 770px)")
            myFunction(x) // Call listener function at run time
            x.addListener(myFunction) // Attach listener function on state changes     
        </script>
        
        <?php
        if(isset($_POST['submit'])){
            require($_SERVER['DOCUMENT_ROOT'].'/phpmailer/PHPMailerAutoload.php'); #Superglobal
            
            $name = $_POST['Client'];
            $username = $_POST['ClientEmail'];
            $numbers = $_POST['ClientNumber'];
            $comments = $_POST['comments'];
            $emailTo = 'claude.bugeja.b42219@mcast.edu.mt'; #later
            $Pass = "Mcast11001";
 
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
            $mail->Body = "Name : ".$name."<br/> Client Email : ".$username."<br/> Client Number : ".$numbers."<br/> Comments : ".$comments;    
            #$mail->WordWrap = 50;

            if(!$mail->Send()) {
                echo "<script type='text/javascript'>alert('Message had not been sent');</script>";
                echo 'Mailer error: ' . $mail->ErrorInfo;
            } else {
                echo "<script type='text/javascript'>alert('Message had been sent');</script>";
            }
        }
        ?>
    </body>
</html>

