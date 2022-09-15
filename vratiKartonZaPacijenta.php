<?php
include 'init.php';

$pacijent = trim($_POST['pacijent']);

$podaci = $db->vratiUslugeZaPacijenta($pacijent);
?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Pacijent</th>
            <th>Usluga</th>
            <th>Datum usluge</th>
            <th>Obrisi</th>
        </tr>
    </thead>
    <tbody>

<?php

foreach ($podaci as $podatak){
?>
    <tr>
        <td><?= $podatak->ime . ' ' . $podatak->prezime ?></td>
        <td><?= $podatak->naziv ?></td>
        <td><?= $podatak->datumUsluge ?></td>
        <td><a class="btn btn-danger" href="obrisi.php?id=<?= $podatak->idKorisnikUsluge ?>">Obrisi</a></td>
    </tr>
    <?php
}
    ?>
    </tbody>
</table>