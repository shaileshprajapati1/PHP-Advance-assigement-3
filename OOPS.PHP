<?php

echo "Q-1.What Is Object Oriented Programming? "
?>
<ul>
    <li><b>Object Oriented Programming is special way of Programming(OOP).</b></li>
</ul>
<ul>
    <li><b>Few Advantages of OOPS</b></li>
    <ul>
        <li>Easy to Mange</li>
        <li>Fast and Efficient</li>
        <li>Prevents Repetation</li>
        <li>Easy to Use</li>
    </ul>

</ul>
<ul>
    <li><b>Some terms depend on OOPS</b></li>
    <ul>
        <li>Class =><b>Class is Collection of Data Member and Member Function. Create Class using <u>Class</u> Keyword.</b> </li>
        <li>Object =><b> An Object is an Instance of class. we can not access class propertie without create object.Object create using <u>new</u> keyword.</b> </li>
        <li>Properties =><b>Properties are Variable of an object.property access specifier public,private,protected.</b> </li>
        <li>Method of Function =><b>Method are Action that are perform on Object.EX..modify car AS sport cars,ambulance and change original color.</b> </li>
    </ul>
</ul>

<h2> OOPS Stand Four Piller:-</h2>
<ul>
    <li>Encapsulation</li>
    <li>Inheritance</li>
    <li>Abstraction</li>
    <li>Polymorphism</li>
</ul>
<?php
echo "Q-2.What Are Properties Of Object Oriented Systems? "
?>
<ul>
    <li><b>Four Properties</b></li>
    <li>Encapsulation</li>
    <li>Inheritance</li>
    <li>Abstraction</li>
    <li>Polymorphism</li>
    <ul>
        <li>Encapsulation:</li>
        <ul>
            <li>The wrapping up data and methods into a single unit is known as encapsulation.</li>
            <li>Class is Example of Encapsulation.</li>
            <li> It enables data hiding and protects the internal state of an object, allowing access only through well-defined methods.</li>
        </ul>
        <li>Inheritance:</li>
        <ul>
            <li>access parent properties to child.</li>
            <li>The <b>extends</b> keyword is used to establish an inheritance relationship between classes.</li>
            <ul>
                <li> Type of Inheritance:</li>
                <ul>
                    <li>Single Inheritance</li>
                    <li>Multilevel Inheritance</li>
                    <li>Multiple Inheritance</li>
                    <li>Hierarchical Inheritance</li>
                    <li>Hybrid Inheritance</li>

                </ul>
                <li>PHP only support <b>Single Inheritance</b> And <b>Multilevel Inheritance</b></li>
            </ul>

        </ul>
        <li>Abstraction:</li>
        <ul>
            <li>Abstract classes are classes that cannot be instantiated but serve as a base for other classes. They can define abstract methods that must be implemented by derived classes..</li>
            <li>we cant create an object of abstrated Class.</li>
            <li>abstrated Class only able to contain abstacted method.</li>
            <li>An abstract method is a method that is declared, but not implemented in the code.</li>
            <li>An abstract class or method is defined with the <b> abstract </b> keyword</li>

        </ul>
        <li>Polymorphism:</li>
        <ul>
            <li>Polymorphism allows objects of different classes to respond differently based on the same message.</li>
            <li>To implement polymorphism in PHP, you can use either abstract classes or interfaces.</li>
            <li>Generally, it is of two types: compile-time (overloading) and run time (overriding), but polymorphism in PHP does not support overloading, or in other words, compile-time polymorphism.</li>
        </ul>
    </ul>
</ul>

<?php
echo "Q-3.What Is Difference Between Class And Interface?  "
?>
<br><br>

<table border="1">

    <tr>
        <th>Class</th>
        <th>Interface</th>
    </tr>
    <tr>
        <td>A class is a blueprint for objects</td>
        <td>An interface is a blueprint for classes</td>
    </tr>
    <tr>
        <td>A class can inherit another class</td>
        <td>An Interface cannot inherit a class</td>
    </tr>
    <tr>
        <td>A class can be inherited by another class using the keyword <b>'extends'</b></td>
        <td>An Interface can be inherited by a class using the keyword<b> 'implements'</b> <br>and it can be inherited by another interface using the keyword 'extends'</td>
    </tr>
    <tr>
        <td>A classes and their properties and methods can have access modifiers like public, private, and protected.These modifiers control the visibility and accessibility of class members.</b></td>
        <td>All methods in an interface are implicitly public. Interfaces cannot have properties or constants, only method declarations.</td>
    </tr>
    <tr>
        <td>Classes are used to create objects, define their properties, and specify their behaviors. They provide the structure and functionality for objects.</td>
        <td>Interfaces are used to define a contract that classes must adhere to. They specify what methods a class must implement, without declaring how they should be implemented. Interfaces are used to establish a common interface across different classes or to achieve polymorphism.</td>
    </tr>
</table>

<br>
<?php
echo "Q-4.What Is Overloading? "
?>

<ul>
    <li>Function overloading contains same function name and that function performs different task according to number of arguments.</li>
    <li>In PHP function overloading is done with the help of magic function __call().</li>
    <pre>
   class myclass{
                public function __call($name,$arguments){
                    echo "function name:".$name;
                    echo "function arguments:";
                    print_r($arguments);
                }
             }
             $myobj= new myclass;
          echo   $myobj->testing(); //without parameter
          echo   $myobj->testing(10,20); //with parameter
   </pre>
</ul>

<br>
<?php
echo "Q-5.What Is T_PAAMAYIM_NEKUDOTAYIM (Scope Resolution Operator (::) with Example? "
?>
<br>
<p>The Scope Resolution Operator (also called Paamayim Nekudotayim) or, the double colon, is a token that allows access to static, constant, and overridden properties or methods of a class.

    When referencing these items from outside the class definition, use the name of the class.

    It's possible to reference the class using a variable. The variable's value can not be a keyword (e.g. self, parent and static).</p>
<pre>

               class myclass
               {
                   public static $staticdatamember = "hello";

                  public static function staticfunction()
                  {
                      echo "Static method Called";
                  }
               }
               // Accessing a static datamember using the Scope Resolution Operator
               echo myclass::$staticdatamember;
               // Calling a static method using the Scope Resolution Operator
               echo myclass::staticfunction();
            </pre>


<br>
<?php
echo "Q-6.What are the differences between abstract classes and interfaces?  "
?>
<br><br>

<table border="1">

    <tr>
        <th>abstract classes</th>
        <th>Interface</th>
    </tr>
    <tr>
        <td>An abstract class is a class that cannot be instantiated on its own and is meant to be inherited by other classes.</td>
        <td>It declares method names, but does not provide any implementation details</td>
    </tr>
    <tr>
        <td>Abstract classes cannot be instantiated directly. They inherited by child classes. </td>
        <td> Interfaces cannot be instantiated directly either. They are implemented by classes using the implements keyword.</td>
    </tr>
    <tr>
        <td>Child classes that inherit from the abstract class must provide implementations for all the abstract methods.</td>
        <td>Interfaces only declare method signatures, without any implementations.</td>
    </tr>
    <tr>
        <td>A class can inherit from only one abstract class using the extends keyword. Abstract classes can provide a base structure and shared behavior for child classes. </td>
        <td>A class can implement multiple interfaces using the implements keyword. This allows a class to define multiple contracts and adhere to the method signatures defined in each interface</td>
    </tr>
    <tr>
        <td>Abstract classes can have properties and methods with different access modifiers like public, private, and protected. </td>
        <td>All methods declared in an interface are implicitly public. Interfaces cannot have properties or constants; they only declare method signatures</td>
    </tr>
</table>

<br>
<?php
echo "Q-7.Define Constructor and Destructor? "
?>
<br>
<ul>
    <li><b>Constructor:</b></li>
    <ul>
        <li>A constructor is a special method that is automatically called when an object of a class is created.</li>
        <li>the constructor method is defined using the __construct() magic method.</li>
        <pre>
        class construct{
            public function __construct()
            {
                echo "construct called";
            }
         }
         //Creating an object of construct class.
         $obj= new construct; 
        </pre>
        <?php
        // class construct
        // {
        //     public function __construct()
        //     {
        //         echo "construct called";
        //     }
        // }
        // //Creating an object of construct class.
        // $obj = new construct;
        ?>
    </ul>
    <li><b>Destructor:</b></li>
    <ul>
        <li>A destructor is a special method that is automatically called when an object is no longer referenced or when the script execution ends. It is used to perform any necessary cleanup tasks, such as releasing resources or closing open connections, before the object is destroyed and the memory is freed</li>
        <li>the destructor method is defined using the __destruct() magic method.</li>
        <pre>
        class destructor
                {
                    public function __destruct()
                    {
                        echo "destruct called";
                    }
                   
                }
                //Destructor is automatically called before the object is destroyed
                $obj = new destructor;
        </pre>
        <?php
        // class destructor
        // {
        //     public function __destruct()
        //     {
        //         echo "destruct called";
        //     }
        // }
        // //Destructor is automatically called before the object is destroyed
        // $obj = new destructor;
        ?>

    </ul>
</ul>


<br>
<?php
echo "Q-8.How to Load Classes in PHP? "
?>
<br>
<ul>
    <li>An autoloading function loads a class, an interface, or a trait from a PHP file.</li>
    <li>Use the<b> spl_autoload_register() </b> to autoload the classes, interfaces, and traits.</li><br>
    <ul>
        <li>Types of load classes</li>
        <ul>
            <li>Autoloading</li>
            <li>Manual Class Loading</li>
            <li>Using Composer</li>
        </ul>
        <li>Autoloding:</li>
        <ul>
            <li>Autoloading is a convenient way to automatically load classes as they are needed, without manually including or requiring their corresponding files.</li>
            <li>The file name must match the case of the terminating class name.</li>
            <li>using the built-in<b> spl_autoload_register()</b> function to register an autoloader function</li>
        </ul>
        <li>Manual Class Loading:</li>
        <ul>
            <li>Manually load classes by explicitly including or requiring their corresponding files using require_once or include_once statements.</li>

        </ul>
        <li>Using Composer:</li>
        <ul>
            <li>Use Composer's autoloading, you need to define the autoloading configuration in your project's<b> composer.json </b> file and run the <b>composer install </b> to generate the autoloader files. </li>

        </ul>

    </ul>
</ul>

<br>
<?php
echo "Q-9.How to Call Parent Constructor?  "
?>
<br>
<ul>
    <li>Call the constructor of a parent class from within the constructor of a child class using the parent::__construct() syntax. This allows you to execute the initialization logic defined in the parent class before adding any additional logic specific to the child class</li>
    <pre>
            class parentclass{
            public function __construct()
            {
                echo "parent function ";


            }
        }
        class childclass extends parentclass{
            public function __construct()
            {
                echo "child function ";
                parent::__construct();//parent construct call
            }
        }
        $obj= new childclass;

            </pre>
</ul>

<?php
// class parentclass{
//     public function __construct()
//     {
//         echo "parent function <br>";


//     }
// }
// class childclass extends parentclass{
//     public function __construct()
//     {
//         echo "child function <br>";
//         parent::__construct();
//     }
// }
// $obj= new childclass;


?>
<br>
<?php
echo "Q-10.Are Parent Constructor Called Implicitly When Create An ObjectOf Class?  "
?>
<br>
<uL>
    <li>
        <p>No, the parent constructor is not called implicitly when creating an object of a class in PHP. If a class has a constructor defined, it must be explicitly called from the child class constructor if you want to execute the parent's constructor logic.</p>
    </li>
</uL>

<br>
<?php
echo "Q-11.What Happen, If Constructor Is Defined As Private Or Protected?  "
?>
<br>
<ul>
    <li>When a constructor is defined as private or protected in a class, it affects the accessibility of the constructor and the way objects of that class can be created.</li>
    <ul>
        <ul>
            <li>Private Constructor:</li>
            <ul>

                <li>If a constructor is declared as private, it means it can only be accessed from within the class itself. It cannot be accessed or called from outside the class, including its child classes or other parts of the code.</li>
                <li>
                    <pre>
                         class myclass{
                        private  function __construct()
                        {
                            echo "This is private construct";
                        }
                        
                    }
                
                   // $Obj = new myclass;  //Fatal error: Uncaught Error: Call to private myclass::__construct()
                   
                    </pre>
                </li>

                <?php
                // class myclass
                // {
                //     private  function __construct()
                //     {
                //         echo "This is private construct";
                //     }
                // }

                //  $Obj = new myclass;  //Fatal error: Uncaught Error: Call to private myclass::__construct()

                ?>


            </ul>
            <ul>
                <li>Protected Constructor:</li>
                <ul>

                    <li>If a constructor is declared as protected, it means it can only be accessed from within the class itself and its child classes. It cannot be accessed or called from outside the class hierarchy. </li>
                    <li>
                        <pre>
                    class myclass
                {
                    protected  function __construct()
                    {
                        echo "This is protected construct";
                    }
                }
                class childclass extends myclass {
                    public function __construct()
                    {
                        echo "This is child class";
                        parent::__construct(); // parent construct called
                    }
                }

                //  $Obj = new myclass;  //Uncaught Error: Call to protected myclass::__construct() 
                $obj = new childclass;
                    </pre>
                    </li>

                    <?php
                    // class myclass
                    // {
                    //     protected  function __construct()
                    //     {
                    //         echo "This is protected construct";
                    //     }
                    // }
                    // class childclass extends myclass {
                    //     public function __construct()
                    //     {
                    //         echo "This is child class";
                    //         parent::__construct(); // parent construct called
                    //     }
                    // }

                    // //  $Obj = new myclass;  //Uncaught Error: Call to protected myclass::__construct() 
                    // $obj = new childclass;
                    ?>


                </ul>
            </ul>
        </ul>
    </ul>
</ul>
<br>
<?php
echo "Q-12.What are PHP Magic Methods/Functions? List them Write program for Static Keyword in PHP? "

?>
<br>
<ul>
    <li>In PHP, magic methods (also known as magic functions) are special methods that start with a double underscore (__). </li>
    <li> These methods are automatically called by PHP at certain points during the execution of a class. They allow you to define custom behaviors for various operations and provide additional functionality to your classes.</li>
    <ul>
        <li>some commonly used magic methods in PHP:</li>
        <ol>
            <li>__construct: The constructor method, called when an object is created from the class.</li>
            <li>__destruct: The destructor method, called when an object is no longer referenced or when the script execution ends.</li>
            <li>__get: Called when accessing inaccessible properties.</li>
            <li>__set: Called when assigning a value to an inaccessible property.</li>
            <li>__isset: Called when using isset() or empty() on an inaccessible property.</li>
            <li>_unset: Called when using unset() on an inaccessible property.</li>
            <li>__call: Called when invoking inaccessible methods.</li>
            <li>__callStatic: Called when invoking inaccessible static methods.</li>
            <li>__toString: Called when an object is used in a string context.</li>
            <li>__clone: Called when cloning an object.</li>
            <li>__sleep: Called before serializing an object.</li>
            <li>__wakeup: Called after unserializing an object.</li>
            <li>__invoke: Called when an object is treated as a function.</li>
            <li>__set_state: Called when using var_export() to export an object.</li>
            <li>__debugInfo: Called when using var_dump() or print_r() on an object.</li>
        </ol>
        <li>Write program for Static Keyword in PHP? </li>
        <ul>
            <li>To use these static methods, we don't need to create an instance of the class. Instead, we directly call the methods using the class name and the scope resolution operator `::`.</li>
            <pre>class mathes{
                public static function add($num1,$num2){
                    return $num1+$num2;
                }
                public static function sub($num1,$num2){
                    return $num1-$num2;
                }
            }

        echo mathes::add(10,20);// Output = 30;
        
        echo mathes::sub(30,15);// Output = 15;
    </pre>
        </ul>
        <?php
        // class mathes
        // {
        //     public static function add($num1, $num2)
        //     {
        //         return $num1 + $num2;
        //     }
        //     public static function sub($num1, $num2)
        //     {
        //         return $num1 - $num2;
        //     }
        // }

        // echo mathes::add(10, 20);
        // echo "<br>";
        // echo mathes::sub(30, 15);
        ?>
    </ul>
</ul>


<br>
<?php
echo "Q-13.Create multiple Traits and use it in to a single class? "

?>
<br>
<ul>
    <li>Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).</li>
    <li>Traits are declared with the <b> trait </b> keyword.</li>
    <li>To use a trait in a class, use the <b> use </b> keyword</li>
    <pre>
    trait login{
    public function log($msg){
        echo "login message:$msg";
    }
}
trait logout{
    public function out($msg){
            echo "logout message:$msg";
    }
        
    }
class form{
    use login,logout;
    public function userform($userdata) {
        $this->log("login user");
    }
    public function logoutform($userdata) {
        $this->out("logout user");
    }

}
$obj = new form;
 $obj->userform("");
 echo "<br>";
 $obj->logoutform("");

    </pre>
</ul>
<?php
// trait login
// {
//     public function log($msg)
//     {
//         echo "login message:$msg";
//     }
// }
// trait logout
// {
//     public function out($msg)
//     {
//         echo "logout message:$msg";
//     }
// }
// class form
// {
//     use login, logout;
//     public function userform($userdata)
//     {
//         $this->log("login user");
//     }
//     public function logoutform($userdata)
//     {
//         $this->out("logout user");
//     }
// }
// $obj = new form;
// $obj->userform("");
// echo "<br>";
// $obj->logoutform("");

?>
<br>
<?php
echo "Q-14.Write PHP Script of Object Iteration? "

?>
<br>
<ul>
    <pre>
    class Myclass
{
    public $name = "";
    public $age = "";
    public $city = "";

    public function __construct($Name, $Age, $City)
    {
        $this->name = $Name;
        $this->age = $Age;
        $this->city = $City;
    }
    public function Getname()
    {
        return $this->name;
    }
    public function Getage()
    {
        return $this->age;
    }
    public function Getcity()
    {
        return $this->city;
    }
}

$obj = new Myclass("shailesh", 29,"surat");
foreach ($obj as $key => $value) {
    echo "$key:$value".PHP_EOL ;
  
}

    </pre>
</ul>
<?php
class Myclass
{
    public $name = "";
    public $age = "";
    public $city = "";

    public function __construct($Name, $Age, $City)
    {
        $this->name = $Name;
        $this->age = $Age;
        $this->city = $City;
    }
    public function Getname()
    {
        return $this->name;
    }
    public function Getage()
    {
        return $this->age;
    }
    public function Getcity()
    {
        return $this->city;
    }
}

$obj = new Myclass("shailesh", 29,"surat");
foreach ($obj as $key => $value) {
    echo "$key:$value".PHP_EOL ;
  
}

?>
<br>
<br>
<?php
echo "Q-15.Use of The $ this keyword? "

?>
<br>

<ul>
    <li>The $this keyword is a special variable in PHP that refers to the current object instance within a class. It is used to access properties and methods of the object from within the class.</li>
</ul>