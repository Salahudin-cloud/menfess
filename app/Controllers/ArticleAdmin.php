<?php


namespace App\Controllers;


class ArticleAdmin extends BaseController
{
    public function index()
    {
        return view('backend/admin/article');
    }
}
