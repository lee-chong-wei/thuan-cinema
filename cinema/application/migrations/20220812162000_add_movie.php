<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_movie extends CI_Migration {

    public function up()
    {
        $fields = array(
            'movie_id' => array(
                'type' => 'INT',
                'auto_increment' => TRUE
            ),
            'names_EN' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'names_VN' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'image_home' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'image_ticket' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'link' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'trailer' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'duration' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'actress' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'director' => array(
                'type' => 'VARCHAR',
                'constraint' => '50'
            ),
            'production' => array(
                'type' => 'VARCHAR',
                'constraint' => '50'
            ),
            'types' => array(
                'type' => 'VARCHAR',
                'constraint' => '50'
            ),
            'national' => array(
                'type' => 'VARCHAR',
                'constraint' => '25'
            ),
            'release_date' => array(
                'type' => 'DATE'
            ),
            'description' => array(
                'type' => 'TEXT'
            ),
            'start_time' => array(
                'type' => 'DATE',
            ),
            'end_time' => array(
                'type' => 'DATE',
            )
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('movie_id');
        $this->dbforge->create_table('movies',TRUE);
    }

    public function down(){
        $this->dbforge->drop_table('movies');
    }
}