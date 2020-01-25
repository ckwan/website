<br/>

<?php echo form_open('submit'); ?>

	<div class="row-fluid">

		<div class="span2 font16">
			Your Name:
		</div>

		<div class="span4">
			<?php $property = array('id' => 'name', 'name' => 'name', 'value' => set_value('name')); echo form_input($property);?>
		</div>
		<div class="span4 font16" style="color:red">
			<?php echo form_error('name'); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span2 font16">
			Your Email:
		</div>

		<div class="span4">
			<?php $property = array('id' => 'email', 'name' => 'email', 'value' => set_value('email')); echo form_input($property);?>
		</div>
		<div class="span4 font16" style="color:red">
			<?php echo form_error('email'); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span2 font16">
			Your Subject:
		</div>

		<div class="span4">
			<?php $property = array('id' => 'subject', 'name' => 'subject', 'value' => set_value('subject')); echo form_input($property);?>
		</div>
		<div class="span4 font16" style="color:red">
			<?php echo form_error('subject'); ?>
		</div>

	</div>
	<div class="row-fluid">

		<div class="span6">
			<?php $property = array('id' => 'contentbox', 'name' => 'contentbox', 'value' => set_value('contentbox')); echo form_textarea($property);?>
		</div>
		<div class="span4 font16" style="color:red">
			<?php echo form_error('contentbox'); ?>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span6">
			<button type="submit" id="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
<?php echo form_close(); ?>