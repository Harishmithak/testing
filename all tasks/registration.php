<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
<!DOCTYPE HTML>  
<html>
<head>
<!-- <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        .error {color: #FF0000;}
      
    </style> -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            color: #333;
            text-align:center;
        }
        form {
            width: 50%;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
        .error {
            color: #FF0000;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="password"], textarea, select {
            width: 100%;
            padding: 6px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="radio"], input[type="checkbox"] {
            margin-right: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            /* cursor: pointer; */
        }

    </style>
</head>
<body>  

<?php

$nameErr = $emailErr = $genderErr = $passwordErr=$addressErr=$birthdateErr=$pnumErr="";
$name = $email = $gender = $password=$address=$birthdate=$pnum= "";
$valid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $valid = false;
  } else {
    $name = test_input($_POST["name"]);
   
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
      $valid = false;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $valid = false;
  } else {
    $email = test_input($_POST["email"]);
 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $valid = false;
    }
  }

  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
    $valid = false;
  } else {
    $password = test_input($_POST["password"]);
 
    if (!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/",$password)) {
      $passwordErr = "ENTER VALID PASSWORD "; 
      $valid = false;
    }
  }
     if (empty($_POST["pnum"])) {
    $pnumErr = "Phone number is required";
    $valid = false;
  } else {
    $pnum = test_input($_POST["pnum"]);
 
    if (!preg_match("/^[0-9]*$/",$pnum)) {
      $pnumErr = "ENTER VALID PHONE NUMBER "; 
      $valid = false;
    }
  }


  if (empty($_POST["address"])) {
    $addressErr = "Address  is required";
    $valid = false;
  } else {
    $address = test_input($_POST["address"]);

  }

  if (empty($_POST["birthdate"])) {
    $birthdateErr = "DOB is required";
    $valid = false;
  } else {
    $birthdate = test_input($_POST["birthdate"]);

  }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    $valid = false;
  } else {
    $gender = test_input($_POST["gender"]);
  }

}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>REGISTRATION FORM </h2>

<form name="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  <label>password:</label>
        <input type="password" name="password" value="<?php echo $password;?>"/> <br><br>
        <span class="error">* <?php echo $passwordErr;?></span><br><br>

        <label>Phone number:</label>
        <input type="text" name="pnum" value="<?php echo $pnum;?>" /> <br><br>
        <span class="error">* <?php echo $pnumErr;?></span><br><br>
        <label>Address:</label>
        <textarea name="address" value="<?php echo $address;?>"> </textarea> 
        <span class="error">* <?php echo $addressErr;?></span><br><br>

  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  <label for="birthdate">Date of Birth:</label>
        <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthdate;?>">
        <span class="error">* <?php echo $birthdateErr;?></span><br><br>
        <label for="course">Choose a course:</label>
        <select name="course">
        <option name="course" value=""></option>
          <option name="course" value="bca">Bca</option>
          <option  name="course" value="bcom">Bcom</option>
          <option   name="course" value="Mca">Mca</option>  
        </select> <br><br>
        <input type="checkbox" name="tamil" value="tamil">
 <label for="tamil"> Tamil </label><br>
<input type="checkbox" name="english" value="english">
<label for="english">English</label><br><br>
  <input type="submit" name="submit" value="Submit">  
</form>




<?php
if ($valid) {
        echo '<table>';
        echo '<tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Course</th>
                <th>Languages</th>
              </tr>';
        echo '<tr>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$password.'</td>
                <td>'.$pnum.'</td>
                <td>'.$address.'</td>
                <td>'.$gender.'</td>
                <td>'.$birthdate.'</td>
                <td>'.(isset($_POST['course']) ? $_POST['course'] : '').'</td>
                <td>';
        if (isset($_POST['tamil'])) {
            echo 'Tamil ';
        }
        if (isset($_POST['english'])) {
            echo 'English';
        }
        echo '</td>
              </tr>';
        echo '</table>';
    }

?>

</body>
</html>