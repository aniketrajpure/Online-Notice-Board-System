<?php
session_start();
if(isset($_POST['update_profile'])){
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"online_notice_board");  
$query ="update users set
fname='$_POST[fname]',lname='$_POST[lname]',email='$_POST[email]',password='$_POST[password]',class='$_POST[class]' where email='$SESSION[email]'";
$query_run = mysqli_query($connection,$query);
if($query_run){
    echo "<script type='text/javascript'>
    alert('profile updated succesfully...');
    window.location.href ='user_dashboard.php'
    </script>";
 }
 else{
    echo "<script type='text/javascript'>
    alert('can't update try again...');
    window.location.href = 'user_dashboard.php'
    </script>";
 }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <!--bootstrap files-->
    <script src="C:\xampp\htdocs\Online Notice Board\bootstrap-5.2.2-dist" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\Online Notice Board\bootstrap-5.2.2-dist">

    <!-- css file-->
    <link rel= "stylesheet" href= "css/style.css">
   <script src="jQuery/jquery-3.6.1.min.map" charset="utf-8"></script>
   <script type="text/javascript">
    
     $(document).ready(function(){
        $("#edit_profile_button").click(function(){
            $("#main_content").load('edit_profile.php');
        });
       
    });
    </script>

</head>
<body>
       <!--Header section code start here-->
       <div class="row" id="header">
        <div class="col-md-4">
  </div>
       <div class="col-md-4">
        <h2>Online Notice Board System</h2>
</div>
  <div class="col-md-4">
 </div>
</div>
<br>
<section id="container">
    <div class="row">
        <div class="col-md-2" id="left_sidebar">
            <img src="Image\college.jpeg" class="img-rounded" width="200px" height="200px"><br>
            <!--<b><?php echo $_SESSION['email'];?></b>-->
            <br><a href="edit_profile.php" button type="button" class="btn btn-primary btn-block" id="edit_profile_button">Edit Profile</button></br>
            <br><a href=" view_notice.php" button type="button" class="btn btn-warning btn-block" id="view_notice_button">View All Notices</button></br>
            <br><a href="logout.php" button type="button" class="btn btn-success btn-block">Logout</button></a></br>
</div>
            <div class="col-md-8" id="main_content">
                <h2>Welcome to user dashboard</h2>
                <p>
                   <h4> This is the user dashboard page. Here user can manage notice board system. 
                    He can create a notice, delete a notice and all the replies of the notice.</h4></p>

                
</div>
</div>

