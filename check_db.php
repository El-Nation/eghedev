<?php
require_once 'config.php';

$res = $conn->query("SELECT * FROM portfolio_projects");
echo "<h1>Database Content</h1>";
echo "<table border='1' cellpadding='10' style='border-collapse: collapse; width: 100%; border-color: #334155; color: #f1f5f9; background: #1e293b;'>";
echo "<tr><th>ID</th><th>Title</th><th>URL</th><th>Type</th></tr>";

while($row = $res->fetch_assoc()) {
    $type = $row['is_featured'] ? 'Featured' : 'Regular';
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['title']}</td>
            <td>{$row['demo_url']}</td>
            <td>{$type}</td>
          </tr>";
}
echo "</table>";
?>
