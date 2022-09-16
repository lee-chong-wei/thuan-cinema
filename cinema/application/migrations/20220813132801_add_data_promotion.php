<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_data_promotion extends CI_Migration {

    public function up()
    {
        $data = array(
                array(
                    'name' => 'Bap + ve chi 99k',
                    'image' => '/assets/img/khuyen-mai/glx-qt-vebap99k.jpeg',
                    'link' => '/Galaxy_cinema/khuyen-mai/bap-ve-chi-99k',
                    'description' => 'Xem phim phủ phê, hả hê nhai bắp chỉ với 99k! Tin được không?',
                    'start_time' => '2022-07-22',
                    'end_time' => '2022-09-22'
                ),
                array(
                    'name' => 'Mua Và Tặng Khi Xem Em và Trịnh',
                    'image' => '/assets/img/khuyen-mai/xemphimevt.jpeg',
                    'link' => '/Galaxy_cinema/khuyen-mai/mua-va-tang-khi-xem-em-va-trinh',
                    'description' => 'Stars chi viec mua ve, bao nuoc de Galaxy lo',
                    'start_time' => '2022-07-22',
                    'end_time' => '2022-09-22'
                ),
                array(
                    'name' => 'Voucher Giảm 50K Dành Tặng Các Stars!',
                    'image' => '/assets/img/khuyen-mai/shopee-2906-1200x1800.jpeg',
                    'link' => '/Galaxy_cinema/khuyen-mai/voucher-giam-50k-danh-tang-cac-stars',
                    'description' => 'Loạt voucher giảm 50K dành tặng các Stars. Đặt vé ngay thôi!',
                    'start_time' => '2022-07-22',
                    'end_time' => '2022-09-22'
                ),
                array(
                    'name' => 'Combo Xi-Nê, Quà Phủ Phê',
                    'image' => '/assets/img/khuyen-mai/summer-combo-digital-300x450.jpeg',
                    'link' => '/Galaxy_cinema/khuyen-mai/combo-xi-ne-qua-phu-phe',
                    'description' => 'Chào mùa bom tấn Hollywood đổ bộ Việt Nam, Galaxy Cinema dành tặng các Stars cơn mưa ưu đãi xoa dịu nắng hè!',
                    'start_time' => '2022-07-22',
                    'end_time' => '2022-09-22'
                ),
                array(
                    'name' => 'Review Có Tâm - Nhận Quà Xứng Tầm',
                    'image' => '/assets/img/khuyen-mai/reviewnhanbong-tt-digital-300x450.jpeg',
                    'link' => '/Galaxy_cinema/khuyen-mai/review-co-tam---nhan-qua-xung-tam',
                    'description' => 'Review tích cực, nhận quà thích cực!',
                    'start_time' => '2022-07-22',
                    'end_time' => '2022-09-22'
                ),
                array(
                    'name' => 'Combo Hot Giá Siêu Hời',
                    'image' => '/assets/img/khuyen-mai/uudaicombolt-digital-300x450.jpeg',
                    'link' => '/Galaxy_cinema/khuyen-mai/combo-hot-gia-sieu-hoi',
                    'description' => 'Combo ưu đãi chào hè bom tấn!',
                    'start_time' => '2022-07-22',
                    'end_time' => '2022-09-22'
                ),
                array(
                    'name' => 'Xem Phim Hay - Nhận Voucher Garena Liền Tay',
                    'image' => '/assets/img/khuyen-mai/shopee-garena-1200x1800.jpeg',
                    'link' => '/Galaxy_cinema/khuyen-mai/xem-phim-hay---nhan-voucher-garena-lien-tay',
                    'description' => '',
                    'start_time' => '2022-07-22',
                    'end_time' => '2022-09-22'
                ),
                array(
                    'name' => 'Đổi Stars Nhận Combo Bảo Vệ Môi Trường',
                    'image' => '/assets/img/khuyen-mai/doidiemnhancombo-digital-300x450.jpeg',
                    'link' => '/Galaxy_cinema/khuyen-mai/doi-stars-nhan-combo-bao-ve-moi-truong',
                    'description' => '<strong>Galaxy Cinema</strong>  dành tặng <strong>Combo Utensil</strong>  - thân thiện môi trường ',
                    'start_time' => '2022-07-22',
                    'end_time' => '2022-09-22'
                ),
                array(
                    'name' => 'Vé Miễn Phí Dành Cho Người Giỏi Nhất',
                    'image' => '/assets/img/khuyen-mai/promotion-u22excellent-digital-300x450.jpeg',
                    'link' => '/Galaxy_cinema/khuyen-mai/ve-mien-phi-danh-cho-nguoi-gioi-nhat',
                    'description' => 'Học giỏi sẽ có quà “thơm”!',
                    'start_time' => '2022-07-22',
                    'end_time' => '2022-09-22'
                ),
                array(
                    'name' => 'Happy Day',
                    'image' => '/assets/img/khuyen-mai/happyday-300x450.jpeg',
                    'link' => '/Galaxy_cinema/khuyen-mai/happy-day',
                    'description' => 'Vào <strong>thứ 3 hàng tuần – Happy Day,</strong>  Galaxy Cinema dành tặng giá vé ưu đãi <strong> CHỈ TỪ 50K!</strong>',
                    'start_time' => '2022-07-22',
                    'end_time' => '2022-09-22'
                ),
                array(
                    'name' => 'Ngày Thành Viên - Milo Day: Ly Khủng Giá "Mini"',
                    'image' => '/assets/img/khuyen-mai/miloday-300x450.jpeg',
                    'link' => '/Galaxy_cinema/khuyen-mai/ngay-thanh-vien---milo-day-ly-khung-gia-mini',
                    'description' => 'Galaxy dành tặng các Stars thêm một ngày tràn đầy “yêu thương”',
                    'start_time' => '2022-07-22',
                    'end_time' => '2022-09-22'
                ),
                array(
                    'name' => 'Galaxy Cinema Tri Ân Thành Viên',
                    'image' => '/assets/img/khuyen-mai/trianthanhvien-300x450.png',
                    'link' => '/Galaxy_cinema/khuyen-mai/galaxy-cinema-tri-an-thanh-vien',
                    'description' => 'Tri ân tình cảm của các Stars, Galaxy Cinema dành tặng hàng loạt ưu đãi chưa – từng – có mừng 2022.',
                    'start_time' => '2022-07-22',
                    'end_time' => '2022-09-22'
                )
        );        
        $this->db->insert_batch('promotion', $data);
    }

    public function down(){
        $this->db->empty_table('promotion');
    }
}