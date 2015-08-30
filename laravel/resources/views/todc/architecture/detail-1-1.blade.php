<h2 id="vt1-1">Dependency injection</h2>
<p>
	<img alt="" src="img/DI-relationships-2.png">
</p>
<p>Compare 2 examples below to understand about DI</p>
<pre>
// Not Dependency Example
class Computer{
	protected $processor;
	public function __construct(){
		$this->processor = new ProcessorIntelI7();
	}
}
</pre>
<pre>
// Dependency Example
class Computer{
	protected $processor;
	public function __construct(ProcessorInterface $processor){
		$this->processor = $processor;
	}
}
App::bind('keranjang_belanja',function($app){
	return new KeranjangBelanja(new Pelanggan,new Belanjaan);
});
$keranjangBelanja = App::make('keranjang_belanja');
</pre>
<p>Dependency injection means giving an object its instance variables</p>
<p>High-level modules should not depend on low-level modules. Both
	should depend on abstractions.</p>
<a href="http://en.wikipedia.org/wiki/Dependency_inversion_principle"
	target="_blank">Dependency inversion principle</a>
<pre>
class UserModify {
public function __constructor() {
	$this->storage = new MysqlStorage(); 
}
public function modify($data) {
	$result = $this->storage->save($data);
	return $result; 
}
	}

// Abstraction
interface DataStorageInterface {
	public function save(array $data); 
}

// Low Level Module
class MysqlStorage implements DataStorageInterface {
	public function save($data){ // .... } 
}

// Hight Level Module
class UserModify {
	public function __constructor(DataStorageInterface $storage) {
		$this->storage = $storage; 
	}
	public function modify($data) {
		$result = $this->storage->save($data);
		return $result; 
	}
}
</pre>
<p>
	Dependency injection is a software design pattern that implements
	inversion of control for software libraries, where the caller
	<code>delegates</code>
	to an external framework the control flow of
	<code>discovering and importing a service or software module.</code>
	<a href="http://en.wikipedia.org/wiki/Dependency_injection"
		target="_blank">View more</a>
</p>

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
			<th scope="row">Add new method such as <code>gender</code> for Person
				class
			</th>
			<td>only add this method in <code>Person</code> class
			</td>
			<td>must add this in 2 classes: <code>Person</code> and <code>__construct
					function of Student</code></td>
		</tr>
		<tr>
			<th scope="row">Regression test</th>
			<td>can do unit test for all application</td>
			<td>impossible to do unit test whole of project</td>
		</tr>
	</tbody>
</table>
<h3>Singletons</h3>
<pre>
App::singleton('user_session',function($app){
	return new UserSession($_SESSION['REMOTE_ADDR']);
});
</pre>
<pre>
// First call to creates the object...
$userSession = App::make('user_session');

// Second call just fetches...
$userSession = App::make('user_session');

</pre>
<h3>IoC Automatic Dependency Resolution</h3>
<p>If you type-hint the dependencies passed into a constructor then
	Laravel can do the rest!</p>
<pre>
class Computer{
	protected $processor;
	public function __construct(ProcessorInterface $processor){
		$this->processor = $processor;
	}
}
</pre>
<pre>App::bind('ProcessorInterface','ProcessorIntelI7');
</pre>
<pre>$computer = App:make('Computer');
</pre>
<hr>