
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
<title>Jobsearch |  Empolyer page</title>
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
        <p><i class="icon circle fa fa-angellist"></i><?php echo $_SESSION['email'];?></p>
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
        <li ><a href="../index.php">Home</a></li>
         <li><a href="contactus.php">Contact us</a></li>
            <li class="active"><a href="employerpage.php">Employer page</a></li>
            <li><a href="jobseekerpage.php">Jobseeker page</a></li>
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
     
        <li><a href="employerpage.php">EmployersPAge</a></li>
       
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
      <div class="sidebar one_quarter first"> 
        <!-- ################################################################################################ -->
       </a>
          
        <div class="sdb_holder">
          <h6>For jobs upadate quick vetting</h6>
          <address>
          Call<br>
          0711421684<br>
          Or contact<br>
          <a href="https://ke.linkedin.com/in/brian-munyi-88a4437a">Brian Munyi<br>
          <a href="https://ke.linkedin.com/in/geoffrey-muinde-ab01a489">Geofrey Muinde<br>
          <br>
          Tel: (020)-775 372 <br>
          Email: <a href="https://mail.google.com/mail/ca/u/0/#sent">muindegeofrey@gmail.com</a>
          </address>
        </div>
        <div class="sdb_holder">
          <article>
            <h6>to feature here</h6>
            <p>This section belongs to any member of the employers group of the website who might be in a haste to get employees.To feature in this section , a fee of $50 is charged.</p>
            
          </article>
        </div>
        <!-- ################################################################################################ -->
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <div class="content three_quarter"> 
        <!-- ################################################################################################ -->
        <h1>This is the employers page</h1>
        <img class="imgr borderedbox inspace-5" src="../video/employer1.gif" alt="">
        <p>This is  the page where employers jobs are posted by the administrator of the website. The jobs advertsements found here have been carefully vetted and analysed to ensure that they fit here.</p>
        <p>For a potential employer to have their jobs vacancies posted here, they will have to confirm that the jobs are legit and agents of the webidte send physically to the location to ensure that the record given here is true</p>
        <img class="imgl borderedbox inspace-5" src="../video/employer.gif" alt="">
        <p>Job seekers are assured of finding the job vacancies on this page or another directed page to websites we have partnered with. The employer gives their contacts which is included in the job advertisement section below<p>.</p>
        <p>Below is the jo advertisement section which has the jobs posted in groups of their location.</p>
        <h1>Job adverts</h1>
     <?php

$link = mysqli_connect("https://db4free.net/phpMyAdmin/", "jobsearch","geofrey7543");
 
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
          </ul>
          <h2>Send your advert</h2>
          <form action="advert.php" method="post" id = "advert">
            <div class="one_third first">
              <label for="name">Name <span></span></label>
              <input type="text" name="name" id="name" value="" size="22">
            </div>
            <div class="one_third">
              <label for="email">Email <span></span></label>
              <input type="text" name="email" id="email" value="" size="22">
            </div>

            <div class="one_third">
              <label for="url">Phone Number</label>
              <input type="text" name="website" id="website" value="" size="22">
            </div>
             <div class="one_third first">
              <label for="validity">Valid this date <span></span></label>
              <input type="text" name="validity" id="validity" value="" size="22">
            </div>
            <div class="block clear">
              <label for="comment">Your Job advert</label>
              <textarea name="jobadvert" id="jobadvert" cols="80" rows="10"></textarea>
            </div>
            <div>
              <input  name="submit" type="submit" value="Send JobAdvert">
              <br />
         
              <input name="reset" type="reset" value="Reset JobAdvert">
            </div>
          </form>
           <script type="text/JavaScript">
     
});
</script>
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
        GEOFREYBRIAN.Co<br>
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
<div class="wrapper row6">
  <div class="spacer">
    <div id="copyright" class="clear"> 
      <!-- ################################################################################################ -->
      <p class="fl_left">Copyright &copy; 2017 - GEOBRIAN.Co - <a href="#">JOBSEARCH</a></p>
      <p class="fl_right">WEBSITE BY:GEOFREYBRIAN.Co</a></p>
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