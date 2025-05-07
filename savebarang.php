<html>
<center>
<font size=6>
Informasia Data Barang
</font>
<hr width=320>
<table>
<?php
require ("koneksi.php");
$KodeBarang=$_POST['KodeBarang'];
$NamaBarang=$_POST['NamaBarang'];
$Harga=$_POST['Harga'];
$Stok=$_POST['Stok'];
echo "<tr><td>Kode Barang<td>$KodeBarang"; 
echo "<tr><td>Nama Barang<td>$NamaBarang"; echo "<tr><td>Harga<td>$Harga"; 
echo "<tr><td>Stok<td>$Stok";
echo "</table>";
echo "<hr width=320>";
if($KodeBarang!=''){
$KodeBarang = mysqli_real_escape_string($conn, $KodeBarang);
$NamaBarang = mysqli_real_escape_string($conn, $NamaBarang);
$Harga = mysqli_real_escape_string($conn, $Harga);
$Stok = mysqli_real_escape_string($conn, $Stok);
$sql="INSERT INTO barang VALUES ('$KodeBarang','$NamaBarang','$Harga','$Stok')";
$hasil=mysqli_query($conn,$sql);
if ($hasil) {
echo "Data telah ditambahkan";
}else{
echo "Gagal menambahkan data:".mysqli_error($conn);
}
}
?>