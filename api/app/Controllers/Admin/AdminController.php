<?php

namespace App\Controllers\Admin;



use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin Dashboard',
        ];
        echo view('pages/admin/AdminDashboard', $data);
    }

    public function test(): string
    {
        $data = [
            'title' => 'Test',
        ];
        return view('pages/admin/TestView', $data);
    }
}