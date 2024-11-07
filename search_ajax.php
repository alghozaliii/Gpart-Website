<?php
// File: search_ajax.php
header('Content-Type: application/json');

try {
    // Database connection
    $db = new PDO("mysql:host=localhost;dbname=your_database", "username", "password");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get search query
    $query = isset($_GET['q']) ? trim($_GET['q']) : '';

    if (strlen($query) < 2) {
        echo json_encode([]);
        exit;
    }

    // Prepare and execute search query
    $stmt = $db->prepare("
        SELECT id, name, price, image 
        FROM products 
        WHERE name LIKE :query 
        OR description LIKE :query 
        LIMIT 5
    ");
    
    $searchTerm = "%{$query}%";
    $stmt->bindParam(':query', $searchTerm);
    $stmt->execute();

    // Fetch results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Return JSON response
    echo json_encode($results);

} catch (PDOException $e) {
    // Return error response
    http_response_code(500);
    echo json_encode(['error' => 'Database error']);
}