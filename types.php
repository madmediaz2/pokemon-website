<?php
global $types;
include 'data.php';
?>

<!DOCTYPE html>
<html>
<body>
<?php include 'header.html'; ?>
<h1>Pokémon Types</h1>
<ul>
    <?php foreach ($types as $type => $weaknesses): ?>
        <li>
            <strong><?php echo $type; ?>: </strong>
            weak against: <?php echo implode(", ", $weaknesses); ?>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
<?php include 'footer.html'; ?>