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