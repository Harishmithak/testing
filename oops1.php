<pre>  Write the program to create Employee class with employee code, employee name, department and basic pay as input data. Calculate bonus, incentive and gross pay.
Input the member details using constructors. Include all the constructors and destructors in the class. Apart from constructors for getting the data, use proper functions to get inputs
. Calculations are made with the following conditions.
If department is Marketing or HR and basic pay is above 20000, bonus is 25% of basic pay, incentive is 15% of basic pay.
If department is Marketing or HR and basic pay is above 10000, bonus is 15% of basic pay, incentive is 10% of basic pay.
If department is Marketing or HR and basic pay is less than or equal to 10000 bonus is 1000 and no incentive.
If department is Administration, fixed incentive is given which is 3000 for everyone in the team and no bonus is given. 
Gross pay = basic pay + bonus + incentive.  Print all details in a neat format.</pre>

<?php

class employee{
    private $empCode;
    private $empName;
    private $department;
    private $basicPay;
    private $bonus;
    private $incentive;
    private $grossPay;

    public function __construct($empCode,$empName,$department,$basicPay){
        $this->empCode=$empCode;
        $this->empName=$empName;
        $this->department=$department;
        $this->basicPay=$basicPay;
        $this->calculatebonusandinc();
        $this->calculategrosspay();
    }
    private function calculatebonusandinc(){
        if ($this->department == "Marketing" || $this->department == "HR") {
            if ($this->basicPay > 20000) {
                $this->bonus = 0.25 * $this->basicPay;
                $this->incentive = 0.15 * $this->basicPay;
            } elseif ($this->basicPay > 10000) {
                $this->bonus = 0.15 * $this->basicPay;
                $this->incentive = 0.10 * $this->basicPay;
            } else {
                $this->bonus = 1000;
                $this->incentive = 0;
            }
        } elseif ($this->department == "Administration") {
            $this->bonus = 0;
            $this->incentive = 3000;
        } else {
            $this->bonus = 0;
            $this->incentive = 0;
        }
    }
    private function calculategrosspay(){
        $this->grossPay = $this->basicPay + $this->bonus + $this->incentive; 
    }
    public function display(){
        echo "Employee Code: " . $this->empCode ;
        echo"<br>";
        echo "Employee Name: " . $this->empName ;
        echo"<br>";
        echo "Department: " . $this->department ;
        echo"<br>";
        echo "Basic Pay: " . $this->basicPay ;
        echo"<br>";
        echo "Bonus:" . $this->bonus ;
        echo"<br>";
        echo "Incentive: " . $this->incentive ;
        echo"<br>";
        echo "Gross Pay: " . $this->grossPay ;
        echo"<br>";
    }

}
$emp = new employee("123", "harishmitha", "HR", 25000);
$emp->display();

?>