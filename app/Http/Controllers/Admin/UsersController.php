<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index(){
        $page_data['page_title'] = 'Manajemen User';
        $page_data['page_folder'] = 'users';
        $page_data['page_name'] = 'index-users';
        return view('admin.index', $page_data);
    }
}
