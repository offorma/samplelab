<?php
/**
 * Created by PhpStorm.
 * User: 1514414
 * Date: 25/04/2016
 * Time: 09:16
 */
define('LINK','ap-cdbr-azure-east-c.cloudapp.net');
define('USER','bccb84f33826f0');
define('PASS','7b0e4bef');
define('DB','Nonso1514414');
$conn = mysqli_connect(LINK,USER,PASS,DB);
if($conn){
    echo "connection is up";
}
else{
    die("connection error ".mysqli_error($conn));
}