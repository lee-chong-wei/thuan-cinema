<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_hot_new extends CI_Migration {

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
            
            'image' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'link' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'start_time' => array(
                'type' => 'DATE'
            ),
            'end_time' => array(
                'type' => 'DATE'
            )
            );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id');
        $this->dbforge->create_table('hot_new',TRUE);

    }

    public function down(){
        $this->dbforge->drop_table('hot_new');
    }
}