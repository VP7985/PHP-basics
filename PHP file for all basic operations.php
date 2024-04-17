 //list all functions in php for web app development, as  has a vast and extensive set of functions.

//Input/Output Functions:
//echo and print:

//echo and print are used to output text.


echo "Hello, World!";
print("Hello, World!");
printf:

//Used for formatted output.


$name = "John";
printf("My name is %s", $name);
String Functions:
strlen:

//Returns the length of a string.


$str = "Hello, World!";
echo strlen($str); // Outputs 13
strpos:

//Finds the position of the first occurrence of a substring in a string.


$str = "Hello, World!";
echo strpos($str, "World"); // Outputs 7
Array Functions:
count:

//Returns the number of elements in an array.


$arr = [1, 2, 3, 4, 5];
echo count($arr); // Outputs 5
array_push:

//Pushes one or more elements onto the end of an array.


$arr = [1, 2, 3];
array_push($arr, 4, 5);
print_r($arr); // Outputs [1, 2, 3, 4, 5]
File System Functions:
file_get_contents:

//Reads the entire contents of a file into a string.


$content = file_get_contents("example.txt");
file_put_contents:

//Writes data to a file.


$data = "Hello, File!";
file_put_contents("example.txt", $data);
Database Functions (using MySQLi as an example):
mysqli_connect:

//Opens a new connection to the MySQL server.


$conn = mysqli_connect("localhost", "username", "password", "database");
mysqli_query:

//Performs a query on the database.


$result = mysqli_query($conn, "SELECT * FROM users");
Session and Cookie Functions:
session_start:

//Starts a new session or resumes the existing session.


session_start();
setcookie:

//Sets a cookie.


setcookie("user", "John Doe", time() + 3600, "/");
Miscellaneous Functions:
date:

//Formats a local time/date.


echo date("Y-m-d H:i:s");
filter_var:

//Filters a variable with a specified filter.


$email = "user@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Valid email address.";
}
