<?php
// Inisialisasi variabel untuk menyimpan pesan kesalahan
$errorMessage = "";

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Simpan username dan password dari form
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Contoh verifikasi sederhana (gantilah ini dengan logika verifikasi yang sesuai)
  $usernameValid = "admin";
  $passwordValid = "mansur12345";

  if ($username === $usernameValid && $password === $passwordValid) {
    // Jika verifikasi berhasil, alihkan ke halaman lain atau tampilkan pesan berhasil login
    header("Location: admin");
    exit;
  } else {
    // Jika verifikasi gagal, tampilkan pesan kesalahan
    $errorMessage = "Username atau password salah. Silakan coba lagi.";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .login-container {
      width: 300px;
      margin: 0 auto;
      margin-top: 100px;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
      text-align: center;
      color: #333;
    }

    .login-form {
      margin-top: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      font-weight: bold;
      display: block;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .login-btn {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .login-btn:hover {
      background-color: #0056b3;
    }

    .error-message {
      color: #ff0000;
      font-size: 14px;
      text-align: center;
    }
  </style>

</head>

<body>
  <div class="login-container">
    <h2>Login</h2>
    <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" class="login-btn">Login</button>
      <p>
        <?php echo $errorMessage; ?>
      </p>
    </form>
  </div>
</body>

</html>