<?php

namespace App\Http\Controllers;

use App\Navigation;
use App\Page;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navigations = Navigation::all();
        return view('navigation.index', compact('navigations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Page::all()->pluck('name', 'id');
        return view('navigation.create', compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'page' => 'required',
        ]);
        $navigation = new Navigation;       
        $navigation->name = Page::findOrFail($request->page)->name;  
        $navigation->page()->associate(Page::findOrFail($request->page));
        $navigation->save();
        
        return redirect()->route('navigation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function show(Navigation $navigation)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function edit(Navigation $navigation)
    {
        return view('navigation.edit', compact('navigation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navigation $navigation)
    {
        $request->validate([
            'name' => 'required|min:2|max:35',
        ]);
        $navigation = Navigation::findOrFail($navigation->id);
        $navigation->name = $request->name;       
        $navigation->save();
        return redirect()->route('navigation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navigation $navigation)
    {
        Navigation::destroy($navigation->id);
        return redirect()->route('navigation.index');
    }
}
