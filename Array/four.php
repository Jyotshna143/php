<?php
//insert

//push()
//$a=array("a"=>"red","b"=>"green");
// array_push($a,"blue","yellow");
// print_r($a);

//unshift()
// array_unshift($a,"blue");
// print_r($a);

//splice()
//array_splice(array, start, length, array)

// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("a"=>"purple","b"=>"orange");
// array_splice($a1,0,2,$a2);
// print_r($a1);

// $a1=array("0"=>"red","1"=>"green");
// $a2=array("0"=>"purple","1"=>"orange");
// array_splice($a1,1,0,$a2);
// print_r($a1);

// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("a"=>"purple","b"=>"orange");
// print_r(array_splice($a1,0,2,$a2));




//delete

//pop()
// $a=array("red","green","blue");
// array_pop($a);
// print_r($a);

//shift()
// $a=array("a"=>"red","b"=>"green","c"=>"blue");
// echo array_shift($a)."<br>";
// print_r ($a);

// $a=array(0=>"red",1=>"green",2=>"blue");
// echo array_shift($a);
// print_r ($a);

//slice()
//array_slice(array, start, length, preserve)

// $a=array("red","green","blue","yellow","brown");
// print_r(array_slice($a,2));

// $a=array("red","green","blue","yellow","brown");
// print_r(array_slice($a,1,2));

// $a=array("red","green","blue","yellow","brown");
// print_r(array_slice($a,-2,1));

// $a=array("red","green","blue","yellow","brown");
// print_r(array_slice($a,1,2,true));

// $a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"brown");
// print_r(array_slice($a,1,2));
// $a=array("0"=>"red","1"=>"green","2"=>"blue","3"=>"yellow","4"=>"brown");
// print_r(array_slice($a,1,2));


//update
//index array
// $cars = array("Volvo", "BMW", "Toyota");
// $cars[1] = "Ford";
// var_dump($cars);

//associative array
// $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
// $cars["year"] = 2024;
// var_dump($cars);

//array item in foreach loop
// $cars = array("Volvo", "BMW", "Toyota");
// foreach ($cars as &$x) {
//   $x = "Ford";
// }
// unset($x);
// var_dump($cars);

//without uset()
// $cars = array("Volvo", "BMW", "Toyota");
// foreach ($cars as &$x) {
//   $x = "Ford";
// }

// $x = "ice cream";

// var_dump($cars);


//combine()
// array_combine(keys, values)

// $fname=array("Peter","Ben","Joe");
// $age=array("35","37","43");

// $c=array_combine($fname,$age);
// print_r($c);
?>
