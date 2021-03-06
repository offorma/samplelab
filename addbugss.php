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

        </div>
        <div class="col-lg-9 outline">
            <form action="addbugs.php" method="post">
                <div class="form-group">
                    <?php
                    if(isset($_SESSION['message'])){
                        echo "<h2>".$_SESSION["message"]."</h2>";
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="bugname">Bug Name</label>
                    <input class="form-control" type="text" name="bugname" placeholder="Enter Bug Name">
                </div>
                <div class="form-group">
                    <label for="bugsummary">Bug Summary</label>
                    <textarea class="form-control" rows="5" name="bugsummary" placeholder="Enter Bug Summary"></textarea>
                </div>
                <div class="form-group">
                    <label for="bugcategory">Bug Category</label>
                    <select class="form-control"  name="bugcategory">
                        <option>Android</option>
                        <option>iOS</option>
                        <option>Windows</option>
                    </select>
                </div>
                <div class="right">
                    <input type="submit" value="submit" name ='submit' class="btn btn-primary">
                </div>
            </form>
        </div>

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