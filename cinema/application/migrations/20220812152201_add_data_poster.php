<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_data_poster extends CI_Migration {

    public function up()
    {
        $data = array(
            array(
                'name' => 'THOR: LOVE AND THUNDER',
                'image' => 'http://localhost/Galaxy_cinema/assets/img/Thor-love-thunder.jpeg',
                'link' => '/Galaxy_cinema/dat-ve/thor-love-and-thunder',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-12'
            ),
            array(
                'name' => 'Bap-ve-chi-99k',
                'image' => 'http://localhost/Galaxy_cinema/assets/img/glx-qt-vebap99k.jpeg',
                'link' => '/Galaxy_cinema/khuyen-mai/bap--ve-chi-99k',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-12'
            ),
            array(
                'name' => 'Minions',
                'image' => 'http://localhost/Galaxy_cinema/assets/img/Minions.jpeg',
                'link' => '/Galaxy_cinema/dat-ve/minions-the-rise-of-gru',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-12'
            ),
            array(
                'name' => 'Review-nhan-bong',
                'image' => 'http://localhost/Galaxy_cinema/assets/img/reviewnhanbong-tt-digital.jpeg',
                'link' => '/Galaxy_cinema/khuyen_mai/reviewnhanbong',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-12'
            ),      
            array(
                'name' => 'Galaxy-shopee',
                'image' => 'http://localhost/Galaxy_cinema/assets/img/shopee.jpeg',
                'link' => '/Galaxy_cinema/khuyen_mai/shopee',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-12'
            ), 
            array(
                'name' => 'Garena-shopee',
                'image' => 'http://localhost/Galaxy_cinema/assets/img/shopee-garena.jpeg',
                'link' => '/Galaxy_cinema/khuyen_mai/shopee-garena',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-12'
            ), 
            array(
                'name' => 'summer-combo-digital',
                'image' => 'http://localhost/Galaxy_cinema/assets/img/summer-combo-digital.jpeg',
                'link' => '/Galaxy_cinema/khuyen_mai/summer-combo-digital',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-12'
            ),
            array(
                'name' => 'uudai-combo-digital',
                'image' => 'http://localhost/Galaxy_cinema/assets/img/uudaicombolt-digita.jpeg',
                'link' => '/Galaxy_cinema/khuyen_mai/uudaicombolt-digital',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-12'
            )
        );
        $this->db->insert_batch('poster', $data);
    }

    public function down(){
        $this->db->empty_table('poster');
    }
}