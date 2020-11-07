/** 1
 *  home.php
 *  sondage **/
$(document).ready(() => {
	// SideNav Initialization
  $(".button-collapse").sideNav();

  new WOW().init();
});


$("#menu-toggle").click(function(e) {
e.preventDefault();
$("#wrapper").toggleClass("toggled");
});

$(document).ready(function(){
    function resizeNav() {
        $(".menu").css({"height": window.innerHeight});
        var radius = Math.sqrt(Math.pow(window.innerHeight, 2) + Math.pow(window.innerWidth, 2));
        var diameter = radius * 2;
        $(".nav-layer").width(diameter);
        $(".nav-layer").height(diameter);
        $(".nav-layer").css({"margin-top": -radius, "margin-left": -radius});
    }
    $(".nav-toggle").click(function() {
        $(".nav-toggle, .nav-layer, .menu").toggleClass("open");
    });
    $(window).resize(resizeNav);
    resizeNav();
});
/** /sondage */ 

/** 2
 * toutes les pages  
 * Smartsupp Live Chat script */
      var _smartsupp = _smartsupp || {};
      _smartsupp.key = '67ad60e5633735a15415f7a7c4b0552126cc0a80';

      window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
      })(document);
/** ./ intégration chat toutes les pages  Smartsupp Live Chat script */

/** 3
 * page equipe.php 
 * event.changeImage */
        const thumbs=document.querySelector(".thumb-img").children;

        function changeImage(event){
            document.querySelector(".pro-img").src=event.children[0].src

            for(let i=0; i<thumbs.length;i++)
            {
                thumbs[i].classList.remove("active");
            }
            event.classList.add("active");
        }
/** / event.changeImage */

function afficher_cacher(id)
{
    if(document.getElementById(id).style.visibility=="hidden")
    {
        document.getElementById(id).style.visibility="visible";
        document.getElementById('bouton_'+id).innerHTML='RÉDUIRE';
    }
    else
    {
        document.getElementById(id).style.visibility="hidden";
        document.getElementById('bouton_'+id).innerHTML='DÉCOUVRIR';
    }
    return true;
}