
<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
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
        <li><a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
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
      
    </header>
    
  </div>
</div>

<div class="wrapper row2">
  <div class="spacer">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
       <li><a href="pages/contactus.php">Contact us</a></li>
            <li><a href="employerpage.php">Employer page</a></li>
            <li><a href="pages/jobseekerpage.php">Jobseeker page</a></li>
         </li>
        <li><a href="https://maps.google.com/">Offices Location</a></li>
       
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </div>
</div>
<<h2><center>DETAILS</center></h2>
<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
     
      
      <div class="content">

 <table>
              <tr>
                  <td> Name of employer</td>
                  <td>Email</td>
                  <td>Website</td>
                  <td>Job advertised</td>
                   <td>Valid till</td>

              </tr>

    <tbody>
      <<h2><center>Jobs posted by possible employers </center> </h2>
        <?php
        $db=mysqli_connect("https://db4free.net/phpMyAdmin/", "jobsearch","geofrey7543")  or die ("Could not connect to database");
        mysqli_select_db($db,'jobsearch') or die('Error selecting database : ' . mysqli_error());
        
        if(isset($_POST['topsearch']))
        {
            $search = $_POST['topsearch'];
            $search = preg_replace("#[0-9a-z]i#","",$search);
        }
            $sql3 = "SELECT * FROM adverts WHERE name LIKE '%$search%' OR email LIKE '%$search%' OR website LIKE '%$search%' OR jobadvert LIKE '%$search%'";
            $res = mysqli_query($db,$sql3);
            
        while($row3 = mysqli_fetch_assoc($res))
        {

            echo '<tr>';
            echo '<td>'.$row3['name'].'</td>';
            echo '<td>'.$row3['email'].'</td>';
            echo '<td>'.$row3['website'].'</td>';

            echo '<td>'.$row3['jobadvert'].'</td>';
             echo "<td>" . $row3['validity'] . "</td>";

            echo '</tr>';
        }
        ?>
    </tbody>
 </table>