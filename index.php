
<!-- <?php
// Define conditions
$condition1 = true;
$condition2 = false;

// Check conditions
if ($condition1) {
    // Code block to execute when condition1 is true
    echo "Condition 1 is true";

} elseif ($condition2) {
    // Code block to execute when condition2 is true
    echo "Condition 2 is true";
} else {
    // Code block to execute when neither condition1 nor condition2 is true
    echo "Neither condition 1 nor condition 2 is true";
}
?> -->




<!-- <?php
// Sample array
$array = array('apple', 'banana', 'cherry', 'date');

// Iterating through the array
foreach ($array as $key => $value) {
    // Output the current iteration and value
    echo "Iteration $key: $value <br>";
    // Example of using the key to perform specific actions
    if ($key % 2 == 0) {
        echo "Key $key is even <br>";
    } else {
        echo "Key $key is odd <br>";
    }
}
?> -->


<!-- <?php
// Define the range of numbers
$start = 1;
$end = 5;

// Iterating through the range of numbers
for ($i = $start; $i <= $end; $i++) {
    // Output the current iteration
    echo "Iteration $i <br>";

    // Example of using the iteration number to perform specific actions
    if ($i % 2 == 0) {
        echo "Iteration $i is even <br>";
    } else {
        echo "Iteration $i is odd <br>";
    }
}
?> -->

<!-- <?php
// Example variable
$fruit = "banana";

// Switch statement
switch ($fruit) {
    case "apple":
        echo "You selected apple.";
        break;
    case "banana":
        echo "You selected banana.";
        // Additional conditional logic based on the selected fruit
        if (strlen($fruit) > 5) {
            echo " Also, it's a long name!";
        } else {
            echo " Also, it's a short name!";
        }
        break;
    case "cherry":
        echo "You selected cherry.";
        break;
    default:
        echo "Sorry, we don't have that fruit.";
}
?> -->

<!-- Matching -->
<!-- <?php
// Sample data
$data = "banana";

// Perform advanced data checks using match
$result = match($data) {
    "apple" => "It's an apple.",
    "banana", "orange" => "It's a banana or an orange.",
    "cherry" => "It's a cherry.",
    default => "It's something else.",
};

// Output the result
echo $result;
?> -->

<!---------------------------------------- Aceessors -->
<!-- <?php
class MyClass {
    public $publicProperty = 'Public Property';
    
    public function publicMethod() {
        return 'Public Method';
    }
}
$obj = new MyClass();
echo $obj->publicProperty;  // Output: Public Property
echo $obj->publicMethod(); 
?> -->


 

<!-- <?php
$string = "10";
$result = $string + 5;
echo $result;
?> -->



<!----------------------------------------- Type Coercion:
Type coercion occurs when PHP automatically converts data from one type to another in certain contexts. This behavior can sometimes lead to unexpected results if not handled carefully. Here are some examples of type coercion in PHP -->

<!-- <?php

$integer = 10;
$string = $integer . " apples"; // Converts $integer to a string
echo $string;

// String to Integer
$string = "20";
$integer = $string + 5; // Converts $string to an integer

// Boolean to String
$boolean = true;
$string = "The value is " . $boolean;

?> -->


<!---------------------------------------- Strict data types -->
<!-- PHP 7 introduced strict data types, which allow developers to enforce stronger typing rules in their code. When strict data types are enabled, PHP checks that function parameters, return types, and class properties adhere strictly to the specified types. -->


<!-- <?php
function add(int $a, int $b): int {
    return $a + $b;
}
echo add(2,3);
?> -->



<!-------------------------------------------- TYPE CASTING
In PHP, type casting refers to the explicit conversion of a value from one data type to another. PHP supports various type casting methods to convert data between different types. Here are the commonly used methods for type casting in PHP: -->

<!-- <?php
$x = "10";
$intValue = (int) $x;
echo $intValue;
?> -->

<!-- <?php
$x = "10";
settype($x, "int"); 
echo $x;
 ?> -->


<!------------------------------------------- String interpolation -->
<!-- String interpolation is the process of embedding variables directly within double-quoted strings in PHP. When a string is enclosed in double quotes ("), PHP automatically replaces variable names inside the string with their corresponding values.  -->
<?php
$name = "John";
echo "Hello, $name!";
?>

<!-------------------------------------------------- Note -------------------------------->
<!-- Double quotes (") support string interpolation and escaping, making them more flexible and versatile. They are typically used when variable interpolation or escaping is needed within the string. -->


<!-- Constructor -->
<!-- <?php
class Cat {
    // Constructor method
    public function __construct() {
        // Code to run when the class is created
        echo "An instance of MyClass has been created.";
    }
}
// Create an object of the class
$obj = new Cat(); // Output: "An instance of MyClass has been created."
?> -->


<?php

$condition = true;
if ($condition) {
    $result = "Condition is true";
} else {
    $result = "Condition is false";
}

//---------------------- Refactored ternary expression
$result = ($condition) ? "Condition is true" : "Condition is false";
echo $result
?>


<!------------------ Data Type Assignment -->
<!-- $arrayVar = array(1, 2, 3); -->

<!------------------------ include -->
<!-- include: The include statement includes and evaluates the specified file during script execution. If the file cannot be found or included for any reason, a warning is issued, but script execution continues. -->

<!-- include 'filename.php'; -->



<!--------------- include_once  -->
<!-- include_once: The include_once statement includes the specified file only once during script execution, even if it's included multiple times in the script. -->
<!-- include_once 'filename.php'; -->



<!--------------- Count  -->
<!-- <?php
// Define an array
$array = array(1, 2, 3, 4, 5);

// Get the count of the array
$count = count($array);

// Output the count
echo "The count of the array is: $count"; // Output: The count of the array is: 5
?> -->




<!-- <?php
// Variable in global scope
$message = "Hello, world!";

// Function accessing global variable
function greet() {
    global $message;
    echo $message;
}

// Call the function
greet(); // Output: Hello, world!
?> -->


<!-- foreach loop in PHP to iterate over the elements of an array and display their contents.  -->

<?php
// Define an array
$colors = array("Red", "Green", "Blue");

// Iterate over the array and display its contents
foreach ($colors as $color) {
    echo $color . "<br>";
}
?>



<!-- Display contents of an array using the for loop -->
<?php
// Define an array
$colors = array("Red", "Green", "Blue");

// Get the length of the array
$arrayLength = count($colors);

// Iterate over the array using a for loop
for ($i = 0; $i < $arrayLength; $i++) {
    echo $colors[$i] . "<br>";
}
?>
<!-- 
Promoted properties -->
<!-- Promoted properties, also known as constructor property promotion, is a feature introduced in PHP 8.0 that allows you to declare and initialize class properties directly in the constructor parameters. This feature simplifies class definition by reducing boilerplate code associated with property declaration and assignment. -->

<!-- <?php
class Dog {
    public function __construct(
        public string $name,
        public int $age,
        public ?string $address = null
    ) {}
}

// Create an object of the class
$obj = new Dog("John", 30, "123 Main St");

// Access the properties
echo $obj->name;     // Output: John
echo $obj->age;      // Output: 30
echo $obj->address;  // Output: 123 Main St
?>
 -->


 <!-- --------------------multidimensional arrays, -->
 <!-- In PHP, you can create nested or multidimensional arrays, which are arrays containing other arrays as elements. T -->

 <!-- <?php
// Create a nested array
$nestedArray = array(
    "fruit" => array("apple", "banana", "orange"),
    "vegetable" => array("carrot", "lettuce", "tomato"),
    "color" => array("red", "green", "blue")
);

// Accessing elements of the nested array
echo $nestedArray["fruit"][0]; // Output: apple
echo $nestedArray["vegetable"][1]; // Output: lettuce
echo $nestedArray["color"][2]; // Output: blue
?> -->



<!-- <?php
// Define an array
$listItems = array("Item 1", "Item 2", "Item 3", "Item 4", "Item 5");

// Output the list
echo "<ul>";
foreach ($listItems as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";
?> -->



<!----------------------------------------- key value store -->
<!-- <?php
// Create an associative array as a key-value store
$keyValueStore = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);

// Accessing values from the key-value store
echo "Name: " . $keyValueStore["name"] . "<br>";
echo "Age: " . $keyValueStore["age"] . "<br>";
echo "City: " . $keyValueStore["city"] . "<br>";
?> -->


<!------------- Constant -->
<?php
// Define a constant
define("PI", 3.14159);

// Use the constant
echo PI; // Output: 3.14159
?>


<!--------------- Concatenate  -->

<?php
// Define two strings
$firstName = "John";
$lastName = "Doe";

// Concatenate strings
$fullName = $firstName . " " . $lastName;

// Output the concatenated string
echo $fullName; // Output: John Doe
?>