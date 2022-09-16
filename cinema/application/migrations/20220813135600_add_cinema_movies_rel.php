<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_cinema_movies_rel extends CI_Migration {

    public function up()
    {
        $fields = array(
            'cinema_id' => array(
                'type' => 'INT'
            ),
            'movie_id' => array(
                'type' => 'INT'
            )
            );
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table('cinema_movies_rel',TRUE);

    }

    public function down(){
        $this->dbforge->drop_table('cinema_movies_rel');
    }
}