<?php
// Example about developer does not use dependency injection
class Person {
	public function __construct($fullname, $address) {
		$this->fullname = $fullname;
		$this->address = $address;
	}
	public function setFullName($fullname) {
		$this->fullname = $fullname;
	}
	public function setAddress($address) {
		$this->address = $address;
	}
	public function getFullName() {
		return $this->fullname;
	}
	public function getAddress() {
		return $this->address;
	}
}

class Student extends Person {
	public function __construct($fullname, $address) {
		$this->obj = Person::__construct($fullname, $address);
	}
	public function getStudentName() {
		return strtoupper($this->obj->fullname);
	}
	public function getStudentInfo() {
		return strtoupper($this->obj->fullname.$this->obj->address);
	}
}

// Usage
$objStudent = new Student("Anna", "HCM City");
var_dump($objStudent);