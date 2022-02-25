@extends('layout.master')
@section('contenu')
<div class="container">  
      @if (\Session::has('message'))
         <div class="alert alert-primary">{{\Session::get('message')}}</div>
      @endif
   </div>
<p>hello etudiant</p>
<button class=" btn "><a href="new_etudiant" >new etudiant</a></button>
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
    <a href="{{'/edit_etudiant/'.$item->id}}" class="btn btn-success">edit |</a>
  
    <a href="{{'/delete_etudiant/'.$item->id}} " class="btn btn-warning">delete</a>
</tr>
@endforeach
    </tbody>
  
</table>
</div>



@endsection