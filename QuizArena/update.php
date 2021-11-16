<?php

require("connection.php");
//$name=$_POST["fname"];
$uname = $_POST["email"];
$pass = $_POST["psw"];
$sqlstr = "update signin set USER_PASSWORD = '$pass' where USER_EMAIL='$username'";
$stmt = $dbcon->exec($sqlstr);
$status = $stmt->rowCount();
if ($status > 0) {
    $_SESSION["status"] = "!Password updated successfully!";
    //header("location:home.php");

}
?>

<body style="background-image:url('sea.jpg');background-repeat: no-repeat;background-size: cover;">
    <p style="text-align:center;color:darkred;font-size:80px">
        <?php
        if (isset($_SESSION["status"])) {
            echo $_SESSION["status"];
            session_unset();
            session_destroy();
        } else {
            echo "email already exists!!";
        }
        ?>
    </p>
    <a style="align:middle;color:rgb(6, 71, 20);font-size:80px;" href="index.php">Login as a user now! </a>

    <?php
    //header("location:login.php");

    ?>
</body>