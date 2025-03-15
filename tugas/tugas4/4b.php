<?php

$perangkatKeras = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h3>Macam-macam perangkat keras komputer</h3>";
    echo "<ol>";
    foreach ($perangkatKeras as $item) {
        echo "<li>" . $item . "</li>";
    }
    echo "</ol>";

    $perangkatKeras[] = "Card Reader";
    $perangkatKeras[] = "Modem";

    sort($perangkatKeras);

    echo "<h3>Macam-macam perangkat keras komputer</h3>";
    echo "<ol>";
    foreach ($perangkatKeras as $item) {
        echo "<li>" . $item . "</li>";
    }
    echo "</ol>";
    ?>

</body>

</html>