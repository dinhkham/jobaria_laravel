<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $data = [];
    public function __construct()
    {

    }
    public function index()
    {
        $this->data['title'] = 'Admin Dashboard';
        return view('admin.dashboard',$this->data);
    }

}
