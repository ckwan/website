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
<h2>uStartt</h2>
 <div class="container">
 	<div class="row" style="display: none;">
		<div class="portfolio-container-large">
			<div id="slideshow">
				<img src="<?php echo site_url('img/portfolio_images/ustartt/admin.png'); ?>" class="active">
				<img src="<?php echo site_url('img/portfolio_images/ustartt/businesspage.png'); ?>">
				<img src="<?php echo site_url('img/portfolio_images/ustartt/dashboard.png'); ?>">
				<img src="<?php echo site_url('img/portfolio_images/ustartt/forumpost.png'); ?>">
			</div>
			<div class="inner-right-sidebar-large">Projects and Portfolio <br/> <a href="<?php echo site_url('portfolio', 'Index'); ?>"> View more -></a></li></div>
		</div>
		<div class="project-description font18">
uStartt is an ongoing project that I work on with 2 other developers, Roger Ngo and Derek Ho. We hope to reach out to the world in the future. With the work I put into this project, I learned a lot of new fundamentals about web development which gave me a foundation for building my website. uStartt was written in Visual Basic.NET MVC4. Everyday, we strive to improve the website by fixing the bugs and bring out new ideas. I have worked on the admin panel, fixed frontend and backend bugs. I learned about the ins and outs of the MVC design pattern, how to prevent SQL injections, how to use Ajax, and how to improve my CSS/HTML fundamentals.

			<br/><br/><br/><br/>
		</div>
 	</div>
 </div>
<?php $this->load->view('components/page_tail');?>





