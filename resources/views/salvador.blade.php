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
<p><img src="/images/Salvador.jpg" alt="Salvador Dali" align="left" width="20%" height="20%" class="img-thumbnail">  
Salvador Dalí es conocido por sus impactantes y oníricas imágenes surrealistas. Sus habilidades pictóricas se suelen atribuir a la influencia y 
admiración por el arte renacentista. También fue un experto dibujante. Los recursos plásticos dalinianos también abordaron el cine, la escultura y
  la fotografía, lo cual le condujo a numerosas colaboraciones con otros artistas audiovisuales.</p> <br>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"  >
  <div class="carousel-inner" >
    <div class="carousel-item active" >
      <center><img src="/images/s1.jpg"  alt="imagen1"  width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/s2.jpg"  alt="imagen2" width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/s3.jpg"  alt="imagen3" width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/s4.jpg"  alt="imagen4" width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/s5.jpg"  alt="imagen5" width="500" height="600"></center>
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