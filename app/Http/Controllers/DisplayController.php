<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Page;
use App\Navigation;

class DisplayController extends Controller {

    public function frontpage() {    
        $page = Page::findOrFail(Setting::findOrFail(1)->frontpage_id);
        $navigations = Navigation::all();
        return view('welcome', compact('page', 'navigations'));
    }
    
    public function show(Navigation $navigation) {
         dd($navigation);
        $page = Page::where('name', '=', $navigation)->first();
        
        $navigations = Navigation::all();
        return view('welcome', compact('page', 'navigations'));
    }

}
