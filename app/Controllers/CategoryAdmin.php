<?php

namespace App\Controllers;

class CategoryAdmin extends BaseController
{
    // render halaman category admn 
    public function index()
    {
        return view('backend/admin/category');
    }
}
