<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function setting(){
        $data['title'] = 'Settings';
        $data['meta_desc'] = 'Settings Description'; 
        $data['keyword'] = '';

        return view('admin.pages.settings')->with([
            'data' => $data
        ]);
    }
}
