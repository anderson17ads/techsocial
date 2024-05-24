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
	 * Get
	 *
	 * @return void
	 */
    public function getById()
    {
        $id = $this->request->parameter('id');

        if (!$id) {
            return $this->response
                ->setStatusCode(404)
                ->response()
                ->json([
                    'error' => true,
                    'message' => 'User not found',
                ]);
        }

        $mock = (object) [
            'id' => 1,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'document' => 123456,
            'email' => 'WjQpZ@example.com',
            'phone_number' => 123456789,
            'birth_date' => '22/11/1988',
        ];

        return $this->response->json([
            'error' => false,
            'message' => 'User found successfully',
            'data' => $mock,
        ]);
    }

    /**
	 * Store
	 *
	 * @return void
	 */
    public function store()
    {
        $data = $this->request->all();

        if (!$data) {
            return $this->response
                ->setStatusCode(404)
                ->response()
                ->json([
                    'error' => true,
                    'message' => 'Data not found',
                ]);
        }

        return $this->response->json([
            'error' => false,
            'message' => 'User created successfully',
            'data' => [],
        ]);
    }
    
    /**
	 * Update
	 *
	 * @return void
	 */
    public function update()
    {
        $data = $this->request->all();

        if (!$data) {
            return $this->response
                ->setStatusCode(404)
                ->response()
                ->json([
                    'error' => true,
                    'message' => 'Data not found',
                ]);
        }

        return $this->response->json([
            'error' => false,
            'message' => 'User updated successfully',
            'data' => [],
        ]);
    }
}