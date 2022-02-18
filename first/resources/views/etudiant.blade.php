@extends('master')
@section('contenu')
<p>hello etudiant</p>
<button><a href="new_etudiant">new etudiant</a></button>
<ul>
@foreach ($etudiants as $item)

<li>{{$item}}</li>

@endforeach
</ul>
@endsection