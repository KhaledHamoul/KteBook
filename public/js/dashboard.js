var menu = document.querySelector('.nav__list');
var burger = document.querySelector('.burger');
var doc = $(document);
var l = $('.scrolly');
var panel = $('.panel');
var vh = $(window).height();
var open = false ; 


var openMenu = function() {
  burger.classList.toggle('burger--active');
  menu.classList.toggle('nav__list--active');
  if(!open) document.getElementById("burger").style.zIndex = 5 ;
  else document.getElementById("burger").style.zIndex = -5 ;
  open = !open ;
};

// reveal content of first panel by default


var scrolly = function(e) {
  e.preventDefault();
  var target = this.hash;
  var $target = $(target);

  $('html, body').stop().animate({
      'scrollTop': $target.offset().top
  }, 300, 'swing', function () {
      window.location.hash = target;
  });
}

var init = function() {
  document.getElementById("burger").style.width = "100%";
  document.getElementById("haut").style.marginTop = "40px";
  document.getElementById("burger").style.zIndex = -5 ;
  burger.addEventListener('click', openMenu, false);
  window.addEventListener('scroll', scrollFx, false);
  window.addEventListener('load', scrollFx, false);
  $('a[href^="#"]').on('click',scrolly);
};

doc.on('ready', init);


function myFunction() {
    var w = window.innerWidth;

    if ( w < 640) {
        for (var i = 1 ; i< 8 ; i++ )
    document.getElementById("item"+ i ).style.width = "120%";
   // document.getElementById("burger").style.width = w +  "px";
    }else{
       for (var i = 1 ; i < 8 ; i++ )
    document.getElementById("item"+ i ).style.width =  400 + "px";
    }
    
}