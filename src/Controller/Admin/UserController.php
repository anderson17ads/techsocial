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
        $items = [];
        
        $this->view('admin/users/index', [
            'headTitle' => 'Users - List',
            'items' => $items
        ]);
    }
}