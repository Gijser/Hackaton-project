<?php
require('database.php');


function leaderboard()
{

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "lanparty";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    $query = "SELECT speler_naam, speler_aantal_punten FROM speler";
    $sql = mysqli_query($conn, $query);

    if ($sql->num_rows > 0) {
        echo "<table id='sort'><tr><th>Speler Naam</th><th>Speler Punten</th></tr>";
        while ($row = $sql->fetch_assoc()) {
            echo "<tr><td>" . $row["speler_naam"] . "</td>
            <td>" . $row["speler_aantal_punten"] . "</td>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}

function getTopTen()
{

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "lanparty";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    $query = "SELECT * FROM speler ORDER BY speler_aantal_punten DESC LIMIT 10";
    $sql = mysqli_query($conn, $query);

    if ($sql->num_rows > 0) {
        echo "<table id='sort'><tr><th>Speler Naam</th><th>Speler Punten</th></tr>";
        while ($row = $sql->fetch_assoc()) {
            echo "<tr><td>" . $row["speler_naam"] . "</td>
            <td>" . $row["speler_aantal_punten"] . "</td>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}

function getEenSpel()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "lanparty";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    $query1 = "SELECT * FROM potje";

    $sql1 = mysqli_query($conn, $query1);

    $aantal = 0;

    while ($sql1->num_rows > 0) {
        $query2 = "SELECT pot_id, game_naam, speler_naam, speler_aantal_punten, DateTime FROM potje, speler 
    WHERE pot_id = '$aantal'
    ORDER BY speler_aantal_punten DESC, DateTime DESC";

        $aantal++;
        break;
    };

    $sql2 = mysqli_query($conn, $query2);

    while ($sql1->num_rows > 0) {
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

        while ($row = $sql2->fetch_assoc()) {
            echo "
        <td>" .
                $row["game_naam"] .
                "</td>
        <td>" .
                $row["speler_naam"] .
                "</td>
        <td>" .
                $row["speler_aantal_punten"] .
                "</td>
        <td>" .
                $row["pot_datum"] .
                "</td>";
        }
       
    }
}

function getEenDag()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "lanparty";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    $datum = $_GET['datum'];

    $aantal = 0;

    $query = "SELECT pot_id, speler_naam, speler_aantal_punten, DateTime FROM potje, speler 
    WHERE pot_id = '$aantal' AND DateTime = '$datum'
    ORDER BY speler_aantal_punten DESC, DateTime DESC";

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

    while ($row = $sql->fetch_assoc()) {
        echo "
        <td>" .
            $row["speler_naam"] .
            "</td>
        <td>" .
            $row["speler_aantal_punten"] .
            "</td>
        <td>" .
            $row["pot_datum"] .
            "</td>";
    }
}

function getAll()
{

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "lanparty";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    $query = "SELECT speler_naam, speler_aantal_punten FROM speler";
    $sql = mysqli_query($conn, $query);

    if ($sql->num_rows > 0) {
        echo "<table id='sort'><tr><th>Speler Naam</th><th>Speler Punten</th></tr>";
        while ($row = $sql->fetch_assoc()) {
            echo "<tr><td>" . $row["speler_naam"] . "</td>
            <td>" . $row["speler_aantal_punten"] . "</td>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}
function addPlayer()
{
    $mysqli = db_connect();
}
if (isset($_POST['submitPlayer'])) {
    $naam = $_POST['addPlayer'];
    $mysqli = db_connect();
    $mysqli->query("INSERT INTO speler (speler_naam) VALUES('$naam')");
    header('location: ../index.php');
}
if(isset($_POST['submitGame'])){
    $naam = $_POST['addGame'];
    $mysqli = db_connect();
    $mysqli->query("INSERT INTO game (game_naam) VALUES('$naam')");
    header('location: ../index.php');
}

if(isset($_POST['submitPotje'])){
    $spel = $_POST['Spel'];
    $date = $_POST['Datum'];
    $mysqli = db_connect();
    $data = db_getData("SELECT game_naam FROM game WHERE game_naam = '$spel'");
    if($data -> num_rows < 1){
        echo'Game niet gevonden';
        header('location: ../Spelavond.php');           
    }else{
        echo 'Game toegevoegd';
        $mysqli = db_connect();
        $mysqli->query("INSERT INTO potje (game_naam, pot_datum) VALUES('$spel, $date')");
        header('location: ../Spelavond.php');
    }
    
}

if(isset($_POST['Voeg_speler_toe'])){
    $Speler = $_POST['Speler'];
    $data = db_getData("SELECT speler_naam FROM speler WHERE speler_naam = '$Speler'");
    if($data -> num_rows < 1){
        echo'Speler niet gevonden';    
        header('location: ../Spelavond.php');       
    }else{
        echo 'Speler toegevoegd';
        $mysqli = db_connect();
        $mysqli->query("INSERT INTO game (game_naam) VALUES('$Speler')");
        header('location: ../Spelavond.php');
    }

}
