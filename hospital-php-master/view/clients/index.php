
<h2>Clients</h2>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>First name</th>
        <th colspan="2">Lastname<th>
    </tr>
    </thead>
    </tbody>
    <?php
    $count = 0;

    foreach($clients as $client){
        $count++;
        ?>

        <tr>
            <td><?= $count ?></td>
            <td><?=$client["client_firstname"]?></td>
            <td><?=$client["client_lastname"]?></td>
            <td class="center"><a href="clients/edit/<?=$client["client_id"]?>">edit</a></td>
            <td class="center"><a href="clients/delete/<?=$client["client_id"]?>">delete</a></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
<p><a href="clients/create">Create</a></p>
<p><a href="home">Home</a></p>
