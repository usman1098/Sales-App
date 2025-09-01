<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function add_discount_codes()
    {
        $data['title'] = 'Discount Codes - Add';
        $data['meta_desc'] = 'Discount Codes Description';
        $data['keyword'] = '';
        return view('admin.pages.discount_codes.add')->with([
            'data' => $data
        ]);
    }

    // Discount Codes List
    public function discount_codes_list()
    {
        $data['title'] = 'Discount Codes List';
        $data['meta_desc'] = 'Discount Codes Description';
        $data['keyword'] = '';
        return view('admin.pages.discount_codes.list')->with([
            'data' => $data
        ]);
    }

    // Discount Codes Edit
    public function edit_discount_codes($id){
        $data['title'] = 'Discount Codes Edit';
        $data['meta_desc'] = 'Discount Codes Description';
        return view('admin.pages.discount_codes.edit')->with([
            'data' => $data,
            'id' => $id
        ]);
    }

    // Discount Codes URMeals Usage Reports
    public function urmeals_usage($id){
        $data['title'] = 'URMeals Usage Reports';
        $data['meta_desc'] = 'URMeals Usage Reports Description';
        return view('admin.pages.urmeals.usage')->with([
            'data' => $data,
            'id' => $id
        ]);
    }
}
