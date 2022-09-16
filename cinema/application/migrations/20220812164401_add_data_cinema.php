<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_data_cinema extends CI_Migration {

    public function up()
    {
        $data = array(
            array(
                'name' => 'Galaxy Nguyen Du',
                'address' => '116 Nguyễn Du, Phường Bến Thành, Quận 1, Thành phố Hồ Chí Minh',
                'phone' => '1900 2224',
                'leader' => 'Nguyen Du'
            ),
            array(
                'name' => 'Galaxy Tan Binh',
                'address' => '246 Đ. Nguyễn Hồng Đào, Phường 13, Tân Bình, Thành phố Hồ Chí Minh',
                'phone' => '1900 2224',
                'leader' => 'Tan Binh'
            ),
            array(
                'name' => 'Galaxy Kinh Duong Vuong',
                'address' => '718bis Kinh Đ. Vương, Phường 13, Quận 6, Thành phố Hồ Chí Minh',
                'phone' => '1900 2224',
                'leader' => 'Kinh Duong Vuong'
            ),
            array(
                'name' => 'Galaxy Quang Trung',
                'address' => '304A Quang Trung, Phường 11, Gò Vấp, Thành phố Hồ Chí Minh',
                'phone' => '1900 2224',
                'leader' => 'Quang Trung'
            ),
            array(
                'name' => 'Galaxy Ben Tre',
                'address' => 'Lầu 1, TTTM Sense City, 26A Trần Quốc Tuấn, Phường 4, Bến Tre',
                'phone' => '1900 2224',
                'leader' => 'Ben Tre'
            ),
            array(
                'name' => 'Galaxy Da Nang',
                'address' => 'Coop Mart, 478 Điện Biên Phủ, Thanh Khê Đông, Thanh Khê, Đà Nẵng 550000',
                'phone' => '1900 2224',
                'leader' => 'Da Nang'
            ),
            array(
                'name' => 'Galaxy Ca Mau',
                'address' => 'Sense City, 9 Đ. Trần Hưng Đạo, Phường 5, Thành phố Cà Mau, Cà Mau 700000',
                'phone' => '1900 2224',
                'leader' => 'Ca Mau'
            ),
            array(
                'name' => 'Galaxy Hai Phong',
                'address' => '104 P. Lương Khánh Thiện, Lương Khá Thien, Ngô Quyền, Hải Phòng 180000',
                'phone' => '1900 2224',
                'leader' => 'Hai Phong'
            )  
        );
        $this->db->insert_batch('cinema', $data);
    }

    public function down(){
        $this->db->empty_table('cinema');
    }
}