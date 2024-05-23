<?php

namespace App\Controller\Admin;

use App\Core\Controller;
use PlugRoute\Http\Request;

/**
 * This class is used to manage users in the admin
 */
class UserController extends Controller
{
    public function index()
    {
        $mock = [
            (object) [
            'id' => 1,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'document' => 123456,
            'email' => 'WjQpZ@example.com',
            'phone_number' => 123456789,
            'birth_date' => '22/11/1988',
            ]
        ];

        $this->view('admin/users/index', [
            'headTitle' => 'Users - List',
            'users' => $mock
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
     * @param Request $request
	 * @return void
	 */
    public function edit(Request $request)
    {
        $id = $request->parameter('id');

        if (!$id) {
            $request->redirect('/admin/users');
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