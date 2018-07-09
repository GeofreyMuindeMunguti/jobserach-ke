<?php	

$db=mysqli_connect("https://db4free.net/phpMyAdmin/", "jobsearch","geofrey7543")  or die ("Could not connect to database");
mysqli_select_db($db,'jobsearch') or die('Error selecting database : ' . mysql_error());
    
$name=$_POST['name'];
$email=$_POST['email'];
$website=$_POST['website'];
$jobadvert=$_POST['jobadvert'];
$validity=$_POST['validity'];

if ($name == "" || $website == "" || $email == "" || $jobadvert == "" || $validity =="")
{
    echo("<script>alert('You cannot have empty fields')</script>");
     echo("<script>window.location = 'employerpage.html';</script>");
}
else
{
  $result = mysqli_query($db,"INSERT INTO `adverts`(`name`, `email`, `website`,`validity`, `jobadvert`) VALUES ('$name','$email','$website','$validity','$jobadvert')");
    
    

    if ($result)
{
    echo("<script>alert('Data successfully inserted')</script>");
   echo("<script>window.location = 'employerpage.php';</script>");
        
         echo(" name: ". $_POST['names'] ."<br>");
    echo("email: " . $_POST['email']. "<br>");
    echo("website: " . $_POST['website']. "<br>");
     echo("validity: " . $_POST['validity']. "<br>");
    echo("jobadvert: " . $_POST['jobadvert']. "<br>");
   
    

}
else
{
    echo("<script>alert('Error in data entry')</script>");
    echo("<script>window.location = 'employerpage.php';</script>");
}
}




?>