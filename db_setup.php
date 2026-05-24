<?php
$host = 'localhost';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS portfolio";
if ($conn->query($sql) === TRUE) {
    echo "Database 'portfolio' created or already exists.\n";
} else {
    die("Error creating database: " . $conn->error);
}

// Select database
$conn->select_db('portfolio');

// Create Portfolio Messages Table
$sql = "CREATE TABLE IF NOT EXISTS portfolio_messages (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'portfolio_messages' ready.\n";
}

// Create Portfolio Projects Table
$sql = "CREATE TABLE IF NOT EXISTS portfolio_projects (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT,
    tech_stack VARCHAR(255),
    image_url VARCHAR(255),
    demo_url VARCHAR(255),
    is_featured BOOLEAN DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'portfolio_projects' ready.\n";
}

// Seed Projects (using TRUNCATE to avoid duplicates for now)
$conn->query("TRUNCATE TABLE portfolio_projects");

$projects = [
    [
        'title' => 'MEDIFLOW',
        'description' => 'An enterprise-grade Hospital Management System (HMS) architected for high-performance clinical workflows. Mediflow centralizes patient management, electronic health records, and real-time administrative analytics into a secure, unified ecosystem.',
        'tech_stack' => 'PHP, MySQL, JavaScript, HTML/CSS',
        'image_url' => 'assets/hospital.png',
        'demo_url' => 'https://mediflow.eghedev.com',
        'is_featured' => 1
    ],
    [
        'title' => 'EMAX Cinema',
        'description' => 'A high-fidelity cinema booking platform featuring real-time seat selection, movie scheduling, and a premium immersive user interface.',
        'tech_stack' => 'PHP, MySQL, JavaScript, HTML/CSS',
        'image_url' => 'assets/cinema.png',
        'demo_url' => 'https://emax.eghedev.com',
        'is_featured' => 0
    ],
    [
        'title' => 'E-commerce Website',
        'description' => 'A professional online store optimized for speed and conversion, featuring a secure checkout system and mobile-first design.',
        'tech_stack' => 'HTML, CSS, JavaScript, PHP, MySQL',
        'image_url' => 'assets/ecommerce.png',
        'demo_url' => 'https://nationblog.site',
        'is_featured' => 0
    ],
    [
        'title' => 'ManageX',
        'description' => 'A complete administrative tool with role-based access, task tracking, and audit logs to help businesses manage operations.',
        'tech_stack' => 'HTML, CSS, JavaScript, PHP, MySQL',
        'image_url' => 'assets/business.png',
        'demo_url' => 'https://managex.eghedev.com',
        'is_featured' => 1
    ]
];

foreach ($projects as $p) {
    $stmt = $conn->prepare("INSERT INTO portfolio_projects (title, description, tech_stack, image_url, demo_url, is_featured) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $p['title'], $p['description'], $p['tech_stack'], $p['image_url'], $p['demo_url'], $p['is_featured']);
    $stmt->execute();
}

echo "Seeded " . count($projects) . " projects successfully.\n";

$conn->close();
?>
