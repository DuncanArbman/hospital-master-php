


<h2><?= $species["species_description"] ?> aanpassen</h2>

<form method="post">

        <input type="hidden" name="species_id" value="<?= $species["species_id"] ?>">
        <p>Naam <input type="text" name="species_description" value="<?= $species["species_description"] ?>"></p>
        <input type="submit" name="editButton">

</form>