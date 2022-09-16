<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_data_movie extends CI_Migration {

    public function up()
    {
        $data = array(
            array(
                'names_EN' => 'DRAGON BALL SUPER: SUPER HERO',
                'names_VN' => '7 vien ngoc rong',
                'image_home' => '/assets/img/movie_home/Thor-tinh-yeu-sam-set.jpeg',
                'image_ticket' => '/assets/img/movie_ticket/300_Beast.jpeg',
                'link' => '/Galaxy_cinema/dat-ve/thor-love-and-thunder',
                'trailer' => 'bac',
                'duration' => '100 minute',
                'actress' => 'Pham The Thuan',
                'director' => 'Thuan',
                'production' => 'Disney',
                'types' => 'animate',
                'national' => 'Viet Nam',
                'release_date' => '19/10/2022',
                'description' => 'asdasdad',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-22'
            ),
            array(
                'names_EN' => 'MINIONS: THE RISE OF GRU',
                'names_VN' => 'MINIONS: SỰ TRỖI DẬY CỦA GRU',
                'image_home' => '/assets/img/movie_home/Minion.jpeg',
                'image_ticket' => '/assets/img/movie_ticket/300_Beast.jpeg',
                'link' => '/Galaxy_cinema/dat-ve/minions-the-rise-of-gru',
                'trailer' => 'asdaas',
                'duration' => '100 minute',
                'actress' => 'Pham The Thuan',
                'director' => 'Thuan',
                'production' => 'Disney',
                'types' => 'animate',
                'national' => 'Viet Nam',
                'release_date' => '19/10/2022',
                'description' => 'asdasdad',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-22'
            ),
            array(
                'names_EN' => 'DECISION TO LEAVE',
                'names_VN' => 'QUYẾT TÂM CHIA TAY',
                'image_home' => '/assets/img/movie_home/Em_va_trinh.jpeg',
                'image_ticket' => '/assets/img/movie_ticket/300_Beast.jpeg',
                'link' => '/Galaxy_cinema/dat-ve/em-va-trinh',
                'trailer' => 'asdasd',
                'duration' => '100 minute',
                'actress' => 'Pham The Thuan',
                'director' => 'Thuan',
                'production' => 'Disney',
                'types' => 'animate',
                'national' => 'Viet Nam',
                'release_date' => '19/10/2022',
                'description' => 'asdasdad',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-22'
            ),
            array(
                'names_EN' => 'BULLET TRAIN',
                'names_VN' => 'SÁT THỦ ĐỐI ĐẦU',
                'image_home' => '/assets/img/movie_home/bullet_train.jpeg',
                'image_ticket' => '/assets/img/movie_ticket/300_Beast.jpeg',
                'link' => '/Galaxy_cinema/dat-ve/bullet_train',
                'trailer' => 'asdasd',
                'duration' => '100 minute',
                'actress' => 'Pham The Thuan',
                'director' => 'Thuan',
                'production' => 'Disney',
                'types' => 'animate',
                'national' => 'Viet Nam',
                'release_date' => '19/10/2022',
                'description' => 'asdasdad',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-22'
            ),
            array(
                'names_EN' => 'ALIENOID',
                'names_VN' => 'ALIENOID: CUỘC CHIẾN XUYÊN KHÔNG',
                'image_home' => '/assets/img/movie_home/alienoid.jpeg',
                'image_ticket' => '/assets/img/movie_ticket/300_Beast.jpeg',
                'link' => '/Galaxy_cinema/dat-ve/alienoid',
                'trailer' => 'asaass',
                'duration' => '100 minute',
                'actress' => 'Pham The Thuan',
                'director' => 'Thuan',
                'production' => 'Disney',
                'types' => 'animate',
                'national' => 'Viet Nam',
                'release_date' => '19/10/2022',
                'description' => 'asdasdad',
                'start_time' => '2022-08-22',
                'end_time' => '2022-09-22'
            ),
            array(
                'names_EN' => 'Gulliver return',
                'names_VN' => 'GULLIVER DU KÝ',
                'image_home' => '/assets/img/movie_home/gulliver_returns.jpeg',
                'image_ticket' => '/assets/img/movie_ticket/300_Beast.jpeg',
                'link' => '/Galaxy_cinema/dat-ve/gulliver_returns',
                'trailer' => 'asdasda',
                'duration' => '100 minute',
                'actress' => 'Pham The Thuan',
                'director' => 'Thuan',
                'production' => 'Disney',
                'types' => 'animate',
                'national' => 'Viet Nam',
                'release_date' => '19/10/2022',
                'description' => 'asdasdad',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-22'
            ),
            array(
                'names_EN' => 'DUYÊN MA',
                'names_VN' => 'DUYÊN MA',
                'image_home' => '/assets/img/movie_home/duyen_ma.jpeg',
                'image_ticket' => '/assets/img/movie_ticket/300_Beast.jpeg',
                'link' => '/Galaxy_cinema/dat-ve/duyen_ma',
                'trailer' => 'asdasd',
                'duration' => '100 minute',
                'actress' => 'Pham The Thuan',
                'director' => 'Thuan',
                'production' => 'Disney',
                'types' => 'animate',
                'national' => 'Viet Nam',
                'release_date' => '19/10/2022',
                'description' => 'asdasdad',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-22'
            ),
            array(
                'names_EN' => 'EMERGENCY DECLARATION',
                'names_VN' => 'HẠ CÁNH KHẨN CẤP',
                'image_home' => '/assets/img/movie_home/emergency_declaration.jpeg',
                'image_ticket' => '/assets/img/movie_ticket/300_Beast.jpeg',
                'link' => '/Galaxy_cinema/dat-ve/emergency_declaration',
                'trailer' => 'asdasdas',
                'duration' => '100 minute',
                'actress' => 'Pham The Thuan',
                'director' => 'Thuan',
                'production' => 'Disney',
                'types' => 'animate',
                'national' => 'Viet Nam',
                'release_date' => '19/10/2022',
                'description' => 'asdasdad',
                'start_time' => '2022-09-22',
                'end_time' => '2022-10-22'
            ),
            array(
                'names_EN' => 'DÂN CHƠI KHÔNG SỢ CON RƠI',
                'names_VN' => 'DÂN CHƠI KHÔNG SỢ CON RƠI',
                'image_home' => '/assets/img/movie_home/dan_choi.jpeg',
                'image_ticket' => '/assets/img/movie_ticket/300_Beast.jpeg',
                'link' => '/Galaxy_cinema/dat-ve/dan_choi',
                'trailer' => 'asdasdas',
                'duration' => '100 minute',
                'actress' => 'Pham The Thuan',
                'director' => 'Thuan',
                'production' => 'Disney',
                'types' => 'animate',
                'national' => 'Viet Nam',
                'release_date' => '19/10/2022',
                'description' => 'asdasdad',
                'start_time' => '2022-09-22',
                'end_time' => '2022-10-22'
            ),
            array(
                'names_EN' => 'MY GIRL',
                'names_VN' => 'ĐIỀU ƯỚC CUỐI CÙNG CỦA TÙ NHÂN',
                'image_home' => '/assets/img/movie_home/my_girl.jpeg',
                'image_ticket' => '/assets/img/movie_ticket/300_Beast.jpeg',
                'link' => '/Galaxy_cinema/dat-ve/my_girl',
                'trailer' => 'asdasdas',
                'duration' => '100 minute',
                'actress' => 'Pham The Thuan',
                'director' => 'Thuan',
                'production' => 'Disney',
                'types' => 'animate',
                'national' => 'Viet Nam',
                'release_date' => '19/10/2022',
                'description' => 'asdasdad',
                'start_time' => '2022-09-22',
                'end_time' => '2022-10-22'
            ),
            array(
                'names_EN' => 'DETECTIVE CONAN MOVIE 25:',
                'names_VN' => 'THÁM TỬ LỪNG DANH CONAN: NÀNG DÂU HALLOWEEN',
                'image_home' => '/assets/img/movie_home/Conan.jpeg',
                'image_ticket' => '/assets/img/movie_ticket/300_Beast.jpeg',
                'link' => '/Galaxy_cinema/dat-ve/Conan',
                'trailer' => 'asdasda',
                'duration' => '100 minute',
                'actress' => 'Pham The Thuan',
                'director' => 'Thuan',
                'production' => 'Disney',
                'types' => 'animate',
                'national' => 'Viet Nam',
                'release_date' => '19/10/2022',
                'description' => 'asdasdad',
                'start_time' => '2022-09-22',
                'end_time' => '2022-10-22'
            ),
            array(
                'names_EN' => 'DC LEAGUE OF SUPER-PETS',
                'names_VN' => 'LIÊN MINH SIÊU THÚ',
                'image_home' => '/assets/img/movie_home/DC_league_of_super_pets.jpeg',
                'image_ticket' => '/assets/img/movie_ticket/300_Beast.jpeg',
                'link' => '/Galaxy_cinema/dat-ve/DC_league_of_super_pets',
                'trailer' => 'asdasdasda',
                'duration' => '100 minute',
                'actress' => 'Pham The Thuan',
                'director' => 'Thuan',
                'production' => 'Disney',
                'types' => 'animate',
                'national' => 'Viet Nam',
                'release_date' => '19/10/2022',
                'description' => 'asdasdad',
                'start_time' => '2022-09-22',
                'end_time' => '2022-10-22'
            ),
            array(
                'names_EN' => 'HAUNTED UNIVERSITIES SECOND SEMESTER',
                'names_VN' => 'CHUYỆN MA GIẢNG ĐƯỜNG – HỌC KỲ 2',
                'image_home' => '/assets/img/movie_home/haunted_universities.jpeg',
                'image_ticket' => '/assets/img/movie_ticket/300_Beast.jpeg',
                'link' => '/Galaxy_cinema/dat-ve/haunted_universities',
                'trailer' => 'asdasdas',
                'duration' => '100 minute',
                'actress' => 'Pham The Thuan',
                'director' => 'Thuan',
                'production' => 'Disney',
                'types' => 'animate',
                'national' => 'Viet Nam',
                'release_date' => '19/10/2022',
                'description' => 'asdasdad',
                'start_time' => '2022-09-22',
                'end_time' => '2022-10-22'
            ),
            array(
                'names_EN' => 'HAUNTED UNIVERSITIES SECOND SEMESTER',
                'names_VN' => 'CHUYỆN MA GIẢNG ĐƯỜNG – HỌC KỲ 2',
                'image_home' => '/assets/img/movie_home/haunted_universities.jpeg',
                'image_ticket' => '/assets/img/movie_ticket/300_Beast.jpeg',
                'link' => '/Galaxy_cinema/dat-ve/haunted_universities',
                'trailer' => 'asdasdas',
                'duration' => '100 minute',
                'actress' => 'Pham The Thuan',
                'director' => 'Thuan',
                'production' => 'Disney',
                'types' => 'animate',
                'national' => 'Viet Nam',
                'release_date' => '19/10/2022',
                'description' => 'asdasdad',
                'start_time' => '2022-09-22',
                'end_time' => '2022-10-22'
            )    
        );
        
        $this->db->insert_batch('movies', $data);
    }

    public function down(){
        $this->db->empty_table('movies');
    }
}