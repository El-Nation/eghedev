<?php
require_once 'config.php';
$conn->query("DELETE FROM portfolio_projects WHERE title LIKE '%MAAMAEBO%'");
echo "MAAMAEBO project successfully removed.\n";
?>
