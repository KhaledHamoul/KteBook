@extends('dashboard')

@section('dashMenu')

 <nav class="nav_dash" >
  <div class="burger">
    <div class="burger__patty"></div>
  </div>

  <ul class="nav__list" >
    <li class="nav__item">
      <a href="#1" id="item1" class="nav__link c-blue" ><i class="fa fa-camera-retro"></i>Products</a>
    </li>
    <li class="nav__item">
      <a href="#2" id="item2" class="nav__link c-yellow scrolly"><i class="fa fa-bolt"></i>home</a>
    </li>
    <li class="nav__item">
      <a href="#3" id="item3" class="nav__link c-red"><i class="fa fa-music"></i>fuck config</a>
    </li>
    <li class="nav__item">
      <a href="#4" id="item4" class="nav__link c-green"><i class="fa fa-paper-plane"></i>khra</a>
    </li>
     <li class="nav__item">
      <a href="#4" id="item5" class="nav__link c-green"><i class="fa fa-paper-plane"></i>khra</a>
    </li>
     <li class="nav__item">
      <a href="#4" id="item6" class="nav__link c-green"><i class="fa fa-paper-plane"></i>khra</a>
    </li>
     <li class="nav__item">
      <a href="#4" id="item7" class="nav__link c-green"><i class="fa fa-paper-plane"></i>khra</a>
    </li>
  </ul>
</nav>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript" src="js/dashboard.js"></script>


@endsection