<x-layout>
<x-header>
    <h1>I Nostri Manga</h1>
</x-header>

<div class="container my-5">
    <div class="row justify-content-center">

        @if(count($mangas))
        @foreach ($mangas as $manga)
            <div class="card">
             <img src="{{Storage::url($manga->series)}}" class="card-img-top" alt="...">
                <div class="card-body">
                 <h5 class="card-title">{{$manga->series}}</h5>
                <p class="card-text">{{$manga->author}}</p>
                <a href="#" class="btn btn-primary mt-2">Approfondisci</a>
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
</div>





</x-layout>