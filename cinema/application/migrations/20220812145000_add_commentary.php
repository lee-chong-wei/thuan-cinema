<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_commentary extends CI_Migration {

    public function up()
    {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'auto_increment' => TRUE
            ),
            'movie_id' => array(
                'type' => 'INT'
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'description' => array(
                'type' => 'TEXT',
            ),
            'link' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'image' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'views' => array(
                'type' => 'INT',
            ),
            'start_time' => array(
                'type' => 'DATE'
            ),
            'end_time' => array(
                'type' => 'DATE'
            ),
            );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id');
        $this->dbforge->create_table('commentary',TRUE);
       
    }

    public function down(){
        $this->dbforge->drop_table('commentary');
    }
}