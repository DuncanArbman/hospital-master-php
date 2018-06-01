


<h2><?= $clients["client_firstname"] ?> aanpassen</h2>

<form method="post">

        <input type="hidden" name="client_id" value="<?= $clients["client_id"] ?>">
        <p>Voornaam <input type="text" name="client_firstname" value="<?= $clients["client_firstname"] ?>"></p>
        <p>Achternaam <input type="text" name="client_lastname" value="<?= $clients["client_lastname"] ?>"></p>
        <input type="submit" name="editButton">

</form>