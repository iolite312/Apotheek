<?php
$servername = '82.151.61.71';
$username = 'apotheek';
$password = 'Website';
$dbname = 'apo_leon';
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check that connection happend
if (mysqli_connect_errno()) {
    echo "1: Connection Failed"; //error code #1 - connection failed
    exit();
}

$name = $_POST['username'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO contact VALUES (NULL,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "barf";
    exit;
}

mysqli_stmt_bind_param($stmt, "ssss", $name, $mail, $phone, $message);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("Location: /apo_leon/pages/contact");