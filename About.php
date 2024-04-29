<!doctype html>
<html lang="en"><head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About</title>
	<!--icon menu-->
	<script src="https://kit.fontawesome.com/976be346af.js" crossorigin="anonymous"></script>
	
<link href="mystyle.css" rel="stylesheet" type="text/css">
<link href="About_style.css" rel="stylesheet" type="text/css">
	
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
	
	<style>
	li {
    list-style: none; /* 隐藏marker */
}

li::marker {
    content: none; /* 确保marker完全隐藏 */
}
	</style>
</head>

<body>
	
	<!--responsive navigation-->
	<?php
$currentPage = 'about';
?>
<?php include 'menu.php'; ?>

	
<!--hero section-->
<div class="banner" style="margin-bottom:5%;" id="#section1">
  <h1 class="hero-text ">
    About
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
	
<h2 style="text-align: center;">WHY CAUSE</h2>	
<h4 style="text-align: center;">Understanding causes to better solve problems</h4>
	
<div class="gallery" id="section2">

<!--cause part-->
    <div class="card reveal fade-bottom">
      <img class="card__image" src="image/inequality_5867881.png">
      <h2 class="card-title">
        Socio-economic disparities
      </h2>
      <div class="card__caption">
Economic inequalities often translate into educational disparities. Students from low-income families may face challenges in accessing resources such as high-quality schools, textbooks and extracurricular activities. Limited financial resources can also affect a student’s ability to afford private tutoring or additional learning support.
      </div>
    </div>
	
	    <div class="card reveal fade-bottom">
      <img class="card__image" src="image/book_2459017.png">
      <h2 class="card-title">
Inequities in school funding
			</h2>
      <div class="card__caption">
Differences in funding levels between schools may contribute to the perpetuation of educational inequities. Schools in affluent areas may have greater financial resources, enabling them to offer better facilities, advanced programs, and extracurricular activities. In contrast, schools in economically disadvantaged areas may struggle with inadequate funding, limiting their ability to provide quality education.
      </div>
    </div>
	
	    <div class="card reveal fade-bottom">
      <img class="card__image" src="image/device_12127964.png">
      <h2 class="card-title">
        Digital divide
      </h2>
      <div class="card__caption">
In the age of digital learning, disparities in technology and access to the Internet can exacerbate educational inequalities. Students who do not have access to digital devices or a reliable Internet connection may struggle to participate in online learning, thus hindering their educational progress
      </div>
    </div>
	</div>

	<div class="content">

	<h2 style="padding-left: 5%">Studying locally or abroad</h2>
	<h4 style="padding:0 20% 0 5%">General procedure for applying for scholarships and some tips</h4>	
	
<section class="cd-horizontal-timeline">
	<div class="timeline">
		<div class="events-wrapper">
			<div class="events">
				<ol>
					<li><a href="#0" data-date="16/01/2014" class="selected">Type of Scholarships</a></li>
					<li><a href="#0" data-date="28/02/2014">Eligibility and Conditions</a></li>
					<li><a href="#0" data-date="20/04/2014">Application Deadline</a></li>
					<li><a href="#0" data-date="20/05/2014">Preparation of <br>Application Documents</a></li>
					<li><a href="#0" data-date="09/07/2014">Tips for Interview-1</a></li>
					<li><a href="#0" data-date="30/08/2014">Tips for<br> Interview-2</a></li>
					<li><a href="#0" data-date="15/09/2014">Tips for<br> Interview-3</a></li>
					<li><a href="#0" data-date="01/11/2014">Tips for Interview-4</a></li>
					<li><a href="#0" data-date="10/12/2014">Waiting for Results</a></li>
					<li><a href="#0" data-date="19/01/2015">Fulfillment of <br> Scholarship Requirements</a></li>
					<li><a href="#0" data-date="03/03/2015">Some additional tips</a></li>
				</ol>

				<span class="filling-line" aria-hidden="true"></span>
			</div> <!-- .events -->
		</div> <!-- .events-wrapper -->
			
		<ul class="cd-timeline-navigation">
			<li><a href="#0" class="prev inactive">Prev</a></li>
			<li><a href="#0" class="next">Next</a></li>
		</ul> <!-- .cd-timeline-navigation -->
	</div> <!-- .timeline -->

	<div class="events-content">
		<ol>
			<li class="selected" data-date="16/01/2014">
			  <h2>Type of Scholarships</h2>
			  <p>There are various types of scholarships available in Malaysia and you need to read the terms and conditions carefully before applying. Scholarships are mainly categorized into the following types depending on the provider:</p>
			  <p>&nbsp;</p>
			  <p> <span style="font-weight: bold">Government Scholarships:</span> offered by various government departments and agencies, each with different eligibility and requirements. </p>
			  <p>&nbsp;</p>
			  <p><span style="font-weight: bold">Corporate Scholarships:</span> offered by private companies in Malaysia, usually as part of a company's talent acquisition or corporate social responsibility program. A good way to focus on companies within the relevant industry. </p>
			  <p>&nbsp;</p>
			  <p><span style="font-weight: bold">Charitable Scholarships:</span> offered by non-profit charities and NGOs, these scholarships tend to have strict eligibility criteria but usually do not have a specified job requirement after graduation. </p>
			  <p>&nbsp;</p>
			  <p><span style="font-weight: bold">University Grants:</span> some institutions of higher education offer scholarships or other financial assistance designed to attract students. The application and maintenance of such scholarships usually requires compliance with school regulations.</p>
			  <p>&nbsp; </p>
			  <p><span style="font-weight: bold">Converting Loans to Scholarships: </span>Some study loans, such as MARA and PTPTN, can be converted to scholarships after graduation, provided specific academic performance or activity requirements are met.</p>
			  <p>&nbsp;</p>
			  <p> Applications and eligibility for these scholarships vary, and the key is to find the type of scholarship that fits your needs and goals.</p>
		  </li>

			<li data-date="28/02/2014">
				<h2>Eligibility and Conditions</h2>
				<p>&nbsp;</p>
				<p>	
After identifying a scholarship program of interest, be sure to review its eligibility criteria carefully. Make sure you meet these requirements, including but not limited to academic performance, field of study, nationality, age limit, etc. Different scholarships may have unique conditions, and knowing these details is crucial to a successful application.</p>
<p>&nbsp;</p>
				<p>
For example, the Clear Cold Scholarship is designed to help students who are struggling financially. If your family's financial situation does not meet the criteria, such as having parents who are surgeons or chief executives, it is unlikely that this type of scholarship will be awarded to you, even if you apply. In this case, it would be more practical to consider applying for other scholarships that meet your criteria.
				</p>
				<p>&nbsp;</p>
<p>
Therefore, researching and understanding the specific requirements of each scholarship is key. Take the time to read the application guidelines and related documents to ensure that all conditions are met and to avoid wasting time on scholarships that are not right for you.
				</p>
			</li>

			<li data-date="20/04/2014">
				<h2>Application Deadline</h2>
				<p>	
Many students celebrate their success after their SPM results are released, but often overlook the scholarship application deadlines. The deadline for most scholarship applications is usually two weeks after the results are released, which means that students have as little as two weeks to prepare their application documents.</p>
				<p>&nbsp;</p>
				<p>When preparing application documents, many of them cannot be prepared in a day or two. Especially when applying to foreign universities, it is often necessary for Malaysian schools to help translate the transcripts into English, a process that can take time and formality. Therefore, after the release of SPM results, students should prioritize the scholarship application procedures to avoid missing out on crucial application time due to celebrations.</p>
				<p>&nbsp;</p>
				<p>
Candidates should therefore start preparing the required documents immediately and submit their scholarship applications as early as possible to ensure that they do not miss the opportunity to apply. Even if you get good grades, delaying your scholarship application can lead to regrets. Prioritizing scholarship applications ensures more opportunities and flexibility in choosing educational and career paths.
				</p>
			</li>

			<li data-date="20/05/2014">
				<h2>Preparation and collection of application documents</h2>
				<p>	
					The key when preparing a scholarship application is to follow the guidelines for collecting and organizing all the necessary documents. Typically, you will need to prepare your academic transcripts, relevant certificates, proof of identity, letters of recommendation and personal statement. When organizing these documents, make sure they are accurate, meet the scholarship requirements, and are stored properly.
				</p>
				<p>&nbsp;</p>
				<p>
				Academic transcripts and certificates are important documents that prove your past achievements. If you are applying for a scholarship abroad, you may need to have these documents translated into English. Proof of identity usually includes your ID card or passport, which helps to confirm your identity and nationality. Make sure that all these documents are up to date and that their contents are correct.
				</p>
				<p>&nbsp;</p>
				<p>
				Letters of recommendation and personal statements also play an important role in scholarship applications. Letters of recommendation are best obtained from teachers, professors or employers who know you well. These letters should highlight your abilities, character and potential. The personal statement is your opportunity to present yourself to the scholarship committee. It should be concise, persuasive, and show why you are an ideal candidate for the scholarship. When writing these documents, make sure they meet the requirements of the application guidelines and allow time for adequate preparation and proofreading.
				</p>
			</li>

			<li data-date="09/07/2014">
				<h2>Tips of Preparation for Interview - 1</h2>
				<p>	
Good grades are not the same as being awarded a scholarship. One student once wrote in his scholarship autobiography, "I deserve this scholarship because I got straight A's in SPM," but he was not selected. This case shows us that even if your grades are excellent, it doesn't mean that the scholarship will be awarded to you or that someone owes you anything.
				</p>
				<p>&nbsp;</p>
				<p>
When applying for scholarships, the right attitude is to remain humble and not appear overconfident or complacent. Scholarship organizations don't just focus on grades, but also consider other factors such as community service, leadership skills, extracurricular activities, and the student's character and attitude. Sometimes organizations are more willing to fund students who have shown perseverance and dedication in difficult circumstances rather than on the basis of academic merit alone.
				</p>
			</li>

			<li data-date="30/08/2014">
				<h2>Tips of Preparation for Interview - 2</h2>
				<p>	
Even if you have excellent grades, falsification in your scholarship application or interview may result in the application being unsuccessful. Interviewers are usually very sharp and good at spotting untrue information. Therefore, make sure that all documents are accurate and truthful, and don't assume that small lies won't be detected.
				</p>
				<p>&nbsp;</p>
				<p>	
Scholarship organizations will not award scholarships to students with questionable integrity, as this can damage the reputation of the organization. It is vital to remain honest during the application process. The slightest untruth can cost you an opportunity. Therefore, it is important to provide true and accurate information when applying.
				</p>
				<p>&nbsp;</p>
				<p>	
In addition, while some students may feel shy about applying because of difficult family circumstances, scholarship applications need to be frank and honest. One female student revealed her family's financial difficulties only after her application was rejected, by which time it was too late. Therefore, being honest about your situation is the key to getting a scholarship, as well as maintaining your dignity.
				</p>			
			</li>

			<li data-date="15/09/2014">
				<h2>Tips of Preparation for Interview - 3</h2>
				<p>	
When applying for scholarships, attaching certificates of honor and awards can spice up the application, but students should have a sense of proportion. Trivial certificates that are not related to academic and aptitude are not necessary because the person responsible for scholarship selection usually has to deal with a large number of application documents, and it is difficult for them to read each one carefully.</p>
				<p>&nbsp;</p>
<p>
Scholarship applicants' curriculum vitae should be concise and clear so that the selectors can quickly grasp the main points. Submissions should focus on demonstrating scholarship-related accomplishments and experiences rather than listing everything. Similarly, when writing an autobiography (Personal Statement), avoid too much redundancy and don't intentionally decorate it with too much literary flourish. Focus on your academic accomplishments, leadership skills, and other important personal qualities in a limited number of words.
				</p>
				<p>&nbsp;</p>
<p>
Being concise is one of the key strategies for submitting a successful application. It allows those responsible for reviewing your application to quickly understand your strengths and characteristics, increasing the efficiency and likelihood of success of your scholarship application.
				</p>
			</li>

			<li data-date="01/11/2014">
				<h2>Tips of Preparation for Interview - 4</h2>
				<p>	
Toward the end of the interview, the interviewer may ask, "Do you have any questions for us?" In this case, it is important not to ask superficial questions that can be easily answered online, which may reveal that you are not prepared for the job.
				</p>
				<p>&nbsp;</p>
				<p>
Before the interview, in addition to preparing questions that the interviewer might ask you, you should also prepare some insightful questions to ask them. You could ask about the scholarship organization's core values, what they expect from scholarship recipients, or ask about success stories about the scholarship program, etc.				
				</p>


			</li>

			<li data-date="10/12/2014">
				<h2>Waiting for Results</h2>
				<p>	
After submitting a scholarship application and completing a follow-up interview, the next step is to wait for the results. This stage can take some time, as organizations may review a large number of applications and screen them carefully. Therefore, it is important to remain patient.
				</p>
				<p>&nbsp;</p>
				<p>
While waiting for the results, it is possible to continue to focus on your studies and other activities while keeping in touch with the scholarship organization to find out when and how they are likely to be notified. Remember, while the wait can be anxiety-provoking, staying positive and ready for the results is key. Regardless of the final outcome, the process of applying for scholarships is a growth and learning experience in itself.
				</p>
			</li>

			<li data-date="19/01/2015">
				<h2>Fulfillment of Scholarship Requirements</h2>
				<p>	
					
Upon becoming a scholarship recipient, you will need to comply with the requirements of the scholarship. These requirements usually include maintaining a certain level of academic performance, attending required activities on time, and complying with the rules and regulations of the scholarship organization. Scholarship organizations usually set performance indicators to ensure that recipients maintain excellence and are in line with the values and goals of the scholarship.</p>			
				<p>&nbsp;</p>
				<p>
In order to ensure continued receipt of the scholarship, it is important to understand and comply with these requirements. Keep up to date with notifications from scholarship organizations to ensure that you meet the requirements. If there is any uncertainty, consult with the relevant organization or school in a timely manner to avoid losing the scholarship due to non-compliance.
				</p>
			</li>

			<li data-date="03/03/2015">
				<h2>Some Additional Tips</h2>
				<p>	
Competition for corporate scholarships can be fierce, so it's important to stay active and persistent when pursuing funding opportunities. If possible, attend job fairs, networking events, or scholarship-focused seminars.
	</p>
				<p>&nbsp;</p>
				<p>
Networking and interacting with stakeholders (especially company representatives) can positively impact your scholarship application. Also keep a close eye on websites and other relevant platforms to stay informed of new scholarship opportunities that may be available in the future. Good luck!
				</p>
			</li>
		</ol>
	</div> <!-- .events-content -->
</section>
	</div>
	
	<a href="Resources.php"   style="display: flex;justify-content: center; align-items: center; text-decoration-line: none;">
	<button class="button-dark">More Detail 
  </button></a>
	
<!--footer-->
	<?php include 'footer.php'; ?>

	<script src="commom_JavaScript.js"></script>
	<script src="About_JavaScript.js"></script>
	
	  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>