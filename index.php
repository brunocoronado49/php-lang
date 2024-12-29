<?php

echo "Hola Mundo\n";

// This is a new comment

/**
 * This is a multiline
 * comment, good bye
 */

 // Variables
 $my_string = "This is a string of text\n";
 $my_string = "New value of the text \n";
 echo $my_string;
echo gettype($my_string)."\n"; // <- string

$my_int = 7;
echo $my_int + 11 . "\n";
echo gettype($my_int)."\n";

$my_double = 17.4;
echo $my_double . "\n";

$my_bool = true; // <- 1
echo $my_bool . "\n";
echo gettype($my_bool) . "\n";

echo "El valor de mi entero es: $my_int \n";

// Constantes
const MY_CONST = "Francisco Rangel";
echo MY_CONST."\n";

// Arrays
$my_array = [2, 4, 6, 7, 8];
echo gettype($my_array) . "\n";

echo $my_array[0]."\n";
echo $my_array[3]."\n";

array_push($my_array, $my_double);

print_r($my_array);

// Dictionary
$my_dict = array("string" => "hello", "int" => 245);
echo gettype($my_dict)."\n";
print_r($my_dict);
echo $my_dict["int"]."\n";

array_push($my_array, "Bruce");
array_push($my_array, "Bruce");
print_r($my_array);
print_r(array_unique($my_array));

// for, foreach
for ($index = 0; $index < 10; $index++) { 
    echo $index . "\n";
}

foreach ($my_array as $item) {
    echo $item . "\n";
}

// While
$index = 0;
while ($index <= sizeof($my_array) - 1) {
    echo "Hola manix \n";
    $index++;
}

if($my_int == 11 && $my_string == "hola") {
    echo "El valor es 11\n";
}
elseif($my_int == 7 || $my_string == "no hola") {
    echo "El valor si es 7 \n";
} else {
    echo "El valor NO es 11 \n";
}

function print_number(int $my_number) {
    echo $my_number."\n";
}

// print_number("hola"); <- error
print_number(234);
print_number(8567);

class MyClass {
    public $name;
    public $age;

    function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function greeting() {
        echo "Hello i am $this->name and I have $this->age yeo"."\n";
    }
}

$my_class = new MyClass("Bruce", 27);
print_r($my_class);
$my_class->greeting();
echo $my_class->name."\n";
$my_class->name = "Franco";
echo $my_class->name."\n";
