<?php

$servername = "localhost:3307";    
$username = "root";
$password = "CG-vak123";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password= $_POST["password"];
    $usertype = $_POST["usertype"];

   
    $insertQuery = "INSERT INTO User (Username, Password,UserType) 
                    VALUES ( '$username', ' $password',' $usertype ')";
   if ($conn->query($insertQuery) === TRUE) {

    if ($usertype === "user") {
        header("Location: product.php");
        exit();
    } elseif ($usertype === "admin") {
        header("Location: form.php");
        exit();
    }
} else {
        echo "Error adding product: " . $conn->error;
    }
}
?>
<?php
$servername = "localhost:3307";
$username = "root";
$password = "CG-vak123";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $usertype = $_POST["usertype"];

    $selectQuery = "SELECT * FROM User WHERE Username = ? AND Password = ? AND UserType = ?";
    $stmt = $conn->prepare($selectQuery);
    $stmt->bind_param("sis", $username, $password, $usertype);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
     
        if ($usertype === "user") {
            header("Location: product.php");
            exit();
        } elseif ($usertype === "admin") {
            header("Location: form.php");
            exit();
        }
    } else {
        echo "Login failed. Please check your username, password, and usertype.";
    }

    $stmt->close();
    $conn->close();
}
?>


<?php
$servername = "localhost:3307";
$username = "root";
$password = "CG-vak123";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST["username"];
    $passWord = $_POST["password"];
    $userType = $_POST["usertype"];

    $selectQuery = "SELECT * FROM User WHERE Username = ? AND Password = ? AND UserType=?";
    $stmt = $conn->prepare($selectQuery);
    $stmt->bind_param("sis", $userName, $passWord,$userType);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
  
       
     
        if ($userType === "user") {
            header("Location: product.php");
            exit();
        } elseif ($userType === "admin") {
            header("Location: form.php");
            exit();
        }
    } else {
        echo "Login failed. Please check your username, password, and usertype.";
    }

    $stmt->close();
    $conn->close();
}
?>



<?php
$servername = "localhost:3307";
$username = "root";
$password = "CG-vak123";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST["username"];
    $passWord = $_POST["password"];
    $userType = $_POST["usertype"];

    $selectQuery = "SELECT * FROM User WHERE Username = ?";
    $stmt = $conn->prepare($selectQuery);
    $stmt->bind_param("s", $userName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if ($row["Password"] === $passWord && $row["UserType"] === $userType) {
            if ($userType === "user") {
                header("Location: product.php");
                exit();
            } elseif ($userType === "admin") {
                header("Location: form.php");
                exit();
            }
        } else {
            echo "Login failed. Incorrect password or user type.";
        }
    } else {
        echo "Login failed. User not found.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 300px;
        }
        
        .login-container h2 {
            margin: 0 0 20px;
            color: #333;
        }
        
        .login-container label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        
        .login-container input[type="text"],
        .login-container input[type="password"],
        .login-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        .login-container input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .login-container input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <label for="usertype">User Type:</label>
            <select id="usertype" name="usertype">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>



    <!-- <style>
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
</html> -->