<?php

use function PHPSTORM_META\type;

defined('BASEPATH') or exit('No direct scrypt access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('encryption');
        $this->load->model('Home_model');
        $this->load->model('Login_model');
        $this->load->helper(array('form', 'url'));
    }
    public function index()
    {
        $this->Home_model->join_data_table();
        $data['Galaxy'] = $this->Home_model->get_data_table();
        $this->load->view('Home_view', $data);
    }

    public function Register()
    {

        $this->form_validation->set_rules('username', 'Username', 'required|min_length[6]');
        $this->form_validation->set_rules('phone', 'Phone', 'required|max_length[10]');
        $this->form_validation->set_rules('gender[]', 'Gender', 'required', array('required' => 'please select your gender'));
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]', array('is_unique' => 'Email already exist, please login to continue'));
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('confirm_password', 'Confirm_password', 'trim|required|matches[password]', array('required' => 'Password did not match'));
        $this->form_validation->set_rules('birthdate', 'Birthdate', 'trim|required');

        if ($this->form_validation->run() == false) {
            $array = $this->form_validation->error_array();
            $data = json_encode($array);
            echo $data;
        } else {

            $verification_key = md5(rand());
            $password = $this->input->post('password');
            $encrypted_password = $this->encryption->encrypt($password);
            $array = array(
                'username' => $this->input->post('username'),
                'birthdate' => $this->input->post('birthdate'),
                'phone' => $this->input->post('phone',),
                'gender' => $this->input->post('gender[]'),
                'email' => $this->input->post('email'),
                'password' => $encrypted_password,
                'verification_key' => $verification_key,
            );
            $id = $this->Login_model->insert_data_user($array);
        }

        // if ($id >0 ) {
        //     // verify email for login
        //     $subject = "Please verify email for login";
        //     $message = "
        //     <p> Hi ".$this->input->post('username')." </p>
        //     <p> Please verify your email by click this <a href='".base_url()."home/verify_email/".$verification_key."'>link</a>.</p>
        //     <p> Once you click on this link, your email will be verification and you can log in into system. </p>
        //     <p> Thanks </p> 
        //     ";
        //     $config = array(
        //         'protocol' => 'smtp',
        //         'smtp_host' => 'ssl://smtp.googlemail.com',
        //         'smtp_port' => 465,
        //         'smtp_user'     =>  'thuan17889@gmail.com',
        //         'smtp_pass'     =>  'Runsven@123',
        //         'mail_type'     =>  'html',
        //         'charset'       =>  'iso_8859-1',
        //         'wordwrap'      => TRUE 
        //     );
        //     $this->load->library('email', $config);
        //     $this->email->set_newline("\r\n");
        //     $this->email->from('thuan17889@gmail.com');
        //     $this->email->to($this->input->post('user_email'));
        //     $this->email->subject($subject);
        //     $this->email->message($message);
        // }

    }

    public function SignIn()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', array('valid_email' => 'Please enter correct email address'));
        $this->form_validation->set_rules('password', 'Pasword', 'trim|required');
        if ($this->form_validation->run() == false) {
            $array = $this->form_validation->error_array();
            $data = json_encode($array);
            echo $data;
        } else {
            $data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            $query = $this->db->get('users');
            $users = $query->result_array();
            
            $k = array();
            for ($i = 0; $i < count($users); $i++) {
                if ($data['email'] == $users[$i]['email']) {
                    $k = array_push($k,$users[$i] );
                }
            }
            var_dump($users[0]);
        }
    }
}
