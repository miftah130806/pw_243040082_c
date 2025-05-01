<?php
session_start();

// Periksa apakah user sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php"); // Redirect ke halaman login jika belum login
    exit();
}

// Jika sudah login, tampilkan halaman admin
?>

<!DOCTYPE html>
<html>

<head>
    <title>Selamat datang Admin</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .admin-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .admin-container img {
            width: 100%;
            height: auto;
            display: block;
        }

        .admin-container h2 {
            font-family: "Poetsen One", sans-serif;
            margin-bottom: 30px;

            color: #333;
        }

        .logout-button {
            background-color: #d9534f;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
        }

        .logout-button:hover {
            background-color: #c9302c;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="admin-container">
        <h2>Selamat datang Admin</h2>
        <a href="logout.php" class="logout-button">Logout</a>
    </div>
</body>

</html>