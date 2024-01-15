<?php
function fibonacci($max): Generator
{
	$a = 0;
	$b = 1;
	while ($a < $max) {
		yield $a;
		$next = $a + $b;
		$a = $b;
		$b = $next;
	}
}
echo "Послідовності чисел Фібоначчі, які менші за 100:\n";
foreach (fibonacci(100) as $number) {
	echo $number . "\n";
}
