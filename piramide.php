<?php

$piramide = readline ("Hoeveel stapels wil je hebben?");

for ($i = 1; $i <=$piramide; $i++) {
    for ($j = $i; $j <= $piramide; $j++) {
        echo " * ";
    }
    echo '<br />';
}