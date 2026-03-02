<?php
/*
|--------------------------------------------------------------------------
| HEADER TEMPLATE
|--------------------------------------------------------------------------
| This header is shared across all concept pages.
| Each page defines:
|   $pageTitle
|   $themeCss
|   $heroImage
|   $logoImage
|--------------------------------------------------------------------------
*/

// Provide fallbacks (prevents errors if a page forgets to set them)
$pageTitle  = $pageTitle  ?? "Dinner for Two";
$themeCss   = $themeCss   ?? "/css/base.css";
$heroImage  = $heroImage  ?? "/assets/images/default/hero.jpg";
$logoImage  = $logoImage  ?? "/assets/images/default/logo.png";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <!-- Base layout styles -->
    <link rel="stylesheet" href="/css/base.css">

    <!-- Theme specific styles -->
    <link rel="stylesheet" href="<?php echo htmlspecialchars($themeCss); ?>">
</head>

<body>

<header class="site-header">

    <!-- HERO IMAGE CONTAINER -->
    <div class="hero"
         style="background-image: url('<?php echo htmlspecialchars($heroImage); ?>');">

        <!-- Overlay container for logo + nav -->
        <div class="hero-top-bar">

            <div class="logo-container">
                <img src="<?php echo htmlspecialchars($logoImage); ?>"
                     alt="Site Logo"
                     class="site-logo">
            </div>

            <div class="header-links">
                <a href="/">Home</a>
                <a href="#">Parent Site</a>
            </div>

        </div>

    </div>

</header>