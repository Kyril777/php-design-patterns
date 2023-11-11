<?php
// Dependency injection pattern is where a class receives its dependencies external of the class.
class Machine {
	protected $driver;
	
	public function __construct() {
		$this->driver = new Driver();
	}
}

class Computer {
	private $skills;
	
	public function __construct($skills) {
		$this->skills = $skills;
	}
	
	public function countSkills() {
		return count($this->skills);
	}
	
	public function printSkills() {
		print_r(implode(', ', $this->skills)); // Impode an array to remove the keys from input, and separate with a comma.
	}
}

$assignSkills = array("accept input", "process", "store", "output");
$alexis = new Computer($assignSkills);
echo $alexis->countSkills()."\n"; // Output: 4
echo $alexis->printSkills(); // Output: accept input, process, store, output