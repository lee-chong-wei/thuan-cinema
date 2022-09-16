<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_data_commentary extends CI_Migration {

    public function up()
    {
        $data = array(
            array(
                'movie_id' => '1', 
                'title' => '[Preview] Thor Love And Thunder: Lời Chia Tay Của Chris Hemsworth?',
                'description' => 'Nếu có bằng khen vinh danh người hồi sinh loạt phim đang hấp hối, 
                Taika Waititi sẽ nhận cả chục cái nhờ công đem',
                'link' => '/Galaxy_cinema/binh_luan_phim/preview-thor-love-and-thunder-loi-chia-tay-cua-chris-hemsworth',
                'image' => 'http://localhost/Galaxy_cinema/assets/img/Binh-luan-phim/thor_1656648677856.jpeg',
                'views' => '2123',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-22'
            ),
            array(
                'movie_id' => '2',
                'title' => '[Review] Minions 2: Cười Thỏa Mãn Với Binh Đoàn Siêu Quậy Vàng Khè',
                'description' => '"Là phim hoạt hình dành cho trẻ con, nên những gì mà"
                <i>Minions 2</i> "mang tới chính là những tràng cười sảng khoái."',
                'link' => '/Galaxy_cinema/binh_luan_phim/review-minions-2-cuoi-thoa-man-voi-binh-doan-sieu-quay-vang-khe',
                'image' => 'http://localhost/Galaxy_cinema/assets/img/Binh-luan-phim/review-minions-2.jpeg',
                'views' => '1775',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-22'
            ),
            array(
                'movie_id' => '3',
                'title' => '[Review] The Black Phone: Đầy Kinh Dị Và Đủ Giải Trí',
                'description' => '"Được chuyển thể từ quyển tiểu thuyết cùng tên của Joe Hill,"
                <i><strong>The Black Phone</strong></i> "là tác phẩm kinh dị đang gieo rắc ám ảnh"',
                'link' => '/Galaxy_cinema/binh_luan_phim/review-the-black-phone-day-kinh-di-va-du-giai-tri',
                'image' => 'http://localhost/Galaxy_cinema/assets/img/Binh-luan-phim/The-black-phone.jpeg',
                'views' => '824',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-22'
            ),
            array(
                'movie_id' => '4',
                'title' => '[Review] Thor Love And Thunder: Nâng Tầm Natalie Portman Và Tiếp Tục Để Chris Hemsworth Tấu Hài?',
                'description' => '"Đạo diễn kiêm biên kịch"
                <i>Thor: Ragnarok</i> "lẫn" 
                <strong>Thor: Love And Thunder</strong> 
                "– Taika Waititi đã chọn cách kể chuyện trào phúng."',
                'link' => '/Galaxy_cinema/binh_luan_phim/review-thor-love-and-thunder-nang-tam-natalie-portman-va-tiep-tuc-de-chris-hemsworth-tau-hai',
                'image' => 'http://localhost/Galaxy_cinema/assets/img/Binh-luan-phim/thor-love-and-thunder-nang-tam-natalie-portman-va-tiep-tuc-de-chris-hemsworth-tau-hai.jpeg',
                'views' => '723',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-22'
            )
        );
        
        $this->db->insert_batch('commentary', $data);
    }

    public function down(){
        $this->db->empty_table('commentary');
    }
}