<?php $this->load->view('components/page_head');?>

<body>
<div class="container">
	<section>
		<a href="<?php echo site_url('/')?>" id="header">Calvin Kwan</a>
		<div class="friends">
			<ul>
				<h1 class="font18">Friends</h1>
				<li style="list-style-type: none;">- <a href="http://ustartt.com/Roger">Roger Ngo</a></li>
			</ul>
		</div>
	</section>
 		<div class="container" id="navigationbar">
	 		<div class="navbar">
	 		 	<ul class="nav nav-pills" style="width:1120px; height: 42px;">
					<?php echo get_menu($menu); ?>
				</ul>
			</div>
 		</div>
</div>
<br/>
<h2>Los Angeles Aqueduct</h2>
 <div class="container">
 	<div class="row" style="display: none;">
		<div class="portfolio-container-large">
			<div id="slideshow">
				<img src="<?php echo site_url('img/portfolio_images/la/home.png'); ?>" class="active">
				<img src="<?php echo site_url('img/portfolio_images/la/about.png'); ?>">
				<img src="<?php echo site_url('img/portfolio_images/la/responsive.png'); ?>">
				<img src="<?php echo site_url('img/portfolio_images/la/layers.png'); ?>">
			</div>
		<div class="inner-right-sidebar-large">Projects and Portfolio <br/> <a href="<?php echo site_url('portfolio', 'Index'); ?>"> View more -></a></li></div>
		</div>
		<div class="project-description font18">
			The Los Angeles Aqueduct website was a CS499 - Upper Division Special Topics course for Computer Science students. This was where I actually started to enjoy web development. This class was to help build a website for the upcoming Los Angeles Aqueduct's 100th Year Anniversary held in November 2013. This class made it fun as we get to collaborate with the Architecture class and Graphic Designer class. Our class built the frontend and backend of the website. The Architecture class gave us their research data of the Los Angeles Aqueduct. The Graphic Designer sent us their fancy looking graphics to us. The class was divided into small groups of three. Each group was to create their own design of the website. I got my first hands experience with Twitter Bootstrap. Bootstrap is so amazing. A lot of the frontend stuff was already set up, so you just needed to call it. I learned how to add images onto Google Maps. I got the chance to work with the connection, creation, deletion, and joining of the tables in the database. This project helped improved my MySQL query foundations, JavaScript, HTML/CSS, and PHP.
			<br/><br/>
		</div>
 	</div>
 </div>
<?php $this->load->view('components/page_tail');?>





