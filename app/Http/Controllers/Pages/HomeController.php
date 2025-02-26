<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $setting = Setting::latest()->first();
        $data = [
            'title' => 'Главная страница',
            'site_name' => $setting->name,
            'meta_title' => $setting->meta_title,
            'meta_description' => $setting->meta_description,
            'meta_keywords' => $setting->meta_keywords,
            'meta_og_title' => $setting->meta_title,
            'meta_og_description' => $setting->meta_description,
            
        ];
        return view('web.pages.home.index', $data);
    }
}
