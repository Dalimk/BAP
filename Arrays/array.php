<?php

$teachers = array('Ingrid','Jelle','Edward');

echo $teachers[1];

$teachers[1] = 'Joey';

// var_dump($teachers);
//print_r($teachers);

//for ($i = 0; $i < 3; $i++) {
//
//    echo '<p>' . $teachers[$i] . '</p>';
//
//}

//$teachers[] = 'Theo';

array_push($teachers, 'Theo','Hans','Erik');

foreach($teachers as $one_teacher) {

    echo '<p>' . $one_teacher . '</p>' ;

}

$subjects = array('Ingrid' => 'bap', 'Joey' => 'pro', 'Jelle' => 'fro');

echo $subjects['Ingrid'];

foreach($subjects as $teachers => $subjects){
    echo $teachers . ' teaches ' . $subjects . '</br>';
}