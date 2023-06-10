<?php
session_start();
// Menghubungkan dengan database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_pemilu";

$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Memeriksa apakah form login sudah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai input dari form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Mengecek keberadaan username dan password dalam database
    $sql = "SELECT * FROM login WHERE NoKTP = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login berhasil
        session_start();
        $_SESSION["username"] = $username;
        header("Location: home.html"); // Ganti home.php dengan halaman setelah login
        exit();
    } else {
        // Login gagal
        $error = "Username atau password lo salah";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="login.css">
  <title>Login Page</title>
  <style>
    
    
    .login-form button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="rectangle"></div>
  <a href="landing.html">
    <h2 class="PML">PEMILU</h2>
    </a>
    <div class="container">
    <form class="login-form" method="POST">
      <h2>Login</h2>
      <?php if (isset($error)) { ?>
        <p class="error"><?php echo $error; ?></p>
      <?php } 
      ?>
      <div class="rectangle2"></div>
      <input class="LI1" type="text" name="username" placeholder="NO.KTP" required>
      <input class="LI2" type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
      
    </form>
  </div>
</body>
</html>


