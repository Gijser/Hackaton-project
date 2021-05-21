<?php
    include_once('functies/functies.php');

    session_start();
    $punten = 0;

    $conn = OpenCon();

    if(isset($_POST['Voeg_speler_toe'])){
        $Speler = $_POST['Speler'];
        $data = db_getData("SELECT speler_naam FROM speler WHERE speler_naam = '$Speler'");
        if($data -> num_rows < 1){
            echo'Speler niet gevonden';           
        }else{
            echo 'Speler toegevoegd';
            $_SESSION['punten'] =  $punten;
        }

    }
    
?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div>
            <from action="#" method="POST">
                <div class="inputRow">
                    <label for="Spel">Spel:</label>
                    <select name="Spel">
                        <option value="1">Mario Kart</option>
                        <option value="2">Rocket League</option>
                        <option value="3">League of Legends</option>
                    </select>
                </div>
                <div class="inputRow">
                    <label for=""></label>
                </div>
            </from>
            <form action="#" method="POST">
                <div class="inputRow">
                    <label for="Speler">Vul spelernaam in:</label>
                    <input type="text" name="Speler">
                </div>
                <div>
                    <input type="submit" name="Voeg_speler_toe">
                </div>
            </form>
        </div>
        <div class="spelers">

                <?php
                if ($data -> num_rows > 0){

                    while ($artist = $_SESSION['punten'])
                    {
                        echo $_SESSION['speler'];
                            break;
                    }
                }

                ?>
            </div>
    </body>
</html>