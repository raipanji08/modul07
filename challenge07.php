<?php

// Array nilai mahasiswa
$nilai_mahasiswa = [75, 80, 65, 90, 55];

// Menghitung rata-rata nilai mahasiswa
$rata_rata = array_sum($nilai_mahasiswa) / count($nilai_mahasiswa);

// Menentukan nilai tertinggi dan terendah
$nilai_tertinggi = max($nilai_mahasiswa);
$nilai_terendah = min($nilai_mahasiswa);

// Menentukan status kelulusan
$status_kelulusan = $rata_rata >= 70? 'Lulus' : 'Tidak Lulus';

// Menampilkan hasil
echo "Nilai mahasiswa: ". implode(' ', $nilai_mahasiswa). "\n";
echo "Rata-rata nilai mahasiswa: $rata_rata\n";
echo "Nilai tertinggi: $nilai_tertinggi\n";
echo "Nilai terendah: $nilai_terendah\n";
echo "Status kelulusan: $status_kelulusan\n";

?>