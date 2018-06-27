<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table>
<?php
$spalvos=array('BlanchedAlmond', 'CadetBlue', 'BurlyWood',
    'DarkOliveGreen', 'HotPink', 'PapayaWhip');

foreach ($spalvos as $s=>$color){
    echo "<tr>";
    echo "<td style='background-color:$color'>$color</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>