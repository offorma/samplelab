<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sample Lab</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="container">
        <div class="row outline">
            <span id="logo">logo</span>
            <span>
                <h3>BugTracker</h3>
                <h4>Keeping track of all the pesky little bugs</h4>
            </span>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-3 outline">
            <nav>
                <ul>
                    <li><a href="showbugs.php">All Bugs</a></li>
                    <li><a href="bugs.html">Android Bugs</a></li>
                    <li><a href="bugs.html">iOS Bugs</a></li>
                    <li><a href="bugs.html">Windows Bugs</a></li>
                    <li><a href="addbugss.php">insert Bugs</a></li>
                </ul>
            </nav>
<?php
include ('server.php');
$sql ="SELECT bugname bugsummary bugcategory FROM bugs";
$result = mysqli_query($conn,$sql);
if($result){
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
          echo"

          <div class='col-lg-9 outline'>
            <div class'row'>
                <div>
                    <p>{$row['bugname']}</p>
                    <p>{$row['bucategory']}</p>
                    <p>{$row['bugsummary']}</p>
                </div><hr>
          "  ;
        }
    }
}
else{
    die("query failed".mysqli_error($conn));
}
?>

    </div>

</div>
<div class="container">
    <div class="row outline">
        <div class="footer">
            <spa>Designed by Nonso 2016</spa>
        </div>
    </div>

</div>

<script   src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>