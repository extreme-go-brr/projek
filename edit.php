<?php

include("conect.php");

// kalau tidak ada id di query string
if( !isset($_GET['ID_pilihan_calon']) ){
    header('Location: view.php');
}

$id = $_GET['ID_pilihan_calon'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM pilihan_calon WHERE ID_pilihan_calon='$id'");
 
while($user_data = mysqli_fetch_array($result))
{
    $judul = $user_data['No_Calon'];
    $pengarang = $user_data['Nama_Calon'];
    $penerbit = $user_data['Visi_Misi_Calon'];
    $stok=$user_data['Partai'];
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>
    <form method="POST" action="proses-edit-pilihan_calon.php">
        <table border="0">
            <tr> 
                <td>No_Calon</td>
                <td><input type="text" name="No_Calon" value="<?php echo $judul;?>"></td>
            </tr>
            <tr> 
                <td>Nama_Calon</td>
                <td><input type="text" name="Nama_Calon" value="<?php echo $pengarang;?>"></td>
            </tr>
            <tr> 
                <td>Visi_Misi_Calon</td>
                <td><input type="text" name="Visi_Misi_Calon" value="<?php echo $penerbit;?>"></td>
            </tr>
            <tr> 
                <td>Partai</td>
                <td><input type="text" name="Partai" value=<?php echo $stok;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['ID_pilihan_calon'];?>></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
    </body>
</html>

