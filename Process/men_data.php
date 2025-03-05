<?php
session_start();
header('Content-Type: application/json');
require_once '../App/dbcon.php';

if (!isset($_SESSION['pages'])) {
    echo json_encode(["error" => "No category found in session"]);
    exit;
}

$pages = $_SESSION['pages'] ? $_SESSION['pages'] : 'men';

try {
    // Use prepared statements for security
    if($pages === 'men'){

        $queryFeatured = "SELECT * FROM products where category =  :category";
        $result = $pdo->prepare($queryFeatured);
        $result->bindParam(':category', $pages , PDO::PARAM_STR);
        $result->execute();

        $menProducts = $result->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($menProducts, JSON_NUMERIC_CHECK);
    }
    
    // else{
    //     $sql = "SELECT * FROM products WHERE category = :category";
    //     $stmt = $pdo->prepare($sql);
    //     $stmt->bindParam(':category', $pages, PDO::PARAM_STR); // Bind category safely
    //     $stmt->execute(); // Execute query
    
    //     $products = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch data
    
    //     echo json_encode($products, JSON_NUMERIC_CHECK); // Output JSON response
    // }

} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>
