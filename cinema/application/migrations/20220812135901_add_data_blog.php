<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_data_blog extends CI_Migration {

    public function up()
    {
        $data = array(
            array(
                'movie_id' => '1',
                'title' => 'bennedict-cumberbatch-bao-ve-doctor-strange-5',
                'description' => '“Tôi nghĩ nên tha thứ việc ai đó vì quan tâm người khác mà gây ra hậu quả.” Nam diễn viên Marvel cho biết! ',
                'link' => '/Galaxy_cinema/movie-blog/benedict-cumberbatch-bao-ve-doctor-strange',
                'image' => '/assets/img/blog-dien-anh/bennedict-cumberbatch-bao-ve-doctor-strange-5.jpeg',
                'views' => '1118',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-22'
            ),
            array(
                'movie_id' => '2',
                'title' => 'Bóc Trứng Phục Sinh Doctor Strange In The Multiverse Of Madness!',
                'description' => '<strong>Doctor Strange In The Multiverse Of Madness </strong> tràn ngập Trứng Phục Sinh! Các Stars nhận ra bao nhiêu?',
                'link' => '/Galaxy_cinema/movie-blog/boc-trung-phuc-sinh-doctor-strange-in-the-multiverse-of-madness',
                'image' => '/assets/img/blog-dien-anh/boc-trung-phuc-sinh-doctor-strange-in-the-multiverse-of-madness-5.jpeg',
                'views' => '2198',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-22'
            ),
            array(
                'movie_id' => '3',
                'title' => 'Bóc Trứng Phục Sinh Thor: Love And Thunder!',
                'description' => '<i>Phim mới </i> <strong>Thor: Love And Thunder </strong> "có hàng chục trứng Phục Sinh cỡ bự. Cùng Galaxy Cinema xem thử các Stars đã bắt"',
                'link' => '/Galaxy_cinema/movie-blog/boc-trung-phuc-sinh-thor-love-and-thunder',
                'image' => '/assets/img/blog-dien-anh/boc-trung-phuc-sinh-thor-love-and-thunder-13.jpeg',
                'views' => '53',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-22'
            ),
            array(
                'movie_id' => '4',
                'title' => 'Trailer Thor: Love And Thunder Tiết Lộ Kẻ Sát Thần Đáng Sợ',
                'description' => '"Trailer" <strong> Thor: Love And Thunder </strong> "hé lộ khung cảnh Olympus và ra mắt tay phản diện sừng sỏ Gorr!"',
                'link' => '/Galaxy_cinema/movie-blog/trailer-thor-love-and-thunder-tiet-lo-ke-sat-than-dang-so',
                'image' => '/assets/img/blog-dien-anh/trailer-thor-love-and-thunder-tiet-lo-ke-sat-than-dang-so-9.jpeg',
                'views' => '2665',
                'start_time' => '2022-06-22',
                'end_time' => '2022-09-22'
            )
            );
        $this->db->insert_batch('blog', $data);
    }

    public function down(){
        $this->db->empty_table('blog');
    }
}