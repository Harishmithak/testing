<?php 

class address{
    public $doornumber;
    public $streetname;
    public $city;
    public $pincode;

    public function __construct($doornumber,$streetname,$city,$pincode){

        $this->doornumber = $doornumber;
        $this->streetname = $streetname;
        $this->city = $city;
        $this->pincode = $pincode;
    }
    public function display(){
  
echo "Address:" .$this->doornumber." ".$this->streetname." ".$this->city." ".$this->pincode;
echo"<br>";
}

}
class Person {
    public $name;
    public $dob;
    public $gender;
    public $address;
    public $mobileNumber;

    public function __construct($name, $dob, $gender, $mobileNumber) {
        $this->name = $name;
        $this->dob = $dob;
        $this->gender = $gender;
        
        $this->mobileNumber = $mobileNumber;
    }
    public function display1(){
        echo "Name:".$this->name;
        echo"<br>";
        echo "dob:".$this->dob;
        echo"<br>";
        echo "gender:".$this->gender;
        echo"<br>";
        echo "mobileNumber:".$this->mobileNumber;
        echo"<br>";
    }
}

$obj=new address(18,'Mkpcolony','coimbatore',641006);
$person=new person('harishmitha','17/01/2003','female',9994519917);
$person->display1();
$obj->display();
























?>