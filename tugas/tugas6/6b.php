
<!DOCTYPE html>
<html>

<head>
    <title>Tugas 6b</title>
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

        .container {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <form method="post" action="">
        Masukkan Angka: <input type="number" name="angka" required>
        <input type="submit" value="Tampilkan">
    </form>

    <div class="container">
        <?php
        if (isset($_POST['angka']) && is_numeric($_POST['angka'])) {
            $angka = $_POST['angka'];

            for ($i = $angka; $i >= 1; $i--) {
                $kelas_baris = ($i % 2 == 0) ? 'baris-genap' : 'baris-ganjil';

                echo '<div class="' . $kelas_baris . '">';
                for ($j = 1; $j <= $i; $j++) {
                    echo '<span class="box">' . $i . '</span>';
                }
                echo '</div><br>';
            }
        }
        ?>
    </div>

</body>

</html>
