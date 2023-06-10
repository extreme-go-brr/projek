<?php

include("conect.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $judul=$_POST['No_Calon'];
    $pengarang=$_POST['Nama_Calon'];
    $penerbit=$_POST['Visi_Misi_Calon'];
    $stok=$_POST['Partai'];

    // buat query update
    $result = mysqli_query($conn, "UPDATE pilihan_calon SET No_Calon='$judul',Nama_Calon='$pengarang',Visi_Misi_Calon='$penerbit', Partai='$stok' WHERE ID_pilihan_calon=$id");
    header('Location: view.php');
} 

?>