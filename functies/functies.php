<?php

require_once("database.php");


function leaderboard(){

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "lanparty";
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    $query = mysqli_connect();

}

function getTopTen(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "lanparty";
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    $query = mysqli_connect();

    $query = "SELECT * FROM speler ORDER BY speler_aantal_punten DESC LIMIT 10";

    $sql = mysqli_query($conn, $query);

    while ($row = $sql->fetch_assoc()) {
        echo "<tr><td>" . $row["speler_naam"] . "</td>
        <td>" . $row["speler_aantal_punten"] . " </td>";
    }
}


