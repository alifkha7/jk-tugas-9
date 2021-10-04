<?php

/* 1. Barang ada 3, harganya (20.000, 30.000, 50.000)
2. Diskon barang 3: 20%
3. Ketika total bayar > 75.000 dapat diskon 15%
4. Diskon hanya boleh salah satu, dipilih diskon yang terbesar
5. Hitung jumlah bayar */

$kode_barang = 3;
$barang = "";
$harga = 0;
$jumlah = 3;
$diskon_barang = 0;
$diskon_total = 0;


switch ($kode_barang) {
    case 1:
        $barang = "Barang 1";
        $harga = 20000;
    break;

    case 2:
        $barang = "Barang 2";
        $harga = 30000;
    break;

    case 3:
        $barang = "Barang 3";
        $harga = 50000;
        $diskon_barang = 0.2;
    break;
    default:
    break;
}

$total_bayar = $harga * $jumlah;
$diskon = $total_bayar * $diskon_barang;

if ($total_bayar > 75000) {
    $diskon_total = 0.15 * $total_bayar;
}

$jumlah_bayar = $total_bayar - max($diskon, $diskon_total);

echo "Anda memilih " . $barang . "<br>";
echo "Harga Barang = Rp." . $harga . "<br>";
echo "Jumlah Beli = " . $jumlah . "<br>";
echo "Total Bayar = Rp." . $total_bayar . "<br>";
echo "Diskon Barang = Rp." . $diskon . "<br>";
echo "Diskon Total = Rp." . $diskon_total . "<br>";
echo "Diskon Terbesar = Rp." .max($diskon, $diskon_barang) . "<br>";
echo "Jumlah bayar = Rp." . $jumlah_bayar;

?>