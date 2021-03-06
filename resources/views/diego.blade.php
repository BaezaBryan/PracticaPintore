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
<p><img src="/images/Diego.jpg" alt="Diego Rivera" align="left" width="20%" height="20%" class="img-thumbnail">  
Diego Rivera (Guanajuato, México, 8 de diciembre de 1886-Ciudad de México, íd., 24 de noviembre de 1957)3​ fue un destacado muralista mexicano de ideología comunista,
famoso por plasmar obras de alto contenido político y social en edificios públicos. Fue creador de diversos murales en distintos puntos del ahora llamado
Centro Histórico de Ciudad de México, así como en la Escuela Nacional de Agricultura de Chapingo, y en otras ciudades mexicanas (Cuernavaca y Acapulco), norteamericanas
y sudamericanas (Buenos Aires, San Francisco, Detroit y Nueva York).</p> <br>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel"  >
  <div class="carousel-inner" >
    <div class="carousel-item active" >
      <center><img src="/images/d1.jpg"  alt="imagen1"  width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/d2.jpg"  alt="imagen2" width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/d3.jpg"  alt="imagen3" width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/d4.jpg"  alt="imagen4" width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/d5.jpg"  alt="imagen5" width="500" height="600"></center>
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