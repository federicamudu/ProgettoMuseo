<?php

namespace App\Http\Controllers;

use App\Models\Museum;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;

class MuseumController extends Controller
{
    public static function middleware()
    {
        return [
            new Middleware('auth', except: ['index', 'show'])
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $museums= Museum::orderBy('name', 'asc')->get();
        return view("museum.index", compact("museums"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("museum.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Museum::create([
            "name"=> $request->name,
            "location"=>$request->location,
            "siteWeb"=>$request->siteWeb,

        ]);
        return redirect()->route('museum.create')->with('success','Museo aggiunto correttamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Museum $museum)
    {
        return view('museum.show', compact('museum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Museum $museum)
    {
        return view('museum.edit', compact('museum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Museum $museum)
    {
        $museum->update([
            'name'=> $request->name,
            'location'=>$request->location,
            'siteWeb'=>$request->siteWeb,
        ]);
        return redirect()->route('museum.edit', compact('museum'))->with('success','Museo aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Museum $museum)
    {
        $museum->delete();
        return redirect()->route('museum.index')->with('success',"Il museo {{$museum->name}} è stato cancellato correttamente");
    }
}
