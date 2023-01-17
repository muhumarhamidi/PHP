<?php

//Sintaks PHP

//komentar

//komentar 1
/**
 * komentar 2
 */

/*komentar 3
*/

//Standart Output
/**
 * echo
 * print ( Untuk mencetak tulisan,isi Variable Dan lain Sebagainya )
 * 
 * dua standart output diatas disarankan dan sering digunakan
 * 
 * print_r ( Biasa digunakan untuk mencetak Array )
 * var_dumb ( melihat isi dari variable yang dimana akan menampilkan informasi dari varibel  tersebut )
 * untuk dua print diatas juga biasanya dipake debugging
 * 
 */

//penulisan sintaks PHP
/**
 * PHP di dalam HTML
 * HTML didalam PHP     
 */

echo "Materi Standar Output , Komentar & Penulisan Sintaks PHP"

?>

<!-- Praktek -->

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Praktek Materi 1</title>
</head>

<body>
      <h1>Hallo selamat datang <?php echo "Umar" ?></h1>
      <p><?php echo "ini ada paragraph di dalam html" ?></p>
      <!-- php di dalam html = > ini disarankan biar lebih mudah tag HTML tetap HTML, dan tag PHP tetap PHP -->
      <?php echo "<h1>Hallo umar semangat terus ya</h1>" ?>
      <!-- html didalam php -->
      <!-- namun penulisan ini tidak disarankan  -->
</body>

</html>