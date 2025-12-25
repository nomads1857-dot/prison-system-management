<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prison Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-- Favicon (your hands-behind-bars icon in root) -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        .navbar {
            height: 70px;
            background-color: #2c3e50;
            border: none;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        .navbar-brand {
            display: flex;
            align-items: center;
            color: #ecf0f1 !important;
            font-size: 22px;
            font-weight: bold;
        }
        .navbar-brand img {
            height: 50px;
            width: auto;
            margin-right: 15px;
        }
        .navbar-right .btn {
            margin-top: 10px;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <img src="/admin/img/logo.png" alt="Prison Management Logo">
                    Prison Management System
                </a>
            </div>
            <div class="navbar-right">
                <?php if (isset($_SESSION['staffid'])): ?>
                    <a href="/logout.php" class="btn btn-danger navbar-btn">Logout</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>