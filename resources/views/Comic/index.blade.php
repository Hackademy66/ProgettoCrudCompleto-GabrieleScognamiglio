<x-layout>
    <x-header>
        <h1>I Nostri Fumetti</h1>
    </x-header>
    
    @if(session('comicCreated'))
    <div class="alert alert-success">
        {{session('comicCreated')}}
    </div>
    @endif
    
    <div class="container my-5">
        <div class="row justify-content-center">
            
            @if(count($comics))
            
            @foreach ($comics as $comic)
            <div class="col-12 col-md-3">
                <div class="card">
                    <img src="{{Storage::url($comic->cover)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text">{{$comic->name}}</h5>
                        <h6 class="card-text">{{$comic->publisher}}</h6>
                        <p> By {{$comic->user->name}}</p>

                        <a href="{{route('comic.show',compact('comic'))}}" class="btn btn-primary mt-2">Approfondisci</a>
                        <a href="{{route('comic.edit',compact('comic'))}}" class="btn btn-outline-secondary mt-2">Aggiorna</a>
                        <form method="POST" action="{{route('comic.destroy',compact('comic'))}}" class="d-inline mt-2">
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
                <h2>Non ci sono ancora dei Fumetti</h2>
            </div>
            @endif
        </div>
    </div>
    
    
    
    
    
</x-layout>