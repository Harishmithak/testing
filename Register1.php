<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Register.php" method="POST">
        <label>Name:</label>
        <input type="text" name="name" /> 
         <span class="error"></span>
        <br>
        <br>
        <label>Email: </label>
        <input type="email" name="email" /> 
      <br><br>
        <label>password:</label>
        <input type="password" name="password" /> <br><br>
        <label>Phone number:</label>
        <input type="text" name="pnum" /> <br><br>
        <label>Address:</label>
        <textarea name="address"> </textarea> <br><br>
        
        <label>Gender:</label>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <br><br>
        <label for="birthdate">Date of Birth:</label>
        <input type="date" id="birthdate" name="birthdate"><br><br>
        <label for="course">Choose a course:</label>
        <select name="course">
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


</body>

</html>