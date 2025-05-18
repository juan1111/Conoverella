<?php
session_start();
header('Content-Type: application/json');
require_once '../App/dbcon.php';

if (!isset($_SESSION['pages'])) {
    echo json_encode(["error" => "No category found in session"]);
    exit;
}

$pages = $_SESSION['pages'] ? $_SESSION['pages'] : 'home';

try {
    // Use prepared statements for security


        $queryproducts = "SELECT * FROM products where category = :category or types = :types";
        $stmt = $pdo->prepare($queryproducts);
        $stmt->bindParam(':category', $pages);
        $stmt->bindParam(':types', $pages);
        $stmt->execute();
    
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        echo json_encode($products, JSON_NUMERIC_CHECK);


    // switch($pages){

    //     case 'home':

    //         $queryFeatured = "SELECT * FROM products";
    //         $stmtFeatured = $pdo->query($queryFeatured);
    
    //         $featuredProducts = $stmtFeatured->fetchAll(PDO::FETCH_ASSOC);
    
    //         echo json_encode($featuredProducts, JSON_NUMERIC_CHECK);

    //         break;
    //     case 'women':

    //         $queryWomen = "SELECT * FROM products where category = :category";
    //         $stmtWomen = $pdo->prepare($queryWomen);
    //         $stmtWomen->bindParam(':category', $pages);
    //         $stmtWomen->execute();
    
    //         $womenProducts = $stmtWomen->fetchAll(PDO::FETCH_ASSOC);
    
    //         echo json_encode($womenProducts, JSON_NUMERIC_CHECK);

    //         break;
    //     case 'men':

    //         $queryMen = "SELECT * FROM products where category = :category";
    //         $stmtMen = $pdo->prepare($queryMen);
    //         $stmtMen->bindParam(':category', $pages);
    //         $stmtMen->execute();

    //         $menProducts = $stmtMen->fetchAll(PDO::FETCH_ASSOC);

    //         echo json_encode($menProducts, JSON_NUMERIC_CHECK);

    //         break;

    //     case 'accessories':

    //         $queryAccessories = "SELECT * FROM products where category = :category";
    //         $stmtAccessories = $pdo->prepare($queryAccessories);
    //         $stmtAccessories->bindParam(':category', $pages);
    //         $stmtAccessories->execute();

    //         $accessoriesProducts = $stmtAccessories->fetchAll(PDO::FETCH_ASSOC);

    //         echo json_encode($accessoriesProducts, JSON_NUMERIC_CHECK);

    //         break;

    //     default:
    //     echo json_encode(["Error" => "No Product Found"]);

    // }

    // if($pages === 'home'){

    // }else{
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
