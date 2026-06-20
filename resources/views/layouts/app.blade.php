<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Sistema</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f3f4f6;
            color: #1f2937;
        }

        nav {
            background-color: #1f2937;
            color: white;
            padding: 16px 32px;
        }

        nav h2 {
            margin: 0;
            font-size: 22px;
        }

        main {
            max-width: 1000px;
            margin: 32px auto;
            padding: 0 20px;
        }

        .header {
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 28px;
        }

        .header p {
            margin: 6px 0 0;
            color: #6b7280;
        }

        .card {
            background-color: white;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
        }

        th {
            background-color: #f9fafb;
            font-weight: bold;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .empty {
            color: #6b7280;
            text-align: center;
            padding: 24px;
        }
    </style>
</head>
<body>
<nav>
    <h2>Creditos</h2>
</nav>

<main>
    @yield('content')
</main>
</body>
</html>

