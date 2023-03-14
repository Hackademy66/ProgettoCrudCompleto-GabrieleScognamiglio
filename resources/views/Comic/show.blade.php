<x-layout>
    <x-header>
        <h1>{{$comic->name}}</h1>
    </x-header>
    
    
    <div class="container my-5">
        <div class="row justify-content-center">
            
            <div class="col-12 col-md-3">
                <div class="card">
                    <img src="{{Storage::url($comic->cover)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text">{{$comic->name}}</h5>
                        <p class="card-text">{{$comic->publisher}}</p>
                        <a href="{{route('comic.index')}}" class="btn btn-primary mt-2">Torna Indietro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
</x-layout>