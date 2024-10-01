<?php
require_once './php/connection.php';

$con = connection();

$sql = "SELECT * FROM products";
$query = mysqli_query($con, $sql);
$fields = mysqli_fetch_fields($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Products</title>
</head>
<body>
    <h2>Products</h2>
    <div class="tabla">
        <table border="1">
            <thead>
            <tr>
                <th>ProductID</th>
                <th>ProductName</th>
                <th>UnitsInStock</th>
            </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <td><?= $row['ProductID'] ?></td>
                    <td><?= $row['ProductName'] ?></td>
                    <td><?= $row['UnitsInStock'] ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>