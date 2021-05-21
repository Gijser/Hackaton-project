<?php
define("DB_HOST", "localhost", true);
define("DB_NAME", "lanparty", true);
define("DB_USER","root", true );
define("DB_PASSWORD","", true );

function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "lanparty";
$conn = mysqli_connect($dbhost, $dbuser,$dbpass, $db) or die("Connect failed: %s\n". $conn -> error);

return $conn;
}
function db_connect(){
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    return $mysqli;
}
function db_getData($query){
    $mysqli = db_connect();
    $result = $mysqli->query($query);
    $mysqli -> close();
    return $result;
}

function CloseCon($conn)
{
$conn -> close();
}