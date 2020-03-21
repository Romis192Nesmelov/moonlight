<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class SettingsController extends Controller
{
    use HelperTrait;
    
    private $settings;

    public function __construct()
    {
        $this->settings = simplexml_load_file(Config::get('app.settings_xml'));
    }

    // Seo
    public function getSeoTags()
    {
        $tags = ['title' => ''];
        $seo = (array)$this->settings->seo;
        $tags['title'] = $seo['title'];
        foreach ($this->metas as $meta => $params) {
            $tags[$meta] = (string)$this->settings->seo->$meta;
        }
        return $tags;
    }

    public function getEmails()
    {
        return $this->settings->emails;
    }
}
