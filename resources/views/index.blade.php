@extends('layout.app')
@section('content')
<div class="col-lg-12 text-center">
   <div id="carousel-example-generic" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators hidden-xs">
         <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
         <li data-target="#carousel-example-generic" data-slide-to="1"></li>
         <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
         <div class="item active">
            <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
         </div>
         <div class="item">
            <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
         </div>
         <div class="item">
            <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
         </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
      <span class="icon-prev"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
      <span class="icon-next"></span>
      </a>
   </div>
   <h2 class="brand-before">
      <small>Welcome to</small>
   </h2>
   <h1 class="brand-name">Immunization Management System</h1>
   <hr class="tagline-divider">
   <h2>
      <!--   <small>By
         <strong>LameCoders</strong>
         </small> -->
   </h2>
</div>
@endsection
