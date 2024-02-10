<?php
$pokemons = [
    "Bulbasaur", "Ivysaur", "Venusaur",
    "Charmander", "Charmeleon", "Charizard",
    "Squirtle", "Wartortle", "Blastoise",
    "Pikachu", "Raichu",
"Dratini", "Dragonair", "Dragonite",
];

$pokemonDetails = [
    "Bulbasaur" => [
        "Type" => "Grass",
        "Evolution" => ["Ivysaur", "Venusaur"],
        "Image" => "images/bulbasaur.png"
    ],
    "Ivysaur" => [
        "Type" => "Grass",
        "Evolution" => ["Venusaur"],
        "Image" => "images/ivysaur.png"
    ],
    "Venusaur" => [
        "Type" => "Grass",
        "Evolution" => [],
        "Image" => "images/venusaur.png"
    ],
    "Charmander" => [
        "Type" => "Fire",
        "Evolution" => ["Charmeleon", "Charizard"],
        "Image" => "images/charmander.png"
    ],
    "Charmeleon" => [
        "Type" => "Fire",
        "Evolution" => ["Charizard"],
        "Image" => "images/charmeleon.png"
    ],
    "Charizard" => [
        "Type" => "Fire",
        "Evolution" => [],
        "Image" => "images/charizard.png"
    ],
    "Squirtle" => [
        "Type" => "Water",
        "Evolution" => ["Wartortle", "Blastoise"],
        "Image" => "images/squirtle.png"
    ],
    "Wartortle" => [
        "Type" => "Water",
        "Evolution" => ["Blastoise"],
        "Image" => "images/wartortle.png"
    ],
    "Blastoise" => [
        "Type" => "Water",
        "Evolution" => [],
        "Image" => "images/blastoise.png"
    ],
    "Pikachu" => [
        "Type" => "Electric",
        "Evolution" => ["Raichu"],
        "Image" => "images/pikachu.png"
    ],
    "Raichu" => [
        "Type" => "Electric",
        "Evolution" => [],
        "Image" => "images/raichu.png"
    ],
    "Dratini" => [
        "Type" => "Dragon",
        "Evolution" => ["Dragonair", "Dragonite"],
        "Image" => "images/dratini.png"
    ],
    "Dragonair" => [
        "Type" => "Dragon",
        "Evolution" => ["Dragonite"],
        "Image" => "images/dragonair.png"
    ],
    "Dragonite" => [
        "Type" => "Dragon",
        "Evolution" => [],
        "Image" => "images/dragonite.png"
    ]
];

$types = [
    "Fire" => ["Rock", "Fire", "Water"],
    "Water" => ["Water", "Grass", "Fire"],
    "Grass" => ["Grass", "Water", "Rock", "Flying"],
    "Electric" => ["Ground", "Grass", "Dragon"],
    "Dragon" => ["Ice", "Fairy"],
];