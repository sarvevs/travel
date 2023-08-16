<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Package;

class MainController extends Controller
{

    public function packageIndex()
    {
        $packages = Package::all();
        return view('main.packages', compact('packages'));
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
