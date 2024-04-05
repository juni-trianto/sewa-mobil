<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SewaMobilController extends Controller
{
    //
    public function index(){
        $page_data['page_title'] = 'Sewa Mobil';
        $page_data['page_folder'] = 'sewa';
        $page_data['page_name'] = 'index-sewa';
        return view('admin.index', $page_data);
    }
}
