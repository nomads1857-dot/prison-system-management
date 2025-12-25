<html lang="">
<head>
    <meta charset="utf-8">
    <title>Prison Management System</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        .navbar {
            height: 60px;
            background-color: #2c3e50;
            color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between; /* For logo on left, logout on right */
        }
        .navbar-brand {
            display: flex;
            align-items: center;
            color: #ecf0f1;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }
        .navbar-brand img {
            height: 50px;
            width: auto;
            vertical-align: middle;
            margin-right: 15px;
        }
        .navbar-right {
            display: flex;
            align-items: center;
        }
        .logout-btn {
            background-color: #e74c3c;
            color: white;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
        }
        .logout-btn:hover {
            background-color: #c0392b;
        }
        .container {
            margin: 20px auto;
            max-width: 900px;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #2c3e50;
            font-size: 28px;
            margin-bottom: 15px;
        }
        nav a {
            color: #34495e;
            text-decoration: none;
            margin: 0 10px;
            font-size: 16px;
        }
        nav a:hover {
            color: #e74c3c;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a class="navbar-brand" href="#">
            <img src="../admin/img/logo.png" alt="Prison Management Logo">
            Prison Management System
        </a>
        <div class="navbar-right">
            <a href="../logout.php" class="logout-btn">Logout</a>
        </div>
    </nav>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <nav>
            <a href="../addcompl.php">New Case</a> |
            <a href="../viewcases.php">View Cases</a>
        </nav>
    </div>
</body>
</html>