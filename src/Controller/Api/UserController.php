<?php

namespace App\Controller\Api;

use App\Core\Controller;

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

        return $this->response->json($mock);
    }

    /**
	 * Add
	 *
	 * @return void
	 */
    public function add()
    {
        
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
    }
}