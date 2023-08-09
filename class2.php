<?php
class User {
    private $username;
    private $age;
    private $mailid;

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setAge($age) {
        if ($age < 18) {
            throw new Exception("Age must be 18 or above.");
        }
        $this->age = $age;
    }

    public function setMailid($mailid) {
        $this->mailid = $mailid;
    }

    public function printUserDetails() {
        echo "Username: " . $this->username ;
        echo"<br>";
        echo "Age: " . $this->age ;
        echo"<br>";
        echo "Mail ID: " . $this->mailid ;
        echo"<br>";
    }
}


$user1 = new User();
$user1->setUsername("harishmitha");
$user1->setAge(20);
$user1->setMailid("harish@gnail.com");

$user2 = new User();
$user2->setUsername("pooja");
try {
    $user2->setAge(16); 
} catch (Exception $e) {
    echo "Exception: " . $e->getMessage();
    echo"<br>";
}

$user2->setMailid("pooja@gmail.com");

echo "User 1 Details:";
echo"<br>";
$user1->printUserDetails();

echo "User 2 Details:";
echo"<br>";
$user2->printUserDetails();
?>