<?php
session_start();
require("connection.php");


//$name = $_POST['fname'];
$uname = $_POST['uname'];
$pass = $_POST['psw'];

$sqlstr = "select * from signin where USER_EMAIL='$uname' && USER_PASSWORD='$pass'";
$stmt = $dbcon->query($sqlstr);
$status = $stmt->rowCount();
if ($status > 0) {
    $_SESSION["log_status"] = "Logedin";
    $_SESSION['username'] = $uname;
    header("location:home.php");

    // session_unset();
    // session_destroy();
} else {
    $_SESSION["error"] = "You have entered wrong userID or Password!!!";
?>

    <body>
        <p style="text-align:center;color:darkred;font-size:80px">
            <?php
            if (isset($_SESSION["error"])) {
                echo "<center> <h1>" . $_SESSION["error"] . " </h1></center>";
            }
            ?>
        </p>
        <center> <a style="text-align:center;color:rgb(6, 71, 20);font-size:80px;" href="index.php">Click to try again!</a></center>

    <?php
    //header("location:login.php");
}
    ?>
    </body>