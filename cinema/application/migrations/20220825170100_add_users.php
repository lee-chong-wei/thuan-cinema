<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration {

    public function up()
    {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '5',
                'auto_increment' => TRUE
            ),

            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'unique' => true
            ),
            'birthdate' => array(
                'type' => 'date'
            ),
            'phone' => array(
                'type' => 'VARCHAR',
                'constraint' => '20'
            ),
            'gender' => array(
                'type' => 'text',
                'constraint' => '10'
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'unique' => true
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'verification_key' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'email_verified' => array(
                'type' => 'VARCHAR',
                'constraint' => '10',
                'default' => 'no'
            )
            );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id');
        $this->dbforge->create_table('users',TRUE);

    }

    public function down(){
        $this->dbforge->drop_table('users');
    }
}