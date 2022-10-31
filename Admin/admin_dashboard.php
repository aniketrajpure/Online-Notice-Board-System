<?php
session_start();
if(isset($_POST['update_profile'])){
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"online_notice_board");  
$query ="update admins set
name='$_POST[name]',,email='$_POST[email]',password='$_POST[password]', where email='$SESSION[email]'";
$query_run = mysqli_query($connection,$query);
if($query_run){
    echo "<script type='text/javascript'>
    alert('profile updated succesfully...');
    window.location.href = 'admin_dashboard.php'
    </script>";
 }
 else{
    echo "<script type='text/javascript'>
    alert('can't update try again...');
    window.location.href = 'admin_dashboard.php'
    </script>";
 }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <!--bootstrap files-->
    <script src="--/bootstrap-5.2.2-dist" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\Online Notice Board\bootstrap-5.2.2-dist">

    <!-- css file-->
    <link rel= "stylesheet" href= "Admin\admin_style.css">
    

  
    
   

</head>
<body> 
       <!--Header section code start here-->
       <div class="row" id="header">
        <div class="col-md-4">
  </div>
       <div class="col-md-4">
       <center><h1>Online Notice Board System</h1></center>
</div>
  <div class="col-md-4">
 </div>
</div>
<br>
<section id="container">
    <div class="row">
        <div class="col-md-2" id="left_sidebar">
            <img src="../Image\college.jpeg" class="img-rounded" width="200px" height="200px"><br>
            <!--<b><?php echo $_SESSION['email'];?></b>-->
            
             <br><a href="admin_edit_profile.php" button type="button" class="btn btn-primary btn-block" id="admin_edit_profile_button">Edit Profile</button></br>
           
             <br><a href="admin_create%20a%20notice.php" button type="button" class="btn btn-secondary btn-block" id="create_notice_button">Create a Notice</button></br>
           
            <br><a href="admin_view%20all%20notice.php" button type="button" class="btn btn-warning btn-block" id="view_notice_button">View All Notices</button></br>
        
            <br><a href="logout.php" type="button" class="btn btn-success btn-block">Logout</button></a></br>
</div> 
            <div class="col-md-8" id="main_content">
                <h2>Welcome to Admin Dashboard</h2>
                <p>
                <h2>This is the admin dashboard page. Here admin can manage notice board system. 
                    He can create a notice, delete a notice and all the replies of the notice.</h2></p>

                
</div>
</html>
