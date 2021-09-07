@extends('layouts.app')

@section('content')


            <div class="card">
                <div color="" class="card-header">{{ __('Stagiaires') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">CIN</th>
      <th scope="col">nom_utilisateur</th>
      <th scope="col">email</th>
      <th scope="col">CIN</th>
      
    </tr>
  </thead>
  <tbody>
     @foreach($data as $item)
     
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->nom}}</td>
      <td>{{$item->cin}}</td>
      <td>{{$item->nom_utilisateur}}</td>
      <td>{{$item->email}}</td>
      <td ><a href="updateuser">
   <button>update</button>
</a></td>
     
    </tr>
  
    @endforeach
  </tbody>
</table>
              
                     </div>
            </div>



@endsection
