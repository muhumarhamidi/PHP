<?php

/**
 * variable dan type data
 * cukup menulis tanda ($)
 * diphp sama seperti js(javascript) tidak perlu mendefinisikan type data kedalam suatu variable
 * cukup bikin variable dan di-isi dengan nilai
 */

//variable
/**
 * 
 * Syarat Variable
 * tidak boleh diawali angka, tapi boleh mengandung angka
 * tidak boleh ada tanda spasi
 * $1nama ( Tidak Boleh )
 * $SatuNama (boleh)
 * tidak boleh ada spasi " " digantikan denga _
 * 
 */

/**
 * tanda titik dua ""
 * bisa memliki kemampun interpolasi di mana bisa membaca suatu variable didalam suatu string
 * adapun titik satu '' hanya membaca dia sebagai string bukan variable 
 * contoh
 * echo "nama saya $nama" {maka akan memanggil varible nama dan menmpilkan isi variablennya}
 * adapun jika echo 'nama saya $nama'
 * jadinya sama persis seperti yang ditulis bukan isi variable yang ditampilkan namun nama varible yang ditampilkan
 */

//Operator
/**
 * aritmatika
 * + [penjumlahan]
 * - [pengurangan]
 * * [perkalian]
 * / [pembagian]
 * % [ modulus = hasil sisa bagi]
 * bisa di operasikan langsung atau disimpan dulu dalam suatu variable
 * echo 2 - 2; 
 * hasil 0
 * $x = 12; $y = 12;
 * echo $x + $y;
 * 24
 */

/**
 * penggabuangan String / concatination / concat
 * operatornya menggukan tanda titik (.)
 * adapun untuk javascript menggunkan tanda + jadi berbeda
 * $nama_depan = "Muhammad";
 * $nama_belakang = "Umar";
 * echo $nama_depan . " " . $nama_belakang
 */

/**
 * Assigment
 * operator penugasan
 * =, +=, -=, *=, /=, %=, dan .=
 * $x = 1;
 * $x = 5;
 * echo $x;
 * hasil ditimpa jadi 5
 * jika ditulis
 * %x += 5;
 * hasilnya jadi 6
 * atau
 * $text = "Bisa";
 * $text .= " ";
 * $text .= "Begini !!!"
 * echo $text;
 * hasilnya [Bisa Begini !!!]
 */

/**
 * Perbandingan
 * < [lebih kecil dari]
 * > [lebih besar dari]
 * <= [lebeih kecil dari sama dengan]
 * >= [lebih besar dari sama dengan] 
 * == [sama sama]
 * != [tidak sama dengan(berbeda)]

 * biasa digunakan ketika kita melakukan sebuah pengkondidsian
 * contoh
 * var_dump(1 > 5);
 * hasilnya
 * bool(true)

 * hanya mengecek nilai bukan tipe datanya
 * contoh
 * var_dump(1 == "1");
 * hasilnta bool(true) kenapa karena hanya mengecek nilai bukan tipe data adapun tipe data menggunkan identitas
 */

/**
 * identitas
 * ===, !==
 * operator ini akan mengecek bukan hanya nilainya namun juga type datanya
 * contoh
 * var_dump(1 === "1");
 * hasilnta bool(false)
 * karena dengan tanda tersebut akan mengecek nilai dan tipe datanya
 */

/**
 * Logika
 * && [harus sama-sama true]
 * || [salah satunya true]
 * ! [tidak sama]
 * digunakan untuk pengkondisian
 * contoh 
 * $y = 10;
 * var_dump($y < 2 && $y % 2 == 0 )
 * maka hasilnya bool(true)
 */

echo "materi variable, Operator, penggabuangan String / concatination / concat, Assigment, Perbandingan, identitas & Logika";

//Praktek
echo "<br>";
//Materi Variable
$nama = "Muhammad Umar";
echo $nama;

echo "<br>";
//Materi Penggunaan " " dengan ' '
echo "nama saya $nama"; //bisa membaca variable dalam suatu string
echo "<br>";
echo 'nama saya $umar'; //langsung membacanya sebagai string

echo "<br>";
//Materi Operator Aritmatika
$x = 12; 
$y = 12;
echo $x + $y;

echo "<br>";
// penggabuangan String / concatination / concat
$nama_depan = "Muhammad";
$nama_belakang = "Umar";
echo $nama_depan . " " . $nama_belakang;

echo "<br>";
// operator penugasan
$x = 1;
//$x = 5;
//echo $x;
//hasil ditimpa jadi 5
//jika ditulis
$x += 5;
echo $x;
//hasilnya 6

echo"<br>";
//Perbandingan
var_dump(1 > 5);
echo "<br>";
var_dump(1 == "1"); //hanya mengecek nilai bukan tipe datanya sehingga hasilnya true 

echo "<br>";
//identitas
var_dump(1 === "1"); //hasilnya false karena dengan tanda tersebut akan mengecek nilai dan tipe datanya

echo "<br>";
//Logika
$y = 10;
var_dump($y < 2 && $y % 2 == 0 );

?>
