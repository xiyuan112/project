<?php
include_once 'C:\xampp\htdocs\project\backend\Config\DB_Config.php';

// Content length threshold for splitting
$content_length_threshold = 1000; // Customize the threshold based on your needs

// Fetch data from the database
$sql = "SELECT * FROM experiences";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $content = $row["content"];
        $short_content = substr($content, 0, $content_length_threshold); // Initial visible content
        $long_content = substr($content, $content_length_threshold); // Additional content for "Read More"

        echo "<article class=\"reveal fade-bottom\">";

        // Read More checkbox and label
        echo "<input type=\"checkbox\" id=\"read_more_" . $row["id"] . "\" role=\"button\">";
        echo "<label for=\"read_more_" . $row["id"] . "\"><span>Read More</span><span>Read Less</span></label>";

        // Article details and main section
        echo "<p style=\"font-weight: bold; font-size: 24px; margin-bottom:2%\">" . $row["name"] . "</p>";
        echo "<figure>";
        echo "<img src=\"http://localhost/project/image/" . $row["photo"] . "\" alt=\"img1\">";
        echo "</figure>";

        // Main section with dynamic content
        echo "<section class=\"content-section\">";
        echo "<h3 style=\"margin: 3% 0\">" . $row["title"] . "</h3>";

        // Initial visible content with paragraph breaks
        echo "<div class=\"short-content\">";
        echo nl2br($short_content); // Use `nl2br` to retain paragraph breaks
        echo "</div>";
        echo "</section>";

		echo "<section class=\"content-section\">";
        // Hidden content to be toggled
        echo "<div class=\"long-content\">";
        echo nl2br($long_content); // Use `nl2br` to retain paragraph breaks
        echo "</div>";

        echo "</section>";

        echo "</article>";
    }
} 

else {
    echo "<br>";
    echo "<p style=\"font-weight: bold; font-size: 24px; text-align: center; \">No data found</p>"; // 修复语法错误
    echo "<br>";
    echo "<img src=\"/project/image/9264402.png\" alt=\"No data found\">"; // 添加 alt 文本
    echo "<br>";
}

