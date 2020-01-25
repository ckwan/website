<h3><?php echo empty($article->id) ? 'Add a new article' : 'Edit article ' . $article->title; ?></h3>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
<table class="table">
	<tr>
		<td>Publication date</td>
		<td><?php echo form_input('pubdate', set_value('pubdate', $article->pubdate), 'class="datepicker"'); ?></td>
	</tr>
	<tr>
		<td>Title</td>
		<td><?php $property = array('id' => 'title', 'name' => 'title', 'value' =>set_value('title', $article->title)); echo form_input($property); ?></td>
	</tr>
	<tr>
		<td>Slug</td>
		<td><?php $property = array('id' => 'slug', 'name' => 'slug', 'value' =>set_value('slug', $article->slug)); echo form_input($property); ?></td>
	</tr>
	<tr>
		<td>Body</td>
		<td><?php echo form_textarea('body', set_value('body', $article->body), 'class="tinymce"'); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
	</tr>
</table>
<?php echo form_close();?>

<script>
$(function() {
	$('.datepicker').datepicker({ format : 'yyyy-mm-dd', autoclose : true });
	$('#title').keyup(function(e) {
		var str = $('#title').val();
		$('input[id$=slug]').val(str);
	});
});
</script>