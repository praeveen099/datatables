<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\PostsDataTable;


class PostsController extends Controller
{
    public function index(PostsDataTable $dataTable)
    {
        return $dataTable->render('posts');
    }
}
