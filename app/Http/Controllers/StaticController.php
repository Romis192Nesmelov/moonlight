<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Settings;

class StaticController extends Controller
{
    use HelperTrait;

    protected $data = [];

    public function index()
    {
        return $this->showView('home');
    }

    private function showView($view)
    {
        $this->data['seo'] = Settings::getSeoTags();
        return view($view, [
            'mainMenu' => [
//                ['data' => 'about', 'name' => trans('menu.about')],
            ],
            'data' => $this->data,
            'metas' => $this->metas
        ]);
    }
}
