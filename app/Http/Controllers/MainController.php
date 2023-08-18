<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Package;
use App\Models\PackageTranslation;
use Astrotomic\Translatable\Locales;


class MainController extends Controller
{

    public function packageIndex()
    {
        $currentLocale = \App::getLocale();
//        dd($currentLocale);
//        $package = Package::find(1); // Здесь 1 - это ID пакета, который вы хотите проверить
//
//        if ($package->hasTranslation($currentLocale)) {
//            dd("Перевод для текущей локали ($currentLocale) существует");
//        } else {
//            dd("Перевод для текущей локали ($currentLocale) отсутствует");
//        }

        $packages = Package::all();

        return view('main.packages', compact('packages', ));
    }

    public function galleryIndex()
    {

        $galleries = Gallery::all(); // Получение всех записей

        $allImages = [];

        foreach ($galleries as $gallery) {
            $images = json_decode($gallery->images);
            $allImages[$gallery->id] = $images; // Добавляем изображения в массив по ID записи
        }
        return view('main.gallery', compact('galleries', 'allImages'));
    }

    public function mainSlider()
    {
        $galleries = Gallery::all(); // Получение всех записей

        $allImages = [];

        foreach ($galleries as $gallery) {
            $images = json_decode($gallery->images);
            $allImages[$gallery->id] = $images; // Добавляем изображения в массив по ID записи
        }
        return view('main.main', compact('galleries', 'allImages'));
    }
}
