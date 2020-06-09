<?php 
/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/

$i = 0;
while($i < 10){
	$i += 1;
	echo $i;
	echo "<br>";
}



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/
$num = range(5, 100, 5);


/*
Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/
for($x = 0; $x < sizeof($num); $x++)
{
	if($num[$x]% 2 !=0)
	{
		echo $num[$x].'<br>';

	}
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = ['Indian curry' , 'Okra' , 'Pizza' , 'Halwa Puri'];

/*
Use while-loop to print array elements (every food in a new row).
*/

$abc = 0;
while ($abc < sizeof($food))
{
	echo $food[$abc].'<br>';
	$abc += 1;
}



/*
Use for-loop to print array elements (every food in a new row).
*/

for($abc = 0; $abc < sizeof($food); $abc++)
{
	echo $food[$abc]. '<br>';
	
}

/*
Use foreach-loop to print array elements (every food in a new row).
*/

foreach ($food as $abc1) 
{
	echo $abc1. '<br>';
}




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/

echo '<ul>';
for ($abc1 = 0; $abc1 < sizeof($food); $abc1++)
{
	echo'<li>';
	echo $food[$abc1];
	echo'</li>';
}



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
  "pizza" => [ 
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]

So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/
$food_assoc[$food[0]] = ['type'=>'Main Course', 'origin' => 'India'];
$food_assoc[$food[1]] = ['type'=>'Main Course', 'origin' => 'South India'];
$food_assoc[$food[2]] = ['type'=>'Snacks', 'origin' => 'Italy'];
$food_assoc[$food[3]] = ['type'=>'Breakfast', 'origin' => 'Pakistan'];

/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/
foreach ($food_assoc as $arrayfood)
{
  print_r($arrayfood);
}

/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/
echo '<ul>';
foreach ($food_assoc as $keys => $value)
 {            
  	echo '<li>'.$keys.'<ul>';
      foreach ($value as $foodvalue)
  {
    echo '<li>'.$foodvalue.'</li>';
  }
    echo '</ul>
  </li>';
}
echo '</ul>';
 ?>