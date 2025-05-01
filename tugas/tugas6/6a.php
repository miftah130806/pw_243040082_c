
<!DOCTYPE html>
<html>

<head>
    <title>Tugas 6a</title>
    <style>
        .box {
            display: inline-block;
            width: 20px;
            height: 20px;
            padding: 3px;
            margin: 3px;
            text-align: center;
            border: 1px solid black;
        }

        .baris-genap .box {
            background-color: #ADD8E6;

        }

        .baris-ganjil .box {
            background-color: #FBB9C5;
        }

        div {
            margin-bottom: -18px;
        }
    </style>
</head>

<body>

    <?php

    if (isset($_GET['angka']) && is_numeric($_GET['angka'])) {
        $angka = $_GET['angka'];

        for ($i = $angka; $i >= 1; $i--) {
            $kelas_baris = ($i % 2 == 0) ? 'baris-genap' : 'baris-ganjil';

            echo '<div class="' . $kelas_baris . '">';
            for ($j = 1; $j <= $i; $j++) {
                echo '<span class="box">' . $i . '</span>';
            }
            echo '</div><br>';
        }
    } else {
        echo "Parameter 'angka' tidak ditemukan atau tidak valid melalui URL.";
        echo "<br>";
        echo "Contoh penggunaan: latihan6a.php?angka=10";
    }

    ?>

</body>

</html>
