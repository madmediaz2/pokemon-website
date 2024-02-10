<?php
include 'data.php';


$pokemonName = $_GET['name'] ?? 'Unknown';
$details = $pokemonDetails[$pokemonName] ?? ['Type' => 'Unknown', 'Evolution' => []];
$weaknesses = $types[$details['Type']] ?? [];
?>


<!DOCTYPE html>
<html lang="nl">
<link rel="stylesheet" href="css/style.css">
<?php include 'header.html'; ?>
<main class="body-detail">
<h1><?php echo $pokemonName; ?> Details</h1>

    <?php if ($pokemonName != 'Unknown'): ?>
    <img src="<?php echo $details['Image']; ?>" alt="<?php echo $pokemonName; ?>" class="image_detail">
        <p><strong>Type:</strong> <?php echo htmlspecialchars($details['Type']); ?></p>
        <p><strong>Weakness:</strong> <?php echo htmlspecialchars(implode(", ", $weaknesses)); ?></p>
    <ul>
        <?php foreach ($details['Evolution'] as $evolution): ?>
            <li><a href="pokemon_detail.php?name=<?php echo urlencode($evolution); ?>"><?php echo $evolution; ?></a></li>
        <?php endforeach; ?>
    </ul>
</main>
</html>
<?php include 'footer.html'; ?>
<?php endif; ?>
