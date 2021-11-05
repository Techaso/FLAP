<?php

require_once "config.php";

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "UPDATE login_info SET password='$password' WHERE username='$username';";
pg_query($conn, $sql);

header("Location: admin.php");

?>