<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Gallery\StoreRequest;
use App\Http\Requests\Gallery\UpdateRequest;
use App\Models\Gallery;
use App\Models\Package;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{

    public function index()
    {

        $gallery = Gallery::all();
        return view('admin.gallery.index', compact('gallery'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }


    public function store(StoreRequest $request)
    {

        $validatedData = $request->validated();
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('images/gallery'), $name);
                $images[] = $name;
            }
            $gallery = new Gallery();
            $gallery->images = json_encode($images); // Сохраняем изображения в виде JSON
            $gallery->save();
            return redirect()->route('admin.gallery.index');
        }
    }


    public function show(Request $request,Gallery $gallery)
    {
//
    }

    public function edit(Gallery $gallery)
    {
        //
    }


        public function update(UpdateRequest $request, $id)
    {
//        $data = $request->validated();
//
//        $files = Gallery::find($id);
//        $fileData = [];
//
//        if(count($request->images)>0) {
//
//            foreach($request->file('file') as $file) {
//                $path = public_path('storage/gallery');
//                $fileName = $file->getClientOriginalName();
//                $file->move($path, $fileName);
//
//                if ($files->file) {
//                    File::delete($path.'/'.json_decode($files->file)[0]);
//                }
//                $fileData[] = $fileName;
//            }
//            $doc = json_encode($fileData);
//            $files->file = $doc;
//
//
//            $files->images = $request->images;
//        }
//        $files->save();
//
//        return redirect()->route('admin.gallery.index')->with('success', 'Gallery item has been updated!');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('admin.gallery.index');
    }
}
