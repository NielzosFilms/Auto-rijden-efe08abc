<?php
echo("Wat is jouw leeftijd?".PHP_EOL);
$leeftijd = readline();
if($leeftijd > 16.5){
    echo("Je mag beginnen met rijlessen!");
}else{
    echo("Helaas, je mag nog niet beginnen met rijlessen");
}