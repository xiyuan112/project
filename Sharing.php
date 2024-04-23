<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sharing</title>
  <!--icon menu-->
  <script src="https://kit.fontawesome.com/976be346af.js" crossorigin="anonymous"></script>
  <!-- commom css style -->
  <link href="mystyle.css" rel="stylesheet" type="text/css">

  <link href="Sharing_style.css" rel="stylesheet" type="text/css">

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
  $currentPage = 'sharing';
  ?>
  <?php include 'menu.php'; ?>


  <!--hero section-->
  <div class="banner" style="margin-bottom:5%;" id="#section1">
    <h1 class="hero-text ">
      Sharing
    </h1>
    <div class="text">
      Share your experiences and stories so we can create change together!
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


  <!--form name, title,content,image(1)-->
  <div class="contact-form1">
    <form id="section2" action="backend/Operations/create.php" method="post" enctype="multipart/form-data">
      <div class="form-row">
        <div>
          <label for="name">Name:</label>
          <input type="text" name="name" required="required" placeholder="Name">
        </div>
        <div style="margin-right: 0%">
          <label for="gender">Gender: </label>
          <select id="gender" name="gender">
            <option selected>Choose...</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="don't want to say">Don't want to say</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div>
          <label for="email">Email：</label>
          <input type="email" name="email" required="required" placeholder="example@gmail.com">
        </div>

        <div style="margin-right: 0%">
          <label for="phone">Phone Number：</label>
          <input type="tel" name="phone" required="required" placeholder="e.g. 011-11223344">
        </div>
      </div>

      <div class="form-row">

        <div>
          <label for="state">State：</label>
          <select id="state" name="state">
            <option selected>Choose...</option>

            <option value="Kuala Lumpur">Kuala Lumpur</option>
            <option value="Labuan">Labuan</option>
            <option value="Putrajaya">Putrajaya</option>

            <option value="Johor">Johor</option>
            <option value="Kedah">Kedah</option>
            <option value="Kelantan">Kelantan</option>

            <option value="Malacca">Malacca</option>
            <option value="Pahang">Pahang</option>
            <option value="Penang">Penang</option>

            <option value="Perak">Perak</option>
            <option value="Perlis">Perlis</option>
            <option value="Sabah">Sabah</option>

            <option value="Sarawak">Sarawak</option>
            <option value="Selangor">Selangor</option>
            <option value="Sembilan">Sembilan</option>
            <option value="Terengganu">Terengganu</option>

          </select>
        </div>

        <div style="margin-right: 0%">
          <label for="study">Study locally / abroad：</label>
          <select id="country" name="country">
            <option selected>Choose...</option>
            <option value="local">Local</option>
            <option value="international">International</option>
          </select>
        </div>

      </div>

      <label for="type">Type of Scholarship：</label>
      <select id="type" name="type">
        <option selected>Choose...</option>

        <option value="scholarship">Scholarship</option>
        <option value="education funds">Education funds</option>
        <option value="unit trusts">Unit Trusts &amp; Insurance Schemes</option>
        <option value="loans">Loans</option>
      </select>

      <label for="title">Title: </label>
      <input type="text" name="title" required="required" placeholder="Title...">

      <label for="content">Content: </label>
      <textarea id="content" name="content" placeholder="Write something on here...">
</textarea>


      <div class="file-upload">
        <label for="photo">Upload an Image:</label> <!-- 标签 -->
        <div class="custom-button">
          <img src="image/file_1091227.png" width="80px" height="80px">
          <div class="preview" id="preview"></div>
          <br>
          Upload an image
        </div> <!-- 自定义按钮 -->
        <input type="file" id="photo" name="photo" accept="image/jpg, image/jpeg, image/png, image/gif" onchange="previewImage(event)"> <!-- 文件选择和预览 -->
      </div>
      <div class="file-info" id="file-info">Only JPG, JPEG, PNG &amp; GIF accepted.</div> <!-- 文件说明和信息 -->
      <br>




      <div style="text-align: center;">
        <button type="submit" name="create" class="contact-submit1">Post</button>
      </div>

    </form>

  </div>

  <!-- script for upload file-->
  <script>
    function previewImage(event) {
      const fileInput = event.target;
      const fileInfo = document.getElementById("file-info");
      const preview = document.getElementById("preview");
      const defaultImage = document.querySelector(".custom-button img"); /* 获取原始图像 */

      if (fileInput.files.length > 0) {
        const file = fileInput.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
          const image = document.createElement("img"); /* 创建新图像 */
          image.src = e.target.result; /* 设置预览图像 */
          preview.innerHTML = ""; /* 清除旧内容 */
          preview.appendChild(image); /* 添加新图像 */
          preview.style.display = "block"; /* 显示预览 */
          defaultImage.style.display = "none"; /* 隐藏原始图像 */
        };

        reader.readAsDataURL(file); /* 读取文件 */
        fileInfo.textContent = `Selected file: ${file.name}`; /* 更新文件信息 */
      } else {
        fileInfo.textContent = "No file selected";
        preview.style.display = "none"; /* 没有文件时隐藏预览 */
        defaultImage.style.display = "block"; /* 恢复显示原始图像 */
      }
    }
  </script>

  <!-- 容器包裹 h3 和 a.button -->
  <div class="responsive-container" style="margin-bottom: 5%">
    <h3>Take a look at other postings.</h3>
    <a class="button" href="Experience.php" style="margin: 0%;">
      <i class="fa-solid fa-arrow-right svgIcon"></i>
    </a>
  </div>


  <!--footer-->
  <?php include 'footer.php'; ?>

  <script src="commom_JavaScript.js"></script>
</body>

</html>