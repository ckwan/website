		<!-- Homepage content -->
<div class="inner-container-small">
	<div class="description-small">
		<h1 class="font20">Hi! My name is Calvin and I'm a web/software developer. I like innovation. Anything that comes to my mind, I'll build it.</h2>
		<a href="<?php echo site_url('About', 'Index'); ?>">Read more about my Biography</a>
	</div>
</div>

<div class="inner-container-large">
	<div class="left">
		<div class="preview-content-small">
			<?php if(isset($articles[0])) echo get_excerpt($articles[0]); ?>
		</div>

		<div class="preview-content-small">
			<?php if(isset($articles[1])) echo get_excerpt($articles[1]); ?>
		</div>

		<div class="preview-content-small">
			<?php if(isset($articles[2])) echo get_excerpt($articles[2]); ?>
		</div>
	</div>
	<div class="inner-sidebar-large right">
 		<!-- Sidebar -->
 		<div class="span3 sidebar">
 			<h2>Recent news</h2>
			<?php $this->load->view('components/sidebar'); ?>
 		</div>
 	</div>
</div>

<div class="inner-container-large">
	<div class="inner-left-sidebar-large">Projects and Portfolio <br/> <a href="<?php echo site_url('portfolio', 'Index'); ?>"> View more -></a></li></div>
	<div class="news-content-large">

		<div id="slideshow" class="slideshow-home">
			<img src="<?php echo site_url('img/portfolio_images/itc.png'); ?>">
			<img src="<?php echo site_url('img/portfolio_images/ustartt.png'); ?>">
			<img src="<?php echo site_url('img/portfolio_images/laaqueduct.png'); ?>">
		</div>
	</div>
</div>


