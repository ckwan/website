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
<h2>(2nd Place) 17th Annual Information Technolgy Competition (ITC) hosted by Management Information System Student Association (MISSA) </h2>
 <div class="container">
 	<div class="row" style="display: none;">
		<div class="portfolio-container-large">
			<div id="slideshow">
				<img src="<?php echo site_url('img/portfolio_images/itc/map.png'); ?>">
				<img src="<?php echo site_url('img/portfolio_images/itc/registration.png'); ?>">
				<img src="<?php echo site_url('img/portfolio_images/itc/footer.png'); ?>">
				<img src="<?php echo site_url('img/portfolio_images/itc/comment.png'); ?>">
				<img src="<?php echo site_url('img/portfolio_images/itc.png'); ?>">
			</div>
			<div class="inner-right-sidebar-large">Projects and Portfolio <br/> <a href="<?php echo site_url('portfolio', 'Index'); ?>"> View more -></a></li></div>
		</div>
		<div class="project-description font18">
ITC is held once a year during the Spring Quarter. This year I chose to participate in the category, Web Applications Development. With a limited time of 2.5 weeks to complete our project, my team decided to use WordPress to build the website. I learned the ins and outs of the structure of WordPress. Not only that, but I was also able to learn Google Map's API to call the Google Map directions, add custom overlays, add events, and add controls onto the Google Map itself. I must say, creating your own styled website is not as simple as you might think with WordPress. There are a lot strict coding standards you have to follow with WordPress API. We scored 2nd place and got $400 as prize money.

			<br/><br/>
		</div>	
	</div>
 </div>
<?php $this->load->view('components/page_tail');?>





