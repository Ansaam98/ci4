<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model{

    private $db;
    private $builder;

    public function __construct()
    {
    
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    
    }

    /**
     * Insert new user info
     *
     * @param array $user
     * @return void
     */
    public function add($user){

        $this->builder->insert($user);

    }

    public function login(string $username , string $password){

          // SELECT * FROM users WHERE username = $username AND password = $password
          
          $builder->select('*');
          $builder->where('username',$username);
          $builder->where('password',$password);

          //return $builder->get()->getRowArray();
          $num_results = $this->db->count_all_results();

          if ($num_results == 0){
              echo "Invalid User Name or Password";
          }else{
            $data['datatable'] = 'users/datatable';

            echo view('app/layout',$data);
          }
        
        }

    public function datatable(string $username , string $password , string $firstname , string $lastname , string $email){

        $username = $builder->select('username');
        $password = $builder->select('password');
        $firstname = $builder->select('first_name');
        $lastname = $builder->select('last_name');
        $email = $builder->select('email');


        
    }

}