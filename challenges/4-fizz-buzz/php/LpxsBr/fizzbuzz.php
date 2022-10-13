<?php
if(isset($argv[1])){

    for($i = 1; $i <= $argv[1]; $i++){

        if ($i % 3 == 0 and $i % 5 == 0) {
            echo 'FizzBuzz'.PHP_EOL;
        }
        elseif ($i % 3 == 0) {
            echo 'Fizz'.PHP_EOL;
        }
        elseif ($i % 5 == 0) {
            echo 'Buzz'.PHP_EOL;
        }
        else {
            echo $i.PHP_EOL;
        }
    }
}
else{
    echo 'sem valores inseridos, tente novamente';
}