<nav class="navbar navbar-expand-md navbar-light shadow-sm kakomon-header-container">
<link rel="stylesheet" href="{{ asset('\css\button.css') }}">
   <div class="container" >
     <a class="navbar-brand" href="{{ route('index') }}">
     <img src="{{ asset('img/kakomon.com (6).png') }}" width="100" height="50" >

     </a>
     <form class="row g-1" method="POST" action="{{ route('products.search')}}">
      @csrf
       <div class="col-auto">
         <input type="text" name="keyword" input class="form-control kakomon-header-search-input" placeholder="授業名・教授名を入力"  >
       </div>
       <div class="col-auto">
         <button type="submit" value="検索" class="btn kakomon-header-search-button"><i class="fas fa-search kakomon-header-search-icon"></i></button>
       </div>
     </form>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
       <span class="navbar-toggler-icon"></span>
     </button>


 
 
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <!-- Right Side Of Navbar -->
       <ul class="navbar-nav ms-auto mr-5 mt-2">
         <!-- Authentication Links -->


         


         @guest
         <li class="nav-item mr-5">
          <a class="nav-link" href="{{ route('login.guest') }}">ゲストログイン</a>
         </li>
           <a class="nav-link" href="{{ route('register') }}">会員登録</a>
         </li>
         <li class="nav-item mr-5">
           <a class="nav-link" href="{{ route('login') }}">ログイン</a>
         </li>
         <hr>
         <li class="nav-item mr-5">
           <a class="nav-link" href="{{ route('login') }}"><i class="far fa-heart"></i></a>
         </li>
         <li class="nav-item mr-5">
           <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-shopping-cart"></i></a>
         </li>
         @else
         <li class="nav-item mr-5">
           <a class="nav-link" href="{{ route('mypage') }}">
             <i class="fas fa-user mr-1"></i><label>マイページ</label>
           </a>
         </li>

          </li>
         <li class="nav-item mr-5">
          <a class="nav-link" href="{{ route('mypage.favorite') }}">
            <i class="far fa-heart"></i>
          </a>
         </li>
         <li class="nav-item mr-5">
           <a class="nav-link" href="{{ route('carts.index') }}">
             <i class="fas fa-shopping-cart"></i>
           </a>
         </li>
         <li class="nav-item mr-5">
           <a class="nav-link" href="{{ route('products.create') }}">
           <button class="waseda-button"  type="button">出品する</button>
           </a>
          </li>
         @endguest
       </ul>
     </div>
   </div>
 </nav>