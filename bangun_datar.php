<!DOCTYPE html>
<html>

<head>
    <title>Perhitungan Luas Bangun Datar</title>
</head>

<body>
    <h1>Perhitungan Luas Bangun Datar</h1>

    <?php
    $luas_segitiga = 0.5 * 6 * 4; // Contoh menghitung luas segitiga
    $luas_persegi = 5 * 5; // Contoh menghitung luas persegi
    $panjang = 7;
    $lebar = 3;
    $luas_persegi_panjang = $panjang * $lebar; // Contoh menghitung luas persegi panjang
    $jari_jari = 5;
    $luas_lingkaran = 3.14 * $jari_jari * $jari_jari; // Contoh menghitung luas lingkaran
    $alas_atas = 4;
    $alas_bawah = 8;
    $tinggi_trapesium = 6;
    $luas_trapesium = 0.5 * ($alas_atas + $alas_bawah) * $tinggi_trapesium; // Contoh menghitung luas trapesium
    ?>

    <h2>Luas Segitiga:
        <?php echo $luas_segitiga; ?>
    </h2>
    <h2>Luas Persegi:
        <?php echo $luas_persegi; ?>
    </h2>
    <h2>Luas Persegi Panjang:
        <?php echo $luas_persegi_panjang; ?>
    </h2>
    <h2>Luas Lingkaran:
        <?php echo $luas_lingkaran; ?>
    </h2>
    <h2>Luas Trapesium:
        <?php echo $luas_trapesium; ?>
    </h2>
</body>

</html>