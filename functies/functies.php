<?php
require('database.php');
require_once ('/src_elo/Elo.php');


function leaderboard(){

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "lanparty";
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    $query = "SELECT speler_naam, speler_aantal_punten FROM speler";
    $sql = mysqli_query($conn, $query);

    if ($sql->num_rows > 0) {
        echo "<table id='sort'><tr><th>
        Speler Naam</th><th>Speler Punten</th></tr>";
        while ($row = $sql->fetch_assoc()){
            echo "<tr><td>" . $row["speler_naam"] . "</td>
            <td>" . $row["speler_aantal_punten"] . "</td>";
        }
        echo "</table>";
    } else{
        echo "0 results";
    }
}

function getTopTen(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "lanparty";
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    $query = "SELECT * FROM speler ORDER BY speler_aantal_punten DESC LIMIT 10";

    $sql = mysqli_query($conn, $query);

    while ($row = $sql->fetch_assoc()) {
        echo "<tr><td>" . $row["speler_naam"] . "</td>
        <td>" . $row["speler_aantal_punten"] . " </td>";
    }
}

function getEenSpel(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "lanparty";
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    $query = "";

    $sql = mysqli_query($conn, $query);

    while($sql->num_rows > 0)
		echo "
		<th>
			<tr>
	
			</tr>
		</th>";
}

function getEenDag(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "lanparty";
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    $query = "";

    $sql = mysqli_query($conn, $query);

    while($sql->num_rows > 0)
        echo "
        <th>
            <tr>

            </tr>
        </th>";
}

function getAll(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "lanparty";
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    $query = "";

    $sql = mysqli_query($conn, $query);

    while($sql->num_rows > 0)
    echo "
    <th>
        <tr>

        </tr>
    </th>";
}


