<?php
session_start();
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"online_notice_board");
    if(isset($_POST['send notice'])){
    $query = "insert into notice 
    values('$_POST[id]','$_POST[post_date]','$_POST[to_whom]','$_POST[title]','$_POST[message]')";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script> alert('Notice Created...');
      window.location.href ='Admin\admin_dashboard.php'; 
      </script>";
    }
    else{
      echo "<script> alert('plz try again...');
      window.location.href ='Admin\admin_create a notice.php';
      </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Create Notice</title>
</head>
<body>
    <br>
    <center><h3>Send Notice Form</h3> 
</br>
    <div>
        <form action="" method="post">
            <div class="form-group">
                <br><label>To Whom</label></br>
                <select class="form-control" name="to_whom">
                    <option>To All</option>
                    <option>To Class 8</option>
                    <option>To Class 9</option>
                    <option>To Class 10</option>
                    <option>To Class 11</option>
                    <option>To Class 12</option>
</select>
</div>
<div class="form-group">
    <label>Post Date:</label>
    <br><input type="date" class="form-control" name="post_date"></br>
</div>
<div class="form-group">
   <br><label>Subject</label></br>
    <input type="text" class="form-control" name="Subject" placeholder="Enter Subject">
</div>
</form>
<div class="form-group">
    <label>Message</label>
    <br><textarea name="message" rows="8" cols="80" class="form-control" placeholder="Type your message..."></textarea></br>
</div>
<div class="form-group">
<br><<br><button class="btn btn-primary"type="submit" name="send notice"> Send Notice </button></br>
          
</div>
</center>
</html>
