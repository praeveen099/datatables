<?php

namespace App\Http\Controllers;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;


use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;

class UsersController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('users');
    }

    // function data()
    // {
    //     $model = User::query();

    //     $jsonResponse =  Datatables::eloquent($model)
    //                 ->addColumn('intro', 'Hi {{$name}}!')
    //                 ->make();

    //     $data = json_decode($jsonResponse->content(), TRUE);

    //     return $data["data"];
    // }


    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUsers()
    {
        return Datatables::of(User::query())
        ->addColumn('intro', 'Hi {{$name}}!')
        ->make(true);
    }

    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function indexDataTable()
    {
        return view('usersdata');
    }
}
