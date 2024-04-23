<!doctype html>
<html lang="en"><head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
<!--icon menu-->
	<script src="https://kit.fontawesome.com/976be346af.js" crossorigin="anonymous"></script>
<link href="mystyle.css" rel="stylesheet" type="text/css">
<link href="index_style.css" rel="stylesheet" type="text/css">

<!--Slick slider-->
	 <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css'><link rel="stylesheet" href="./style.css">
	
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
$currentPage = 'home';
?>
<?php include 'menu.php'; ?>

	
<!--hero section-->
<div class="banner" style="margin-bottom:5%;" id="#section1">
  <h1 class="hero-text ">
    EDU EQUITY
  </h1>
	<div class="text">
		Scholarships are more than just financial support, they are a way to recognize and encourage potential.
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
	
	
	
<!--our goal part-->
<div class="row" id="section2" style="margin-top: 2%">
	<div class="col-6 reveal fade-left" style="padding-left: 0">
	<img src="image/1012-equity-keypolicies.png">
	</div>
	<div class="col-6" style="padding: 0 5% 0 0">
		<h1 class="reveal fade-left">OUR GOAL</h1>
		<ul class="list-number">
        <li class="list-number reveal fade-bottom">
			<div class="number-goal">01
			</div>
            <div>
                <div class="title-goal">Contributing to equity in education </div>
                <div class="content-goal">Contribute to the equality of education in Malaysia by reducing the number of young talents who give up the opportunity to pursue further education due to financial problems.</div>
            </div>
        </li>
        <li class="list-number reveal fade-bottom">
			<div class="number-goal">02
			</div>
            <div>
                <div class="title-goal">Providing Information </div>
                <div class="content-goal">A one-stop website that provides information on scholarships, bursaries, grants and other resources, as well as their application procedures and requirements, making it easy for users to find information.</div>
            </div>
        </li>
			
        <li class="list-number reveal fade-bottom">
			<div class="number-goal">03
			</div>
            <div>
                <div class="title-goal">Exchange of Experiences </div>
                <div class="content-goal">Provide an online community platform for users to post and discuss their experiences and processes related to scholarships so that more users can receive support, encouragement and share resources.
</div>
            </div>
        </li>
    </ul>
		
	</div>
	</div>
	
<!--Share your experience part-->

<div class="row" style="padding: 5% 0;align-items: center;">
    <div class="col-6 reveal fade-left" style="padding-left: 5%">
<br>
<br>
<br>
<br>
		
        <h2>
            Share Your Experience
        </h2>
        <h4>
            It is wisdom to learn from the experiences of others and a virtue to share one’s own experiences.
        </h4>
		
	<a class="button" href="Sharing.php">
		<i class="fa-solid fa-share-from-square svgIcon"></i>
</a>	
		
    </div>
    <div class="col-6 reveal fade-right" style="padding-right: 0; text-align: center;">
        <img src="image/Scholarship_AdobeStock_206784836-copy.webp" class="exp-img" style="max-width: 100%;">
    </div>
</div>

<h2 style="margin-left: 5%" class="reveal fade-bottom">
	Scholarship resources
	</h2>
	<h4  class="resource reveal fade-bottom">
	Research scholarship sources that are right for you
	</h4>
	

<div class="row count-col">
    <div class="col-6">
        <div id="counter1" class="count-num">
            <!-- counts -->
        </div>
        <h3>University students in Malaysia</h3>
    </div>
    <div class="col-6">
        <div id="counter2" class="count-num">
            <!-- counts -->
        </div>
        <h3>Scholarships for higher education</h3>
    </div>
</div>
	
<a href="Resources.php"   style="display: flex;justify-content: center; align-items: center; text-decoration-line: none;">
	<button class="button-dark">Learn More
  </button></a>

<script>
    let counts1; // 计时器 ID 声明在全局作用域中
    let counts2; // 计时器 ID 声明在全局作用域中
    let upto1 = 1325350;
    let upto2 = 0;

    window.addEventListener('scroll', function() {
        // 获取页面滚动的距离
        let scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

        // 获取 counter1 的位置
        let counter1Position = document.getElementById("counter1").getBoundingClientRect().top;

        // 如果 counter1 的位置在可视区域内并且计数器还没有启动，则开始计数
        if (counter1Position < window.innerHeight && !counts1) {
            counts1 = setInterval(updatedCounter1, 10);
        }

        // 获取 counter2 的位置
        let counter2Position = document.getElementById("counter2").getBoundingClientRect().top;

        // 如果 counter2 的位置在可视区域内并且计数器还没有启动，则开始计数
        if (counter2Position < window.innerHeight && !counts2) {
            counts2 = setInterval(updatedCounter2, 10);
        }
    });

    function updatedCounter1() {
        let count1 = document.getElementById("counter1");
        count1.innerHTML = numberWithCommas(++upto1);
        if (upto1 === 1325699) {
            clearInterval(counts1);
        }
    }

    function updatedCounter2() {
        let count2 = document.getElementById("counter2");
        count2.innerHTML = numberWithCommas(++upto2);
        if (upto2 === 276) {
            clearInterval(counts2);
        }
    }

    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
</script>


<h2 style="text-align: center;" class="reveal fade-bottom">
	Recent News
	</h2>
<h4 style="text-align: center; padding: 0 20%" class="reveal fade-bottom">
	Stay up-to-date with the latest information for better opportunities.
	</h4>

<!-- partial:index.partial.html -->
<div class="wrapper">
  <div class="my-slider">
    <div>
      <a href="https://www.nst.com.my/news/nation/2023/11/982885/nine-scholarship-spots-available-malaysian-students-united-world-college" target="_blank">
        <img src="image/6370189493964868667164432.jpg" alt="Slide 1 Image">
        <p>9 Scholarships for Malaysian students enrolled at United World College in 2024</p>
      </a>
    </div>
	  
	  
    <div>
      <a href="https://www.nst.com.my/news/nation/2023/10/972282/universiti-malaysia-perlis-provides-25-special-scholarship-palestinian" target="_blank">
        <img src="image/toskos_1698482831.jpg"alt="Slide 2 Image">
        <p>Universiti Malaysia Perlis provides 25 special scholarship to Palestinian students</p>
      </a>
    </div>
	  
	  
	      <div>
      <a href="https://www.ukeconline.com/education-inequality/" target="_blank">
        <img src="image/1.jpg"alt="Slide 3 Image">
        <p>Education Inequality in Malaysia </p>
      </a>
    </div>
	  
	  
	      <div>
      <a href="https://www.nst.com.my/news/nation/2024/01/1002111/china-offering-1000-more-scholarships-malaysian-post-tvet-students-ahmad" target="_blank">
        <img src="image/Zahid_Hamidi160124_1705406332.jpg" alt="Slide 4 Image">
        <p>China offering 1,000 more scholarships to Malaysian post-TVET students - Ahmad Zahid</p>
      </a>
    </div>
    <!-- Add more slides similarly -->
  </div>
</div>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js'></script>
	
	
	
	<!--footer-->
	<?php include 'footer.php'; ?>

	<script src="commom_JavaScript.js"></script>
	<script src="index_JavaScript.js"></script>
</body>
</html>