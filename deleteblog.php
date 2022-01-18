<?php

include_once 'dbconfig.php';
include_once 'dbOperation.php';

$dbObj = new Employees($DB_con);

$blog_id=$_GET['blog_id'];

$dbObj->deleteStaff($blog_id);

?>