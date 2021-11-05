<?php

require_once "config.php";

$department = $_POST['department'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO login_info VALUES ('$username','$password','faculty');";
pg_query($conn, $sql);
$sql1 = "INSERT INTO emp_info VALUES ('$username',NULL,NULL,'$department',NULL,NULL,NULL);";
pg_query($conn, $sql1);
$sql2 = "INSERT INTO leaves_count VALUES ('$username',0);";
pg_query($conn, $sql2);
$sql3 = "INSERT INTO login_sessions VALUES ('$username',NULL,NULL);";
pg_query($conn, $sql3);

header("Location: admin.php");

?>