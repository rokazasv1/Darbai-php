<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$a = '';
if (isset($_POST['jonas']) and ($_POST['petras'])) {
    $jonas = $_POST['jonas'];
    $petras = $_POST['petras'];
    if ($jonas > $petras) {
        $a = "laimejo jonas";
    } elseif ($jonas < $petras) {
        $a = "laimejo petras";
    } elseif ($jonas = $petras) {
        $a = "lygiosios";
    }
}
?>
<form action="1.php" method="post">
    Jonas <input type="number" name="jonas"><br>
    Petras <input type="number" name="petras"><br>
    <input type="submit">
</form>
<div style="background: silver"><?php echo $a ?></div>
</body>
</html>