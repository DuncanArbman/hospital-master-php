
<h2>Clients</h2>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Patient naam</th>
        <th>Geslacht</th>
        <th>Type</th>
        <th colspan="2">Status<th>
    </tr>
    </thead>
    </tbody>
    <?php
    $count = 0;

    foreach($patients as $patient){
        $count++;
        ?>

        <tr>
            <td><?= $count ?></td>
            <td><?=$patient["patient_name"]?></td>
            <td><?=$patient["patient_sex"]?></td>
            <td><?=$patient["species_description"]?></td>
            <td><?=$patient["patient_status"]?></td>
            <td class="center"><a href="patients/edit/<?=$patient["patient_id"]?>">edit</a></td>
            <td class="center"><a href="patients/delete/<?=$patient["patient_id"]?>">delete</a></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
<p><a href="patients/create">Create</a></p>
<p><a href="home">Home</a></p>
