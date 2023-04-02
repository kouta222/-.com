@extends('layouts.app')
 
 @section('content')
 <div class="row">
 <div class="col-2">
    @component('components.sidebar', ['categories' => $categories, 'major_categories' => $major_categories])
        @endcomponent
    </div>

     <div class="col-9">
        <div class="container">
            @if ($category !== null)
            <a href="{{ route('products.index') }}">トップ</a> >
                 <h1>検索結果</h1>
             @endif
         </div>
         <div>
            
            @sortablelink('price','値段順に並び替える')
        </div>

         <div class="container mt-4">
             <div class="row w-100">
                 @foreach($products as $product)
                 <div class="col-3">
                     <a href="{{route('products.show', $product)}}">
                        @if ($product->image !=="")
                        <img src="{{ asset($product->image) }}" class="img-thumbnail">
                        @else
                        <img src="{{ asset('img/dummu.png')}}" class="img-thumbnail">
                        @endif

                    </a>
                     <div class="row">
                         <div class="col-12">
                             <p class="kakomon-product-label mt-2">
                                 {{$product->name}}・{{$product->genre}}<br>
                                 <label>￥{{$product->price}}</label>
                             </p>
                         </div>
                     </div>
                 </div>
                 @endforeach
             </div>
         </div>
         {{ $products->appends(request()->query())->links() }}
     </div>
 </div>
 @endsection