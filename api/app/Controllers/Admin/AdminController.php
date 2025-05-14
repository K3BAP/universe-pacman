<?php

namespace App\Controllers\Admin;



use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin Dashboard',
            'scripts' => true,
        ];
        echo view('pages/admin/AdminDashboard', $data);
    }

    public function test(): string
    {
        $data = [
            'title' => 'Test',
            'scripts' => true,
        ];
        return view('pages/admin/TestView', $data);
    }
}