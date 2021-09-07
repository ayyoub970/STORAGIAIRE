@extends('layouts.index')
 
@section('content')
<div class="">
    <div class="">
       <div class="card">
            <div color="" class="card-header">Liste des rapports de stage </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if ($message = Session::get('success'))
                   <div class="alert alert-success">
                        <p>{{ $message }}</p>
                   </div>
                   @endif
              
                   <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                        <th style="width:00px">No</th>
                        <th>Titre</th>
                        <th style="width:00px">StageId </th>
                        <th style="width:180px">Encadrant Professionnel</th>
                        <th style="width:180px">Encadrant Pédagogique</th>
                        <!--<th style="width:00px";>Action</th> -->
                        </tr>
                        </thead>
        
                        <tbody>
                        @foreach ($rapports as $x)
                        <tr>
                        <td><a href="{{route('rapports.show',$x->id)}}">{{ $x->id }}</a></td>
                        <td><a href="/downloadfiles/{{$x->stage_id}}">{{ $x->titre }}</a></td>
                        <td>{{ $x->stage_id }}</td>
                        <td>{{$x->EncadrantPro}}</td>
                        <td>{{$x->EncadrantPed}}</td>
                        
                        </tr>
                        @endforeach
                        </tbody>
      
                    </table>
                </div >
            </div>
        </div>
    </div>
</div>
    
    
@endsection