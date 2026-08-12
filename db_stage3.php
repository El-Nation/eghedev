<?php
require_once 'config.php';

// Add github_url if it doesn't exist
$conn->query("ALTER TABLE portfolio_projects ADD COLUMN IF NOT EXISTS github_url VARCHAR(255) DEFAULT NULL");

// Check if Nation Market Hub exists, if not insert
$res = $conn->query("SELECT id FROM portfolio_projects WHERE title LIKE '%Nation Market Hub%'");
if($res->num_rows == 0) {
    // We will leave image empty for now and fill it in later if we have it, or use a placeholder
    $q = "INSERT INTO portfolio_projects (title, description, tech_stack, demo_url, is_featured) VALUES (
        'Nation Market Hub',
        'A full-stack service marketplace connecting customers with verified service providers across different service categories.',
        'React, TypeScript, Node.js, Express, PostgreSQL',
        '#',
        1
    )";
    $conn->query($q);
} else {
    // Update it if it exists
    $conn->query("UPDATE portfolio_projects SET tech_stack = 'React, TypeScript, Node.js, Express, PostgreSQL' WHERE title LIKE '%Nation Market Hub%'");
}

// Ensure NestNaija tech stack uses correct text
$conn->query("UPDATE portfolio_projects SET tech_stack = 'PHP, MySQL, JavaScript, HTML, CSS' WHERE title LIKE '%NestNaija%'");

echo "Database updated successfully.\n";
?>
