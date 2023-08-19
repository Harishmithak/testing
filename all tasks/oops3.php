<?php
abstract class Person {
    protected $name;
    protected $dob;
    protected $gender;
    protected $address;
    protected $contactNumber;

    public function __construct($name, $dob, $gender, $address, $contactNumber) {
        $this->name = $name;
        $this->dob = $dob;
        $this->gender = $gender;
        $this->address = $address;
        $this->contactNumber = $contactNumber;
    }

    abstract public function accept();
    abstract public function display();


}


class Student extends Person {
    protected $rollNo;
    protected $grade;
    protected $mark1;
    protected $mark2;
    protected $mark3;
    protected $total;
    protected $average;
    protected $result;
    protected $age;

    public function __construct($name, $dob, $gender, $address, $contactNumber, $rollNo,$grade, $mark1, $mark2, $mark3,) {
        parent::__construct($name, $dob, $gender, $address, $contactNumber);
        $this->rollNo = $rollNo;
        $this->grade=$grade;
        $this->mark1 = $mark1;
        $this->mark2 = $mark2;
        $this->mark3 = $mark3;
        $this->calculateTotal();
        $this->calculateAverage();
        $this->calculateResult();
        $this->ageCalculate();

    }

    private function calculateTotal() {
        $this->total = $this->mark1 + $this->mark2 + $this->mark3;
    }

    private function calculateAverage() {
        $this->average = $this->total / 3;
    }

    private function calculateResult() {
        if ($this->mark1 >= 40 && $this->mark2 >= 40 && $this->mark3 >= 40) {
            $this->result = 'pass';
        } else {
            $this->result = 'fail';
        }
    }
 function accept(){
   
  echo "hello welcome";
    
}
public function ageCalculate() {

    $age = (date('Y') - date('Y',strtotime($this->dob)));
$this->age=$age;

}
    public function display() {

        echo "Name: " . $this->name;
        echo "<br>";
        echo "Date of Birth: " . $this->dob;
        echo "<br>";
        echo "Gender: " . $this->gender;
        echo "<br>";
        echo "Address: " . $this->address;
        echo "<br>";
        echo "Contact Number: " . $this->contactNumber;
        echo "<br>";
        echo "Roll No: " . $this->rollNo;
        echo "<br>";
        echo "Grade: " . $this->grade;
        echo "<br>";
        echo "Total Marks: " . $this->total;
        echo "<br>";
        echo "Average Marks: " . $this->average;
        echo "<br>";
        echo "Result: " . $this->result;
        echo "<br>";
        echo "age: " . $this->age;
        echo "<br>";
    }
}

$obj = new Student('harishmitha', '12-1-2003', 'female', '18 mkp colony', '9994519917', '31' , 'FIRST GRADE' ,30, 30, 39);
$obj->display();
$obj->accept();

?>
