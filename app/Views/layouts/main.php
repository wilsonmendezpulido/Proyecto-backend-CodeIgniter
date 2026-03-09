<!DOCTYPE html>
<html>

<head>

    <title>Tienda CI4</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #f4f6f9;
        }

        .navbar {
            background: #2c3e50;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
        }

        .container {
            padding: 40px;
        }

        .btn {
            padding: 8px 14px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-primary {
            background: #3498db;
            color: white;
        }

        .btn-success {
            background: #27ae60;
            color: white;
        }

        .btn-danger {
            background: #e74c3c;
            color: white;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
        }

        input:focus {
            outline: none;
            border-color: #27ae60;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            border: none;
            border-radius: 6px;
            background: #27ae60;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #1e8449;
        }
    </style>

</head>

<body>

    <div class="navbar">

        <div>
            🛒 <b>Mi Tienda</b>
        </div>

        <div>
            <a href="/productos">Productos</a>
        </div>

    </div>

    <form action="/productos/buscar" method="get">

        <input type="text" name="q" placeholder="Buscar productos">

        <button>Buscar</button>

    </form>

    <div class="container">

        <?= $this->renderSection('content') ?>

    </div>

</body>

</html>