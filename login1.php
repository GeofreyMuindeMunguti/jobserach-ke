<?php	
session_start();
$db=mysqli_connect("https://db4free.net/phpMyAdmin/", "jobsearch","geofrey7543")  or die ("Could not connect to database");
mysqli_select_db($db,'jobsearch') or die('Error selecting database : ' . mysqli_error());
    
$email = $_POST['email'];
$password = $_POST['psw'];
$category = $_POST['category'];

$query = "SELECT * FROM users WHERE Email='$email' AND Password ='$password'";
$result= mysqli_query($db,$query);
$row = mysqli_fetch_assoc($result);

if($email == "" || $password == "" || $category == "")
{
    echo("<script>alert('You cannot have empty fields')</script>");
     echo("<script>window.location = 'login.html';</script>");
}
else
{    
if($row>0)
{


$_SESSION['email']= $email;

 
    echo $_SESSION['email'];
    echo("<script>window.location = 'index.php';</script>");  
}
else
{
header("Location: login.php");
//"Login failed";f
}

}
?>
