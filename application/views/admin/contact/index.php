<section>
<h2>News articles</h2>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Subject</th>
				<th>Email</th>
				<th>Name</th>
				<th>Content</th>
				<th>Created</th>
				<th>Mark As Read</th>
			</tr>
		</thead>
		<tbody>
<?php if(count($contacts)): foreach($contacts as $contact): ?>
		<tr>
			<td><?php echo anchor('admin/article/edit/' . $contact->contact_id, $contact->subject); ?></td>
			<td><?php echo $contact->pubdate; ?></td>
			<td><?php echo btn_edit('admin/article/edit/' . $contact->article_id); ?></td>
			<td><?php echo btn_delete('admin/article/delete/' . $contact->article_id); ?></td>
			<td><?php echo checkbox();?><td>
		</tr>
<?php endforeach; ?>
<?php else: ?>
		<tr>
			<td colspan="3">Your Email Box is empty.</td>
		</tr>
<?php endif; ?>
		</tbody>
	</table>
</section>