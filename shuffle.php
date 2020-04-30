<?php

$i = 1;
$linebreak = '-------------------------<br>';

while (true) {

	if ($i > 100) break;

	$die1 = rand(1,6);
	$die2 = rand(1,6);
	
	$total = $die1+$die2;
	
	echo 'Turn: '.$i.'<br>';
	echo 'Dice Rolled: '.$die1.' & '.$die2.'<br>';
	echo 'Total: '.$total.'<br>';
	
	if ($total % 3 === 0) {
	
		echo 'Ore';
	
	} 
	
	if ($total % 4 === 0) {

		echo 'Sheep';

	}

	echo '<br>'.$linebreak;

	$i++;
	
}
