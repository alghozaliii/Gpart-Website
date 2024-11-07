<?php
// File: search.php
include 'header2.php';

// Database connection
try {
    $db = new PDO("mysql:host=localhost;dbname=your_database", "username", "password");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Get search query
$query = isset($_GET['q']) ? trim($_GET['q']) : '';
$searchTerm = "%{$query}%";

// Prepare and execute search query
$stmt = $db->prepare("
    SELECT * FROM products 
    WHERE name LIKE :query 
    OR description LIKE :query 
    ORDER BY name ASC
");
$stmt->bindParam(':query', $searchTerm);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results - <?php echo htmlspecialchars($query); ?></title>
</head>
<body>
    <main class="container-custom main-content">
        <div class="py-8">
            <h1 class="text-2xl font-bold mb-4">
                Search Results for "<?php echo htmlspecialchars($query); ?>"
            </h1>

            <?php if (empty($results)): ?>
                <div class="bg-white rounded-lg p-8 text-center">
                    <p class="text-gray-500">No products found matching your search.</p>
                    <a href="all.product.php" class="inline-block mt-4 text-indigo-600 hover:text-indigo-500">
                        View all products
                    </a>
                </div>
            <?php else: ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php foreach ($results as $product): ?>
                        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                            <img src="<?php echo htmlspecialchars($product['image']); ?>" 
                                 alt="<?php echo htmlspecialchars($product['name']); ?>"
                                 class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h2 class="font-semibold text-lg mb-2">
                                    <?php echo htmlspecialchars($product['name']); ?>
                                </h2>
                                <p class="text-gray-600 text-sm mb-2">
                                    <?php echo htmlspecialchars(substr($product['description'], 0, 100)) . '...'; ?>
                                </p>
                                <div class="font-bold text-lg">
                                    Rp <?php echo number_format($product['price'], 0, ',', '.'); ?>
                                </div>
                                <a href="product.php?id=<?php echo $product['id']; ?>" 
                                   class="mt-4 inline-block bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-500 transition-colors">
                                    View Details
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>