<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Packages\StoreRequest;
use App\Http\Requests\Packages\UpdateRequest;
use App\Models\Package;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Locales;

class PackagesController extends Controller
{

    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.index', compact('packages'));
    }

    public function create()
    {
        return view('admin.packages.create');
    }

    public function store(StoreRequest $request)
    {
        try {
            $data = $request->validated();
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);

            DB::beginTransaction();

            $package = new Package([
                'image' => $data['image'],
                'rate' => $data['rate'], // Добавьте это
                'price' => $data['price'], // Добавьте это
            ]);
            $package->save();

            if (isset($data['en_country']) && isset($data['en_description'])) {
                $package->translateOrNew('en')->country = $data['en_country'];
                $package->translateOrNew('en')->description = $data['en_description'];
            }

            if (isset($data['ua_country']) && isset($data['ua_description'])) {
                $package->translateOrNew('ua')->country = $data['ua_country'];
                $package->translateOrNew('ua')->description = $data['ua_description'];
            }

            $package->save();

            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            // Выводим описание ошибки
            echo 'Ошибка: ' . $exception->getMessage();
            // Или лучше записать в лог
            Log::error('Ошибка: ' . $exception->getMessage());
            // Прерываем выполнение
            abort(500);
        }

        return redirect()->route('admin.packages.index');

    }

    public function show(Request $request,Package $package)
    {
        return view('admin.packages.show', compact('package'));
    }

    public function edit(Package $package)
    {

        return view('admin.packages.edit', compact('package'));
    }

    public function update(UpdateRequest $request, Package $package)
    {
        try {
            $data = $request->validated();
            DB::beginTransaction();
            if (isset($data['image'])) {
                $data['image'] = Storage::disk('public')->put('/images', $data['image']);
            }

            $package->update($data);

            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            abort(500);
        }

        return view('admin.packages.index', compact('package'));

    }

    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('admin.packages.index');
    }
}
