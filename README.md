
# PHP Basics: Documentation with Example

## Declaring Variables in PHP
In PHP, variables are used to store data values. To declare a variable, you simply assign a value to it using the `$` symbol followed by the variable name:

```php
$variable_name = value;
```

### Key Points:
- **No explicit declaration:** The data type of a variable is automatically determined by the interpreter based on the assigned value.
- **Case-sensitive:** Variable names are case-sensitive. `$name` and `$NAME` are different variables.

### Naming Conventions:
1. Must start with a letter or underscore (_).
2. Can contain letters, numbers, or underscores.
3. Avoid reserved words as variable names.

### Example:
```php
<?php
// Declaring and assigning values to variables
$name = "John Doe";
$age = 25;
$is_student = true;
$height = 1.75;

// Printing the values of the variables
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Is Student: " . $is_student . "<br>";
echo "Height: " . $height . " meters<br>";
?>
```

---

## Data Types in PHP
### Scalar Types
- **String:** A sequence of characters.
```php
$name = "Alice";
$greeting = 'Hello, world!';
```

- **Integer:** Whole numbers without a decimal point.
```php
$age = 30;
$year = 2023;
```

- **Float:** Numbers with a decimal point.
```php
$pi = 3.14159;
$price = 9.99;
```

- **Boolean:** Logical values (`true` or `false`).
```php
$is_active = true;
$is_logged_in = false;
```

### Compound Types
- **Array:** A collection of values, indexed by keys.
```php
$colors = array("red", "green", "blue");
$person = array("name" => "Bob", "age" => 25);
```

- **Object:** An instance of a class.
```php
class Person {
    public $name;
    public $age;
}

$person = new Person();
$person->name = "Charlie";
$person->age = 35;
```

### Special Type
- **NULL:** Represents a variable with no value.
```php
$null_var = null;
```

---

## Variable Scope in PHP
### Local Scope
Variables declared inside a function have local scope.
```php
function myFunction() {
    $x = 10;
    echo $x;
}
myFunction(); // Output: 10
echo $x; // Error: Undefined variable
```

### Global Scope
Variables declared outside a function have global scope.
```php
$y = 20;
function myFunction() {
    global $y;
    echo $y;
}
myFunction(); // Output: 20
```

### Static Scope
Static variables retain their value between function calls.
```php
function myFunction() {
    static $z = 0;
    $z++;
    echo $z;
}
myFunction(); // Output: 1
myFunction(); // Output: 2
```

---

## Operators in PHP
### Arithmetic Operators
| Operator | Description          | Example        |
|----------|----------------------|----------------|
| `+`      | Addition             | `$x + $y`      |
| `-`      | Subtraction          | `$x - $y`      |
| `*`      | Multiplication       | `$x * $y`      |
| `/`      | Division             | `$x / $y`      |
| `%`      | Modulus (Remainder)  | `$x % $y`      |

### Example:
```php
$x = 10;
$y = 3;
echo $x + $y; // Output: 13
echo $x % $y; // Output: 1
```

---

## Functions in PHP
### Defining and Calling Functions
```php
function greet() {
    echo "Hello, World!";
}
greet();
```

### Function Parameters and Default Values
```php
function greet($name = "World") {
    echo "Hello, $name!";
}
greet();       // Output: Hello, World!
greet("Alice"); // Output: Hello, Alice!
```

### Returning Values
```php
function add($x, $y) {
    return $x + $y;
}
$result = add(5, 3);
echo $result; // Output: 8
```

---

## Control Structures
### Conditional Statements
```php
if ($age > 18) {
    echo "Adult";
} else {
    echo "Minor";
}
```

### Loops
```php
for ($i = 0; $i < 5; $i++) {
    echo $i;
}
```

---

©Faysal Mahmud, 2024
