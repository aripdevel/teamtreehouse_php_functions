<?php

// Create Function hello

function hello()
{
    echo "Hello, World";
}

hello(); // Hello, World

$current_user="Mike";

function is_mike()
{
    global $current_user;

    if($current_user=="Mike")
    {
        echo "\nYou is Mike";
    }else
    {
        echo "Nope, You not Mike";
    }
}

is_mike(); // You is Mike

echo PHP_EOL;

function helloName($name)
{
    if(is_array($name) && !empty($name))
    {
        foreach($name as $key)
        {
            echo "Hello, $key \n";
        }
    }else
    {
        echo "Hello Friend !";
    }

}

helloName(["Mike", "Mohede", "Hompton"]);

function get_info($name,$title=Null)
{
    if($title)
    {
        echo "$name was arrived,and came as $title";
    }else
    {
        echo "$name was arrived,Welcome";
    }
}

get_info("Mike","frog");

function helloWorld($word)
{
    return "\nHello World $word";
}

$hello=helloWorld("you so Good"); // \nHello World

echo $hello;

echo PHP_EOL;

function addUp($a,$b)
{
    return [$a,$b,$a+$b]; //Array
}

print_r(addUp(2,4));

function sumArray($data)
{
    $result=0; 

    foreach($data as $key)
    {
        $result+=$key;
    }

    return $result;
}


var_dump(sumArray([1,4,5,5]));

function answer()
{
    return "You answer the question";
}

$answer=answer(); // Save n Variable

echo  PHP_EOL;

// Callback Function

$answer_cal="answer"; 

echo $answer_cal()."!!"; // Call Function 

// Anonymous Function

$askName="What is your name";
$name="Buddy";

echo PHP_EOL;

$ask=function()use($askName,$name)
{
    return "Ask the question,$askName $name ?";
};

echo $ask();

function br()
{
    echo PHP_EOL;
}

br();
// Built-in string function

$magang="Magang TOP jos";

echo strlen($magang); // 14

br();

echo substr($magang,7); // TOP jos

br();

echo substr($magang,7,6); //TOP jo

br();

echo strpos($magang,"j"); // 11 

br();

echo $magang[11]; // j

br();

$team=["Mike"=>"Developer","Chris"=>"Designer","Hompton"=>"Manager"];

print_r(array_keys($team));

var_dump(array_key_exists("John",$team));


if(array_key_exists("john",$team))
{
    echo "Mike Found in \$team";
}else
{
    echo "Key not found in \$team";
}

br();

array_walk($team,function($value,$key){

    echo " $key is a $value \n";
});



