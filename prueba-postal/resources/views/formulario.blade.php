@include('header')


<div class="container">

@if($errors -> any())
@foreach($errors ->all() as $error)

<p>{{ $error }}</p>

@endforeach
@endif

<form action="resultado" method="POST">

@csrf
 
    <br>
    <div class="mb-3 bg-info">
<br>
    <h2>Introduce un número entre 1 y 10000000000: </h2>
    <input type="number" name="numero" id="numero" pattern="[^([1-9]+\\d*){10}]" min=1 max=10000000000 required> 
    <input class="btn btn-primary" type="submit" value=" ENVIAR ">

   </div>
       <br>
     

    
</form>

</div>

