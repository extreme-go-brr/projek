<html>
    
    <head>
    <h1>Create Data</h1>
    </head>

    <body>
        <h3>Data calon</h3>
	    <form action="add.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr> 
                    <td>No_Calon</td>
                    <td><input type="num" name="No_Calon"></td>
                </tr>
                <tr> 
                    <td>Nama_Calon</td>
                    <td><input type="text" name="Nama_Calon"></td>
                </tr>
                <tr> 
                    <td>Visi_Misi_calon</td>
                    <td><input type="text" name="Visi_Misi_Calon"></td>
                </tr>
                <tr> 
                    <td>Partai</td>
                    <td><input type="text" name="Partai"></td>
                </tr>
                    <td>Submit<input type="submit" name="Submit" value="Add"></td>
                </tr>

    <?php
 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "e_pemilu";
 
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 
 // Memeriksa koneksi
 if (!$conn) {
     die("Koneksi gagal: " . mysqli_connect_error());}

    if(isset($_POST['Submit'])) {
        $No_Calon= $_POST['No_Calon'];
        $NamCalon= $_POST['Nama_Calon'];
        $ViMisi = $_POST['Visi_Misi_Calon'];
        $part = $_POST['Partai'];
        echo($NamCalon);
        $sql="INSERT INTO pilihan_calon (No_Calon, Nama_Calon, Visi_Misi_Calon,Partai) VALUES ('$No_Calon','$NamCalon','$ViMisi','$part')";
        $result = mysqli_query($conn,$sql);

        header("location:view.php");



    }
    ?>
            </table>
        </form>
    </body>
</html>
