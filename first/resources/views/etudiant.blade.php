@extends('master')
@section('contenu')
<p>hello etudiant</p>
<ul>
@foreach ($etudiants as $item)

<li>{{$item}}</li>

@endforeach
</ul>
@endsection