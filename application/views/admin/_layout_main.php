<?php $this->load->view('admin/components/page_head'); ?>
<body>
<?php $this->load->view('admin/components/admin_menu');?>


	<div class="container">
		<div class="row">
			<!-- Main column -->
			<div class="span9">
<?php $this->load->view($subview); ?>
			</div>
			<!-- Sidebar -->
			<div class="span3">
				<section>
					<?php echo mailto('calvin.kwan@yahoo.com', '<i class="icon-user"></i> Calvin Kwan'); ?><br>
					<?php echo anchor('admin/user/logout', '<i class="icon-off"></i> logout'); ?>
				</section>
			</div>
		</div>
	</div>

<?php $this->load->view('admin/components/page_tail'); ?>