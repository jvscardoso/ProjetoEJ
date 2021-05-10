<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\ModelBook;
use App\Models\User;

class BookControler extends Controller
{
    private $objUser;
    private $objBook;

    public function __construct(){
        $this->objUser = new User();
        $this->objBook = new ModelBook();
    }


    public function index()
    {
        $book = $this ->objBook->all();
        return view('index',compact('book'));
    }

    public function create()
    {
        $users = $this -> objUser->all();
        return view('create',compact('users'));
    }

 
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
