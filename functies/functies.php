<?php
require('database.php');


function leaderboard(){

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "lanparty";
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    $query = "SELECT speler_naam, speler_aantal_punten FROM speler";
    $sql = mysqli_query($conn, $query);

    if ($sql->num_rows > 0) {
        echo "<table id='sort'><tr><th>Speler Naam</th><th>Speler Punten</th></tr>";
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
        echo "<table id='sort'><tr><th>Speler Naam</th><th>Speler Punten</th></tr>";
        echo "<tr><td>" . $row["speler_naam"] . "</td>
        <td>" . $row["speler_aantal_punten"] . " </td>";
        echo "</table>";
    }
}

function getEenSpel(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "lanparty";
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    $query1 = "SELECT * FROM potje";

    $sql1 = mysqli_query($conn, $query1);

    $aantal = 0;

    while($sql1->num_rows > 0){
    $query2 = "SELECT pot_id, game_naam, speler_naam, speler_aantal_punten, pot_datum FROM potje, speler 
    WHERE pot_id = '$aantal'
    ORDER BY speler_aantal_punten DESC AND pot_datum DESC";
    
    $aantal++;
    };

    $sql2 = mysqli_query($conn, $query2);

    while($sql1->num_rows > 0){
		echo "
		<th>
			<tr>
                Game
			</tr>
            <tr>
                speler
			</tr>
            <tr>
                punten
			</tr>
            <tr>
                Datum
			</tr>
		</th>";

        while($row = $sql2->fetch_assoc()){
        echo"
        <td>".
            $row["game_naam"].
        "</td>
        <td>".
        $row["speler_naam"].
        "</td>
        <td>".
        $row["speler_aantal_punten"].
        "</td>
        <td>".
        $row["pot_datum"].
        "</td>";}}
}

function getEenDag(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "lanparty";
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    $datum = "";

    $aantal = 0;

    $query = "SELECT pot_id, speler_naam, speler_aantal_punten, pot_datum FROM potje, speler 
    WHERE pot_id = '$aantal' AND pot_datum = '$datum'
    ORDER BY speler_aantal_punten DESC AND pot_datum DESC";

    $sql = mysqli_query($conn, $query);

		echo "
		<th>
            <tr>
                speler
			</tr>
            <tr>
                punten
			</tr>
            <tr>
                Datum
			</tr>
		</th>";

        while($row = $sql->fetch_assoc()){
        echo"
        <td>".
        $row["speler_naam"].
        "</td>
        <td>".
        $row["speler_aantal_punten"].
        "</td>
        <td>".
        $row["pot_datum"].
        "</td>";}
}

function getAll(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "lanparty";
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    $aantal = 0;

    $query = "SELECT pot_id, game_naam, speler_naam, speler_aantal_punten, pot_datum FROM potje, speler 
    WHERE pot_id = '$aantal'
    ORDER BY speler_aantal_punten DESC AND pot_datum DESC";

    $sql = mysqli_query($conn, $query);

		echo "
		<th>
            <tr>
                speler
			</tr>
            <tr>
                punten
			</tr>
		</th>";

        while($row = $sql->fetch_assoc()){
        echo"
        <td>".
        $row["speler_naam"].
        "</td>
        <td>".
        $row["speler_aantal_punten"].
        "</td>";}
}


