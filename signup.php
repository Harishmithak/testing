<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
 
    </style>
</head>
<body>
    
    <form action="signupprocess.php" method="post">
    <h2>Sign Up</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" >
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" ><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" ><br>
        <button type="submit">Sign Up</button>
    </form>


</body>
</html>
