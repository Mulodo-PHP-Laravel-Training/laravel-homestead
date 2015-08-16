<h2 id="vt1-1">Dependency injection</h2>
<p>Dependency injection means giving an object its instance variables</p>
<h3>Example about developer does not use dependency injection</h3>
<pre>
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
</pre>
<h3>Example about developer uses dependency injection</h3>
<pre>
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
	public function __construct(Student $student) {
		
	}
	public function getStudentName() {
		return strtoupper($this->fullname);
	}
	public function getStudentInfo() {
		return strtoupper($this->fullname.$this->address);
	}
}
</pre>
<p>If developer wants to maintenance apps, there are main points that he
	can meet these points below:</p>
<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>Issue</th>
			<th>Use dependency injection</th>
			<th>Not use dependency injection</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">Add new method such as <code>gender</code> for Person class</th>
			<td>only add this method in <code>Person</code> class</td>
			<td>must add this in 2 classes: <code>Person</code> and <code>__construct function of Student</code></td>
		</tr>
		<tr>
			<th scope="row">Regression test</th>
			<td>can do unit test for all application</td>
			<td>impossible to do unit test whole of project</td>
		</tr>
	</tbody>
</table>