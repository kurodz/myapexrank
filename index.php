<?php

function romanize($num)  
{ 
    // Be sure to convert the given parameter into an integer
    $n = intval($num);
    $result = ''; 
 
    // Declare a lookup array that we will use to traverse the number: 
    $lookup = array(
        'IV' => 4, 'III' => 3, 'II' => 2, 'I' => 1
    ); 
 
    foreach ($lookup as $roman => $value)  
    {
        // Look for number of matches
        $matches = intval($n / $value); 
 
        // Concatenate characters
        $result .= str_repeat($roman, $matches); 
 
        // Substract that from the number 
        $n = $n % $value; 
    } 

    return $result; 
}; 


$json = file_get_contents('https://api.mozambiquehe.re/bridge?version=4&platform=PC&player=kazafxu&auth=b1c456b9557ad0a41aa5475155fe41db');
$data = json_decode($json);

$rdiv = intval($data->global->rank->rankDiv);

echo $data->global->name . '&nbsp';
echo $data->global->rank->rankName . '&nbsp';
echo romanize($rdiv) . '&nbsp';
echo $data->global->rank->rankScore . 'ᴿᴾ';
?>
