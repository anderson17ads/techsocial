<?php

namespace App\Controller\Admin;

use App\Core\Controller;

/**
 * This class is used to manage users in the admin
 */
class UserController extends Controller
{
    public function index()
    {
        $this->view('admin/users/index', [
            'headTitle' => 'Users - List',
        ], 'admin');
    }

    /**
	 * Add
	 *
	 * @return void
	 */
    public function add()
    {
        $this->view('admin/users/add', [
            'headTitle' => 'Usuários - Adicionar',
            'message' => '',
        ], 'admin');
    }
    
    /**
	 * Edit
	 *
	 * @return void
	 */
    public function edit()
    {
        $id = $this->request->parameter('id');

        if (!$id) {
            $this->request->redirect('/admin/users');
        }

        $mock = (object) [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'document' => 123456,
            'email' => 'WjQpZ@example.com',
            'phone_number' => 123456789,
            'birth_date' => '22/11/1988',
        ];

        $this->view('admin/users/edit', [
            'headTitle' => 'Usuários - Editar',
            'message' => '',
            'user' => $mock,
        ], 'admin');
    }
}