<?php

namespace App\Controllers;
use Codeigniter\Controller;
use CodeIgniter\Model;
use App\Models\UserModel;
use Config\Validation;

class User extends BaseController
{
    public function login()
    {
        echo view('login');
    }
    public function singup()
    {
        return view('singup');
    }
    public function insert()
    {
       
      $email = $this->request->getVar('email');
      $password = $this->request->getVar('password');
      $cpassword = $this->request->getVar('cpassword');
   
      if($cpassword == $password){
            $data = ['name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'password' => $this->request->getVar('password'),
             ];
                $model = new UserModel();
                $result = $model->findAll();
               if($result['email'] = 0){
                $model->insert($data);

                return view('login');
               
               }else{
                
                return view('singup');
              }
            
     
          }else{
           
            return view('singup');
          }
     

    
                    
               
    }
    public function loginAction()
    {
        $model = new UserModel();
    $result =  $model->where('email',$this->request->getVar('email'))->first();
    $session = session();
      if( $result != null){
            if($result['password'] == $this->request->getVar('password')){
                if($result['admin'] == 0){
                    
                    $data = ['user_id' => $result['id']];
                    $session->set($data);

                        return view('home');
            
                }else{
               
                                $data = ['id' => $result['id'],
                                        'borded' => $result['borded'],
                                        'note' => $result['note'],
                                        ];
                                $session->set($data);
                    $model = new UserModel();
                    $data_table['table'] = $model->findAll();
                        return view('admin',$data_table);
              
                    
                }
            }else{
                echo '<h1 class="text-danger">Please Enter Correct Password:</h1>';
                return view('login');
            }
    }else{
        echo '<h1 class="text-danger">User Not Found</h1>';
            return view('login');
    }

 }

 public function logout()
 {
     $session = session();
     $session->destroy();
     return view('index');
    
 }
        
 }

