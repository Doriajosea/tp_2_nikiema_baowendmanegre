<?php 
    session_start();

    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : 0; 
    
    for ($i = 1; $i <= $nombre; $i++) {
    ?>
    <form method="POST" action="connection.php">
        <div class="form-group">
            <center><h3>adresse <?php echo $i; ?> </h3></center>
            <label for="street<?php echo $i; ?>">Street:</label>
            <input type="text" id="street<?php echo $i; ?>" name="street<?php echo $i; ?>" value="">
            <br><br>

            <label for="street_nb<?php echo $i; ?>">Street number:</label>
            <input type="text" id="street_nb<?php echo $i; ?>" name="street_nb<?php echo $i; ?>" value="">
            <br><br>

            <label for="type<?php echo $i; ?>">Type:</label>
            <select id="type<?php echo $i; ?>" name="type<?php echo $i; ?>">
                <option value="facturation">Facturation</option>
                <option value="livraison">Livraison</option>
                <option value="Commande">Commande</option>
                <option value="Couriel">Couriel</option>
                <option value="autre">Autre</option>
            </select><br><br>

            <label for="ville<?php echo $i; ?>">ville:</label>
            <select id="ville<?php echo $i; ?>" name="ville<?php echo $i; ?>">
                <option value="Montréal">Montéal</option>
                <option value="Laval">Laval</option>
                <option value="Toronto">Toronto</option>
                <option value="Ottawa">Ottawa</option>
                <option value="Quebec">Quebec</option>
                <option value="Longueuil">Longueuil</option>
            </select>

            <br><br>
            <label for="zipcode<?php echo $i; ?>">Zipcode:</label>
            <input type="text" id="zipcode<?php echo $i; ?>" name="zipcode<?php echo $i; ?>" value="">
            <br><br>

        </div>
        <?php }; ?>
        <center>
            <input type="submit" value="Submit">
        </center>
    </form>