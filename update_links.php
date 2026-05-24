<?php
require_once 'config.php';

// SQL to update the specific project link and description
$sql = "UPDATE portfolio_projects 
        SET title = 'EMAX Cinema', 
            demo_url = 'https://emax.eghedev.com',
            description = 'A high-fidelity cinema booking platform featuring real-time seat selection, movie scheduling, and a premium immersive user interface.',
            tech_stack = 'PHP, MySQL, JavaScript, HTML/CSS'
        WHERE title LIKE '%Cinema%'";

echo "<!DOCTYPE html>
<html>
<head>
    <title>Portfolio Link Update</title>
    <style>
        body { background: #0f172a; color: #f8fafc; font-family: sans-serif; display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 2rem; border-radius: 12px; border: 1px solid #334155; text-align: center; max-width: 400px; }
        .success { color: #10b981; font-weight: bold; }
        .error { color: #ef4444; font-weight: bold; }
    </style>
</head>
<body>
    <div class='card'>";

if ($conn->query($sql) === TRUE) {
    echo "<h2 class='success'>Success!</h2>";
    echo "<p>The EMAX Cinema link has been updated to <strong>https://emax.eghedev.com</strong></p>";
} else {
    echo "<h2 class='error'>Error</h2>";
    echo "<p>Could not update database: " . $conn->error . "</p>";
}

echo "  <p style='font-size: 0.8rem; color: #64748b;'>You can now delete this file from your server.</p>
    </div>
</body>
</html>";

$conn->close();
?>
