<?php
$line = readline("Hoe veel activiteiten wil je toevoegen?");
$lijst = array();
for($i = 1; $i <= $line; $i++){
$result = readline("Wat wil je toevoegen aan jouw bucket list?");
array_push($lijst,$result);
}
foreach ($lijst as $value) {
    echo $value . PHP_EOL;
}
?>