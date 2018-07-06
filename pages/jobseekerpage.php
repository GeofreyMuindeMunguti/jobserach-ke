
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
<title>Jobsearch | Job seeker page</title>
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
      <div class="fl_right">
        <form class="clear" method="post" action="../employerpage.php">
          <fieldset>
            <legend>Search:</legend>
            <input type="text" value="" placeholder="Search Here" name="topsearch">
            <button class="fa fa-search" type="submit" title="Search" name="search"><em>Search</em></button>
          </fieldset>
        </form>
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
     
            <li><a href="contactus.php">Contact us</a></li>
            <li><a href="employerpage.php">Employer page</a></li>
            <li class="active"><a href="jobseekerpage.php">JOb seeker page</a></li>
     
        </li>
       
        </li>
       <li><a href="https://www.google.co.ke/maps/place/Madaraka+Central+Court/@-1.307357,36.8133295,17z/data=!3m1!4b1!4m5!3m4!1s0x182f10f9f2ea8a3b:0xe4a075a77652b78b!8m2!3d-1.3073624!4d36.8155182?hl=en" target="_blank">Offices Location</a></li>
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
      
        <li><a href="jobseekerpage.php">Jobseekers page</a></li>
       
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>

<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div> 
        <!-- ################################################################################################ -->
         
        <h1>This is the jobseekers page</h1>
        <img class="imgr borderedbox inspace-5" src="../video/jobsearch.gif" alt="">
        <p>This is a page dedicated to the jobseekers where they can interact in  comments by other jobseekers who have found jobs courtesy of this website and jobseekers waiting to find jobs in this website.</p>
        <p>There are rules which govern the functionality of this page specifically. and they are well stipulated in the licensing of the website.</p>
        <img class="imgl borderedbox inspace-5" src="../video/jobs.gif" alt="">
        <p>The comments here allow forr replies form bothe the administrator and the users. This is like an empowerment page for the jobseekers</p>
        <p></p>
        <p>This is the comments section from the jobseekers.</p>
        <h1><hr></h1>
    <div class="fl_right">
        <form class="clear" method="post" action="../employerpage.php">
          <fieldset>
            <legend>Search:</legend>
            <input type="text" value="" placeholder="Search Here" name="topsearch">
            <button class="fa fa-search" type="submit" title="Search" name="search"><em>Search</em></button>
          </fieldset>
        </form>
  <div>
        <?php

$link = mysqli_connect("localhost", "root", "", "jobsearch");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "SELECT * FROM adverts ORDER BY id DESC LIMIT 10 ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=";">";
            echo "<tr>";

                echo "<th>NAME</th>";
                echo "<th>E-MAIL</th>";
                echo "<th></a>Phone NUmber</th>";
                echo "<th>JOB Advert</th>";
                echo "<th>Valid till</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                 
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['website'] . "</td>";
                echo "<td>" . $row['jobadvert'] . "</td>";
                echo "<td>" . $row['validity'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{

        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
      </div>
    
 

        <?php

$link = mysqli_connect("localhost", "root", "", "jobsearch");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql = "SELECT * FROM feedback ORDER BY id DESC LIMIT 10  ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=";">";
            echo "<tr>";
                echo "<th>NAME</th>";
                echo "<th>FEEDBACK</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['info'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{

        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
          <h2>Write A Comment</h2>
          <form action="info.php" method="post">
            <div >
              <label for="name">Name </label>
              <input type="text" name="name" id="name" value="" size="115">
            </div>
            
            
            <div >
              <label for="comment">Your Comment</label>
              <textarea name="info" id="info" cols="115" rows="10"></textarea>
            </div>
            <div>
              <br />
              <input  name="submit" type="submit" value="Submit Form"> 
          <br />
             
            </div>
          </form>
        </div>
        <!-- ################################################################################################ -->
      </div>
      
     
        <!-- ################################################################################################ -->
      </div>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="wrapper row5">
  <div class="spacer">
    <footer id="footer" class="clear"> 
      <!-- ################################################################################################ -->
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
          <li><a href="#">Geofrey Muinde</a></li>
          <li><a href="#">Brian Munyi</a></li>
          <li><a href="#">Philip Njoroge</a></li>
          <li><a href="#">Humphrey Nyakundi</a></li>
          <li><a href="#">Shawn Shivere</a></li>
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