<?php
    include_once('functies/functies.php');

    
    
?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <section>
        <div>
            <from action="index.php" method="POST">
                <div class="inputRow">
                    <label for="Spel">Spel:</label>
                    <input type="text" name="Spel">
                </div>
                <div class="inputRow">
                    <label for="Datum">Datum</label>
                    <input type="date" name="Datum">
                </div>
                <div class="inputRow">
                	<button class="btn" type="submit" name="submitPotje" href="#">Voeg potje toe</button>
            	</div>
            </from>
            </div>
            </section>
            <form action="functies/functies.php" method="POST">
                <div class="inputRow">
                    <label for="Speler">Vul spelernaam in:</label>
                    <input type="text" name="Speler">
                </div>
                <div>
                    <input type="submit" name="Voeg_speler_toe">
                </div>
            </form>
        

        <div class="spelers">

                <?php
                //if ($data -> num_rows > 0){

                  //  while ($artist = $_SESSION['punten'])
                    //{
                    //    echo $_SESSION['speler'];
                      //      break;
                    //}
                //}

                ?>
            </div>
    </body>
</html>