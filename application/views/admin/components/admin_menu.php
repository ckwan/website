    <div class="navbar navbar-static-top navbar-inverse">
	    <div class="navbar-inner">
		    <a class="brand" href="<?php echo site_url('/'); ?>"><?php echo $meta_title; ?></a>
		    <ul class="nav">
			    <li class="active"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
			    <li><?php echo anchor('admin/page', 'pages'); ?></li>
			    <li><?php echo anchor('admin/page/order', 'order pages'); ?></li>
			    <li><?php echo anchor('admin/article', 'news articles'); ?></li>
			    <li><?php echo anchor('admin/user', 'users'); ?></li>
			    <li><?php //echo anchor('admin/contact', 'contact'); ?></li>
			    <li><?php //echo anchor('admin/comments', 'comments'); ?></li>
		    </ul>
	    </div>
    </div>