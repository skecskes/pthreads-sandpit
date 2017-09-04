<?php

echo "Without pthreads" . PHP_EOL;

$start = microtime(true);

for ($value = 0; $value < 20000; $value++) {
    $count = 5000;
    for ($j = 1; $j <= $count; $j++) {
        sqrt($j+$value) + sin($value/$j) + cos($value);
    }
}

printf("Done for %.2f seconds" . PHP_EOL, microtime(true) - $start);
