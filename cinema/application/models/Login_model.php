<?php
defined('BASEPATH') OR exit('No direct scrypt access allowed');

class Login_model extends CI_Model{

    public function insert_data_user($array)
    {
       $this->db->insert('users', $array);
       $id = $this->db->insert_id();
       return $id;
    }
    public function login()
    {
        $data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        $query = $this->db->get('users');
        foreach ($query->result_array() as $row) {
            if ($data['email'] = $row['email']) {
                if ($data['password'] = $row['password']) {
                    $this->session->set_flashdata('message', 'Login success!' );
                }
                else{
                    $this->session->set_flashdata('message', 'incorrect, please check again!');
                    echo 'incorrect, please check again!';
                }
            }
            else{
                $this->session->set_flashdata('message','Please sign up to continue!' );
            }
        }
        return;
    }
}