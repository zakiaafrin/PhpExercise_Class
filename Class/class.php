<!-- 1. Write a simple PHP class which displays the following string.
'MyClass class has initialized !' -->

<?php
class classPhp {
   public function __construct() {
      echo "Q1 : MyClass class has initialized !<br/>";
   }
}
$str = new classPhp();

// 2. Write a simple PHP class which displays an introductory msg like "Hello All, I am Scott", where "Scott" is an argument value of the method within the class.

class intro_msg {
   public $msg = 'Q2 : Hello All, I am ';
   public function intro($name) {
      return $this->msg.$name;
   }
}
$welcomeMsg = New intro_msg();
echo $welcomeMsg->intro('Scott')."<br/>";

// 3. Write a PHP class that calculates the factorial of an integer.

class fact {
   protected $integer;
   public function __construct($int) {
      if (!is_int($int)) {
	      throw new InvalidArgumentException('Not a number or missing argument');
      }
      $this->integer = $int;
	}
  public function calculation() {
      $fact = 1;
      for ($i = 1; $i <= $this->integer; $i++) {
	      $fact *= $i;
      }
	   return $fact;
	}
}
$newfact = New fact(4);
echo "Q3 : The factorial is ".$newfact->calculation().".<br/>";

// 4. Write a PHP class that sorts an ordered integer array with the help of sort() function. 
// Sample array : array(11, -2, 4, 35, 0, 8, -9)
// Output : Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )

class array_sort {
   protected $_asort;
   public function __construct(array $asort) {
      $this->_asort = $asort;
   }
   public function alhsort() {
      $sorted = $this->_asort;
      sort($sorted);
      return $sorted;
   }
}
$sortarray = new array_sort(array(11, -2, 4, 35, 0, 8, -9));
echo 'Q4 : ';
print_r($sortarray->alhsort())."<br/>";

// 5. Calculate the difference between two dates using PHP OOP approach. Sample Dates : 1981-11-03, 2013-09-04 
// Expected Result : Difference : 31 years, 10 months, 1 days 

$startDate = new DateTime("1981-11-03");
$endDate = new DateTime("2013-09-04");
$interval = $startDate->diff($endDate);
echo "<br/>Q5 : Difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days<br/>";

// 6. Write a PHP Calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request. For example :
// $mycalc = new MyCalculator( 12, 6); 
// echo $mycalc- > add(); // Displays 18 
// echo $mycalc- > multiply(); // Displays 72 

class PhpCalculator {
   private $val1, $val2;
   public function __construct( $_val1, $_val2 ) {
      $this->val1 = $_val1;
      $this->val2 = $_val2;
   }
   public function add() {
      return $this->val1 + $this->val2;
   }
   public function subtract() {
      return $this->val1 - $this->val2;
   }
   public function multiply() {
      return $this->val1 * $this->val2;
   }
   public function divide() {
      return $this->val1 / $this->val2;
   }
}
$phpcalc = new PhpCalculator(12, 6); 
echo "Q6 : Addition = ".$phpcalc-> add()."<br/>";
echo "Q6 : Multiplication = ".$phpcalc-> multiply()."<br/>";
echo "Q6 : Subtraction = ".$phpcalc-> subtract()."<br/>";
echo "Q6 : Division = ".$phpcalc-> divide()."<br/>";

// 7. Write a PHP script to convert a string to Date and DateTime. Sample Date : '12-08-2004'
// Expected Output : 2004-12-08
// Note : PHP considers '/' to mean m/d/Y format and '-' to mean d-m-Y format.

$date_time = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');
echo "Q7 : $date_time";

?>