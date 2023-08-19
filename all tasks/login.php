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
            width: 90%;
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
            <option> </option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>


<?php


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
            header("Location: userproduct.php");
            exit();
        } elseif ($userType === "admin") {
            header("Location: product.php");
            exit();
        }
    } else {
        echo "Login failed. Please check your username, password, and usertype.";
    }

    $stmt->close();
    $conn->close();
}
?>
