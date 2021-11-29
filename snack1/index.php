<?php 

$nameGet = $_GET["name"];
$mailGet = $_GET["mail"];
$ageGet = $_GET["age"];
$hasDot = strstr($mailGet, "@");
$hasAt = strstr($mailGet, ".");
$hasNumber = is_numeric($ageGet);

if ((strlen($nameGet) > 3) && $hasAt && $hasDot && $hasNumber) {
    echo "Accesso riuscito";
} else {
    echo "Accesso rifiutato";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    
</body>
</html>