<?php
// Multidimensional array using foreach loop
$superheroes = array(
    "spider-man" => array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    "super-man" => array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    "iron-man" => array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);
 
// Printing all the keys and values one by one
$keys = array_keys($superheroes);
for($i = 0; $i < count($superheroes); $i++) {
    echo $keys[$i] . "<br>";
    foreach($superheroes[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "<br>";
}
?>




 <?php
		// $employees = array (
		// 	array("Name" => "Harry", "Age" => 25, "Department" => "Management"), 
		// 	array("Name" => "Jack", "Age" => 31, "Department" => "Developer"),
		// 	array("Name" => "Harry", "Age" => 35, "Department" => "Developer")
		// );

		// $keys = array_keys($employees);
		// for($i = 0; $i < count($employees); $i++) {
		//     echo "<br>";
		//     foreach($employees[$keys[$i]] as $key => $value) {
		//         echo $value . "<br>";
		//     }
		//     echo "<br>";
		// }
	?> 