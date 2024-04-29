<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>create php</title>
</head>

<style>
* {
    margin: 0;
	scroll-behavior: smooth;
	text-align: center; 
  }

body {
    justify-content: center; 
	text-align: center;
	align-items: center;
    padding: 5%; 
	font-family:Arial, sans-serif;
	background: #ebf2fa;
}

p {
	font-family:Arial, sans-serif;
	font-size: 20px;
	color: black;
}

	h2{
		font-size: 40px;
		font-family: Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", "sans-serif";
		font-weight: normal;
		color: #064789;
	}
	
/*button design 1*/
.button-dark{
  outline: none;
  cursor: pointer;
  border-radius: 500px;
  transition-property: background-color,border-color,color,box-shadow,filter;
  transition-duration: .3s;
  border: 2px solid #f8931f;
  letter-spacing: 2px;
  max-width: 500px;
  text-transform: uppercase;
  white-space: normal;
  text-align: center;
  padding: 14px 30px 20px ;
	margin: 0 0 5% 0;
  color: #2c3639;
  box-shadow: inset 0 0 0 2px #f8931f;
  background-color: transparent;
  height: 60px;
  font-family: "Arial Black", Arial, sans-serif;
	font-size: 18px;
}
  .button-dark:hover{
      color: black;
      background-color: #f8931f;
  }
	
img {
	width: 50%;
	min-width: 250px;
}

	a{
		color: black;
		text-decoration: none;
	}
	
	
	
</style>	
	
<body>
<?php
include_once '../Config/DB_Config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $type = $_POST['type'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Image Upload handler
    $targetDir = "C:\\xampp\\htdocs\\project\\image\\";
    $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
if ($check !== false) {
        echo "<p> File is an image - " . $check["mime"] . "</p>";
		echo "<br>";
        $uploadOk = 1;
    } else {
        echo "<p>File is not an image." .  "</p>";
        $uploadOk = 0;
	echo "<br>";
    }
    

    // Check file size
    if ($_FILES["photo"]["size"] > 500000) {
echo "<p> Sorry, your file is too large." .  "</p>";
echo "<br>";
        $uploadOk = 0;
			
    }

    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
echo "<p>Sorry, only JPG, JPEG & PNG files are allowed." .  "</p>" ;
        $uploadOk = 0;
		echo "<br>";
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<h2> Sorry, your file was not uploaded." .  "</h2>";
			echo "<br>";
			echo "<img src=\"/project/image/9214777.jpg\">";
			echo "<br>";
			echo "<br>";
			echo "<a href=\"/project/Sharing.php\">";
			echo "<br>";
			echo "<button class=\"button-dark\">";
			echo "Back to Sharing Page";
			echo "</a>";
			echo "</button>";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES["photo"]["name"])) . " has been uploaded.";
            $fileName = basename($_FILES["photo"]["name"]);
			
			echo "<br>";
			
            // Insert data into database using prepared statement
            $sql = "INSERT INTO experiences (name, gender, email, phone, state, country, type, title, content, photo) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = mysqli_prepare($conn, $sql);
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "ssssssssss", $name, $gender, $email, $phone, $state, $country, $type, $title, $content, $fileName);
                if (mysqli_stmt_execute($stmt)) {
echo "";
					echo "<br>";
                    echo " <h2> New record created successfully" . "</h2>";
					echo "<br>";
					echo "<img src=\"/project/image/success.png\">";
					echo "<br>";
			echo "<br>";
			echo "<a href=\"/project/Experience.php\">";
			echo "<button class=\"button-dark\">";
			echo "Go to Experience Page";
			echo "</a>";
			echo "</button>";

                } else {
                    echo "<p> Error: " . mysqli_error($conn) .  "</p>";
                }
                mysqli_stmt_close($stmt);
            } else {
                echo "<p> Error: " . mysqli_error($conn) .  "</p>";
            }
        } else {
            echo " <p> Sorry, there was an error uploading your file." . "</p>";
			echo "<br>";
			echo "<img src=\"/project/image/9214777.jpg\">";
			echo "<br>";
			echo "<br>";
			echo "<a href=\"/project/Sharing.php\">";
			echo "<br>";
			echo "<button class=\"button-dark\">";
			echo "Back to Sharing Page";
			echo "</a>";
			echo "</button>";
        }
    }


	
?>