<?php

namespace App\Controllers;

use App\Models\UserModel;


class Admin extends BaseController
{
    public function index()
    {
        $session = session();
        if($session->has('id')){
            $model = new UserModel();
            $data['table'] = $model->findAll();
            return view('admin',$data);
        }else{
            return view('login');
        }
    }
    public function borded()
    {
        $session = session();
        if($session->has('id')){
            $model = new UserModel();
            $data['table'] = $model->findAll();
            return view('borded',$data);
        }else{
            return view('login');
        }
    }
    public function notBorded()
    {
        $session = session();
        if($session->has('id')){
            $model = new UserModel();
            $data['table'] = $model->findAll();
            return view('not-borded',$data);
        }else{
            return view('login');
        }
    }
    public function hasNote()
    {
        $session = session();
        if($session->has('id')){
            $model = new UserModel();
            $data['table'] = $model->findAll();
            return view('has-note', $data);
        }else{
            return view('login');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return view('login');
    }


    public function userToAdmin($id)
    {
        $model = new UserModel();
     
        $data = [
                   'note' => 0,
                   'borded' => 0,
                   'admin' => 1,
                   ];
      $model->update($id,$data);
      return redirect()->to(base_url('/Admin/index'));
        
    }
    

    public function adminToUser($id)
    {
        $model = new UserModel();
     
        $data = [
                   'note' => 0,
                   'borded' => 0,
                   'admin' => 0,
                   ];
      $model->update($id,$data);
     $result =  $model->where('id',$id)->first();
      if($result){
        return view('home');
      }else{

          return redirect()->to(base_url('/Admin/index'));
      }
        
    }

    public function addnote($id)
    {
        
       $model = new UserModel();
       $data['table'] = $model->where('id',$id)->first();
       return view('ad-note',$data);
    }
    public function updateaddnote()
    {
        
       $model = new UserModel();
         $id = $this->request->getVar('id');
      
         $data = ['ad_note' => $this->request->getVar('adnote'),
                    'note' => 1,
                    'borded' => 0,
                    'admin' => 0,
                    ];
       $model->update($id,$data);
       return redirect()->to(base_url('/Admin/hasNote'));
    }
    public function changetobord($id)
    {
        
       $model = new UserModel();
        
         $data = ['note' => 0,
                    'borded' => 1,
                    'admin' => 0,
                    ];
       $model->update($id,$data);
       return redirect()->to(base_url('/Admin/borded'));
    }
    public function changetonotbord($id)
    {
        
       $model = new UserModel();
        
         $data = [   'note' => 0,
                    'borded' => 0,
                    'admin' => 0,
                    ];
       $model->update($id,$data);
       return redirect()->to(base_url('/Admin/notBorded'));
    }
    public function removenote($id)
    {
        
       $model = new UserModel();
        
         $data = [  'ad_note' => Null,
                    'note' => 0,
                    'borded' => 0,
                    'admin' => 0,
                    ];
       $model->update($id,$data);
       return redirect()->to(base_url('/Admin/notBorded'));
    }

}
