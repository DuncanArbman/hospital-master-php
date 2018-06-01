<form method="post">
    <p>Patiënt naam <input type="text" name="patient_name"></p>
    <p>Patiënt geslacht <input type="text" name="patient_sex"></p>
    <p>Patiënt is van:
    <select name="client_id">
        <option disabled selected>Selecteer een klant</option>
        <?php
        foreach($clients as $client){
            echo "<option value='".$client['client_id']."'>".$client['client_firstname']. " ".$client['client_lastname'] ."</option>";
        }
        ?>
    </select>
    </p>
    <p>Patiënt is een:
    <select name="species_id">
        <option disabled selected>Selecteer een soort</option>
        <?php
        foreach($species as $specie){
            echo "<option value='".$specie['species_id']."'>".$specie['species_description']."</option>";
        }
        ?>
    </select>
    </p>
    <p>Status <input type="text" name="patient_status"></p>
    <input type="submit" name="createPatient">
</form>