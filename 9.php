<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            background-color: tomato;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            display: inline-block;
        }
        .btn:hover {
            background-color: darkred;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            padding: 8px;
            width: 250px;
        }
    </style>
</head>
<body>

    <?php if(isset($_GET['tambah'])): ?>
        <h1>Tambah Data Peserta</h1>
        <?php include 'form.php'; ?>

    <?php else: ?>
        <h1>Data Peserta</h1>

        <?php include 'table.php'; ?>

    <?php endif;?>

</body>
</html>