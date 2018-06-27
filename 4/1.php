<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if (isset($_POST['submit'])) {
    $i = 1;
    $alga = $_POST['alga'];
    $proc = $_POST['procen'];
    $nori = $_POST['norima'];
    while (true) {



        $myNumber = $alga;
        $percentToGet = $proc;
        $percentInDecimal = $percentToGet / 100;
        $percent = $percentInDecimal * $myNumber;
        $kiekmen = $alga - $percent;

        echo 'Skaičius: ' . $i . '<br />';
        echo 'Skaičius2: ' . ($alga + $percent) . '<br />';
        echo 'Norima'.$kiekmen;
        if ($i === 10) {
            break;
        }
        // Arba sustabdom ciklą kitaip

        $i++;
    }
}
?>
<form method="post">
    Iveskite gaunama alga <input type="number" name="alga" min="1"><br>
    Atlyginimo didejimas (%) <input type="number" name="procen" min="1"><br>
    Iveskite norima alga <input type="number" name="norima" min="1"><br>
    <input type="submit" name="submit">
</form>

</body>
</html>