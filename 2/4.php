<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$a = '';
if ($_POST['a'] > 0); {
    $deg = 0.28;
    $a = $_POST['a'];
    $sumDeg = $deg * $a;
    echo "Pilna suma: ".$sumDeg;
    if ( $sumDeg < 1000) {
       echo "<br>"."Nera nuolaidos";
    }
    else if ($sumDeg < 2000) {
        $discount3 = $sumDeg - ($sumDeg * (3 / 100));
        echo "<br>"."Nuolaida 3%: ".round( $discount3,2);
    }
    else {
        $discount4 = $sumDeg - ($sumDeg * (4 / 100));
        echo "<br>"."Nuolaida 4%: ".round( $discount4,2);
    }
}
?>
<form action="4.php" method="post">
    Iveskite degtuku kieki vnt <input type="number" name="a" min="1"><br>
    <input type="submit">
</form>

</body>
</html>