<?php
// Mengecek apakah data username dan password telah disubmit
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan validasi username dan password sesuai dengan aturan Anda.
    // Misalnya, Anda dapat memeriksa mereka dalam database atau dengan aturan bisnis Anda.
    if($username === "admin" && $password === "mansur12345"){
        // Jika username dan password benar, maka lakukan redirect ke folder admin
        header("Location: /admin");
        exit; // Penting untuk menghentikan eksekusi skrip setelah redirect
    } else {
        // Jika username atau password salah, Anda dapat menampilkan pesan kesalahan
        echo "Username atau password salah!";
    }
}
?>
