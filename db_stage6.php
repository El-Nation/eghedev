<?php
require_once 'config.php';

// Empty the projects table cleanly
$conn->query("TRUNCATE TABLE portfolio_projects");

$projects = [
    // Top Featured Projects
    [
        'title' => 'Nation Market Hub',
        'desc' => 'A full-stack service marketplace connecting customers with verified service providers across different service categories.',
        'tech' => 'React, TypeScript, Node.js, Express, PostgreSQL',
        'img' => 'assets/nation-market.png.jpeg',
        'demo' => 'https://nationmarkethub.eghedev.com',
        'git' => 'https://github.com/El-Nation/nation-market-hub',
        'featured' => 1
    ],
    [
        'title' => 'NestNaija',
        'desc' => 'A Nigerian real estate marketplace for discovering and exploring properties and real estate opportunities via advanced search filtering.',
        'tech' => 'PHP, MySQL, JavaScript, HTML, CSS',
        'img' => 'assets/nestnaija real estate image.jfif',
        'demo' => 'https://nestnaija.eghedev.com',
        'git' => 'https://github.com/El-Nation/nestnaija',
        'featured' => 1
    ],
    [
        'title' => 'MEDIFLOW',
        'desc' => 'An enterprise-grade Hospital Management System architected for high-performance clinical workflows and patient record centralisation.',
        'tech' => 'PHP, MySQL, JavaScript, HTML, CSS',
        'img' => 'assets/hospital.png',
        'demo' => 'https://mediflow.eghedev.com',
        'git' => 'https://github.com/El-Nation/mediflow',
        'featured' => 1
    ],
    [
        'title' => 'ManageX',
        'desc' => 'A complete administrative tool with role-based access, task tracking, and audit logs to help businesses manage operations.',
        'tech' => 'React, Node.js, Express, MongoDB',
        'img' => 'assets/business.png',
        'demo' => 'https://managex.eghedev.com',
        'git' => 'https://github.com/El-Nation/managex',
        'featured' => 1
    ],

    // Grid Projects
    [
        'title' => 'Apex Markets',
        'desc' => 'A fintech trading account platform with secure user authentication built for a brokerage-style onboarding experience.',
        'tech' => 'PHP, MySQL, JavaScript, HTML, CSS',
        'img' => 'assets/apex-market-image.jpeg',
        'demo' => 'https://apexmarket.eghedev.com',
        'git' => 'https://github.com/El-Nation/apex-markets',
        'featured' => 0
    ],
    [
        'title' => 'McClean Elite',
        'desc' => 'A premium business application for an elite laundry service providing full pickup-scheduling capabilities and WhatsApp integration.',
        'tech' => 'PHP, MySQL, JavaScript, HTML, CSS',
        'img' => 'assets/mcclean laundry image.jfif',
        'demo' => 'https://mcclean.eghedev.com',
        'git' => 'https://github.com/El-Nation/mcclean',
        'featured' => 0
    ],
    [
        'title' => 'Aureum Grand',
        'desc' => 'A hotel management and booking system for a luxury hotel, equipped with room availability search and a layered admin portal.',
        'tech' => 'PHP, MySQL, JavaScript, HTML, CSS',
        'img' => 'assets/aureum hotel image.jfif',
        'demo' => 'https://aureumgrand.eghedev.com',
        'git' => 'https://github.com/El-Nation/aureum-grand',
        'featured' => 0
    ],
    [
        'title' => 'EMAX Cinema',
        'desc' => 'A high-fidelity cinema ticket booking platform featuring real-time interactive seat selection and a dark immersive UI.',
        'tech' => 'React, Node.js, Express, PostgreSQL',
        'img' => 'assets/cinema.png',
        'demo' => 'https://emax.eghedev.com',
        'git' => 'https://github.com/El-Nation/emax-cinema',
        'featured' => 0
    ],
    [
        'title' => 'MAAMAEBO',
        'desc' => 'A robust e-commerce application integrating user carts, product catalogs, and smooth checkout mechanisms for varied vendors.',
        'tech' => 'TypeScript, React, Node.js, PostgreSQL',
        'img' => 'assets/ecommerce.png',
        'demo' => 'https://maamaebo.eghedev.com',
        'git' => 'https://github.com/El-Nation/maamaebo',
        'featured' => 0
    ],
    [
        'title' => 'TinyThread',
        'desc' => 'An automated, mobile-centric apparel boutique store utilizing dynamic filtering and rapid load times for maximum conversion.',
        'tech' => 'React, CSS3, JavaScript, Firebase',
        'img' => 'assets/ecommerce.png',
        'demo' => 'https://tinythread.eghedev.com',
        'git' => 'https://github.com/El-Nation/tinythread',
        'featured' => 0
    ]
];

$stmt = $conn->prepare("INSERT INTO portfolio_projects (title, description, tech_stack, image_url, demo_url, github_url, is_featured) VALUES (?, ?, ?, ?, ?, ?, ?)");

foreach($projects as $p) {
    $stmt->bind_param("ssssssi", $p['title'], $p['desc'], $p['tech'], $p['img'], $p['demo'], $p['git'], $p['featured']);
    $stmt->execute();
}

echo "Database refreshed with 10 projects for Stage 6!\n";
?>
