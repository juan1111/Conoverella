<?php
session_start();

require __DIR__ . '/../vendor/autoload.php';

// Get the requested page from URL (default: home)
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$_SESSION['pages'] = $page;

// Sanitize input to prevent unwanted paths
$allowed_pages = ['home', 'about', 'contact','men','checkout','women','accessories','blazers','pants','shirts'];
if (!in_array($page, $allowed_pages)) {
    $page = '404'; // Default page if invalid
}

// Include the selected page
include __DIR__ . "/../components/$page.php";
?>
