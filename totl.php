
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="ttl.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header><a href="view.php" class="bck">back</a><br> <h3>HASIL SUARA</h3>
        </header>
<form method="GET" action="totl.php">
    <select name="No_calon_vote">
        <option value="1">Pilihan 1</option>
        <option value="2">Pilihan 2</option>
        <option value="3">Pilihan 3</option>
        <option value="4">Pilihan 4</option>
        <!-- Tambahkan pilihan lainnya sesuai kebutuhan -->
    </select>
    <input type="submit" class="inp" value="Submit">

</form>
</body>
</html>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_pemilu";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $selectedNoCalonVote = $_GET["No_calon_vote"];

    $query = "SELECT SUM(total) FROM vote WHERE No_calon_vote = $selectedNoCalonVote";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $sum = $row['SUM(total)'];
        echo "<table>
                <tr>
                    <th>No Calon Vote</th>
                    <th>Jumlah Suara</th>
                </tr>
                <tr>
                    <td>$selectedNoCalonVote</td>
                    <td>$sum</td>
                </tr>
            </table>";
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }
}

?>