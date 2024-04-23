<!doctype html>
<html lang="en"><head>
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
$(document).ready(function(){
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
      }, 800, function(){
   
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
	
<!--display name, title,content,image(1)-->
	<article>
    
    <input type="checkbox" id="read_more" role="button">
    <label for="read_more" onclick=""><span>Read More</span><span>Read Less</span></label>     
      
	<p style="font-weight: bold; font-size: 24px;">Mauve Meatballs</p>
    <figure>
        <img src="image/🇲🇾免费去韩国留学2024奖学金开放申请了_2_淡紫色的肉丸_来自小红书网页版.jpg" alt="img1">
    </figure>

    <section>
		<h3 style="margin: 0% 0 3%">
		MY Free Study in Korea 2024 Scholarship Open for Application.
		</h3>
		
		<p>A lot of people ask me what kind of scholarship I got to study in Korea for free.</p>
		<br>

		<p>
Global Korea Scholarship~ There are two ways to apply for the scholarship provided by the Korean government.
		</p>
		<br>

		<p>
Please go to the official website for details, the picture is very clear, it seems to change every year, please pay attention to it.tassed minvenem atectus am simint harum aut </p>
    </section>    



<section>
    <p>Owls hunt mostly small mammals, insects, and other birds, although a few species specialize in hunting fish. They are found in all regions of the Earth except Antarctica, most of Greenland and some remote islands. Though owls are typically solitary, the literary collective noun for a group of owls is a parliament. Owls are characterized by their small beaks and wide faces, and are divided into two families: the typical owls, Strigidae; and the barn-owls, Tytonidae.</p>
    <p>Owls have large forward-facing eyes and ear-holes; a hawk-like beak; a flat face; and usually a conspicuous circle of feathers, a facial disc, around each eye. The feathers making up this disc can be adjusted in order to sharply focus re unable to see clearly anything within a few centimeters of their eyes. Caught prey can be felt by owls with the use of filoplumes — like feathers on the beak and feet that act as "feelers". Their far vision, particularly in low light, is exceptionally good.</p>

</section>

</article>
	
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