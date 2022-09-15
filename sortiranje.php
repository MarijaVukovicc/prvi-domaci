<?php
include 'init.php';
$nazivKolon = 'cena';
$sort = $_POST['sort'];

$podaci = $db->vratiSveSortirano('usluga', $nazivKolon, $sort);

foreach ($podaci as $usluga){
?>
   <li><span class="float-left"><?=$usluga->naziv?><span class="float-right">RSD <?=$usluga->cena?></span></li>
<?php
}