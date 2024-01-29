

SELECT * FROM table_name;


SELECT imie FROM table_name;


SELECT imie, nazwisko  FROM table_name;


SELECT imie FROM table_name
WHERE imie="Adam";


SELECT age FROM table_name 
WHERE age BETWEEN age>10 AND age<=18

SELECT age FROM table_name 
WHERE age NOT BETWEEN age>10 AND age<=18


SELECT imie FROM table_name
ORDER BY imie ASC, nazwisko DESC;


INSERT INTO table_name(((pcolumn) - DELETE is A_I), column_one, column_two, .... column_infinite) VALUES ('$ID(MUST REMOVE - A_I))','$FIRST','$SECOND', ... '$UNKNOWN');



$_host = "localhost";
$_user = "root";
$_pass = "";
$_base = "name_base";


$connection = new mysqli($_host,$_user,$_pass,$_base);


$query = "INSERT INTO table_name(column_one, column_two) VALUES ('$FIRST','$SECOND')";

$execute_query = mysqli_query($connection, $query);

$connection->close();






