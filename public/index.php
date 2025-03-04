<?php
require __DIR__ . '/../vendor/autoload.php';
include __DIR__ . '/../views/header.php';

// Get the requested page from URL (default: home)
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Sanitize input to prevent unwanted paths
$allowed_pages = ['home', 'about', 'contact','men','checkout'];
if (!in_array($page, $allowed_pages)) {
    $page = 'home'; // Default page if invalid
}

// Include the selected page
include __DIR__ . "/../components/$page.php";

include __DIR__ . '/../views/footer.php';
?>
