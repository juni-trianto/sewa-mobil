<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    //
    public function index(){
        $page_data['page_title'] = 'List Data Mobil';
        $page_data['page_folder'] = 'mobil';
        $page_data['page_name'] = 'index-mobil';
        $page_data['page_sub_name'] = 'data-mobil';
        return view('admin.index', $page_data);
    }

    public function merk(){
        $page_data['page_title'] = 'Merk Mobil';
        $page_data['page_folder'] = 'mobil';
        $page_data['page_name'] = 'index-mobil';
        $page_data['page_sub_name'] = 'merk';
        return view('admin.index', $page_data);
    }

    public function model(){
        $page_data['page_title'] = 'Model Mobil';
        $page_data['page_folder'] = 'mobil';
        $page_data['page_name'] = 'index-mobil';
        $page_data['page_sub_name'] = 'model-mobil';
        return view('admin.index', $page_data);
    }
}
