<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tar Gergő</title>
</head>

<body>
    <h1>Vezérlési szerkezetek</h1>
    <?php
    echo "<h2>Véletlen számok</h2>";
    echo "Paraméter nélküli véletlen szám: <br> " . rand() . "<br>";
    echo "A véletlen szám maximuma: <br>" . getrandmax() . "<br>";
    echo "Zárt intervallumbelivéletlen szám: <br>" . rand(15, 30) . "<br>";
    $x = 7;
    $y = 6;
    function myTest0()
    {
        $x = 1;
        $y = 2;

        $z = $x + $y;
        echo "A lokal $x és lokal $y összege: $z";

        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        echo "A globalis" . $GLOBALS['x'] . "és" . $GLOBALS['y'] . "összege:" . $GLOBALS['z'] . "<br>";
    }
    myTest0();
    echo "<h2>Operatorok</h2>";
    $adat1 = 8 / 3;
    echo "8/3 eredménye:$adat1<br>";
    echo "8/3 eredménye:" . gettype($adat1) . "<br>";

    echo "<h2>Elágazások</h2>";
    $logika = (5 == 5);
    echo "5 = 5? ";
    echo ($logika ? 'Ez igaz.' : 'Ez hamis.');
    echo "if-fel";
    if ($logika) {
        echo 'Ez igaz.<br>';
    } else {
        echo 'Ez hamis.<br>';
    };
    $szam = rand(-1, 1);
    echo "A véletlen szám: $szam<br>";
    switch ($szam) {
        case -1:
            echo "A szám negatív";
            break;
        case 0:
            echo "A szám 0-la";
            break;
        default:
            echo "A szám pozitív";
            break;
    }
    echo "<h2>Ciklusok</h2>";
    $tomb = array(1, 3, 5);
    foreach ($tomb as $ertek) {
        echo $ertek . '<br>';
    }
    $asszTomb = array("szandi" => 10, "istván" => 20);
    foreach ($asszTomb as $kulcs => $ertek) {
        echo "$kulcs : $ertek<br>";
    }
    echo "<h2>Feladatok</h2><br>";
    echo "Feladat 1<br>";
    $szamok = array();
    $osszeg = 0;
    for ($i = 0; $i < 5; $i++) {
        $szamok[$i] = rand(20, 30);
        $osszeg += $szamok[$i];
    }
    echo "összeg: $osszeg<br>";
    echo "Feladat 4<br>";
    $palya = array();
    $feherDiv = "<div class = 'feher'></div>";
    $feketeDiv = "<div class = 'fekete'></div>";
    $szeleDiv = "<div class = 'szele'></div>";
    for ($i = 0; $i < 8; $i++) {
        array_push($palya, $szeleDiv);
    }
    for ($i = 0; $i < 73; $i++) {
        if ($i % 8 == 0) {
            array_push($palya, $szeleDiv);
        } elseif ($i % 2 == 0 &&  $i % 8 != 0) {
        }
    }

    ?>
</body>

</html>