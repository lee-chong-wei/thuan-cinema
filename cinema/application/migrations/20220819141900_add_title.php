<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_title extends CI_Migration {

    public function up()
    {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'auto_increment' => TRUE
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'link' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            )
            );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id');
        $this->dbforge->create_table('title',TRUE);

    }

    public function down(){
        $this->dbforge->drop_table('title');
    }
}