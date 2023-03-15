<?php

namespace App\Http\Controllers;


use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComicController extends Controller
{
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        $comics=Comic::all();
        
        return view('comic.index', compact('comics'));
    }
    
    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        return view('comic.create');
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        $comic = Comic:: create([
            'cover'=>$request->file('cover')->store('public/covers'),
            'name'=>$request->name,
            'publisher'=>$request->publisher,
            'user_id'=> Auth::user()->id,
        ]);
        
        
        return redirect(route('comic.index'))->with('comicCreated','Hai inserito un Fumetto');
    }
    
    
    /**
    * Display the specified resource.
    */
    public function show( Comic $comic)
    {
        return view('comic.show', compact('comics'));
    }
    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit( Comic $comic)
    {
        return view('comic.edit', compact('comics'));
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(Request $request, Comic $comic)
    {

        if($request->cover){
        $comic->update([
            'name'=>$request->name,
            'publisher'=>$request->publisher,
            'cover'=>$request->file('cover')->store('public/covers'),
        ]);
        }
        else{
            $comic->update([
                'name'=>$request->name,
                'publisher'=>$request->publisher,
            ]);
        }

        return redirect(route('comic.index'))->with('comicUpdated','Hai aggiornato il Fumetto');
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect(route('comic.index'))->with('comicDeleted, Hai cancellato il Fumetto');
    }
}
