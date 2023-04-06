<nav class="navbar navbar-expand-md navbar-light shadow-sm kakomon-header-container">
<link rel="stylesheet" href="{{ asset('\css\button.css') }}">
   <div class="container" >

   <div class="dropdown">
       <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
       </button>
         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
           <li><a class="dropdown-item" href="#">Action</a></li>
           <li><a class="dropdown-item" href="#">Another action</a></li>
           <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>

     <a class="navbar-brand" href="{{ route('index') }}">
       <img class="img" src="{{ asset('img/kakomon.com (6).png') }}" width="100" height="50" >
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
         <button type="button" class="btn btn-danger" href="{{ route('products.create') }}">出品する</button>
          
           </a>
          </li>


         @endguest
       </ul>
     </div>
   </div>
 </nav>