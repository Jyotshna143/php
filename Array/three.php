<?php

//multidimentional associative array
$array=['mohan'=>['math'=> 55,'english'=>33,'science'=>55],
       'saswat'=>['math'=> 95,'english'=>83,'science'=>95],
       'ahan'=>['math'=> 65,'english'=>83,'science'=>90]
       ];

  $mainkeys=array_keys($array);
  for($i=0; $i<count($mainkeys); $i++)
  {
    $subkey=array_keys($mainkeys);
    for($j=0; $j<count($subkey);$j++)
    {
        echo "<pre>";
        print_r($array[$mainkeys[$subkey[$j]]]);
        echo "</pre>";
    }
    break;
  }     