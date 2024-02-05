<?php
session_start();

if($_SESSION['authenticated'] !== true){
    // redirect back to login
    header('Location: login.php');
    exit();
}
$userEmail = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="dist/output.css">
</head>
<body>
<h1>Welcome, <?php echo $userEmail; ?></h1>
</body>
</html>