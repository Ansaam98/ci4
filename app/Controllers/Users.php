<?php namespace App\Controllers;

use App\Models\UsersModel;

Class Users extends BaseController{


    public function index(){

        $data['view_file'] = 'users/signup';

        echo view('app/layout',$data);
    
    }


    public function login(){

        protected $session;
        $session = session();


        function __construct()
        {
    
            $this->session = \Config\Services::session();
            $this->session->start();
    
    
        }
        $sessiondata = [
            'username' => $this->request->getPost('username')
            'email'=> $this->request->getPost('email')
        ];
        $this->session->set($sessiondata)

        $data['view_file'] = 'users/login';

        echo view('app/layout',$data);
    }


    public function datatable(){
        $data['view_file'] = 'users/datatable';

        echo view('app/layout',$data);
    }

    public function signup(){

        if ( $this->request->getMethod(true) == 'POST' ){

            $rules = [
                'username'  => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
                'password'  => 'required|min_length[8]|max_length[20]',
                'cpassword' => 'matches[password]',
                'email'     => 'required|valid_email||is_unique[users.username]',
                'first_name' => 'required|min_length[1]|max_length[50]',
                'last_name' => 'required|min_length[1]|max_length[50]'
            ];

            if ( !$this->validate($rules)){

                $data['errors'] = $this->validator->getErrors();

            }


            // Get data
            $user = [
                'username' => $this->request->getPost('username')
            ];
            // Insert into table `users`

            $model = new UsersModel();
            $model->add($user);
            

            // Redirect is used to change the url by redirecting to login function
            return redirect()->to('users/login');

        }


        $data['view_file'] = 'users/signup';

        echo view('app/layout',$data);
    }


    public function logout(){

        
        $session->destroy();
        return redirect()->to('users/logout');
    }

}