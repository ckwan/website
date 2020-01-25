		<!-- Main content -->
 		<div class="span11">
 			<article class="span11">
 				<h2><?php echo e($page->title); ?></h2>
					<img id="profilepic" src="<?php echo site_url('img/me.png');?>"/>
 				<?php echo $page->body; ?>
 			</article>
 		</div>

	<div class="inner-sidebar-large right">
 		<!-- Sidebar -->
 		<div class="span3 sidebar">
 			<h2>Recent news</h2>
			<?php $this->load->view('components/sidebar'); ?>
 		</div>
 	</div>
