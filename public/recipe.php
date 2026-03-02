<?php
$sites = json_decode(file_get_contents(__DIR__ . '/../data/sites.json'), true);
$recipes = json_decode(file_get_contents(__DIR__ . '/../data/recipes.json'), true);

$slug = $_GET['slug'] ?? '';

if (!isset($recipes[$slug])) {
    die("Recipe not found.");
}

$recipe = $recipes[$slug];
$activeSite = $recipe['site'];
?>

<?php include 'includes/header.php'; ?>

<div class="layout">

<?php include 'includes/sidebar-left.php'; ?>

<main class="recipe">

<h2><?php echo $recipe['title']; ?></h2>

<div class="meta">
    <span>Prep: <?php echo $recipe['prepTime']; ?></span>
    <span>Cook: <?php echo $recipe['cookTime']; ?></span>
    <span>Serves: <?php echo $recipe['servings']; ?></span>
</div>

<h3>Ingredients</h3>
<ul>
<?php foreach ($recipe['ingredients'] as $ingredient) {
    echo "<li>$ingredient</li>";
} ?>
</ul>

<h3>Instructions</h3>
<ol>
<?php foreach ($recipe['instructions'] as $step) {
    echo "<li>$step</li>";
} ?>
</ol>

</main>

<?php include 'includes/sidebar-right.php'; ?>

</div>

<?php include 'includes/footer.php'; ?>