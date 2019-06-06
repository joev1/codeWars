<?php
//Define a class called President using the syntax taught above.
//Inside the curly braces of the class definition, add a public property called $name and set it equal to the string "Barack Obama".
//Then, define a public method inside the President class called greet which accepts one argument $name and returns something to the effect of "Hello INSERT_NAME_HERE, my name is Barack Obama, nice to meet you!"
//Now that you have defined your class, create an instance of that class (called an object) and store it in a variable called $us_president.
//Store the name of the $us_president into another variable called $president_name.
//Store the result of calling the greet method of $us_president with the argument "Donald" into the variable $greetings_from_president.
//class President {
//    public $name = "Barack Obama";
//    public function greet($name) {
//        return "Hello $name, my name is Barack Obama, nice to meet you!";
//    }
//}
//$us_president = new President;
//$president_name = $us_president->name;
//$greetings_from_president = $us_president->greet("Donald");



//Define a class called Person.
//Inside the Person class, declare (but do not define) the two public properties, called $first_name and $last_name respectively.
//Define a class constructor which accepts exactly two arguments in the following order, $first_name and $last_name. The argument $first_name should be stored into the $first_name property of the object being instantiated and the $last_name argument should be stored into the $last_name property of the object.
//Define a public method called get_full_name which accepts no arguments and returns the full name of the individual in the following format: "FIRST_NAME LAST_NAME". Please note that if the properties ($first_name and/or $last_name) of said object is modified after it is instantiated, your method get_full_name should return the updated full name, not the original full name of the individual.
//class Person {
//    public $first_name;
//    public $last_name;
//    public function __construct($first_name, $last_name) {
//        $this->first_name = $first_name;
//        $this->last_name = $last_name;
//    }
//    public function get_full_name() {
//        return "$this->first_name $this->last_name";
//    }
//}



//Copy your working solution to the first Kata of this series and paste it here (you may want to complete that first if you haven't already done so).
//Rename that class to CurrentUSPresident.
//Convert all of the class properties into class constants and all of the class methods into static methods using the syntax taught in the lesson.
//You can safely remove the code where an instance of the President class is created.
//class CurrentUSPresident {
//    const name = "Barack Obama";
//    public static function greet($name) {
//        return "Hello $name, my name is Barack Obama, nice to meet you!";
//    }
//}



//Define a class called Person.
//Since all Persons are of the species "Homo Sapiens", make that a class constant
//Declare (but do not define yet) the 3 class properties $name, $age and $occupation. *They should all be *public.
//Define a class constructor which accepts exactly three arguments in the following order: $name, $age, $occupation and store them in their respective properties.
//Define a method called introduce which accepts no arguments and returns a string of the format "Hello, my name is NAME_HERE"
//Define another method called describe_job which accepts no arguments and returns a string of the format "I am currently working as a(n) OCCUPATION_HERE"
//When extraterrestrials arrive on Earth, all Persons are expected to greet them in exactly the same way. Therefore, define a static class method called greet_extraterrestrials which accepts an argument $species and returns a string of the format "Welcome to Planet Earth SPECIES_NAME_HERE!"
//class Person {
//  const species = "Homo Sapiens";
//
//  public $name;
//  public $age;
//  public $occupation;
//
//  public function __construct($name, $age, $occupation){
//    $this->name = $name;
//    $this->age = $age;
//    $this->occupation = $occupation;
//  }
//
//  public function introduce(){
//    return "Hello, my name is $this->name";
//  }
//
//    public function describe_job(){
//    return "I am currently working as a(n) $this->occupation";
//  }
//
//  public static function greet_extraterrestrials($species){
//    return "Welcome to Planet Earth $species!";
//  }
//}



//I. Preloaded
//Preloaded for you in this exercise is a working solution for Kata #4 of this Series (you may want to complete that before continuing on this exercise).
//
//II. Inheritance Model in this Kata
//Before we write any actual code for the classes in this Kata, please declare the following classes:
//
//Salesman
//ComputerProgrammer
//WebDeveloper
//The following information is also given about the classes (use classical inheritance when necessary and don't extends the wrong class ;) ):
//
//A Salesman "is a" Person
//A ComputerProgrammer "is a" Person
//A WebDeveloper "is a" Person
//A WebDeveloper "is a" ComputerProgrammer
//III. Class Details
//Salesman
//Class Constructor
//The class constructor of the Salesman class should accept exactly two arguments in the following order: $name, $age. It should then set the correct properties accordingly. As for the $occupation of a Salesman, it will always be "Salesman" without exception.
//
//introduce (Method)
//The introduce method of the Salesman class should return a string of the format "Hello, my name is NAME_HERE, don't forget to check out my products!"
//
//Hint: The string that the introduce method of the parent class returns is a substring of what the introduce method of this class returns.
//
//ComputerProgrammer
//Class Constructor
//The class constructor of ComputerProgrammer should accept exactly 2 arguments in the following order: $name, $age and should set the correct properties accordingly. The $occupation of a ComputerProgrammer is always "Computer Programmer" without exception.
//
//describe_job (Method)
//The describe_job method of a ComputerProgrammer should return a string of the format "I am currently working as a(n) OCCUPATION_HERE, don't forget to check out my Codewars account ;)"
//
//Hint: The same method of the parent class returns a substring of what this method should return.
//
//WebDeveloper
//Class Constructor
//The class constructor of this class should receive two arguments in the following order: $name, $age and set the correct properties accordingly. The $occupation of a WebDeveloper is always "Web Developer" without exception.
//
//Hint: You may have to add a line of code in the constructor of this class to override the constructor of the parent class.
//
//describe_job (Method)
//The describe_job method of a WebDeveloper should return a string of the format "I am currently working as a(n) OCCUPATION_HERE, don't forget to check out my Codewars account ;) And don't forget to check on my website :D"
//
//Hint: The same method of the parent class returns a substring of what this method should return.
//
//Watch out! Make sure you know which class parent is referring to in this case before you use it in your method definition!
//
//describe_website (Method)
//This method should return "My professional world-class website is made from HTML, CSS, Javascript and PHP!"
//class Person {
//    const species = "Homo Sapiens";
//
//    public $name;
//    public $age;
//    public $occupation;
//
//    public function __construct($name, $age, $occupation){
//        $this->name = $name;
//        $this->age = $age;
//        $this->occupation = $occupation;
//    }
//
//    public function introduce(){
//        return "Hello, my name is $this->name";
//    }
//
//    public function describe_job(){
//        return "I am currently working as a(n) $this->occupation";
//    }
//
//    public static function greet_extraterrestrials($species){
//        return "Welcome to Planet Earth $species!";
//    }
//}
//
//class Salesman extends Person {
//    public function __construct($name, $age) {
//        parent::__construct($name, $age, "Salesman");
//    }
//
//    public function introduce() {
//        return "Hello, my name is $this->name, don't forget to check out my products!";
//    }
//}
//
//class ComputerProgrammer extends Person {
//    public function __construct($name, $age) {
//        parent::__construct($name, $age, "Computer Programmer");
//    }
//
//    public function describe_job() {
//        return "I am currently working as a(n) $this->occupation, don't forget to check out my Codewars account ;)";
//    }
//}
//
//class WebDeveloper extends ComputerProgrammer {
//    public function __construct($name, $age) {
//        parent::__construct($name, $age);
//        $this->occupation = "Web Developer";
//    }
//
//    public function describe_job() {
//        return "I am currently working as a(n) $this->occupation, don't forget to check out my Codewars account ;) And don't forget to check on my website :D";
//    }
//
//    public function describe_website() {
//        return "My professional world-class website is made from HTML, CSS, Javascript and PHP!";
//
//    }
//}



//Copy and paste a working solution from Kata #4 of this Series (you may want to complete that first if you haven't done so already).
//You may safely remove the class constant and all class methods (except the class constructor) as these will not be tested in this Kata (Optional).
//Change the visibilites of all properties into protected visibility.
//Since all valid names must be strings, throw an InvalidArgumentException with the message "Name must be a string!" if the $name argument of the class constructor is not a string.
//Since all valid ages must be non-negative integers, throw an InvalidArgumentException with the message "Age must be a non-negative integer!" if the $age argument of the class constructor is not a non-negative integer.
//Since all valid occupations must be strings, throw an InvalidArgumentException with the message "Occupation must be a string!" if the $occupation argument of the class constructor is not a string.
//Since the $name, $age and $occupation properties of the Person class are now protected, any attempt at directly accessing them from outside the class will result in a Fatal error. Therefore, define three methods, get_name(), get_age() and get_occupation() which all accept no arguments and returns the $name, $age and $occupation of the Person respectively.
//Since $name, $age and $occupation are now protected, any attempt at directly reassigning them values outside the class will result in a Fatal error. Therefore, define three methods, set_name(), set_age() and set_occupation() in which each of them receives exactly one argument and sets the value of their respective properties to the value of the argument if and only if the argument is valid. The validity of the argument is the same as the standards used in the constructor (i.e. string value for $name and $occupation and non-negative integer for $age) and if the argument is invalid then throw the exact same errors (with the same messages) thrown by the constructor in such cases.
//class Person {
//
//    protected $name;
//    protected $age;
//    protected $occupation;
//
//    public function __construct($name, $age, $occupation)
//    {
//        if (!is_string($name)) throw new InvalidArgumentException("Name must be a string!");
//        if (!is_int($age) || $age < 0) throw new InvalidArgumentException("Age must be a non-negative integer!");
//        if (!is_string($occupation)) throw new InvalidArgumentException("Occupation must be a string!");
//        $this->name = $name;
//        $this->age = $age;
//        $this->occupation = $occupation;
//    }
//        public function get_name(){
//            return $this->name;
//    }
//
//        public function get_age(){
//            return $this->age;
//        }
//
//        public function get_occupation(){
//            return $this->occupation;
//        }
//
//        public function set_name($name) {
//        if (!is_string($name)) throw new InvalidArgumentException("Name must be a string!");
//        return $this->name = $name;
//        }
//
//        public function set_age($age) {
//        if (!is_int($age) || $age < 0) throw new InvalidArgumentException("Age must be a non-negative integer!");
//        $this->age = $age;
//        }
//
//        public function set_occupation($occupation) {
//         if (!is_string($occupation)) throw new InvalidArgumentException("Occupation must be a string!");
//         $this->occupation = $occupation;
//        }
//}



//
//class Person {
//  const species = "Homo Sapiens";
//
//  public $name;
//  public $age;
//  public $occupation;
//
//  public function __construct($name, $age, $occupation){
//    $this->name = $name;
//    $this->age = $age;
//    $this->occupation = $occupation;
//  }
//
//  public function introduce(){
//    return "Hello, my name is $this->name";
//  }
//
//    final public function describe_job(){
//    return "I am currently working as a(n) $this->occupation";
//  }
//
//  final public function greet_extraterrestrials($species){
//    return "Welcome to Planet Earth $species!";
//  }
//}



//class Person {
//  const species = "Homo Sapiens";
//
//  public $name;
//  public $age;
//  public $occupation;
//
//  public function __construct($name, $age, $occupation){
//    $this->name = $name;
//    $this->age = $age;
//    $this->occupation = $occupation;
//  }
//
//  public function introduce(){
//    return "Hello, my name is $this->name";
//  }
//
//  public function describe_job(){
//    return "I am currently working as a(n) $this->occupation";
//  }
//
//  public function greet_extraterrestrials($species){
//    return "Welcome to Planet Earth $species!";
//  }
//}
//
//class Salesman extends Person {
//    public function __construct($name, $age) {
//        parent::__construct($name, $age, "Salesman");
//    }
//    public function introduce() {
//        return parent::introduce() . ", don't forget to check out my products!";
//    }
//}
//class ComputerProgrammer extends Person {
//    public function __construct($name, $age) {
//        parent::__construct($name, $age, "Computer Programmer");
//    }
//    public function describe_job() {
//        return parent::describe_job() . ", don't forget to check out my Codewars account ;)";
//    }
//}
//class WebDeveloper extends ComputerProgrammer {
//    public function __construct($name, $age) {
//        parent::__construct($name, $age);
//        $this->occupation = "Web Developer";
//    }
//    public function describe_job() {
//        return parent::describe_job() . " And don't forget to check on my website :D";
//    }
//    public function describe_website() {
//        return "My professional world-class website is made from HTML, CSS, Javascript and PHP!";
//    }
//}



//
// Task
//Note: The lesson provided in this Kata is designed to teach you most, if not all, of the key concepts required to complete the Task in this Kata. However, if in doubt, you are strongly encouraged to conduct your own research.
//
//Firstly, define the following interfaces with the following public methods:
//
//CanFly
//This interface must have the following methods:
//
//fly - This public method should accept no arguments
//CanSwim
//This interface must have the following methods:
//
//swim - This public method should accept no arguments
//CanClimb
//This interface must have the following methods:
//
//climb - This public method should accept no arguments
//CanGreet
//This interface must have the following methods:
//
//greet - This public method should accept exactly one argument - you could call that argument $name for readability purposes (or you could name it whatever you want, it doesn't matter since the implementing class does not have to name the argument the exact same way)
//CanIntroduce
//This interface must have the following methods:
//
//speak - This public method should accept no arguments
//introduce - This public method should accept no arguments
//CanSpeak
//This interface must have the following methods:
//
//speak - This public method should accept no arguments
//Thinking Exercise: Just by the descriptions above, can you tell me which two interfaces a class cannot implement simultaneously?
//
//After you have defined your interfaces, define the classes specified below and follow the instructions carefully in each section to pass the tests.
//
//Bird
//Since a Bird can fly (well, most of them can anyway :p), the Bird class must implement the CanFly interface.
//
//Properties
//The Bird class should have the following properties:
//
//$name - this property should be public
//Constructor
//The class constructor of Bird must receive the following arguments and set its respective properties:
//
//$name - This parameter is required. The argument should ideally be a string but no error checking is necessary.
//Methods
//The Bird class must define/implement the following methods:
//
//fly - This method must be implemented as it is required by the CanFly interface being implemented. The fly method should return the string "I am flying".
//chirp - Additionally, a bird can also chirp. This method should receive no arguments and return the string "Chirp chirp".
//Duck
//Since a Duck "is a" Bird, the Duck class should inherit from the Bird class. Furthermore, since a Duck can fly and swim, it should implement the interfaces CanFly and CanSwim.
//
//Fun Fact: When a class implements an interface / multiple interfaces in PHP, it is said that there is a "has a" relationship between the class and the interface(s) being implemented. In this case, the Duck class is said to "has a" (sic) CanFly and CanSwim.
//
//Properties
//The Duck class should have no other properties other than the properties inherited from the Bird class.
//
//Constructor
//The Duck class should have a constructor identical to that of its parent class.
//
//Methods
//fly - This method must be implemented by the Duck class due to it implementing the CanFly interface, but the method does not need to be reimplemented since the parent class already has this method.
//chirp - This method should return the string "Quack quack"
//swim - This method must be implemented as specified in the CanSwim interface being implemented. It should receive no arguments and return the string "Splash! I'm swimming"
//Cat
//A Cat "has a" CanClimb.
//
//Properties
//For the purposes of this Kata, all cats are wild cats so they do not have a name. Therefore you do not need to declare any properties.
//
//Constructor
//You do not need to define a constructor for this class.
//
//Methods
//climb - This method must be implemented as per the CanClimb interface. This method should accept no arguments and return the string "Look, I'm climbing a tree".
//meow - A cat can also meow. This method should accept no arguments and return the string "Meow meow"
//play - All cats love to play, even ones in the wild! This method should receive exactly one argument $name and return a string of the format "Hey NAME_HERE, let's play!"
//Dog
//A Dog "has a" CanSwim and CanGreet.
//
//Properties
//For the purposes of this Kata, all dogs are stray dogs so they have no known properties.
//
//Constructor
//A constructor is not required for this class.
//
//Methods
//swim - This method must be implemented as per the CanSwim interface. This method should accept no arguments and return the string "I'm swimming, woof woof"
//greet - This method must be implemented as per the CanGreet interface. This method should accept exactly one argument $name and return a string of the format "Hello NAME_HERE, welcome to my home"
//bark - A dog can also bark. This method should accept no arguments and return the string "Woof woof"
//Person
//A Person "has a" CanGreet and CanIntroduce.
//
//Properties
//$name - This property should be public and should be a string but no error checking is needed.
//$age - This property should be public and should be a non-negative integer but no error checking is required.
//$occupation - This property should be public and should be a string but no error checking is required.
//Constructor
//The class constructor for this class should receive three required arguments in the following order: $name, $age, $occupation and set the respective properties correctly. No error checking is required.
//
//Methods
//greet - This method must be implemented as per the CanGreet interface. It should receive one argument $name and return a string of the format "Hello NAME_HERE, how are you?"
//speak - This method must be implemented as per the CanIntroduce interface. It should receive no arguments and return the string "What am I supposed to say again?"
//introduce - This method must be implemented as per the CanIntroduce interface. It should receive no arguments and return a string of the form "Hello, my name is NAME_HERE, I am AGE_HERE years old and I am currently working as a(n) OCCUPATION_HERE".
//interface CanFly {
//    public function fly();
//
//}
//
//interface CanSwim {
//    public function swim();
//
//}
//
//interface CanClimb {
//    public function climb();
//
//}
//
//interface CanGreet {
//    public function greet($name);
//
//}
//
//interface CanIntroduce {
//    public function speak();
//    public function introduce();
//}
//
//interface CanSpeak {
//    public function speak();
//
//}
//
//Class Bird implements CanFly {
//    public $name;
//
//    public function __construct(string $name)
//    {
//       $this->name=$name;
//    }
//
//    public function fly()
//    {
//        return "I am flying";
//    }
//
//    public function chirp() {
//        return "Chirp chirp";
//    }
//
//}
//
//Class Duck extends Bird implements CanFly, CanSwim {
//    public $name;
//
//    public function chirp() {
//        return "Quack quack";
//    }
//
//    public function swim() {
//        return "Splash! I'm swimming";
//    }
//}
//
//Class Cat implements CanClimb {
//
//    public function climb() {
//        return "Look, I'm climbing a tree";
//    }
//
//    public function meow() {
//        return "Meow meow";
//    }
//
//    public function play($name) {
//        return "Hey $name, let's play!";
//    }
//}
//
//Class Dog implements CanSwim, CanGreet {
//
//    public function swim() {
//        return "I'm swimming, woof woof";
//    }
//
//    public function greet($name) {
//        return "Hello $name, welcome to my home";
//    }
//
//    public function bark() {
//        return "Woof woof";
//    }
//}
//
//Class Person implements CanGreet, CanIntroduce {
//    public $name;
//    public $age;
//    public $occupation;
//
//    public function __construct($name, $age, $occupation)
//    {
//        $this->name = $name;
//        $this->age = $age;
//        $this->occupation = $occupation;
//    }
//
//    public function greet($name)
//    {
//        return "Hello $name, how are you?";
//    }
//
//    public function speak()
//    {
//        return "What am I supposed to say again?";
//    }
//
//    public function introduce()
//    {
//        return "Hello, my name is $this->name, I am $this->age years old and I am currently working as a(n) $this->occupation";
//    }
//}



//Person
//This class should be declared abstract.
//
//Properties
//Every person should have a $name, $age and $gender. All of these properties should be declared public.
//
//Constructor
//The class constructor should receive three required arguments in the following order: $name, $age, $gender and should set their respective properties.
//
//Methods
//introduce - Every person knows how to introduce himself/herself in some way (well, maybe except for babies but we won't be dealing with them in this Kata), but different types of people can introduce themselves in very different ways so there is no universal implementation of the introduce method. Therefore, declare this method abstract. This method should receive no arguments.
//greet - This method should receive exactly one required argument $name and return a string of the form "Hello NAME_HERE".
//Child
//Since a Child "is a" Person, the Child class should inherit from the Person class. Furthermore, since a Child has infinite possibilities, it is impossible to further categorise children into different categories (by creating child classes) so the Child class should be declared final to prevent further inheritance.
//
//Properties
//The Child class should have already inherited the following public properties from the Person class:
//
//$name
//$age
//$gender
//Furthermore, the Child class should also have an additional public property $aspirations which is expected to be an array of strings (but no type checking is required).
//
//Constructor
//The class constructor should receive four required arguments in the following order: $name, $age, $gender, $aspirations and set their respective properties correctly. No error checking is required.
//
//Methods
//introduce - This public method should receive no arguments and return a string of the form "Hi, I'm NAME_HERE and I am AGE_HERE years old".
//greet - This public method should accept exactly one required argument $name and return a string of the form "Hi NAME_HERE, let's play!".
//say_dreams - This public method should accept no arguments and return a string of the form "I would like to be a(n) ASPIRATIONS_HERE when I grow up." The exact behaviour of this method is demonstrated below:
//// Aspirations = ["Doctor"]
//$child->say_dreams(); // "I would like to be a(n) Doctor when I grow up."
//
//// Aspirations = ["Lawyer", "Teacher"];
//$child->say_dreams(); // "I would like to be a(n) Lawyer or Teacher when I grow up."
//
//// Aspirations = ["Teacher", "Lawyer", "Police Officer"];
//$child->say_dreams(); // "I would like to be a(n) Teacher, Lawyer or Police Officer when I grow up."
//
//// Aspirations = ["teacher", "lawyer", "doctor", "police officer", "owner of a pet shop"];
//$child->say_dreams(); // "I would like to be a(n) teacher, lawyer, doctor, police officer or owner of a pet shop when I grow up."
//ComputerProgrammer
//A ComputerProgrammer "is a" Person. Since there can be many different types of ComputerProgrammer (e.g. Web Developer, Software Engineer), we want to be able to extend this class when necessary so it should not be declared final.
//
//Properties
//The ComputerProgrammer class should have the following public properties:
//
//$name
//$age
//$gender
//$occupation - This should always be equal to "Computer Programmer"
//Note that some of the properties are already declared in the parent class so there is no need to redeclare them.
//
//Constructor
//The class constructor for this class is identical to that of its parent class.
//
//Methods
//introduce - This public method should accept no arguments and return a string of the form "Hello, my name is NAME_HERE, I am AGE_HERE years old and I am a(n) OCCUPATION_HERE"
//greet - This public method should accept an argument $name and return a string of the form "Hello OTHER_NAME_HERE, I'm OWN_NAME_HERE, nice to meet you".
//advertise - This public method should return the string "Don't forget to check out my coding projects"
//abstract class Person {
//    public $name;
//    public $age;
//    public $gender;
//
//    public function __construct($name, $age, $gender) {
//        $this->name = $name;
//        $this->age = $age;
//        $this->gender = $gender;
//    }
//
//    abstract public function introduce();
//    public function greet($name) {
//        return "Hello $name";
//    }
//}
//
//final class Child extends Person {
//    public $aspirations;
//
//    public function __construct($name, $age, $gender, array $aspirations){
//        parent::__construct($name, $age, $gender);
//        $this->aspirations = $aspirations;
//    }
//    public function introduce(){
//        return "Hi, I'm $this->name and I am $this->age years old";
//    }
//
//    public function greet($name){
//        return "Hi $name, let's play!";
//    }
//
//    public function say_dreams(){
//
//        if (empty($this->aspirations)) {
//            throw new InvalidArgumentException("'Aspirations' is empty");
//        }
//
//        foreach ($this->aspirations as $record) {
//            if (!is_string($record)) {
//                throw new InvalidArgumentException("'Aspirations' must be array of strings");
//            }
//        }
//
//        $last = array_pop($this->aspirations);
//        $this->aspirations = count($this->aspirations) > 0 ? implode(", ", $this->aspirations) . " or $last" : $last;
//
//        return "I would like to be a(n) $this->aspirations when I grow up.";
//    }
//}
//
//class ComputerProgrammer extends Person {
//    public $occupation = "Computer Programmer";
//
//    public function __construct2($occupation)
//    {
//        $this->occupation = $occupation;
//    }
//
//    public function __construct($name, $age, $gender)
//    {
//        parent::__construct($name, $age, $gender);
//    }
//
//    public function introduce(){
//        return "Hello, my name is $this->name, I am $this->age years old and I am a(n) $this->occupation";
//    }
//
//    public function greet($name)
//    {
//        return "Hello $name, I'm $this->name, nice to meet you";
//    }
//
//    public function advertise(){
//        return "Don't forget to check out my coding projects";
//    }
//}
//$_POST['name'] = 'Jane Anderson';
//$_POST['email'] = 'ja1234@example.tld';
//$_POST['message'] = 'Hello World!';



//PHPinAction
//function user_script()
//{
//    if ($_SERVER["REQUEST_METHOD"] === "POST") {
//        if (empty($_POST["name"])) {
//            echo "<span style=\"color: red\">Name field is required</span>";
//        }
//
//        if (!filter_var($_POST["age"], FILTER_VALIDATE_INT)) {
//            echo "<span style=\"color: red\">Invalid Age provided</span>";
//        }
//
//        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
//            echo "<span style=\"color: red\">Email Address is Invalid</span>";
//        }
//        if (intval($_POST["rating"]) > 10 || intval($_POST["rating"]) < 1) {
//            echo "<span style=\"color: red\">Rating is invalid, please provide a number from 1 to 10</span>";
//        }
//        $_GLOBALS['name'] = stripslashes(trim(htmlspecialchars($_POST["name"])));
//        $_GLOBALS['age'] = stripslashes(trim(htmlspecialchars($_POST["age"])));
//        $_GLOBALS['email'] = stripslashes(trim(htmlspecialchars($_POST["email"])));
//        $_GLOBALS['rating'] = stripslashes(trim(htmlspecialchars($_POST["rating"])));
//        $_GLOBALS['compliments'] = stripslashes(trim(htmlspecialchars($_POST["compliments"])));
//        $_GLOBALS['criticism'] = stripslashes(trim(htmlspecialchars($_POST["criticism"])));
//    }
//}
