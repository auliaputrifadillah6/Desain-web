<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP</title>
</head>
<body>
    
</body>
</html>

<p>latihan</p>
<?php
echo"hello world <br>";
$nilai=90;
echo ("Berarti Nilai : $nilai <br>");
echo "menghitung gaji pokok :";
$gapok=100;
$tunjangan=20;
$total=$gapok + $tunjangan;
echo $total;
?>
<p>lat1.php</p>
<?php
echo "menghitung gaji pokok : <br>";
$gapok=2000000;
$tunjangan=500000;
$total=$gapok + $tunjangan;
echo ("Total Gaji = $total");
?>
<p>lat2.php</p>
<?php 
$x=100; 
$y=150; 
if($x>$y) 
echo("X > Y"); 
elseif($y>$x)
echo("Y > X"); 
else 
echo("X = Y"); 
?>
<p>lat3.php</p>
<?php
$x=10; 
while($x<=100)
{ 
    echo($x."<br>");
    $x+=10;
}
?>
<p>lat4.php</p>
<?php 
$x=0; 
for($x==0;$x<=10;$x++)
{ 
    echo("Bilangan Genap: $x"); 
    $x++; 
    echo("<br>"); 
}
?>

<p>Tugas1.php</p>
<?php
$nilai =80;
echo("Nilai: $nilai");

if($nilai>=80 && $nilai<=100)
     echo("Nilai A");
else if ($nilai>=70 && $nilai<=79)
    echo("Nilai B"); 
else if ($nilai>=60 && $nilai<=69)
    echo("Nilai C");
else if ($nilai>=45 && $nilai<=49) 
    echo("Nilai D");
else 
     echo("Gagal");
?>

<p>Tugas2.php</p>
<?php
$harga=1000;
$jumlah=4;
$diskon=0;
$totalBayar=0;
if ($jumlah>=3){
$diskon= 0.10 * $harga * $jumlah;
}
else{
$diskon=0;
}
$totalBayar = ($harga * $jumlah) - $diskon;
echo("Harga Per item :" . $harga);
echo('<br>');
echo("Jumlah Beli :" . $jumlah);
echo('<br>');
echo("Diskon :" . $diskon);
echo('<br>');
echo("Total Bayar :" . $totalBayar);
?>

<p>Tugas3.php</p>
<?php
$gajiperhari = 50000;
$uangmakanperhari=5000;
$Lemburjam1= 25000;
$Lemburjam2=35000;
$harikerja=22;
$totaljamkerja=22;
$totaljamlembur=3;
$totalgaji=0;
$totalgaji = $gajiperhari * $harikerja;
$gajilembur=0;
if ($totaljamlembur > 0 && $totaljamlembur <=2){
    $gajilembur = $totaljamlembur * $Lemburjam1;
}else if ($totaljamlembur >=3){
    $gajilembur=(2*$Lemburjam1) + (($totaljamlembur - 2) * $Lemburjam2);
}
$totalgaji += $gajilembur;
if($totaljamkerja>=20){
    $Totaluangmakan = $uangmakanperhari * $harikerja;
    $totalgaji += $Totaluangmakan;
}
echo("Total Uang Makan:" . $Totaluangmakan);
echo("<br>");
echo("Total Gaji Lembeur:" . $gajilembur);
echo("<br>");
echo("Total Gaji:" . $totalgaji);
?>

<p>Tugas4.php</p>
<?php
$jenis_kelamin = 'laki_laki'; // Atau 'perempuan'
$tinggi_badan = 175; // Ganti dengan tinggi badan pelamar
$berat_badan = 65; // Ganti dengan berat badan pelamar
$ipk = 3.5; // Ganti dengan IPK pelamar
$pendidikan = 'S1'; // Atau 'D3'

if ($jenis_kelamin == 'laki_laki' && $tinggi_badan >= 170 && $tinggi_badan <= 179) {
    $berat_ideal = $tinggi_badan - 110;
    if ($berat_badan == $berat_ideal && $ipk >= 3 && $ipk <= 4 && ($pendidikan == 'D3' || $pendidikan == 'S1')) {
        echo "Diterima sebagai pegawai laki-laki.";
    } else {
        echo "Tidak memenuhi syarat untuk penerimaan pegawai laki-laki.";
    }
} elseif ($jenis_kelamin == 'perempuan' && $tinggi_badan >= 160 && $tinggi_badan <= 170) {
    $berat_ideal = $tinggi_badan - 110;
    if ($berat_badan == $berat_ideal && $ipk >= 3 && $ipk <= 4 && ($pendidikan == 'D3' || $pendidikan == 'S1')) {
        echo "Diterima sebagai pegawai perempuan.";
    } else {
        echo "Tidak memenuhi syarat untuk penerimaan pegawai perempuan.";
    }
} else {
    echo "Tidak memenuhi syarat untuk penerimaan pegawai.";
}
?>

<p>Tugas5.php</p>
<?php
// Deklarasi jumlah detik yang ditentukan untuk billing online
$jumlahDetik = 10000;

// Deklarasi harga per detik dan jumlah pulsa per detik
$hargaPerDetik = 30;
$jumlahPulsaPerDetik = 45;

// Hitung jumlah pulsa yang digunakan
$jumlahPulsa = ceil($jumlahDetik / $jumlahPulsaPerDetik);

// Hitung total biaya
$totalBiaya = $jumlahPulsa * $hargaPerDetik;

// Hitung jam, menit, dan detik pemakaian
$jam = floor($jumlahDetik / 3600);
$sisaDetik = $jumlahDetik % 3600;
$menit = floor($sisaDetik / 60);
$detik = $sisaDetik % 60;

// Output hasil
echo ("Total biaya yang harus dibayar: $totalBiaya rupiah\n");
echo("<br>");
echo ("Pemakaian: $jam jam $menit menit $detik detik\n");
?>

<p>Tugas6.php</p>
<?php
$tanggal =24;
$bulan =1;

// Pernyataan if-else untuk menentukan zodiak
$zodiak = "";
if (($bulan == 3 && $tanggal >= 21) || ($bulan == 4 && $tanggal <= 19)) {
    $zodiak = "Aries";
} elseif (($bulan == 4 && $tanggal >= 20) || ($bulan == 5 && $tanggal <= 20)) {
    $zodiak = "Taurus";
} elseif (($bulan == 5 && $tanggal >= 21) || ($bulan == 6 && $tanggal <= 20)) {
    $zodiak = "Gemini";
} elseif (($bulan == 6 && $tanggal >= 21) || ($bulan == 7 && $tanggal <= 22)) {
    $zodiak = "Cancer";
} elseif (($bulan == 7 && $tanggal >= 23) || ($bulan == 8 && $tanggal <= 22)) {
    $zodiak = "Leo";
} elseif (($bulan == 8 && $tanggal >= 23) || ($bulan == 9 && $tanggal <= 22)) {
    $zodiak = "Virgo";
} elseif (($bulan == 9 && $tanggal >= 23) || ($bulan == 10 && $tanggal <= 22)) {
    $zodiak = "Libra";
} elseif (($bulan == 10 && $tanggal >= 23) || ($bulan == 11 && $tanggal <= 21)) {
    $zodiak = "Scorpio";
} elseif (($bulan == 11 && $tanggal >= 22) || ($bulan == 12 && $tanggal <= 21)) {
    $zodiak = "Sagittarius";
} elseif (($bulan == 12 && $tanggal >= 22) || ($bulan == 1 && $tanggal <= 19)) {
    $zodiak = "Capricorn";
} elseif (($bulan == 1 && $tanggal >= 20) || ($bulan == 2 && $tanggal <= 18)) {
    $zodiak = "Aquarius";
} elseif (($bulan == 2 && $tanggal >= 19) || ($bulan == 3 && $tanggal <= 20)) {
    $zodiak = "Pisces";
} else {
    $zodiak = "Invalid";
}

// Output zodiak
if ($zodiak !== "Invalid") {
    echo "Zodiak Anda: " . $zodiak . "\n";
    // Kesehatan, asmara, keuangan, dan karier bisa ditambahkan sesuai kebutuhan
    // Misalnya:
    echo "Kesehatan: ...\n";
    echo "Asmara: ...\n";
    echo "Keuangan: ...\n";
    echo "Karier: ...\n";
} else {
    echo "Tanggal atau bulan yang dimasukkan tidak valid.\n";
}
?>