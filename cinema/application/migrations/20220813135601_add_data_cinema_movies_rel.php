<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_data_cinema_movies_rel extends CI_Migration {

    public function up()
    {        
        $data = array(
            array(
                'cinema_id' => '1',
                'movie_id' => '1',
            ),
            array(
                'cinema_id' => '1',
                'movie_id' => '2',
            ),
            array(
                'cinema_id' => '1',
                'movie_id' => '3',
            ),
            array(
                'cinema_id' => '1',
                'movie_id' => '4',
            ),
            array(
                'cinema_id' => '1',
                'movie_id' => '5',
            ),
            array(
                'cinema_id' => '1',
                'movie_id' => '6',
            ),
            array(
                'cinema_id' => '1',
                'movie_id' => '7',
            ),
            array(
                'cinema_id' => '1',
                'movie_id' => '8',
            ),
            array(
                'cinema_id' => '1',
                'movie_id' => '9',
            ),
            array(
                'cinema_id' => '2',
                'movie_id' => '1',
            ),
            array(
                'cinema_id' => '2',
                'movie_id' => '2',
            ),
            array(
                'cinema_id' => '2',
                'movie_id' => '3',
            ),
            array(
                'cinema_id' => '2',
                'movie_id' => '4',
            ),
            array(
                'cinema_id' => '2',
                'movie_id' => '5',
            ),
            array(
                'cinema_id' => '2',
                'movie_id' => '6',
            ),
            array(
                'cinema_id' => '2',
                'movie_id' => '7',
            ),
            array(
                'cinema_id' => '2',
                'movie_id' => '8',
            ),
            array(
                'cinema_id' => '2',
                'movie_id' => '9',
            ),
            array(
                'cinema_id' => '3',
                'movie_id' => '1',
            ),
            array(
                'cinema_id' => '3',
                'movie_id' => '2',
            ),
            array(
                'cinema_id' => '3',
                'movie_id' => '3',
            ),
            array(
                'cinema_id' => '4',
                'movie_id' => '4',
            ),
            array(
                'cinema_id' => '4',
                'movie_id' => '5',
            ),
            array(
                'cinema_id' => '4',
                'movie_id' => '6',
            ),
            array(
                'cinema_id' => '4',
                'movie_id' => '7',
            ),
            array(
                'cinema_id' => '5',
                'movie_id' => '8',
            ),
            array(
                'cinema_id' => '5',
                'movie_id' => '9',
            ),
            array(
                'cinema_id' => '6',
                'movie_id' => '1',
            ),
            array(
                'cinema_id' => '6',
                'movie_id' => '2',
            ),
            array(
                'cinema_id' => '6',
                'movie_id' => '3',
            ),
            array(
                'cinema_id' => '7',
                'movie_id' => '4',
            ),
            array(
                'cinema_id' => '7',
                'movie_id' => '5',
            ),
            array(
                'cinema_id' => '7',
                'movie_id' => '6',
            ),
            array(
                'cinema_id' => '7',
                'movie_id' => '7',
            ),
            array(
                'cinema_id' => '8',
                'movie_id' => '8',
            ),
            array(
                'cinema_id' => '8',
                'movie_id' => '9',
            )
            );        
        $this->db->insert_batch('cinema_movies_rel', $data);
    }

    public function down(){
        $this->db->empty_table('cinema_movies_rel');
    }
}