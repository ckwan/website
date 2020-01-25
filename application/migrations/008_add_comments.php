<?php
class Migration_Add_comments extends CI_Migration {

	public function down()
	{
		$this->dbforge->drop_table('comments');
	}
}