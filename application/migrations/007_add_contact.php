<?php
class Migration_Add_contact extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
				'id' => array(
						'type' => 'INT',
						'constraint' => 11,
						'unsigned' => TRUE,
						'auto_increment' => TRUE
				),
				'email' => array(
						'type' => 'VARCHAR',
						'constraint' => '100',
				),
				'name' => array(
						'type' => 'VARCHAR',
						'constraint' => '100',
				),
				'body' => array(
						'type' => 'TEXT',
				),
				'created' => array(
						'type' => 'DATETIME',
				),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('contact');
	}

	public function down()
	{
		$this->dbforge->drop_table('contact');
	}
}