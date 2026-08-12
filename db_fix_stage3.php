<?php
require_once 'config.php';

// 1. Update Nation Market Hub demo_url, image_url, and github_url
$update_sql = "
    UPDATE portfolio_projects 
    SET 
        demo_url = 'https://nationmarkethub.eghedev.com',
        image_url = 'assets/nation-market.png',
        github_url = 'https://github.com/El-Nation/nation-market-hub'
    WHERE title LIKE '%Nation Market Hub%'
";

if($conn->query($update_sql)) {
    echo "Nation Market Hub updated successfully.\n";
} else {
    echo "Error updating: " . $conn->error . "\n";
}
?>
