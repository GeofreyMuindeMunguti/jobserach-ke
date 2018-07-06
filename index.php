
<?php  
session_start();  

  
if(!$_SESSION['email'])  
{  
  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?> 
<!DOCTYPE html>
<html>
<head>
<title>JOBSEARCH | Home </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</head>
<body id="top" class="bgded fixed" style="background-image:url('images/demo/backgrounds/01.jpg');">

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
        <li><a href="login.php" title="Login"><i class="fa fa-sign-in"></i></a></li>
        <li><a href="signup.html" title="Register"><i class="fa fa-user-plus"></i></a></li>
        <li><a href="logout.php" title="Logout"><i class="fa fa-sign-out"></i></a></li>
        
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
       <div class="fl_right">
        <form class="clear" method="post" action="/jobsearch/employerpage.php">
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
      
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
       <li><a href="pages/contactus.php">Contact us</a></li>
            <li><a href="pages/employerpage.php">Employer page</a></li>
            <li><a href="pages/jobseekerpage.php">Jobseeker page</a></li>
        <li><a href="https://www.google.co.ke/maps/place/Madaraka+Central+Court/@-1.307357,36.8133295,17z/data=!3m1!4b1!4m5!3m4!1s0x182f10f9f2ea8a3b:0xe4a075a77652b78b!8m2!3d-1.3073624!4d36.8155182?hl=en" target="_blank">Offices Location</a></li>
       
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper">
  <div id="bgslideshow">
    <ul>
      <!-- ################################################################################################ -->
      <li class="bgded" style="background-image:url('images/demo/slider/01.jpg')"><em>Convinient</em></li>
      <li class="bgded" style="background-image:url('images/demo/slider/02.jpg')"><em>Connects</em></li>
      <li class="bgded" style="background-image:url('images/demo/slider/03.jpg')"><em>Simple</em></li>
      <li class="bgded" style="background-image:url('images/demo/slider/01.jpg')"><em>Accurate</em></li>
      <li class="bgded" style="background-image:url('images/demo/slider/02.jpg')"><em>Reliable</em></li>
      <li class="bgded" style="background-image:url('images/demo/slider/03.jpg')"><em>Universal</em></li>
      <!-- ################################################################################################ -->
    </ul>
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
      <div class="one_third first">
        <article>
          <h3 class="font-x1"><i class="fa fa-life-bouy"></i> &nbsp; Global</h3>
          <p class="nospace"> This website joins people from the diffrerent parts of the world by creating a platform which is accessible from any internet conneceted device. <a href="#">read more &raquo;</a></p>
        </article>
      </div>
      <div class="one_third">
        <article>
          <h3 class="font-x1"><i class="fa fa-angellist"></i> &nbsp; Available whenever needed</h3>
          <p class="nospace"> The great programmers behind this website ensure that the website is fully functional at any moment. In cases of website editing notifications will be available in the news section. All this thanks to Geofrey Muinde and Brian Munyi. <a href="#">read more &raquo;</a></p>
        </article>
      </div>
      <div class="one_third">
        <article>
          <h3 class="font-x1"><i class="fa fa-location-arrow"></i> &nbsp; Fast and Convinient</h3>
          <p class="nospace">This website has been well hosted to ensure that it does not lagg when being used. It been made using the latest and best database available in the market <a href="#">read more &raquo;</a></p>
        </article>
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
<div id="bottomhome" class="wrapper row4">
  <div class="spacer">
    <div class="container clear"> 
      <!-- ################################################################################################ -->
       <p>OUR KEY PARTNERS AND A BRIEF ABOUT THEM </p>
      <div class="one_half first">
     
      
        <ul class="nospace services right">
          <li>
            <article><i class="icon circle fa fa-magic"></i>
              <h6 class="heading font-x1"><a href="#">Danilop Company</a></h6>
              <p>We have parterne with Danilop Company to ensure that people find jobs wherever they are as long as they are near a Danilop Branch.</p>
            </article>
          </li>
          <li>
            <article><i class="icon circle fa fa-magnet"></i>
              <h6 class="heading font-x1"><a href="#">Hardware CraftStore</a></h6>
              <p>Hardware CraftStore being a leading and growing company in the country, they decided to partner with us to ensure that they find workers all over the country with ease.</p>
            </article>
          </li>
          <li>
            <article><i class="icon circle fa fa-bank"></i>
              <h6 class="heading font-x1"><a href="#">National Library</a></h6>
              <p>The most used and most reliable library in the country through their CEO Hon.Labure saw the need to partner with us to find qualified workers all over the country wth much ease.</p>
            </article>
          </li>
        </ul>
      </div>
      <div class="one_half">
        <ul class="nospace services">
          <li>
            <article><i class="icon circle fa fa-mortar-board"></i>
              <h6 class="heading font-x1"><a href="#">Graduants Society </a></h6>
              <p>Most graduants in the country in most times find it hard to easily find jobs within or outside the country. Due to this the Graduants society partnered with us to help in ensuring that their customers find jobs.</p>
            </article>
          </li>
          <li>
            <article><i class="icon circle fa fa-book"></i>
              <h6 class="heading font-x1"><a href="#">Writters Club </a></h6>
              <p>The writters club in the country partnerd with us at first under the national library but later bought enough shares to become certified partners. This ensures that they can sell their products and also sponsor the website.</p>
            </article>
          </li>
          <li>
            <article><i class="icon circle fa fa-pie-chart"></i>
              <h6 class="heading font-x1"><a href="#">Data Analytics Society</a></h6>
              <p>In order to ensure that our users get the best out of their job search hustle we partnered with Data Analytics Scoiety to gain a better prediction on the areas with available jobs. They give a summarised evaluation and presentation of where to posssibly find jobs in the country.</p>
            </article>
          </li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
      <div class="clear"></div>
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="spacer">
    <div class="container clear"> 
      <!-- ################################################################################################ -->
      <div class="block cleart">
        <article>
          <h2>Latest Client Project</h2>
          <p>We are currently developing a code academy where we will teach or train new programmers who will be absorbed in functions of website administration as a job and also be considered in our recently developed JAMKAL enterprice where programmers and IT experts are highly needed. More information about this will be given in due course of time.</p>
          <p class="btmspace-30">We are in a new forum of registering a new partner to help in creting new links to more jobs for our users.</p>
          <p>A user application for the website is currently underway to make sure tat the functionality of the website in usable as a mobile application. </p>
          <p><a class="btn" href="muindegeofrey@gmail.com">Editor is Geofrey Muinde</a></p>
           <li><span class="fa fa-envelope-o"></span> <a href="http://www.gmail.com" /> muindegeofrey@gmail.com</li>
        </article>
      </div>

     
      
     
      <div class="clear"></div>
    </div>
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
          <li><span class="fa fa-envelope-o"></span> muindegeofrey@gmail.com</li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="title">Website hosted by</h6>
        <ul class="nospace linklist">
          <li><a href="https://www.gmail.com/muindegeofrey@gmail.com">Geofrey Muinde</a></li>
          <li><a href="https://www.gmail.com/brianmunene69@gmail.com">Brian Munyi</a></li>
          <li><a href="https://www.gmail.com/abelobare7@gmail.com">Abel Obare</a></li>
         
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