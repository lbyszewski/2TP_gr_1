

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



$_first = $_POST['first'];
$_second = $_POST['second'];


$_host = "localhost";
$_user = "root";
$_pass = "";
$_base = "name_base";


$_connection = new mysqli($_host,$_user,$_pass,$_base);


$_query = "INSERT INTO table_name(column_one, column_two) VALUES ('$_first','$_second')";

$_execute_query = mysqli_query($_connection, $_query);

$_connection->close();






