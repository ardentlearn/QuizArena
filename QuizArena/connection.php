<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$db = "quizarena";


try{
    $dbcon = new PDO("mysql:host=$host;dbname=$db",$username,$password);
    //echo "Connection Successfull";
    //$sqlquery = "select * from login.user";
    //$stmt = $dbcon->query($sqlquery);
    //$rs = $stmt->fetch(PDO::FETCH_ASSOC);
    //echo "<pre>"
    //print_r($rs);
    /*while($rs=$stmt->fetch(PDO::FETCH_ASSOC);)
    {

    }
    $sqlquery = "insert into student() values()";
    $stmt = $dbcon->exec($sqlquery);*/

}
catch(PDOException $e)
{
    echo "Error  : ".$e->getMessage();
}
