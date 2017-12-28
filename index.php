<?php ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="images/new/icon.png">
<title>Wan Zulsarhan</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/swipebox.css">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Judo Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<script src="js/modernizr.custom.js"></script>
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
</head>
<body>
	<!--baner-->
	<div class="baner" id="home">
		<div class="container">
			<div class="baner-text">
			<h2 style="color:#424746;"><br>Wan Zulsarhan
				<small>
					<span>Sofware Engineer<br>Web Developer<br>Graphic Designer</span>
				</small>
			</h2>	
			</div>	
		</div>
	</div>
	<!--//baner-->
	<!--navigation-->
	<div class="top-nav">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"> <span class="jlogo">W</span>an <span class="jlogo">Z</span>ulsarhan </a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-center cl-effect-15">
						<li><a href="#home" class="scroll" data-hover="Home">Home</a></li>
						<li><a href="#about" class="scroll" data-hover="Experience">Experience</a></li>					
						<li><a href="#special" class="scroll" data-hover="Skills">Skills</a></li>
						<li><a href="#news" class="scroll" data-hover="Project Sample">Project Sample</a></li>
						<!--<li><a href="#gallery" class="scroll" data-hover="Gallery"></a></li>-->
						<li><a href="#testimonial" class="scroll" data-hover="Contact">Contact</a></li>
					</ul>	
					<div class="clearfix"> </div>
				</div>
			</div>	
		</nav>		
	</div>	
			<!-- script-for sticky-nav -->
			<script>
			$(document).ready(function() {
				 var navoffeset=$(".top-nav").offset().top;
				 $(window).scroll(function(){
					var scrollpos=$(window).scrollTop(); 
					if(scrollpos >=navoffeset){
						$(".top-nav").addClass("fixed");
					}else{
						$(".top-nav").removeClass("fixed");
					}
				 });
				 
			});
			</script>
			<!-- /script-for sticky-nav -->
	<!--navigation-->
	<!--about-->
	<div class="about" id="about">
		<div class="container">
			<h3 class="title">Hello World!</h3>
                        <p>I'm Zulsarhan. Web Developer on weekdays and weekends. I eat, drink and sleep code.</p>
                </div>	
	</div>
	<!--//about-->
	<!--slid-->
	<div class="slid" id="slid">
		<div class="container">			
			<div class="slid-info">
				<h4>Experience</h4>		
					<p>Undergraduate Programmer at Schnable Lab of Iowa State University
					<ul>
						<li>Built an <a target="_blank" href="schnable/index.html">Imaging System and Networking</a> to facilitate plant research at the lab</li>
					</ul>
					</p>	
					
					<p>Lead Developer at InnovaSeeds Solutions
					<ul>
						<li>Built a web application (<a target="_blank" href="http://hosting.backand.io/dropbug/">DropBug</a>) - a platform to facilitate business</li>
					</ul>
					</p>	
					
					<p>Web Master at International Student Council of Iowa State University
					<ul>
						<li>Maintained the club <a target="_blank" href="http://isc.stuorg.iastate.edu/">website</a></li>
					</ul>
					</p>
					
					<p>Promotion Leader for Temasya Jaguh Malaysia 2015
					<ul>
						<li>Developed the event's <a target="_blank" href="http://tjmisu2015.wix.com/tjm-isu-2015">website</a></li>
						<li>Designed <a target="_blank" href="https://www.facebook.com/tjm2015/photos/a.800791446658699.1073741828.796327877105056/817635928307584/?type=3&theater">posters</a> for the event</li>
						<li>Created <a target="_blank" href="https://www.youtube.com/watch?v=BvFjBeIs0Dc">videos</a> for the event</li>
					</ul>
					
					<p>Promotion Leader for Islamic Spring Retreat 2015
					<ul>
						<li>Developed the event's <a target="_blank" href="http://mahec2015.wix.com/isr-2015">website</a></li>
						<li>Designed <a target="_blank" href="https://www.facebook.com/299490643585438/photos/a.301742556693580.1073741829.299490643585438/352556528278849/?type=3&theater">posters</a> for the event</li>
					</ul>
					</p>
			</div>
		</div>	
	</div>
	<!--//about-->	
	<!--special-->
	<div class="special" id="special"> 
		<div class="container">
			<h3 class="title">Skills</h3>
			<div class="col-md-6 special-grids">
				
				<!--SKILL PART 1 -->
				<h4>Programming</h4>
				<h6>Java</h6>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
						90%
					</div>
				</div>
				<h6>C/C++</h6>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
						80%
					</div>
				</div>
				<h6>Javascript</h6>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%;">
						90%
					</div>
				</div>
				<h6>HTML/CSS</h6>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
						100%
					</div>
				</div>
				<h6>PHP</h6>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
						70%
					</div>
				</div>
				<h6>Python</h6>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
						60%
					</div>					
				</div>
			</div>	

			<!--SKILL PART 2 -->
			<div class="col-md-6 special-grids">
				<div class="embed-responsive embed-responsive-16by9">
					<h4>Graphic Design and Multimedia</h4>
						<h6>Adobe Photoshop</h6>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
								90%
							</div>
						</div>
						<h6>Abode Illustrator</h6>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
								80%
							</div>
						</div>
						<h6>Sony Vegas Pro</h6>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%;">
								90%
							</div>
						</div>	
					</div>
				</div>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//special-->

	<!--team
	<div class="team" id="team">
		<div class="container">
			<h3 class="title">Project Sample</h3>
			<div class="team-grids">
				<div class="col-md-6 team-grid">
					<div class="team-grid-left">
						<h4>AUTOMATED TOOL MONITORING SYSTEM</h4>
						<h5>Project Description</h5>	
						<p>
												
						</p>
					</div>
					<div class="team-grid-right">
						<img src="images/img1.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 team-grid">
					<div class="team-grid-right aliquam">
						<img src="images/img2.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="team-grid-left non">
						<h4>Magnam aliquam</h4>
						<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt 
							ut labore et dolore magnam aliquam quaerat voluptatem</p>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="team-grids">
				<div class="col-md-6 team-grid">
					<div class="team-grid-left">
						<h4>Magnam aliquam</h4>
						<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt 
							ut labore et dolore magnam aliquam quaerat voluptatem</p>
					</div>
					<div class="team-grid-right">
						<img src="images/img3.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 team-grid">
					<div class="team-grid-right aliquam">
						<img src="images/img4.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="team-grid-left non">
						<h4>Magnam aliquam</h4>
						<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt 
							ut labore et dolore magnam aliquam quaerat voluptatem</p>
					</div>
					
					<div class="clearfix"> </div>
				</div>



				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	--//team-->

	<!--news-->
	<div class="news" id="news">
		<div class="container">
			<h3 class="title">Software Project Sample</h3>
			
			<div class="col-md-6 news-grids">
				<div class="news-grids-left">
					<img src="images/new/project0.jpg" class="img-responsive" alt="/">
				</div>
				<div class="news-grids-right">
					<h5>DROPBUG - Web App For Business</h5>
					<p><strong>Project Description</strong>
						<ul style="text-align:justify;">
							<li>
							<a target="_blank" href="http://hosting.backand.io/dropbug/">DropBug</a> is the first web application that I created while working as <strong>lead developer</strong> at <strong>InnovaSeeds Solutions</strong>. This web app is built as a platform for user to start, grow and diversify their business.
							</li>
						</ul>
					</p>
					<p><strong>Project Role</strong>
						<ul>
							<li>Lead Developer
							</li>
						</ul>
					</p>
					<p><strong>Skill Acquired</strong>
						<ul>
							<li>Angular JS</li>
							<li>MySQL</li>
							<li>MVC Design Pattern</li>
							<li>Ionic Framework</li>
							<li>GitHub</li>
						</ul>
					</p>
					<p><strong><a target="_blank" href="http://www.dropbug-seeds.com/">Learn More About This Project</a></strong>
					</p>										
				</div>
				<div class="clearfix"> </div>

			</div>
			
			<div class="col-md-6 news-grids">
				<div class="news-grids-left">
					<img src="images/new/project01.jpg" class="img-responsive" alt="/">
				</div>
				<div class="news-grids-right">
					<h5>AUTOMATED IMAGING SYSTEM AND NETWORKING</h5>
					<p><strong>Project Description</strong>
						<ul style="text-align:justify;">
							<li>This is the project while I am working as programmer to build an Imaging System and Networking to facilitate plant research at the Schnable Labratory of Iowa State University. This system handles up to 400 Raspberry Pi with 4 cameras attached to each of them. All the data and photos from all of those camera are transferred to a few servers to help researcher to collect data easily. I together with my team build the whole imaging system and networking from scratch.
							</li>
						</ul>
					</p>
					<p><strong>Project Role</strong>
						<ul>
							<li>Programmer
							</li>
						</ul>
					</p>
					<p><strong>Skill Acquired</strong>
						<ul>
							<li>Programming Rapsberry Pi using Ruby and Python</li>
							<li>Network Programming</li>
						</ul>
					</p>
					<p><strong><a target="_blank" href="schnable/index.html">Learn More About This Project</a></strong>
					</p>										
				</div>
				<div class="clearfix"> </div>

			</div>	
			
			<div class="col-md-6 news-grids">
				<div class="news-grids-left">
					<img src="images/new/project1.jpg" class="img-responsive" alt="/">
				</div>
				<div class="news-grids-right">
					<h5>AUTOMATED TOOL MONITORING SYSTEM</h5>
					<p><strong>Project Description</strong>
						<ul style="text-align:justify;">
							<li>This is the project for my senior design SE 491/492. The goal of this project is to create a system to secure and track the use of tools in the ECPE machine shop automatically. We make use of Raspberry Pi to managed the whole system.
							</li>
						</ul>
					</p>
					<p><strong>Project Role</strong>
						<ul>
							<li>Web Master
							</li>
						</ul>
					</p>
					<p><strong>Skill Acquired</strong>
						<ul>
							<li>Programming Rapsberry Pi using C and Python</li>
							<li>mySQL and PHP</li>
							<li>National Instrument's LabVIEW</li>
							<li>Image Processing</li>
						</ul>
					</p>
					<p><strong><a target="_blank" href="may1631/index.html">Learn More About This Project</a></strong>
					</p>										
				</div>
				<div class="clearfix"> </div>

			</div>
			<div class="col-md-6 news-grids">
				<div class="news-grids-left">
					<img src="images/new/project2.jpg" class="img-responsive" alt="/">
				</div>
				<div class="news-grids-right">
				
				<h5>FACIAL RECOGNITION SYSTEM</h5>
					<p><strong>Project Description</strong>
						<ul style="text-align:justify;">
							<li>This is one of the projects that I have worked on during my Junior year. Facial Recognition System designed to help instructor or teacher around the world to quickly and easily take attendance by automatically capturing images of students in the classroom and recognizing students in the image by using a facial recognition server. This system also help the instructors to be able to keep track of attendance in their classes using Web Application.
							</li>
						</ul>
					</p>
					<p><strong>Project Role</strong>
						<ul>
							<li>Web Master
							</li>
						</ul>
					</p>
					<p><strong>Skill Acquired</strong>
						<ul>
							<li>HTML</li>
							<li>CSS</li>
							<li>Javascript</li>
						</ul>
					</p>
					<p><strong><a target="_blank" href="documents/Facial_Recognition_System_Report.pdf">Learn More About This Project</a></strong>
					</p>		
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-6 news-grids">
				<div class="news-grids-left">
					<img src="images/new/project3.jpg" class="img-responsive" alt="/">
				</div>
				<div class="news-grids-right">
				
				<h5>TOUR BUDDY</h5>
					<p><strong>Project Description</strong>
						<ul style="text-align:justify;">
							<li>This is another project that I have worked on during my Junior year for SE 319 Software Project Management class. For this project we created a Android mobile application to assist in the campus tour experience specifically for Iowa State University's campus. We provide valuable information about buildings and places of the campus in our application. The development of this application is mainly by using Android Studio as the IDE and the Google Maps API.
							</li>
						</ul>
					</p>
					<p><strong>Project Role</strong>
						<ul>
							<li>Project Manager
							</li>
						</ul>
					</p>
					<p><strong>Skill Acquired</strong>
						<ul>
							<li>Android Programming</li>
							<li>Project Management Skill</li>
						</ul>
					</p>
					<p><strong><a target="_blank" href="documents/FalconSquad_Project4_Report.pdf">Learn More About This Project</a></strong>
					</p>		
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//news-->

		<!--gallery-->
	<div class="gallery" id="gallery">		
		<div class="container">
			<h3 class="title">Design Project Sample</h3>
			<div class="top-gallery">
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/gallery/logo.jpg" class="swipebox">
						<img src="images/gallery/logo.jpg" class="img-responsive" alt="/">
						<div class="textbox">
							<h4>Logo</h4>
						</div>
					</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/gallery/poster.jpg" class="swipebox">
						<img src="images/gallery/poster.jpg" class="img-responsive" alt="/">
						<div class="textbox">
							<h4>Poster</h4>
						</div> 
					</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/gallery/tshirt.jpg" class="swipebox">
						<img src="images/gallery/tshirt.jpg" class="img-responsive" alt="/">
						<div class="textbox">
							<h4>T-Shirt</h4>
						</div>
					</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/gallery/poster2.jpg" class="swipebox">
						<img src="images/gallery/poster2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
							<h4>Poster TJM</h4>
						</div>
					</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/gallery/poster3.jpg" class="swipebox">
						<img src="images/gallery/poster3.jpg" class="img-responsive" alt="/">
						<div class="textbox">
							<h4>Poster</h4>
						</div>
					</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/gallery/logoTJM.jpg" class="swipebox">
						<img src="images/gallery/logoTJM.jpg" class="img-responsive" alt="/">
						<div class="textbox">
							<h4>Logo TJM</h4>
						</div>
				   </a>
				</div>
				<div class="clearfix"> </div>
			</div>				
			<script src="js/jquery.swipebox.min.js"></script> 
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
		</div>
	</div>	
	<!--gallery-->

	<!-- services 
	<div class="services" id="services">
		<div class="container">
			<h3 class="title">Reflection</h3>
			<div class="servc-grids">
				<div class="col-md-6 servc-grid">
					<div class="col-xs-3 servc-grid-left">
						<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 servc-grid-right">
						<h4>General Education Reflection</h4>
						<p>As I decided to choose Iowa State University as the place to get my degree, I really hope that it is not just a place to get my degree, I really hope that I will learn something beneficial to my daily life, not only for my major. Before I entered Iowa State, I have actually transferred 2 courses as for the general education. It is kind of required courses for me in my preparation colleges, so, it is indeed not the course that I really choose to study.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 servc-grid">
					<div class="col-xs-3 servc-grid-left">
						<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 servc-grid-right">
						<h4>cum soluta nobis est eligendi</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut 
						reiciendis voluptatibus maiores alias consequatur aut</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>

				
			</div>
			<div class="servc-grids">
				<div class="col-md-6 servc-grid">
					<div class="col-xs-3 servc-grid-left">
						<span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 servc-grid-right">
						<h4>cum soluta nobis est eligendi</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut 
							reiciendis voluptatibus maiores alias consequatur aut</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 servc-grid">
					<div class="col-xs-3 servc-grid-left">
						<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 servc-grid-right">
						<h4>cum soluta nobis est eligendi</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut 
							reiciendis voluptatibus maiores alias consequatur aut</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="servc-grids">
				<div class="col-md-6 servc-grid">
					<div class="col-xs-3 servc-grid-left">
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 servc-grid-right">
						<h4>cum soluta nobis est eligendi</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut 
							reiciendis voluptatibus maiores alias consequatur aut</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 servc-grid">
					<div class="col-xs-3 servc-grid-left">
						<span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 servc-grid-right">
						<h4>cum soluta nobis est eligendi</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut 
							reiciendis voluptatibus maiores alias consequatur aut</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			
			</div>
		</div>
	</div>
	 //services -->


	<!--testimonials-->
	<div class="testimonials" id="testimonial">
		<div class="container">
			<h3 class="title">Contact Me</h3>
			<br>
				<ul>
					<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
						N Hyland 515 #3, Ames , IA 50014
					</li>					
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
						+1(515) 735 - 8667
					</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						<a href="mailto:wzs21@iastate.edu">zulsarhan.shaari@gmail.com</a>
					</li>
				</ul>
		

			  
		</div>		
	</div>
	<!--//testimonials-->

	<div class="like">		
		<div class="container">
			<h3 class="title">Stay connected with me</h3>
			<div class="like-info">
				<div class="col-md-3 like-grids">
					<a target="_blank" href="https://www.facebook.com/wan.zulsarhan">
						<img src="images/icon1.png" alt=""/>
					</a>
					<p>Facebook</p>
				</div>
				<div class="col-md-3 like-grids">
					<a target="_blank" href="https://instagram.com/es021/">
						<img src="images/new/instagram.png" alt=""/>
					</a>
					<p>Instagram</p>
				</div>
				<div class="col-md-3 like-grids">
					<a target="_blank" href="https://twitter.com/es021">
						<img src="images/icon5.png" alt=""/>
					</a>
					<p>Twitter</p>
				</div>
			
				<div class="col-md-3 like-grids">
					<a target="_blank" href="https://www.youtube.com/channel/UCL38Szv1SzxsA5kh-1AlnVA/videos">
						<img src="images/new/youtube.png" alt=""/>
					</a>
					<p>You Tube</p>
				</div>
						
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--contact
	<div id="contact" class="contact">
		<div class="container">
			<h3 class="title">How to Find Us</h3>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4376542.827441857!2d133.94238155277205!3d-25.73870281693212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2sin!4v1439377130002" allowfullscreen></iframe>
			</div>
			<h3 class="title">Contact Us</h3>	
			<div class="col-md-7 contact-right">				
				<form>
					<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
					<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Submit" >
				</form>
			</div>
			<div class="col-md-5 contact-left">
				<p>"Lorem Ipsum"is the common name dummy text often used in the design, printing, and type setting industriescommon name dummy text often used in the design, printing, and type setting industries. "</p>
				<ul>
					<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
						756 globel Place, Australia.
					</li>					
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
						+123 2222 222
					</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						<a href="mailto:example@mail.com">mail@example.com</a>
					</li>
				</ul>
			</div>						
			<div class="clearfix"> </div>
		</div>			
	</div>

	-//contact-->
	<!--footer-->
	<!--
	<div class="footer">
		<div class="container">
			<p></p>
		</div>
	</div>
	-->
	<!--//footer-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>