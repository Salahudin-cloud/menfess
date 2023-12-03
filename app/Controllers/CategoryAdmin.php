<?php

namespace App\Controllers;

class CategoryAdmin extends BaseController
{
    // render halaman category admn 
    public function categori()
    {
        return view('backend/admin/category');
    }
}
