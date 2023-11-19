<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Adresse</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
        <?php 

            session_start();

            $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : 1; 
            
            for ($i = 1; $i <= $nombre; $i++) {
            ?>
            <form method="POST" action="../utils/resultat.php">
                <div class="form-group">
                    <center><h1>Adresse <?php echo $i; ?> </h1></center>
                    <label for="street<?php echo $i; ?>">Rue:</label>
                    <input type="text" id="street<?php echo $i; ?>" name="street<?php echo $i; ?>" value="" maxlength='50' required>
                    <br><br>

                    <label for="street_nb<?php echo $i; ?>">Numéro de rue:</label>
                    <input type="number" id="street_nb<?php echo $i; ?>" name="street_nb<?php echo $i; ?>" value="">
                    <br><br>

                    <label for="type<?php echo $i; ?>">Type:</label>
                    <select id="type<?php echo $i; ?>" name="type<?php echo $i; ?>" required>
                        <option value="facturation">Facturation</option>
                        <option value="livraison">Livraison</option>
                        <option value="Commande">Commande</option>
                        <option value="Couriel">Couriel</option>
                        <option value="autre">Autre</option>
                    </select><br><br>

                    <label for="ville<?php echo $i; ?>">Ville:</label>
                    <select id="ville<?php echo $i; ?>" name="ville<?php echo $i; ?>" required>
                        <option value="Montréal">Montéal</option>
                        <option value="Laval">Laval</option>
                        <option value="Toronto">Toronto</option>
                        <option value="Ottawa">Ottawa</option>
                        <option value="Quebec">Quebec</option>
                        <option value="Longueuil">Longueuil</option>
                    </select>

                    <br><br>
                    <label for='zipcode<?php echo $i; ?>'>Code postal:</label>
                    <input type='text' name='zipcode<?php echo $i; ?>' maxlength='6' required><br>"
                    <br><br>


                    <?php
                     $_SESSION["nombre"]=$nombre;
                    

                ?>
                </div>
                <?php }; ?>
                <center>
                    <input type="submit" value="Submit">
                </center>
            </form>

</body>
</html>