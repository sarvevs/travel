<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Package;
use App\Models\Request;
use App\Models\User;

class IndexController extends Controller
{
    public function index()
    {
        $data = [];
        $data['packagesCount'] = Package::all()->count();
        $data['galleryCount'] = Gallery::all()->count();
        $data['requestsCount'] = Request::all()->count();
        return view('admin.main.index', compact('data'));

    }
}
