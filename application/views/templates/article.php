		<!-- Main content -->
 		<div class="span11">
			<article class="span11">
				<h2 style = "color: rgb(103, 188, 230);"><?php echo e($article->title); ?></h2>
					<p class="pubdate"><?php echo e($article->pubdate);  echo " by <b>Calvin</b>"; ?></p><hr>
				<?php echo $article->body; ?>
			</article>
 		</div>

	<div class="inner-sidebar-large right">
 		<!-- Sidebar -->
 		<div class="span3 sidebar">
 			<h2>Recent news</h2>
			<?php $this->load->view('components/sidebar'); ?>
 		</div>
 	</div>
