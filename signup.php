<?php	

$db=mysqli_connect("https://db4free.net/phpMyAdmin/", "jobsearch","geofrey7543")  or die ("Could not connect to database");
mysqli_select_db($db,'jobsearch') or die('Error selecting database : ' . mysqli_error());
    
$email = $_POST['email'];
$password = $_POST['psw'];
$repass = $_POST['repsw'];
$category = $_POST['category'];


if ($email == "" || $password == "" || $repass == "" || $category =="")
{
    echo("<script>alert('You cannot have empty fields')</script>");
     echo("<script>window.location = 'signup.php';</script>");
}

/*elseif($category=="jobseeker"&& $category =="employer")
{
    echo("Select only one category");   
}*/

elseif($password != $repass)
{
    echo("<script>alert('Your passwords do not match.')</script>");  
    echo("<script>window.location = 'signup.html';</script>");
}
else
{

  $result = mysqli_query($db,"INSERT INTO users(Email,Password,Category) VALUES('$email','$password','$category')");
    
    

    if ($result)
{
    echo("<script>alert('Account successfully created')</script>");
        if($category =="jobseeker")
        {
   echo("<script>window.location = 'jobseeker.php';</script>");
        }
        elseif ($category =="employer")
        {
            echo("<script>window.location = 'pages/employerpage.php';</script>");
        }
}
else
{
    echo("<script>alert('Error in data entry')</script>");
    echo("<script>window.location = 'signup.html';</script>");
}
}




?>