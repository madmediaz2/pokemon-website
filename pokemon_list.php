<?php
global $pokemons;
include 'data.php';
?>
<?php include 'header.html'; ?>

<!DOCTYPE html>
<link rel="stylesheet" href="css/style.css">
<html lang="nl">
<main class="list">
<h1>Lijst van Pokémons</h1>
<ul>
    <?php foreach ($pokemons as $pokemon): ?>
        <li><a href="pokemon_detail.php?name=<?php echo $pokemon; ?>"><?php echo $pokemon; ?></a></li>
    <?php endforeach; ?>
</ul>
</main>
</html>
<?php include 'footer.html'; ?>



