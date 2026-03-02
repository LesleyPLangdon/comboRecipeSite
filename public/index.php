<?php
// Load site and recipe data
$sites = json_decode(file_get_contents(__DIR__ . '/../data/sites.json'), true);
$recipes = json_decode(file_get_contents(__DIR__ . '/../data/recipes.json'), true);

// Detect current domain
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';

$activeSite = 'thyme2cook'; // default fallback

if (strpos($host, 'stuffit') !== false) {
    $activeSite = 'stuffit';
}

// Search handling
$searchQuery = $_GET['q'] ?? '';
$searchAll = isset($_GET['all']);

function matchesSearch($recipe, $query) {
    if (!$query) return true;

    $query = strtolower($query);
    return strpos(strtolower($recipe['title']), $query) !== false
        || strpos(strtolower($recipe['cuisine']), $query) !== false;
}

?>
<?php include 'includes/header.php'; ?>

<div class="layout">

<?php include 'includes/sidebar-left.php'; ?>

<main class="recipe">

<h2>Recipes</h2>

<?php
foreach ($recipes as $slug => $recipe) {

    // Filter by site unless cross-site search enabled
    if (!$searchAll && $recipe['site'] !== $activeSite) {
        continue;
    }

    if (!matchesSearch($recipe, $searchQuery)) {
        continue;
    }

    echo "<div class='recipe-card'>";
    echo "<h3><a href='recipe.php?slug=$slug'>{$recipe['title']}</a></h3>";
    echo "<p>{$recipe['cuisine']}</p>";
    echo "</div>";
}
?>

</main>

<?php include 'includes/sidebar-right.php'; ?>

</div>

<?php include 'includes/footer.php'; ?>