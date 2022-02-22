@extends('layout.master')
@section('contenu')
<p>hello etudiant</p>
<button class=" btn btn-primary"><a href="new_etudiant">new etudiant</a></button>
<div class="container">
<table class=" table table-bordered stripped mt-2"> 
    <thead>
        <th> ID  </th>
        <th>Name</th>
        <th>Age</th>
        <th>Action</th>
    </thead>
    
    <tbody>
    @foreach ($etudiants as $item)
      <tr></tr>   
 <td> {{$item->id}}</td>
 <td> {{$item->nom}} </td>
<td>  {{$item->age}} </td>
  <td>   
    <a href="{{'/edit_etudiant/'.$item->id}}">edit |</a>
    <a href="#">delete</a>
</tr>
@endforeach
    </tbody>
  
</table>
</div>



@endsection