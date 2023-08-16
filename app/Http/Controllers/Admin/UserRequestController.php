<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User_request\StoreRequest;
use App\Models\Package;
use App\Models\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserRequestController extends Controller
{

    public function index()
    {
        $user_requests = Request::all();
        return view('admin.user_requests.index', compact('user_requests'));
    }

    public function create()
    {

        return view('main.book');

    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
            Request::create($data);

        return redirect()->route('main')->with('Успішно');

    }

    public function show(Request $user_request )
    {
        return view('admin.user_requests.show', compact('user_request'));
    }

    public function edit(Package $package)
    {

//        return view('admin.packages.edit', compact('package'));
    }

    public function update()
    {
       //

    }

    public function destroy(Request $user_request)
    {
        $user_request->delete();
        return redirect()->route('admin.user_requests.index');
    }
}
