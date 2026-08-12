<?php
require_once 'config.php';

$update_img_sql = "
    UPDATE portfolio_projects 
    SET image_url = 'assets/nation-market.png.jpeg'
    WHERE title LIKE '%Nation Market Hub%'
";

if($conn->query($update_img_sql)) {
    echo "Image updated successfully.\n";
} else {
    echo "Error updating: " . $conn->error . "\n";
}
?>
