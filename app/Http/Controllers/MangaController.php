<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MangaController extends Controller
{
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        $mangas=Manga::all();
        
        return view('manga.index', compact('mangas'));
    }
    
    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        return view('manga.create');
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        $manga = Manga::create([
            'cover'=>$request->file('cover')->store('public/covers'),
            'name'=>$request->name,
            'publisher'=>$request->publisher,
            'user_id'=> Auth::user()->id,
        ]);
        
        
        return redirect(route('manga.index'))->with('mangaCreated','Hai inserito un manga');
    }
    
    
    /**
    * Display the specified resource.
    */
    public function show(Manga $manga)
    {
        return view('manga.show', compact('manga'));
    }
    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit(Manga $manga)
    {
        return view('manga.edit', compact('manga'));
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(Request $request, Manga $manga)
    {

        if($request->cover){
        $manga->update([
            'name'=>$request->name,
            'publisher'=>$request->publisher,
            'cover'=>$request->file('cover')->store('public/covers'),
        ]);
        }
        else{
            $manga->update([
                'name'=>$request->name,
                'publisher'=>$request->publisher,
            ]);
        }

        return redirect(route('manga.index'))->with('mangaUpdated','Hai aggiornato il manga');
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Manga $manga)
    {
        $manga->delete();

        return redirect(route('manga.index'))->with('mangaDeleted, Hai cancellato il manga');
    }
}


