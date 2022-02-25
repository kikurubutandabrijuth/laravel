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
   <!-- <form method="POST" action="{{route('store_etudiant')}}"> -->
<form  id="monformulaire">
  
    @csrf
    <input type="text" name="nom" id="nom" placeholder="entrer votre nom" >
    <input type="number" name="age" id="age" palceholder="entrer votre age" >

    <input type="submit" value="enregistrer">
</form>
@endsection
@section('monscript')
<script>
$('#monformulaire').submit(function(event){
    // alert('submitted');
    event.preventDefault();

    $.ajax({
        url:'{{route("store_etudiant")}}',
        method:'POST',
        data: new FormData(this),
        processData:false,
        contentType:false,
        cache:false,
        headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},

        success: function(data)
        {
            alert('inserted succefully');
            $('#monformulaire')[0].reset();

        }
    });
});

</script>

@endsection
