<?php
require_once 'config.php';

// Create database if it doesn't exist (primarily for local setup)
if (isset($dbname)) {
    $conn->query("CREATE DATABASE IF NOT EXISTS `$dbname`");
    $conn->select_db($dbname);
}

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
    ],
    [
        'title' => 'Apex Markets',
        'description' => 'A trading account platform with secure user authentication (sign-up, sign-in, password recovery) built for a brokerage-style experience. Includes account creation with terms/privacy consent flows and a dedicated demo login so visitors can explore the platform without registering. Designed with a clean, professional dashboard-style UI suited to fintech/trading products.',
        'tech_stack' => 'PHP, MySQL, JavaScript, HTML/CSS',
        'image_url' => 'assets/apex-market-image.jpeg',
        'demo_url' => 'https://apexmarket.eghedev.com',
        'is_featured' => 1
    ],
    [
        'title' => 'McClean Elite Servicing',
        'description' => 'A business website for a premium laundry and dry-cleaning service in Benin City, built to convert visitors into bookings. Features a full pickup-scheduling system (service type, address, preferred date/time slot, special instructions), a services breakdown, client testimonials, a portfolio gallery of completed work, and direct WhatsApp integration for instant customer contact — turning a local laundry business into a fully digital, bookable service.',
        'tech_stack' => 'PHP, MySQL, JavaScript, HTML/CSS',
        'image_url' => 'assets/mcclean laundry image.jfif',
        'demo_url' => 'https://mcclean.eghedev.com',
        'is_featured' => 1
    ],
    [
        'title' => 'NestNaija',
        'description' => 'A Nigerian real estate marketplace for buying, selling, and renting properties nationwide. Includes dynamic property listings with filtering by location, property type, and status (sale/rent), individual property detail pages, state-based browsing, and stats-driven trust indicators (verified listings, total value sold). Built to connect buyers, renters, and agents, with WhatsApp-based lead capture for property inquiries and listing requests.',
        'tech_stack' => 'PHP, MySQL, JavaScript, HTML/CSS',
        'image_url' => 'assets/nestnaija real estate image.jfif',
        'demo_url' => 'https://nestnaija.eghedev.com',
        'is_featured' => 1
    ],
    [
        'title' => 'Aureum Grand',
        'description' => 'A full hotel management and booking system for a fictional five-star Lagos hotel. Features room/suite browsing with availability search (check-in/out, guest count, room category), detailed room pages with pricing and amenities, a tiered guest loyalty program (Silver → VIP), a guest account portal, a separate staff/admin portal, and an AI concierge chat widget for handling guest inquiries about rates and services.',
        'tech_stack' => 'PHP, MySQL, JavaScript, HTML/CSS',
        'image_url' => 'assets/aureum hotel image.jfif',
        'demo_url' => 'https://aureumgrand.eghedev.com',
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
