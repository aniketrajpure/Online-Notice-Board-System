<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"online_notice_board");
if(isset($_POST['register'])){
  $query = "insert into users values(null,'$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[password]',$_POST[class])";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script> alert('Registration successfully...You may now login.');
    window.location.href = 'index.php';
    </script>";
  }
  else{
    echo "<script>alert('Registration failed...try again.');
    window.location.href = 'Register.php';
    </script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Notice Board System!</title>
    <!-- css file-->
    <link rel= "stylesheet" href= "css/style.css">
</head>
<body>
       <!--Header section code start here-->
       <div class="row" id="header">
        <div class="col-md-4">
  </div>
       <div class="col-md-4">
        <h3><?php echo 'Online Notice Board System';?></h3>
</div>
<div class="col-md-4">
</div>
</div>
        <!-- login form start here-->
        <section id="login_form">
            <div class="row">
                <div class="col-md-4 m-auto block">
                   <h4>Registration form</h4>
                   <form action=""method="post">
                <div class="form-group">
                   <br> <lable>Fisrt Name:</lable></br>
                    <input class="form-control" type="text" name="fname" placeholder="Enter your First Name">
</div>
                <div class="form-group">
                   <br> <lable>Last Name:</lable></br>
                    <input class="form-control" type="text" name="lname" placeholder="Enter your Last Name">
</div>

                <div class="form-group">
                   <br> <lable>E-mail ID:</lable></br>
                    <input class="form-control" type="text" name="email" placeholder="Enter your email">
</div>
                
                <div class="form-group">
                    <lable>Password:</lable>
                    <br><input class="form-control" type="text" name="password" placeholder="Enter your Password"></br>
</div>
                    
                <div class="form-group">
                   <br> <lable>Select Your Class:</lable></br>
                    <select class="form-control" name="class">
                    <option>-Select-</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option> 
              </select>
</div>
                  
                   <br> <button class="btn btn-primary"type="submit" name="register">Register</button></br>
                
</form>
<br><a href="index.php">Click here to login</a></br>
</div>
</div>
</section>
</body>
</html>



