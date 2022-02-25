@extends('layout.master')
@section('contenu')
   <div class="container"> 

      @if ($errors->any())

      <div class="alert alert-danger">
          @foreach($errors->all() as $item)
          <p>{{$item}}</p>
              @endforeach
      </div>
         
      @endif
   </div>

<form method="POST" action="{{route('store_etudiant')}}">
  
    @csrf
    <input type="text" name="nom" placeholder="entrer votre nom" >
    <input type="number" name="age" palceholder="entrer votre age" >

    <input type="submit" value="enregistrer">
</form>
@endsection