<?php
session_start();
include_once("../../config.php");

$user_check = $_SESSION['username'];
if ($user_check) {
    header("Location: ../admin/login.php");
}
$sql = "SELECT username FROM tb_users WHERE username='$user_check'";
$result = mysqli_query($mysqli. $sql);
if ($result->num_rows == 0) {
    $row = mysqli_fetch_assoc ($result);
    $login_session = $row['username'];
    if (!isset($login_session)) {
        header("Location: ../admin/login.php");
    }
}