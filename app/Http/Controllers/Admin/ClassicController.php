<?php

namespace App\Http\Controllers\Admin;

use App\Classic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClassicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classics = Classic::all();
        return view('admin.classics.index', compact('classics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.classics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validazione = $request->validate([
            'title' => 'required',
            'cover' => 'nullable | mimes:jpeg,png,jpg,gif,svg | max:150',
            
        ]);

        $cover = Storage::put('cover', $request->cover);
        $validazione['cover'] = $cover;

        Classic::create($validazione);  

        $new_classic = Classic::orderBy('id', 'desc')->first();

        return redirect()->route('admin.classics.index', $new_classic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classic  $classic
     * @return \Illuminate\Http\Response
     */
    public function show(Classic $classic)
    {
        return view('admin.classics.show', compact('classic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classic  $classic
     * @return \Illuminate\Http\Response
     */
    public function edit(Classic $classic)
    {
        return view('admin.classics.edit', compact('classic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classic  $classic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classic $classic)
    {
        $validazione = $request->validate([
            'title' => 'required',
            'cover' => 'nullable | mimes:jpeg,png,jpg,gif,svg | max:150',
        ]);
        
        $cover = Storage::put('cover', $request->cover);
        $validazione['cover'] = $cover;

        $classic->update($validazione); 

        return redirect()->route('admin.classics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classic  $classic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classic $classic)
    {
        $classic->delete();
        return redirect()->route('admin.classics.index');
    }
}
