<?php
// http://www.sitepoint.com/introspection-and-reflection-in-php/
/*
 * 	class_exists() – checks whether a class has been defined
	get_class() – returns the class name of an object
	get_parent_class() – returns the class name of an object’s parent class
	is_subclass_of() – checks whether an object has a given parent class
 */
class Introspection {
	public function description1() {
		echo "I am a super class for the Child class.n"."\n";
	}
}
class Child extends Introspection {
	public function description() {
		echo "I'm " . get_class ( $this ), " class.n"."\n";
		echo "I'm " . get_parent_class ( $this ), "'s child.n"."\n";
		
		// create object from class name
		$cls = get_parent_class ( $this ); // return class name
		$parent_cls = new $cls(); // init class object
		echo "My description ".$parent_cls->description(); // retrieve class methods
	}
}

if (class_exists ( "Introspection" )) {
	$introspection = new Introspection ();
	echo "The class name is: " . get_class ( $introspection ) . "n"."\n";
	$introspection->description ();
}

if (class_exists ( "Child" )) {
	$child = new Child ();
	$child->description ();
	
	if (is_subclass_of ( $child, "Introspection" )) {
		echo "Yes, " . get_class ( $child ) . " is a subclass of Introspection.n"."\n";
	} else {
		echo "No, " . get_class ( $child ) . " is not a subclass of Introspection.n"."\n";
	}
}