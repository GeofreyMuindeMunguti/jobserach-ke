<!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}


</style>


<head>
<title>JOBSEARCH | Login </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</head>
<body id="top" class="bgded fixed" style="background-image:url('images/demo/backgrounds/01.jpg');">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="faico clear">
        <li><a href="https://web.facebook.com/Jobsearch-page-142603759793213/" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
        <li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.dribbble.com"><i class="fa fa-dribbble"></i></a></li>
        <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="https://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
      </ul>
    </div>

    <div class="fl_right">
      <ul class="faico clear">
 
        <li><a href="signup.html" title="Register"><i class="fa fa-user-plus"></i></a></li>
       
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <div class="spacer">
    <header id="header" class="clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.php">JOBSEARCH</a></h1>
      </div>
    
      <!-- ################################################################################################ -->
    </header>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="spacer">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>

            <li><a href="pages/contactus.php">Contact us</a></li>
            <li><a href="pages/employerpage.php">Employer page</a></li>
            <li><a href="pages/jobseekerpage.php">Jobseeker page</a></li>
            
         
        </li>
       
        <li><a href="https://www.google.co.ke/maps/place/Madaraka+Central+Court/@-1.307357,36.8133295,17z/data=!3m1!4b1!4m5!3m4!1s0x182f10f9f2ea8a3b:0xe4a075a77652b78b!8m2!3d-1.3073624!4d36.8155182?hl=en" target="_blank">Offices Location</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </div>
</div>
<h2><center>Login Form</center></h2>
<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="content"> 

<form action="login1.php" method="post">

  <div class="imgcontainer">
    <p><h3>THIS IS THE LOGIN FORM</h3></p>
    <img src="./images/demo/gallery/login.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter email address" name="email" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <p>Login in as</p>
    <input type="radio" name="category" value="Employer">Employer<br>
    <input type="radio" name="category" value="Jobseeker">Jobseeker<br>

    <button type="submit" name="submit" >Login</button>
    <span class="psw">Forgot <a href="signup.html">password?</a></span><br />

    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:rgba(215,215,215,1)">
    
    <span class="psw">Have no account? <a href="signup.html">Sign Up Here</a></span><br />
    
  </div>
</form>
</div>
</div>
</div>
<div class="wrapper row5">
  <div class="spacer">
    <footer id="footer" class="clear"> 
   
      <div class="one_quarter first">
        <h6 class="title">Created by</h6>
        <address class="btmspace-15">
        GEOFREYBRIAN>.Co<br>
        Ole Sangale Rd &amp; 001<br>
        Nairobi<br>
        PO BOX 111 NAIROBI
        </address>
        <ul class="nospace">
          <li class="btmspace-10"><span class="fa fa-phone"></span> +254 (711) 421 684</li>
          <li><span class="fa fa-envelope-o"></span> muinde.geofrey@strathmore.edu</li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="title">Website hosted by</h6>
        <ul class="nospace linklist">
          <li><a href="http://www.gmail.com">Geofrey Muinde</a></li>
          <li><a href="http://www.gmail.com">Brian Munyi</a></li>
          <li><a href="http://www.gmail.com">Abel Obare</a></li>
          
        </ul>
      </div>
     
     <div class="one_quarter">
        <h6 class="title">Send us your contact for guidance</h6>
        <form method="post" action="pages/guidance.php">
          <fieldset>
            <legend>Newsletter:</legend>
            <input class="btmspace-15" type="text" value="" name="name" placeholder="name"></input>
            <input class="btmspace-15" type="text" value="" name="email" placeholder="email">
                   <input class="btmspace-15" type="text" value="" name="field" placeholder="how can we help you...">
            <button type="submit" value="submit">Submit</button>
          </fieldset>
        </form>
      </div>
      </div>
      <!-- ################################################################################################ -->
    </footer>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row6">
  <div class="spacer">
    <div id="copyright" class="clear"> 
      <!-- ################################################################################################ -->
      <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">GEOFREYBRIAN.Co</a></p>
      <p class="fl_right">Website by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">GEOBRIAN.Co</a></p>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>
</body>

</html>
