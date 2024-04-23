<?php
include_once 'C:\xampp\htdocs\project\backend\Config\DB_Config.php';


//Fetch the data from the database
$sql = "SELECT * FROM experiences";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        echo "<article>";

        echo "<input type=\"checkbox\" id=\"read_more_" . $row["id"] . "\"role=\"button\">";
        echo "<label for=\"read_more_" . $row["id"] . "\" onclick=\"\"><span>Read More</span><span>Read Less</span></label>";

        echo "<p style=\"font-weight: bold; font-size: 24px;\">" . $row["name"] . "</p>";
        echo "<figure>";
        echo "<img src=\"http://localhost/project/image/" . $row["photo"] . "\" alt=\"img1\">";
        echo "</figure>";

        echo "<section>";
        echo "<h3 style=\"margin: 0% 0 3%\">" . $row["title"] . "</h3>";

        echo "<p>" . $row["content"] . "<p>";
        echo "</section>";
        echo "<section></section>";
        echo "</article>";
    }
} else {
    echo "No data found";
}
