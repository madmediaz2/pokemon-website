<?php
global $pokemons;
include "data.php";
include "header.html";

$searchResult = [];

if (isset($_GET['search'])) {
    $searchQuery = strtolower($_GET['search']);
    foreach ($pokemons as $pokemon) {
        if (strpos(strtolower($pokemon), $searchQuery) !== false) {
            $searchResult[] = $pokemon;
        }
    }
}

if (count($searchResult) === 1) {
    header("Location: pokemon_detail.php?name=" . urlencode($searchResult[0]));
    exit;
}
?>
    <!DOCTYPE html>
    <head>
        <title>Pokémon Zoeken</title>
    </head>
    <main class="search-results">
    <h1>Zoekresultaten voor "<?php echo htmlspecialchars($searchQuery); ?>"</h1>
    <ul class="results-list">
        <?php foreach ($searchResult as $pokemon): ?>
            <li><a href="pokemon_detail.php?name=<?php echo urlencode($pokemon); ?>"><?php echo htmlspecialchars($pokemon); ?></a></li>
        <?php endforeach; ?>
    </ul>
    </main>

    </html>

<?php include "footer.html"; ?>