<?php

$indianaMovies = [
    "Indiana Jones et les Aventuriers de l'arche perdue" => ["Harrison Ford", "Karen Allen", "Paul Freeman"],
    "Indiana Jones et le Temple maudit" => ["Harrison Ford", "Sean Connery", "Denholm Elliott"],
    "Indiana Jones et la Dernière Croisade" => ["Harrison Ford", "Kate Capshaw", "Jonathan Ke Quan"]
];

foreach ($indianaMovies as $movie => $actors) {
    echo "Dans le film $movie, les principaux acteurs sont ";
    foreach ($actors as $actor) {
        echo "$actor, ";
    }
    echo "." . PHP_EOL;
    
}
