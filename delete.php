<?php

include_once("conect.php");
if(isset($_GET['ID_pilihan_calon'])){
$id = $_GET['ID_pilihan_calon'];
$Sql="DELETE FROM pilihan_calon WHERE ID_pilihan_calon=$id";
$result = mysqli_query($conn,$Sql);
}
header("location:view.php");
?>