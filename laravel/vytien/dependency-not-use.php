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
		$this = new Person($fullname, $address);
	}
	public function getStudentName() {
		return strtoupper($this->fullname);
	}
	public function getStudentInfo() {
		return strtoupper($this->fullname.$this->address);
	}
}