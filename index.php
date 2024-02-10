<?php

global $pokemons;
global $pokemonDetails;
include 'header.html';

include 'data.php';

$pokemonName = $pokemonOfTheDay = $pokemons[array_rand($pokemons)];
$details = $pokemonDetails[$pokemonName] ?? ['Type' => 'Unknown', 'Evolution' => []];

?>
    <main class="index">
        <h1>Welcome to PokéPortal</h1>
        <p>Hier vind je informatie over verschillende Pokémon, hun typen en evoluties.</p>
        <h2>
            Pokémon van de Dag:
            <a href="pokemon_detail.php?name=<?php echo $pokemonName; ?>"> <?php echo $pokemonName; ?></a>
        </h2>
        <img src="<?php echo $details['Image'] ?>">
    </main>
<?php include 'footer.html'; ?>