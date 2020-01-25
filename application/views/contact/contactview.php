<?php $this->load->view('_shared/shared_header'); ?>
<div id="page_effect">
	<h1>sfsfasf<h1>
	asdfasfasf
	<br>
	asdfasf
</div>

<?php
	$form = array('');
	echo form_open('contact/send', $form);
?>

	<div class="row-fluid">
		<div class="span2 font16">
			Your Name:
		</div>
		<div class="span4">
			<input type="text" id="name" name="name"></input>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span2 font16">
			Your Email:
		</div>
		<div class="span4">
			<input type="text" id="email" name="email"></input>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span2 font16">
			Your Subject:
		</div>
		<div class="span4">
			<input type="text" id="subject" name="subject"></input>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span8">
			<textarea name="contentbox" id="contentbox" cols="50" rows="2"></textarea>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span6">
			<button type="submit" id="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>

<?php
	echo form_close($string);
?>

<?php $this->load->view('_shared/shared_footer'); ?>