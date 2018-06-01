<h2><?= $patients["patient_name"] ?> aanpassen</h2>

<form method="post">

    <input type="hidden" name="patient_id" value="<?= $patients["patient_id"] ?>">
    <p>Patiënt naam<input type="text" name="patient_name" value="<?= $patients["patient_name"] ?>"></p>
    <p>Patiënt geslacht <input type="text" name="patient_sex" value="<?= $patients["patient_sex"] ?>"></p>
    <p>Patiënt is van:
        <select name="client_id">
            <option disabled selected>Selecteer een klant</option>
            <?php
            foreach ($clients as $client) {
                if ($client['client_id'] === $patients['client_id']) {
                    echo "<option value='" . $client['client_id'] . "' selected>" . $client['client_firstname'] . " " . $client['client_lastname'] . "</option>";
                } else {
                    echo "<option value='" . $client['client_id'] . "'>" . $client['client_firstname'] . " " . $client['client_lastname'] . "</option>";
                }

            }
            ?>
        </select>
    </p>
    <p>Patiënt is een:
        <select name="species_id">
            <option disabled selected>Selecteer een soort</option>
            <?php
            foreach ($species as $specie) {
                if ($specie['species_id'] === $patients['species_id']) {
                    echo "<option value='" . $specie['species_id'] . "' selected>" . $specie['species_description'] . "</option>";
                } else {
                    echo "<option value='" . $specie['species_id'] . "'>" . $specie['species_description'] . "</option>";
                }
            }

            ?>
        </select>
    </p>
    <p>Status <input type="text" name="patient_status" value="<?= $patients["patient_status"] ?>"></p>
    <input type="submit" name="editButton">

</form>