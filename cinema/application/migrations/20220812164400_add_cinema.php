<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_cinema extends CI_Migration {

    public function up()
    {
        $fields = array(
            'cinema_id' => array(
                'type' => 'INT',
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'address' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'phone' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'leader' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('cinema_id');
        $this->dbforge->create_table('cinema',TRUE);
        
    }

    public function down(){
        $this->dbforge->drop_table('cinema');
    }
}