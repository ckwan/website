		<!-- Main content -->
<div style="background-color:white;">

<div class="span11">
	<?php if($pagination): ?>
		<section class="pagination"><?php echo $pagination; ?></section>
	<?php endif; ?>

	<?php if (count($articles)): foreach ($articles as $article): ?>
	 				<article class="span11"><?php echo get_excerpt($article); ?><hr></article>
	<?php endforeach; endif; ?>
</div>

<div class="inner-sidebar-large right">
 	<!-- Sidebar -->
 	<div class="span3 sidebar">
 		<h2>Recent news</h2>
		<?php $this->load->view('components/sidebar'); ?>
 	</div>
 </div>