<!DOCTYPE html>
<html>
<head>
	<title>Simon Burdall</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>
	<header id="home" class="header-wrapper" style="background-image: url(images/ph-bk.png);">
		<div class="head-container">
			<!--<h1 id="title-output"></h1>-->
			<div class="head-title-elements">
				<h1 class="head-title">Simon Burdall</h1>
				<h2 class="head-title">Web Designer</h2>
			</div>
		</div>
	</header>

	<div class="site-navigation" id="site-navi-ui">
		<div class="site-float-left">
			<h2 style="margin-left: 45px;">Currentselection</h2>
		</div>
		<div class="site-float-right">
			<div class="navi-toggle-menu"></div>
			<div class="navi-content">
				<ul class="navi-ul">
					<li class="navi-li"><a href="#home">Home</a></li>
					<li class="navi-li"><a href="#portoflio">Portoflio</a></li>
					<li class="navi-li"><a href="#about-me">About Me</a></li>
					<li class="navi-li"><a href="#what-do">What Do I Know</a></li>
					<li class="navi-li"><a href="#working-on">Upcoming</a></li>
					<li class="navi-li"><a href="#contact">Contact Me</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div id="portoflio" class="portfolio-thumbnail-row">
		<div class="portfolio-thumbnail" style="background-image: url(images/projects-1.png);">
			<a title="Oscar Award Generator" href="#">
				<div>
					<span class="portfolio-thumbnail-title"> Oscar Award Generator <br>
					<span class="portfolio-thumbnail-code">JavaScript</span>
					</span>
				</div>
			</a>
		</div>
		<div class="portfolio-thumbnail" style="background-image: url(images/projects-2.png);">
			<a title="Oscar Award Generator" href="#">
				<div>
					<span class="portfolio-thumbnail-title"> Second Thingy Generator<br>
					<span class="portfolio-thumbnail-code">JavaScript</span>
					</span>
				</div>
			</a>
		</div>
		<div class="portfolio-thumbnail" style="background-image: url(images/projects-3.png);">
			<a title="Oscar Award Generator" href="#">
				<div>
						<span class="portfolio-thumbnail-title"> "Oscar Award Generator"<br>
						<span class="portfolio-thumbnail-code">JavaScript</span>
						</span>
				</div>
			</a>
		</div>
		<div class="portfolio-thumbnail" style="background-image: url(images/projects-4.png);">
			<a title="Oscar Award Generator" href="#">
				<div>
						<span class="portfolio-thumbnail-title"> "Oscar Award Generator"<br>
						<span class="portfolio-thumbnail-code">JavaScript</span>
						</span>
				</div>
			</a>
		</div>
	</div>

	<div class="bio-container">

		<div id="about-me" class="content">
			<h1>About Me</h1>
			<p>Self-taught UK based web developer, solving convoluted issues since 1995. learning the ropes, and working on projects.</p>

			<div class="inner-wrapper-content">
				<a href='https://github.com/simonburdall'>
				<span class="inner-icon fab fa-github"></span></a>
				<a href='https://twitter.com/simonburdall'>
				<span class="inner-icon fab fa-twitter"></span></a>
			</div>
			<!--<ul>
        		<li>
        			<a href='https://github.com/simonburdall'><img src="images/github.png"></a>
        		</li>
        		<li>
        			<a href='https://twitter.com/simonburdall'><img src="images/twitter.png"></a>
        		</li>
      		</ul>-->
		</div>

		<div id="what-do" class="content">
			<h1>What do I Know?</h1>
				<div class="inner-wrapper-content">
					<span class="inner-icon">
							<img class="content-lang" src="images/langicon.png">
					</span>
					<span class="inner-icon">
							<img class="content-lang" src="images/langicon.png">
					</span>
					<span class="inner-icon">
							<img class="content-lang" src="images/langicon.png">
					</span>
					<span class="inner-icon">
							<img class="content-lang" src="images/langicon.png">
					</span>
				</div>
			<p>Test text.</p>
			<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
			<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
		</div>

	
		<div id="working-on" class="content">
			<h1>Working on!</h1>
			<p>Coming soon!</p>
			<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
			<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
		</div>

		<div id="contact" class="content">
			<h1>Contact Me</h1>
				<form id="contact-form" method="POST">
					<label for="fName">Name</label>
					<input type="input" name="name" placeholder="Full name...">
					</br>
					<label for="mailAdd">Your E-mail Address</label>
					<input type="input" name="mail" placeholder="Your e-mail...">
					</br>
					<label for="subject">Subject</label>
					<input type="input" name="subject" placeholder="Enter subject...">
					</br>
					<label for="Message">Message</label>
					<textarea id="message" name="message" placeholder="Write your message..." style="height:200px"></textarea>
					<input type="submit" name="submit">
  				</form>
  				<?php include contact.php; ?>
  			<div class="site-float-right">
  				<img class="logo-icon" src="images/logo.png">
  			</div>
		</div>
	</div>	

	<div class="footer-wrapper">
		<div class="footer">Simon Burdall, ©2018.</div>
	</div>
</body>
<script src="index.js"></script>
</html>