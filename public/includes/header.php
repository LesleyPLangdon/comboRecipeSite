<?php
$currentSite = $sites[$activeSite];
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $currentSite['name']; ?></title>
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/<?php echo $currentSite['theme']; ?>">
</head>
<body>

<header class="site-header">
    <h1><?php echo $currentSite['name']; ?></h1>
</header>