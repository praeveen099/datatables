<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\PostsDataTable;
use App\Models\Post;
use Yajra\DataTables\Facades\DataTables;

class PostsController extends Controller
{
    public function index(PostsDataTable $dataTable)
    {
        return $dataTable->render('posts');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPosts()
    {
        return Datatables::of(Post::query())
                ->setRowId(function ($post) {
                    return $post->id;
                })
                ->setRowAttr(['align' => 'center'])
                ->make(true);
    }

    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function indexDataTable()
    {
        return view('postsdata');
    }
}
