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
<p><img src="/images/Pablo.jpg" alt="Pablo Picasso" align="left" width="20%" height="20%" class="img-thumbnail">  
Es considerado desde la génesis del siglo xx como uno de los mayores pintores que participaron en muchos movimientos artísticos que se propagaron
 por el mundo y ejercieron una gran influencia en otros grandes artistas de su tiempo. Sus trabajos están presentes en museos y colecciones de 
 toda Europa y del mundo. Además, abordó otros géneros como el dibujo, el grabado, la ilustración de libros</p> <br>

 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"  >
  <div class="carousel-inner" >
    <div class="carousel-item active" >
      <center><img src="/images/p1.jpg"  alt="imagen1"  width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/p2.jpg"  alt="imagen2" width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/p3.jpg"  alt="imagen3" width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/p4.jpg"  alt="imagen4" width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/p5.jpg"  alt="imagen5" width="500" height="600"></center>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@stop
@section('footer')
<h4>Derechos Reservados - {{date('y')}}</h4>
@stop