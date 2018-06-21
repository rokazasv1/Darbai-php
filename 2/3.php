<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$a = '';
if (isset($_POST['a']) and ($_POST['b'])and ($_POST['c'])) {

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c= $_POST['c'];
    $date = $a.":".$b.":".$c;
    echo "Ivestas laikas ".date('H:i:s',strtotime($date));
    ++$c;
    $date2 = $a.":".$b.":".$c;

    echo "<br>Po sekundes laikas ".date('H:i:s',strtotime($date2));
}
?>
<form action="3.php" method="post">
    Valandos <input type="number" name="a" max="24" placeholder="24h format"><br>
    Minutes <input type="number" name="b" max="60" placeholder="max 60"><br>
    Sekundes <input type="number" name="c" max="60" placeholder="max 60""><br>
    <input type="submit">
</form>

</body>
</html>