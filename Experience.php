<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Experience</title>
  <!--icon menu-->
  <script src="https://kit.fontawesome.com/976be346af.js" crossorigin="anonymous"></script>
  <!-- commom css style -->
  <link href="mystyle.css" rel="stylesheet" type="text/css">

  <link href="Experience_style.css" rel="stylesheet" type="text/css">

</head>

<body>

  <!--responsive navigation-->
  <?php
  $currentPage = 'experience';
  ?>
  <?php include 'menu.php'; ?>


  <!--hero section-->
  <div class="banner" style="margin-bottom:5%;">
    <h1 class="hero-text">
      Experience
    </h1>
    <div class="text">
      Learning to draw wisdom from the experience of others is a precious asset.
    </div>
  </div>

  <?php include 'backend/Operations/fetch.php'; ?>
	
  <script>
    // 当checkbox状态改变时，添加/删除expanded类
    document.querySelector("input[type=checkbox]").addEventListener("change", function() {
      var article = document.querySelector("article");
      if (this.checked) {
        article.classList.add("expanded"); // 添加expanded类
      } else {
        article.classList.remove("expanded"); // 删除expanded类
      }
    });
  </script>

  <!--footer-->
  <?php include 'footer.php'; ?>

  <script src="commom_JavaScript.js"></script>
</body>

</html>