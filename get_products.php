<?php
include 'db.php';

$category = isset($_GET['category']) ? $_GET['category'] : '';

$sql = "SELECT * FROM products";
if ($category) {
    $sql .= " WHERE category = ?";
}

$stmt = $conn->prepare($sql);

if ($category) {
    $stmt->bind_param("s", $category);
}

$stmt->execute();
$result = $stmt->get_result();

$products = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($products);

$stmt->close();
$conn->close();
?>
