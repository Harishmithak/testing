<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION DETAILS</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
   
    <table >
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Course</th>
            <th>Languages</th>
        </tr>
        <tr>
            <td><?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?></td>
            <td><?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?></td>
            <td><?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?></td>
            <td><?php echo isset($_POST['pnum']) ? $_POST['pnum'] : ''; ?></td>
            <td><?php echo isset($_POST['address']) ? $_POST['address'] : ''; ?></td>
            <td><?php echo isset($_POST['gender']) ? $_POST['gender'] : ''; ?></td>
            <td><?php echo isset($_POST['birthdate']) ? $_POST['birthdate'] : ''; ?></td>
            <td><?php echo isset($_POST['course']) ? $_POST['course'] : ''; ?></td>
            <td>
                <?php
                if (isset($_POST['tamil'])) {
                    echo 'Tamil ';
                }
                if (isset($_POST['english'])) {
                    echo 'English';
                }
                ?>
            </td>
        </tr>
    </table>
    <?php
// define variables and set to empty values

$name = $email = $gender = $comment = $website = "";
$valid = true;?>
</body>

</html>
