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
        for ($i = 1; $i < 9; $i++) {
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "</tr>";
            for ($y = 1; $y < 9; $y++) {
                //            echo $i . "-" . $y . "</br>";

            }
        }
    ?>
    <tr>
        <th>Lastname</th>
        <th>Age</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>Lastname</th>
        <th>Age</th>
    </tr>
    <tr>
        <td>Smith</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
    </tr>
    <tr>
        <td>Jackson</td>
        <td>94</td>
    </tr>
</table>
</body>
</html>