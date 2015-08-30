<?php
// Example about developer uses dependency injection
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

class Student {
	public function __construct(Person $person) {
		$this->student = $person;
	}
	public function getStudentName() {
		return strtoupper($this->student->fullname);
	}
	public function getStudentInfo() {
		return strtoupper($this->student->fullname.$this->student->address);
	}
}
