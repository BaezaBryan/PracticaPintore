@extends('layouts.master')
@section('title','practica')
@section('header')
<center><strong><h1>{{$title}}</h1></strong></center>
@parent
@stop
@section('navbar')
@parent
@stop
@section('contenido')
<p><img src="/images/Da vinci.jpg" alt="Da vinci" align="left" width="20%" height="25%"  class="img-thumbnail">  
Prototipo absoluto del hombre humanista del Renacimiento, Leonardo da Vinci ejercerá de pintor, escultor, ingeniero, músico,
 geómetra, teórico…un visionario cuya realidad no será marco adecuado para el desarrollo completo de su capacidad,
 siendo quizá ese el motivo por el que su figura ha llegado a la actualidad envuelta en un halo de misterio.
</p> <br>
<BR> </BR>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel"  >
  <div class="carousel-inner" >
    <div class="carousel-item active" >
      <center><img src="/images/l1.jpg"  alt="imagen1"  width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/l2.jpg"  alt="imagen2" width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/l3.jpg"  alt="imagen3" width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/l4.jpg"  alt="imagen4" width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/l5.jpg"  alt="imagen5" width="500" height="600"></center>
    </div>
  </div>
 
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" >
    <span class="carousel-control-prev-icon" aria-hidden="true" >-></span>
    <span class="sr-only" >Previous</span>
  </a>

<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"><-</span>
    <span class="sr-only">Next</span>
  </a>

</div>

@stop
@section('footer')
<h4>Derechos Reservados - {{date('y')}}</h4>
@stop