
<form name="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value=<?php echo $_POST['name'] ?? '' ?> >

  <br><br>
  
        <label>Phone number:</label>
        <input type="text" name="pnum" value=<?php echo $_POST['pnum'] ?? '' ?> /> <br><br>
       
        <label>Address:</label>
        <textarea name="address" value=<?php echo $_POST['address'] ?? '' ?> > </textarea> 
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value=<?php echo $_POST['gender'] ?? '' ?> >Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value=<?php echo $_POST['gender'] ?? '' ?> >Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value=<?php echo $_POST['gender'] ?? '' ?> >Other  

  <br><br>

  <label for="birthdate">Date of Birth:</label>
        <input type="date" id="birthdate" name="birthdate" value=<?php echo $_POST['birthdate'] ?? '' ?>  >

      
  <input type="submit" name="submit" value="Submit">  
</form>

<?php 

class Person {
    protected $name;
    protected $dob;
    protected $gender;
    protected $address;
    protected $contactNumber;

    public function accept() {
        $this->name = $_REQUEST['name'];
        $this->dob = $_REQUEST['birthdate'];
        $this->gender = $_REQUEST['gender'];
        $this->address = $_REQUEST['address'];
        $this->contactNumber =$_REQUEST['pnum'];
    }
    // public function display() {
    //     echo "Name: " . $this->name ;
    //     echo"<br>";
    //     echo "Date of Birth: " . $this->dob ;
    //     echo"<br>";
    //     echo "Gender: " . $this->gender ;
    //     echo"<br>";
    //     echo "Address: " . $this->address ;
    //     echo"<br>";
    //     echo "Contact Number: " . $this->contactNumber ;
    //     echo"<br>";
    // }

}

class student extends person{
    protected $rollNo;
    protected $grade;
    protected $mark1;
    protected $mark2;
    protected $mark3;
    protected $total;
    protected  $average;
    protected $result;
    public function __construct($name, $dob, $gender, $address, $contactNumber, $rollNo, $grade, $mark1,$mark2,$mark3) {
        parent::accept();
        $this->rollNo = $rollNo;
        $this->grade = $grade;
        $this->mark1 = $mark1;
        $this->mark2 = $mark2;
        $this->mark3= $mark3;
        $this->total();
        $this->average();
        // $this->result();
    }
    private function total(){
        $this->total= $this->mark1+$this->mark2+$this->mark3;
    }
private function average(){
    $this->average=$this->total/3;
}

public function display() {
    echo "Name: " . $this->name ;
    echo"<br>";
    echo "Date of Birth: " . $this->dob ;
    echo"<br>";
    echo "Gender: " . $this->gender ;
    echo"<br>";
    echo "Address: " . $this->address ;
    echo"<br>";
    echo "Contact Number: " . $this->contactNumber ;
    echo"<br>";
    echo  $this->total;
    echo $this->average;
}
}





if(isset($_REQUEST['submit'])) 
{  
    $obj = new student (accept(),12,'a',23,43,56);  
    $obj->accept();  
    $obj->display();  
}



?>