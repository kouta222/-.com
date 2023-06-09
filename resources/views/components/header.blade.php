<nav class="navbar navbar-expand-md navbar-light shadow-sm kakomon-header-container">
   <div class="container">
     <a class="navbar-brand" href="{{ url('/') }}">
       {{ config('app.name', 'Laravel') }}
     </a>
     <form class="row g-1">
       <div class="col-auto">
         <input class="form-control kakomon-header-search-input" placeholder="キーワード検索">
       </div>
       <div class="col-auto">
         <button type="submit" class="btn kakomon-header-search-button"><i class="fas fa-search kakomon-header-search-icon"></i></button>
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
           <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
         </li>
         <li class="nav-item mr-5">
           <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
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
         <li class="nav-item mr-5">
           <a class="nav-link" href="{{ route('products.create') }}">
           <i class="bi bi-plus-circle-fill"></i><label>出品する</label>
 
            </a>

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
         @endguest
       </ul>
     </div>
   </div>
 </nav>