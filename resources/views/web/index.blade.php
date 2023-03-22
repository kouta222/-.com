@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('/css/caousel.css' )}}">

@section('content')

 <div class="row">
    <div class="col-2">
      @component('components.sidebar', ['categories' => $categories, 'major_categories' => $major_categories])
     @endcomponent
     </div>
   


     <div class="col-9">
     <img src="img/kakomon.com (3).png" class="waseda-photo" width="1000px" height="500px" 	>
     <div class="col-md-5 p-lg-5 mx-auto my-5"></div>
     <h1>新着商品</h1>
    <div class="row">
    @foreach ($recently_products as $recently_product)
             <div class="col-3">
    <a href="{{ route('products.show', $recently_product) }}">
                     @if ($recently_product->image !== "")
                     <img src="{{ asset($recently_product->image) }}" class="img-thumbnail">
                     @else
                     <img src="{{ asset('img/dummy.png')}}" class="img-thumbnail">
                     @endif
                 </a>
                 <div class="row">
                     <div class="col-12">
                         <p class="samuraimart-product-label mt-2">
                             {{ $recently_product->name }}<br>
                             <label>￥{{ $recently_product->price }}</label>
                         </p>
                     </div>
                 </div>
             </div>
             @endforeach


 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
<ol class="carousel-indicators">
  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
</ol>

<div class="carousel-inner">

  <div class="carousel-item active">

    <img src="img/image.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      
      <h5>First slide label</h5>

    </div>
  </div>

  <div class="carousel-item">
    <img src="img/image.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
    </div>
  </div>

  <div class="carousel-item">
    <img src="img/image.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
    
    </div>
  </div>

</div>

<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</a>

<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</a>

</div>




@endsection