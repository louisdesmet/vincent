<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingController extends Controller
{
    private $settings = Settings::all;
    
    public function frontpage() {
        $this->settings->frontpage_id;
    }
}
