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

  <!--scroll down smooth next section-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
    $(document).ready(function() {
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function() {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
  </script>
</head>

<body>

  <!--responsive navigation-->
  <?php
  $currentPage = 'experience';
  ?>
  <?php include 'menu.php'; ?>


  <!--hero section-->
  <div class="banner" style="margin-bottom:5%;" id="#section1">
    <h1 class="hero-text">
      Experience
    </h1>
    <div class="text">
      Learning to draw wisdom from the experience of others is a precious asset.
    </div>
    <!--Scroll down button-->
    <div class="view-more">
      <a href="#section2"><!--link to below section-->
        <button>
          <i class="arrow down"></i>
        </button>
      </a>
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