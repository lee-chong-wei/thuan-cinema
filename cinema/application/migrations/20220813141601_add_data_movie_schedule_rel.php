<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_data_movie_schedule_rel extends CI_Migration {

    public function up()
    {
        $data = array(
            array(
                'movie_id' => '1',
                'date' => '2022-07-22',
                'time' => '10:45',
                'description' => 'phu de, 2D'
            ),
            array(
                'movie_id' => '1',
                'date' => '2022-07-22',
                'time' => '11:45',
                'description' => 'phu de, 2D'
            ),
            array(
                'movie_id' => '1',
                'date' => '2022-07-22',
                'time' => '17:45',
                'description' => 'phu de, 2D'
            ),
            array(
                'movie_id' => '2',
                'date' => '2022-07-22',
                'time' => '10:45',
                'description' => 'phu de, 2D'
            ),
            array(
                'movie_id' => '2',
                'date' => '2022-07-22',
                'time' => '13:45',
                'description' => 'phu de, 2D'
            ),
            array(
                'movie_id' => '3',
                'date' => '2022-07-22',
                'time' => '10:45',
                'description' => 'phu de, 2D'
            ),
            array(
                'movie_id' => '3',
                'date' => '2022-07-22',
                'time' => '10:45',
                'description' => 'phu de, 2D'
            ),
            array(
                'movie_id' => '4',
                'date' => '2022-07-22',
                'time' => '10:45',
                'description' => 'phu de, 2D'
            ),
            array(
                'movie_id' => '4',
                'date' => '2022-07-22',
                'time' => '10:45',
                'description' => 'phu de, 2D'
            ),
            array(
                'movie_id' => '4',
                'date' => '2022-07-22',
                'time' => '19:45',
                'description' => 'phu de, 2D'
            ),
            array(
                'movie_id' => '5',
                'date' => '2022-07-22',
                'time' => '10:45',
                'description' => 'phu de, 2D'
            ),
            array(
                'movie_id' => '5',
                'date' => '2022-07-22',
                'time' => '20:45',
                'description' => 'phu de, 2D'
            ),
            array(
                'movie_id' => '6',
                'date' => '2022-07-22',
                'time' => '10:45',
                'description' => 'phu de, 2D'
            ),
            array(
                'movie_id' => '6',
                'date' => '2022-07-22',
                'time' => '19:45',
                'description' => 'phu de, 2D'
            ),
            array(
                'movie_id' => '7',
                'date' => '2022-07-22',
                'time' => '10:45',
                'description' => 'phu de, 2D'
            ),
            array(
                'movie_id' => '7',
                'date' => '2022-07-22',
                'time' => '16:45',
                'description' => 'phu de, 2D'
            ),
            array(
                'movie_id' => '7',
                'date' => '2022-07-22',
                'time' => '18:45',
                'description' => 'phu de, 2D'
            ),
            array(
                'movie_id' => '8',
                'date' => '2022-07-22',
                'time' => '10:45',
                'description' => 'phu de, 2D'
            ),
            array(
                'movie_id' => '8',
                'date' => '2022-07-22',
                'time' => '19:45',
                'description' => 'phu de, 2D'
            ),
            array(
                'movie_id' => '8',
                'date' => '2022-07-22',
                'time' => '12:45',
                'description' => 'phu de, 2D'
            )
            );       
        
        $this->db->insert_batch('movie_schedule_rel', $data);
    }

    public function down(){
        $this->db->empty_table('movie_schedule_rel');
    }
}