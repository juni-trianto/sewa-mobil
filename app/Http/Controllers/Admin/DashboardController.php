<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $page_data['page_title'] = 'Dashboard';
        $page_data['page_folder'] = 'dashboard';
        $page_data['page_name'] = 'index-dashboard';
        return view('admin.index', $page_data);
    }
}
