
<h2>Species</h2>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Description</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    </tbody>
    <?php
    $count = 0;
    foreach($species as $specie){
        $count++;
        ?>

        <tr>
            <td><?= $count ?></td>
            <td><?=$specie["species_description"]?></td>
            <td class="center"><a href="species/edit/<?=$specie["species_id"]?>">edit</a></td>
            <td class="center"><a href="species/delete/<?=$specie["species_id"]?>">delete</a></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
<p><a href="species/create">Create</a></p>
<p><a href="home">Home</a></p>
