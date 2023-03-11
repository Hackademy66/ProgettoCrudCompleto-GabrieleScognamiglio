<x-layout>

<x-header>
    REGISTRATI!
</x-header>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form class="p-5 border shadow" method="POST" action="{{route('register')}}">

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
                  <label for="email" class="form-label">Indirizzo email</label>
                  <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Username</label>
                    <input type="name"  name="name" class="form-control" id="name" aria-describedby="nameHelp">
                  </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password"  name="password" class="form-control" id="password">
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Conferma Password</label>
                    <input type="password"  name="password_confirmation" class="form-control" id="password_confirmation">
                  </div>


                <button type="submit" class="btn btn-primary">Registrati</button>
              </form>
        </div>
    </div>
</div>
</x-layout>