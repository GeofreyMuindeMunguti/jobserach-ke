
<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: ../login.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?> 
<!DOCTYPE html>
<!--
Template Name: Centry
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Jobsearch | Contact us </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top" class="bgded fixed" style="background-image:url('../images/demo/backgrounds/01.jpg');">
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
        <p><i class="icon circle fa fa-angellist "></i><?php echo $_SESSION['email']; ?></p>
        <li><a href="../logout.php" title="Logout"><i class="fa fa-sign-out"></i></a></li>
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
        <h1><a href="../index.php">JOBSEARCH</a></h1>
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
        <li><a href="../index.php">Home</a></li>
        

            <li class="active"><a href="contactus.php">Contact us</a></li>
            <li><a href="employerpage.php">Employer page</a></li>
            <li><a href="jobseekerpage.php">Job seekr page</a></li>
      
        </li>
       
      
           </li>
       <li><a href="https://www.google.co.ke/maps/place/Madaraka+Central+Court/@-1.307357,36.8133295,17z/data=!3m1!4b1!4m5!3m4!1s0x182f10f9f2ea8a3b:0xe4a075a77652b78b!8m2!3d-1.3073624!4d36.8155182?hl=en" target="_blank">Offices Location</a></li>
      </ul>
        </li>
       
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <div class="spacer">
    <div id="breadcrumb" class="clear"> 
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="../index.php">Home</a></li>
      
        <li><a href="contactus.php">Contact us</a></li>
      
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="content"> 
        <!-- ################################################################################################ -->
        <h1> welcome to our contact-us page </h1>
        <img class="imgr borderedbox inspace-5" src="../video/fb.gif" alt="">
        <p>In this page you, the user will get information on how to get back to us with views and comments on what you think will help out in this website.</p>
        <p>Contact us on <a href="https://mail.google.com">our email by clicking here</a> or on <a href="http://www.facebook.com">our facebook page by clicking here</a> or on <a href="https://www.twitter.com">our twitter account by clicking here</a> or on<a href="https://plus.google.com">our googleplus account by clicking here</a> Or better still leave your comment or comments on the comment section bellow. .</p>
        <img class="imgl borderedbox inspace-5" src="../video/giphy.gif" alt="">
        <p>We have a set of rules which govern the way this website operates so as to  act as a guide to the people leaving their comments here or giving their views on our website. <a href="#" title="Website policy"> rules and regulations governing the usability of this website</a>. However, for the full terms and conditions of the website visit <a href="#"> this portal</a>.</p>
        <p>You can use this section to give views of things you think shold be included in the update version of the website. Your views will be greately appreciated because this is a website developed to suit the use in its effort to fullfill its functonality. Our progress on the update of the website can be found on<a href="#"> this page</a> on the website.</p>
        <p>Over the time, the most occuring comments have been grouped and analysed into categores as per the following table.</p>
        <h1>Table(s)</h1>
        <div class="scrollable">
          <table>
            <thead>
              <tr>
                <th>Location</th>
                <th>Graphic</th>
                <th>Transition</th>
                <th>Delivery</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="#">Outside East Africa</a></td>
                <td>Perfect</td>
                <td>Perfect</td>
                <td>Perfect</td>
              </tr>
              <tr>
                <td><a href="#">Kenya</td>
                <td>Good</td>
                <td>Perfect</td>
                <td>Good</a></td>
              </tr>
              <tr>
                <td><a href="#">Uganda</td>
                <td>Perfect</td>
                <td>Perfect</td>
                <td>Good</td>
              </tr>
              <tr>
                <td><a href="">Tanzania</td>
                <td>Heavy</a></td>
                <td>Perfect</td>
                <td>Perfect</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div id="comments">
          <h2>Write A Comment</h2>

          <form action="comments.php" method="post">

            <div class="one_third first">
              <label >Name </label>
              <input type="text" name="name" id="name">
            </div>
            <div class="one_third">
              <label for="email">Mail </label>
              <input type="text" name="email" id="email" >
            </div>
            <div class="one_third">
              <label for="url">Website</label>
              <input type="text" name="website" id="website">
            </div>
            <div class="block clear">
              <label for="comment">Your Comment</label>
              <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
            </div>
            <div>
              <input name="submit" type="submit" value="Submit Form">
           
              <input name="reset" type="reset" value="Reset Form">
            </div>
          </form>
        </div>
            </div>
     
  
      <div class="clear"></div>
    </main>
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
          <li><a href="www.gmail.com">Geofrey Muinde</a></li>
          <li><a href="www.gmail.com">Brian Munyi</a></li>
          <li><a href="www.gmail.com">Abel Obare</a></li>
         
        </ul>
      </div>
     
      <div class="one_quarter">
        <h6 class="title">Send us your contact for guidance</h6>
        <form method="post" action="guidance.php">
          <fieldset>
            <legend>Newsletter:</legend>
            <input class="btmspace-15" type="text" value="" name="name" placeholder="name"></input>
            <input class="btmspace-15" type="text" value="" name="email" placeholder="email">
                   <input class="btmspace-15" type="text" value="" name="field" placeholder="how can we help you...">
            <button type="submit" value="submit">Submit</button>
          </fieldset>
        </form>
      </div>
      <!-- ################################################################################################ -->
    </footer>
  </div>
</div>
<div class="wrapper row6">
  <div class="spacer">
    <div id="copyright" class="clear"> 
      <!-- ################################################################################################ -->
      <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Domain Name</a></p>
      <p class="fl_right">Template by :>GEOBRIAN.Co</a></p>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="../layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>