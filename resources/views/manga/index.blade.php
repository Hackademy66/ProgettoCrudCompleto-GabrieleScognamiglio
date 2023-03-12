<x-layout>
    <x-header>
        <h1>I Nostri Manga</h1>
    </x-header>
    
    @if(session('mangaCreated'))
    <div class="alert alert-success">
        {{session('mangaCreated')}}
    </div>
    @endif
    
    <div class="container my-5">
        <div class="row justify-content-center">
            
            @if(count($mangas))
            
            @foreach ($mangas as $manga)
            <div class="col-12 col-md-3">
                <div class="card">
                    <img src="{{Storage::url($manga->cover)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text">{{$manga->name}}</h5>
                        <p class="card-text">{{$manga->publisher}}</p>
                        <a href="{{route('manga.show',compact('manga'))}}" class="btn btn-primary mt-2">Approfondisci</a>
                        <a href="{{route('manga.edit',compact('manga'))}}" class="btn btn-outline-secondary mt-2">Aggiorna</a>
                        <form method="POST" action="{{route('manga.destroy',compact('manga'))}}" class="d-inline mt-2">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    
                    </form>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-12">
                <h2>Non ci sono ancora dei manga</h2>
            </div>
            @endif
        </div>
    </div>
    
    
    
    
    
</x-layout>