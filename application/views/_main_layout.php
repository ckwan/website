<?php $this->load->view('components/page_head');?>

<body>
<div class="container">
	<section>
		<a href="<?php echo site_url('/')?>" id="header">Calvin Kwan</a>
		<div class="friends">
			<ul>
				<h1 class="font18">Friends</h1>
				<li style="list-style-type: none;"><a href="https://github.com/ckwan">Calvin's Github</a></li>
				<li style="list-style-type: none;">- <a href="http://rogerngo.com">Roger Ngo</a></li>
				<li style="list-style-type: none;">- <a href="http://derekdho.com/">Derek Ho</a></li>
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

 <div class="container">
 	<div class="row" style="display: none;">
		<?php $this->load->view('templates/' . $subview); ?>
 	</div>
 </div>
<?php $this->load->view('components/page_tail');?>