<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <head>
	<link rel="stylesheet" href="view.css">
    </head>
    
    <body>
	<header><h4>HALAMAN ADMIN</h4><br>
			<div class="nav">
			<a href="#home">Home</a>
			<a href="#about">About</a>
			<a href="#berita">Berita</a>
			<a href="totl.php">Hasil</a></header>
			</div>
			
			<h3>DATA CALON</h3>
		<button class="bt"><a href="add.php">Add cln</a><br/><br/></button>
		
	    <table border="1" class="tbl">
		    <tr>
    			<th>No</th>
    			<th>No_Calon</th>
    			<th>Nama_Calon</th>
    			<th>Visi_Misi_Calon</th>
				<th>Partai</th>
		    </tr>           
        <?php 
        //Select Tabel Buku dari database
            include "conect.php";
			
		    $query_mysql = mysqli_query($conn,"SELECT * FROM pilihan_calon ")or die(mysqli_error());
		    $nomor = 1;
		    while($data = mysqli_fetch_array($query_mysql)){
		?>
            <tr>
    			<td><?php echo $nomor++; ?></td>
    			<td><?php echo $data['No_Calon']; ?></td>
    			<td><?php echo $data['Nama_Calon']; ?></td>
    			<td><?php echo $data['Visi_Misi_Calon']; ?></td>
				<td><?php echo $data['Partai']; ?></td>
				<td><a href='edit.php?ID_pilihan_calon=<?php echo $data['ID_pilihan_calon'];?>'>Edit</a>
					<a href='delete.php?ID_pilihan_calon=<?php echo $data['ID_pilihan_calon'];?>'>Delete</a>
				</td>
            </tr>
            <?php } ?>
            
        </table>

    </body>
</html>