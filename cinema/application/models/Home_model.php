<?php
defined('BASEPATH') OR exit('No direct scrypt access allowed');

class Home_model extends CI_Model{
    
    public function get_data_table()
    {
        // play poster
        $query = $this->db->get('poster');
        $data1 = $query->result_array();

        // get data movie     
        $query = $this->db->get('movies');
        $data2 = $query->result_array();

        // promotion
        $query = $this->db->get('promotion');
        $data3 = $query->result_array();
        
        // end hot new
        $query = $this->db->get('hot_new');
        $data4 = $query->result_array();
        
         // movie_commentary
         $query = $this->db->get('commentary');
         $data5 = $query->result_array();

         // movies blog
        $query = $this->db->get('blog');
        $data6 = $query->result_array();


        // get table data movie and cinema
        $query = $this->db->get('cinema_movies_rel');
        $data7 = $query->result_array();

        // get table data movie and cinema
        $query = $this->db->get('cinema');
        $data8 = $query->result_array();

        // get table movie schedule
        $query = $this->db->get('movie_schedule_rel');
        $data9 = $query->result_array();

        // get table title
        $query = $this->db->get('title');
        $data10 = $query->result_array();

        $data_table = array(
            'poster' => $data1,
            'movies' => $data2,
            'promotion' => $data3,
            'hot_new' => $data4,
            'commentary' => $data5,
            'blog' => $data6,
            'cinema_movies_rel' => $data7,
            'cinema' => $data8,
            'movie_schedule_rel' => $data9,
            'title' => $data10
        );
        return $data_table;
    }
       
    function join_data_table()
    {   
        //join cinema_movie_rel to get movie name on quick buying ticket
        $sql = 'ALTER TABLE cinema_movies_rel
                ADD FOREIGN KEY (movie_id) REFERENCES movies(movie_id);';
        $this->db->query($sql);

        $sql1 = ' ALTER TABLE cinema_movies_rel
                    ADD FOREIGN KEY (cinema_id) REFERENCES cinema(cinema_id);';
        $this->db->query($sql1);

        // join movie_schedule to get movie schedule for quick buying ticket
        $sql2 = 'ALTER TABLE movie_schedule_rel
                ADD FOREIGN KEY (movie_id) REFERENCES movies(movie_id);';
        $this->db->query($sql2);            
    }
 
         
}
