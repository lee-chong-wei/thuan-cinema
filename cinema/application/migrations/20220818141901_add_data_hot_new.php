<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_data_hot_new extends CI_Migration {

    public function up()
    {
        $data = array(
            'title' => 'Thor & Love THunder',
            'image' => 'http://localhost/Galaxy_cinema/assets/img/hotnew.png',
            'link' => '/Galaxy_cinema/Thor_Thunder',
            'start_time' => '2022-07-22',
            'end_time' => '2022-09-12'
        );
        $this->db->insert('hot_new', $data);

    }

    public function down(){
        $this->db->empty_table('hot_new');
    }
}