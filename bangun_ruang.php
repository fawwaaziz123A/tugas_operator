<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Volume Bangun Ruang</title>
</head>
<body>
    <h1>Perhitungan Volume Bangun Ruang</h1>

    <?php
    // Menghitung volume kubus
    $sisi_kubus = 5;
    $volume_kubus = $sisi_kubus * $sisi_kubus * $sisi_kubus;

    // Menghitung volume balok
    $panjang_balok = 6;
    $lebar_balok = 4;
    $tinggi_balok = 3;
    $volume_balok = $panjang_balok * $lebar_balok * $tinggi_balok;

    // Menghitung volume tabung
    $jari_jari_tabung = 4;
    $tinggi_tabung = 8;
    $volume_tabung = 3.14 * $jari_jari_tabung * $jari_jari_tabung * $tinggi_tabung;
    ?>

    <h2>Volume Kubus: <?php echo $volume_kubus; ?> </h2>
    <h2>Volume Balok: <?php echo $volume_balok; ?> </h2>
    <h2>Volume Tabung: <?php echo $volume_tabung; ?> </h2>
</body>
</html>
