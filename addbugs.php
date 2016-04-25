<?php
/**
 * Created by PhpStorm.
 * User: 1514414
 * Date: 25/04/2016
 * Time: 09:23
 */
session_start();
include('sever.php');

if(isset($_POST['submit'])){
    if((empty($_POST['bugname']))||(empty($_POST['bugsummary']))||(empty($_POST['bugcategory']))){
        echo "all fields are required";
    }
    else{
        $bugname = $_POST['bugname'];
        $bugsummary = $_POST['bugsummary'];
        $bugcategory = $_POST['bugcategory'];

        $sql = "INSERT INTO bugs (bugname,bugsummary,bugcategory)VALUES('$bugname','$bugsummary','$bugcategory')";
        $result = mysqli_query($conn,$sql);
        if($result){
            $_SESSION['message']= "insert is was successful";
            header('Location: addbugss.php');
        }
    }
}