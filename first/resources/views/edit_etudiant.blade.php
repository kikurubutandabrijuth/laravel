@extends('layout.master')
@section('contenu')


<div class="container">
    <form  action=" {{ route('update_etudiant')}}"  method="POST" >
        @csrf
        <input type="hidden" value="{{$etudiant->id}}" name="id">
        <div class=" form-group">
            <label for="" > nom</label>
            <input type="text" class="form-control"  name="nom" value="{{$etudiant->nom}}" required>
        </div>
        <div class=" form-group">
            <label for="" > age</label>
            <input type="number" class="form-control"  name="age" value="{{$etudiant->age}}" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Modifier</button>
     
        </div>
       


    </form>
</div>

@endsection