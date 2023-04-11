@extends('layouts.app')

@section('content')
  <div class="row">
        <div class="col-2">
           @component('components.sidebar')
           @endcomponent
         </div>

         <div class="col-9">
         <img src="img/kakomon.com (8).png" class="waseda-photo" width="1000px" height="500px" 	>
        
        <hr> 
         <img src="img/いらなくなった過去問を出品してみよう (1).png" class="picpic" width="1000px" height="200px">

         <img src="{{ asset('/css/img/いらなくなった過去問を出品してみよう (2).png') }}" class="waseda-pic"width="1000px" height="200px">

         <!-- 検索ボックス -->

         <form class="row1" method="POST" action="{{ route('products.search')}}">
               @csrf
             <div class="col">
                    <input type="text" name="keyword" input class="form-control kakomon-header-search-input" placeholder="授業名・教授名を検索してみよう！"  >
              </div>

              <div class="d-grid">
                     <button type="submit" value="検索" class="btn btn-danger" type="button">検索する</button>
              </div>
            
          </form>

          <hr>

          <!-- スマホの時のみ表示 -->
         <div class="categories"> 
             <h1 class=reproducts>学部一覧</h1> 
            <div class="col-12">
                  <div class="categories-collection1"> 
                         <a href=https://kakomon258.herokuapp.com/products?category=1>政治経済学部</a><br> 
                         <a href=https://kakomon258.herokuapp.com/products?category=2>法学部</a><br> 
                         <a href=https://kakomon258.herokuapp.com/products?category=3>教育学部</a><br>   
                   </div>  

                  <div class="categories-collection2"> 
                        <a href=https://kakomon258.herokuapp.com/products?category=4>商学部</a><br> 
                        <a href=https://kakomon258.herokuapp.com/products?category=5>社会科学部</a><br> 
                        <a href=https://kakomon258.herokuapp.com/products?category=6>国際教養学部</a><br> 
                   </div> 

                  <div class="categories-collection3"> 
                       <a href=https://kakomon258.herokuapp.com/products?category=7>創造理工学部</a><br> 
                      <a href=https://kakomon258.herokuapp.com/products?category=8>先進理工学部</a><br> 
                       <a href=https://kakomon258.herokuapp.com/products?category=9>基幹理工学部</a><br> 
                   </div> 

                  <div class="categories-collection4"> 
                      <a href=https://kakomon258.herokuapp.com/products?category=10>スポーツ科学部</a><br> 
                      <a href=https://kakomon258.herokuapp.com/products?category=11>人間科学部</a><br> 
                   <div> 
              </div>
         </div>
        <!-- ここからはpc・スマホ共通 -->

        <h1>新着商品</h1>
    <div class="PC">
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
        </div>
    </div>

        <!-- スマホver -->
     <div class="rowphone">
        <div class="row">
          @foreach ($recently_products as $recently_product)
            <div class="col-4">
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
        </div>
   </div>


        <!-- レスポンシブデザイン終り -->

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
      
                                <h5></h5>

                    </div>
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
                    


               <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>

                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                </a>

           </div>
    </div>
</div>
@endsection

