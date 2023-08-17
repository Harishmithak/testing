<?php

$servername = "localhost:3307";    
$username = "root";
$password = "CG-vak123";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$productQuery = "SELECT * FROM Product";
$productResult = $conn->query($productQuery);

$userQuery = "SELECT * FROM User";
$userResult = $conn->query($userQuery);

?>


<html>
<head>
    <title>Product and User Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        h2 {
            margin-top: 20px;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin-left:150px;
            margin-top: 10px;
            background-color: white;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

     #prod{
        text-align:center;
     }
     #use{
        text-align:center;
     }

    </style>
</head>
<body>
<h2 id ='prod'>Product Details</h2>
    <table>
        <tr>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Product Type</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Image</th>
        </tr>
        <?php while ($productRow = $productResult->fetch_assoc()): ?>
            <tr>
                <td><?= $productRow['ProductCode'] ?></td>
                <td><?= $productRow['ProductName'] ?></td>
                <td><?= $productRow['ProductType'] ?></td>
                <td><?= $productRow['Description'] ?></td>
                <td><?= $productRow['Quantity'] ?></td>
                <td><?= $productRow['Price'] ?></td>
                <td><img src="<?= $productRow['Image'] ?>" width="50" height="50" alt="Product Image"></td>
            </tr>
        <?php endwhile; ?>
    </table>


</body>
</html>



