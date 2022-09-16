<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_data_title extends CI_Migration {

    public function up()
    {
        $data = array(
            'title' => 'Galaxy Cinema | Cum Phim Hien Dai Nhat Viet Nam',
            'link' => 'Galacycine.vn'
        );
        $this->db->insert('title', $data);

    }

    public function down(){
        $this->db->empty_table('title');
    }
}