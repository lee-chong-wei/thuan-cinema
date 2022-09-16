<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_movie_schedule_rel extends CI_Migration {

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
            'date' => array(
                'type' => 'DATE'
            ),
            'time' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'description' => array(
                'type' => 'TEXT',
            )
            );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id');
        $this->dbforge->create_table('movie_schedule_rel',TRUE);

    }

    public function down(){
        $this->dbforge->drop_table('movie_schedule_rel');
    }
}