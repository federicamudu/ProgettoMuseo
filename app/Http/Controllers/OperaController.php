<?php

namespace App\Http\Controllers;

use App\Models\Opera;
use App\Models\Museum;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;

class OperaController extends Controller
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
        $operas= Opera::orderBy('name', 'asc')->get();
        return view("opera.index", compact("operas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $museums=Museum::all();
        return view("opera.create", compact("museums"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Opera::create([
            "name"=> $request->name,
            "author"=>$request->author,
            "year"=>$request->year,
            "description"=>$request->description,
            "category"=>$request->category,
            "period"=>$request->period,
            "pic"=>$request->has('pic') ? $request->file('pic')->store('pics', 'public') : NULL,
            "museum_id"=>$request->museum_id
        ]);
        return redirect()->route('opera.create')->with('success','Opera aggiunta correttamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Opera $opera, Museum $museum)
    {
        $museums=Museum::all();
        return view('opera.show', compact('opera', 'museums'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Opera $opera)
    {
        $museums=Museum::all();
        return view('opera.edit', compact('opera', 'museums'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Opera $opera)
    {
        if($request->pic){
            $opera->update([
                'pic'=>$request->file('pic')->store('pics','public')
            ]);
        }
        $opera->update([
            'name'=> $request->name,
            'author'=>$request->author,
            'year'=>$request->year,
            'description'=>$request->description,
            'category'=>$request->category,
            'period'=>$request->period,
            "museum_id"=>$request->museum_id
        ]);
        return redirect()->route('opera.edit', compact('opera'))->with('success','Opera aggiornata con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Opera $opera)
    {
        $opera->delete();
        return redirect()->route('opera.index')->with('success',"L'opera {{$opera->name}} è stata cancellata correttamente");
    }

    public function showByCategorySculpture(Opera $opera){
        $operas = Opera::select('*','category')->where('category', '=', 'statua')->get();
        return view('opera.index', compact('operas'));
    }

    public function showByCategoryPaintings(Opera $opera){
        $operas = Opera::select('*','category')->where('category', '=', 'quadro')->get();
        return view('opera.index', compact('operas'));
    }
    public function showByCategoryRepert(Opera $opera){
        $operas = Opera::select('*','category')->where('category', '=', 'reperto')->get();
        return view('opera.index', compact('operas'));
    }
}
