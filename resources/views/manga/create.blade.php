<x-layout>

    <x-header>
      <h1>Inserisci Il Tuo Manga</h1>
    </x-header>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form class="p-5 border shadow" method="POST" action="" enctype="multipart/form-data">
    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
    
                    @csrf
                    
    
                    <div class="mb-3">
                      <label for="series" class="form-label">Immagine della serie</label>
                      <input type="file" name="series" class="form-control" id="series">
                    </div>
    
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome della serie</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>

                    <div class="mb-3">
                        <label for="pubblisher" class="form-label">Nome della casa di stampa</label>
                        <input type="text" name="pubblisher" class="form-control" id="pubblisher">
                     </div>
    
                        <button type="submit" class="btn btn-primary">Accedi</button>
                  </form>
            </div>
        </div>
    </div>
    </x-layout>