
<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: login.php");  
}  
  
?> 
<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>

<head>
<title>JOBSEARCH</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<!-- Display something in the slideshow for IE9 -->
<!--[if lt IE 10]>
<link href="layout/styles/ie9.css" rel="stylesheet" type="text/css" media="all">
<![endif]-->
    </head>
<body id="top" class="bgded fixed" style="background-image:url('images/demo/backgrounds/01.jpg');">
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
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
         <p><i class="icon circle fa fa-angellist "></i><?php echo $_SESSION['email']; ?></p>
        <li><a href="login.php" title="Login"><i class="fa fa-sign-in"></i></a></li>
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
        </li>
        <li><a href="https://maps.google.com/">OfficesLocation</a></li>
       
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </div>

</div>
<h2><center>DETAILS</center></h2>
<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="content"> 
                  <p><h3>EMPLOYER DETAILS</p></h3><br/>
    <form action="Employer1.php" style="border:1px solid #ccc" method = "post">
  <div class="container">      
    <label><b>Company Name</b></label>
    <input type="text" name="CoNames" id ="CoNames" required>

    <label><b>Job Position needed</b></label>
    <input type="text" name="job" id= "job" required>

    <label><b>Email account</b></label>
    <input type="text" name="qualifications" id="qualification" required>
                        
    
   
    <label><b>Other Details</b></label>
    <input type="text" name="other" id="other" required>
              
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Submit</button>
    </div>          

                  
    </div>