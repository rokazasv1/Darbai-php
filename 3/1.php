<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
//if (isset($_POST['submit'])) {
//    $skaicus = $_POST['sk'];
//    if ((int)$skaicus !== 0) {
//        for ($i = 1; $i < 13; $i++) {
//            echo $skaicus . " x " . "$i" . " = " . ($skaicus * $i) . "<br>";
//
//        }
//    } else {
//        echo "nera skaiciaus";
//    }
//}
?>

<table>

    <?php
    $counter = 0;

    for ($row = 1; $row < 3; $row++) {
        echo "<tr></tr>";

        for ($col = 1; $col < 3; $col++) {
            $p = $row *$col;
            echo "<td>".$p."</td>";

        }
    }
    ?>
</table>
</body>
</html>