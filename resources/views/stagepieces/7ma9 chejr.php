public function create(){
    $xxx = DB::table('stages')
    ->join('stagiaires','stages.stagiaire_id',"=",'stagiaires.id')
  
     ->get();
    return View("stagepieces.create")->with(array('xxx'=>$xxx));
    
    
  }




  
  @foreach ($xxx as $x)
                                <option  value="{{ $x->id}}">{{ $x->nom }} {{ $x->intitule_projet}} </option>
                                @endforeach




                                <select id="stages_id" name="stages_id" class="form-control "> 
                                <option  value="">Selectionner un stage</option>
                        
                                @foreach ($xxx as $x)
                                <option  value="{{ $x->id }}">{{ $x->intitule_projet}}  {{ __('de')}} {{ $x->nom }} </option>
                                @endforeach
                                </select> 




                                @foreach($activities as $activity)
            <tr>
                <td>{{ $activity->created_at->format('d/m/Y') }}</td>
                <td>{{ $activity->created_at->format('H:i a') }}</td>
                <td class="textLeft">
                    @foreach($activity->properties['attributes'] as $key => $val)
                    <strong style="text-transform: capitalize;">{{ $activity->description }}</strong> :: {{"$key"}} From "{{ $activity->properties['old'][$key] }}" to "{{ $activity->properties['attributes'][$key]}}"<br>
                    @endforeach
                </td>
            </tr>
            @endforeach