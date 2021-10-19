<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wedkowanie to moje hobby</title>
</head>
<body>
<?php
$łowisko = $_POST['łowisko'] ; 
$data = $_POST['data'] ;
$sędzia = $_POST['sędzia'] ;
$db = new mysql('localhost', 'root', '', 'wedkarstwo')
 $sql = "INSERT INTO `zawody_wedkarskie`(`Karty_wedkarskie_id`, `Lowisko_id`, `data_zawodow`, `sedzia`) VALUES (NULL, `2`, `$lowisko`, `$data` ,`$sedzia`)";
$db->querry($sql);
$db->close();
?>
</body>
</html>