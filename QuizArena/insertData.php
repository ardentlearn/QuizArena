<?php
require("connection.php");
$name = $_POST["fname"];
$uname = $_POST["email"];
$pass = $_POST["psw"];
$sqlstr = "insert into signin(USER_EMAIL,NAME,USER_PASSWORD) values('$uname','$name','$pass')";
$dbcon->exec($sqlstr);
$_SESSION["status"] = "You are now a registered user!!"
//header("location:home.php");
?>

<body style="background-image:url('sea.jpg');background-repeat: no-repeat;background-size: cover;">
    <p style="text-align:center;color:darkred;font-size:80px">
        <?php
        if (isset($_SESSION["status"])) {
            echo "<center>" . $_SESSION['status'] . "</center>";
            session_unset();
            session_destroy();
        } else {
            echo "email already exists!!";
        }
        ?>
    </p>
    <center><a style="text-align:center;color:rgb(6, 71, 20);font-size:80px;" href="index.php">Login as a user now! </a></center>

    <?php
    //header("location:login.php");

    ?>
</body>