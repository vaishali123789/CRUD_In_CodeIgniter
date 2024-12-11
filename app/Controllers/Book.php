<?php

namespace App\Controllers;

class Book extends BaseController{

    public function index(){
        echo view('books/store');
    }

    public function create(){

        $session = \Config\Services::session();
        helper('form');

        $data = [];

        if($this->request->getMethod() == 'post'){

            $input = $this->validate([
                'name' => 'required|min_length[3]',
                'author' => 'required|min_length[3]',
            ]);

            if($input == 'true'){
                // form validated successfully

            }else{
                //form not validated successfully
                $data['validation'] = $this->validator;


            }
        }
       return view('books/create',$data);

    }
}


?>