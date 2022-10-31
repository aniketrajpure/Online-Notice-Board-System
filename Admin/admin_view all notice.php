<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
<title></title>
</head>
<body>
    <br>
    <h2>All Notices</h2>
    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"online_notice_board");
    $query = 'select * from notice';
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        ?>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?php echo $row['title'];?></h4>
                <p class="card-text"><?php echo $row['message'];?></p>
    </div>
    </div>
    <?php
    }
    ?>
</body>
</html>