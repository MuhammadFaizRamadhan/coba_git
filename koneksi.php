<?php
$koneksi = mysqli_connect("localhost","root","","suggestion_form");
// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_errno());
}
?>