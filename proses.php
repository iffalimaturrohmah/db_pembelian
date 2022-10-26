<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama=$_POST['NIK'];
    $jenis=$_POST['jenis_kelamin'];

    $sql="INSERT INTO tb_pembelian (NIK,jenis_kelamin) VALUES('$nama','$jenis')";
    $query=mysqli_query($koneksi,$sql);

}
?>