<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_promotion extends CI_Migration {

    public function up()
    {
        $fields = array(
            'promotion_id' => array(
                'type' => 'INT',
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'image' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'link' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'description' => array(
                'type' => 'TEXT'
            ),
            'start_time' => array(
                'type' => 'DATE'
            ),
            'end_time' => array(
                'type' => 'DATE'
            ),
            );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('promotion_id');
        $this->dbforge->create_table('promotion',TRUE);
        

    }

    public function down(){
        $this->dbforge->drop_table('promotion');
    }
}