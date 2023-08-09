<?php
class User {
    private $userName;
    private $age;
    private $mailId;
    private static $above50Count = 0;
    private static $below50Count = 0;


    const ABOVE_AGE = 50;

    public function __construct($userName, $age, $mailId) {
        $this->userName = $userName;
        $this->age = $age;
        $this->mailId = $mailId;

        if ($age > self::ABOVE_AGE) {
            self::$above50Count++;
        } else {
            self::$below50Count++;
        }
    }

    public static function printCount() {
        echo "Users above 50: " . self::$above50Count ;
        echo"<br>";
        echo "Users below 50: " . self::$below50Count ;
    }

    public function printProperties() {
        echo "User Name: " . $this->userName ;
        echo"<br>";
        echo "Age: " . $this->age ;
        echo"<br>";
        echo "Mail ID: " . $this->mailId ;
        echo"<br>";
    }
}

$user1 = new User("pooja", 67, "pooja@gmail.com");
$user2 = new User("harish", 60, "harish@gmail.com");
$user3 = new User("harita", 40, "harita@gmail.com");
$user4 = new User("ranita", 70, "ranita@gmail.com");
$user5 = new User("yamini", 30, "yamini@gmail.com");

$user1->printProperties();
echo"<br>";
$user2->printProperties();
echo"<br>";
$user3->printProperties();
echo"<br>";
$user4->printProperties();
echo"<br>";
$user5->printProperties();
echo"<br>";
User::printCount(); 



?>