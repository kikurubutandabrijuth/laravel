@extends('layout.master')
@section('contenu')

<form method="POST" action="{{route('store_etudiant')}}">
    @csrf
    <input type="text" name="nom" placeholder="entrer votre nom">
    <input type="number" name="age" palceholder="entrer votre age">

    <input type="submit" value="enregistrer">
</form>
@endsection