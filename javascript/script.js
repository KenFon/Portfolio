/* ---------------------------------------------------------------------------
              FONCTIONS POUR L'OUVERTURE DE LA PAGE
--------------------------------------------------------------------------- */
var chemin = document.location.href;

/*(function(){
/********************************************
      Fonction qui gére les portes
*********************************************

function preHodor(transformIndice, e){
  transformIndice += (e.deltaY/53)*4.5;
  document.documentElement.style.setProperty("--transformIndicedroite", `${transformIndice}vw`);
  document.documentElement.style.setProperty("--transformIndicegauche", `${-transformIndice}vw`)
  return transformIndice;
  }

function hodor() {
    var transformIndice = 0;
    /*fonction en variable pour permettre de stop l'event listener*
    var goHodor = function(e){
      transformIndice = preHodor(transformIndice, e);

      if(transformIndice >= 49.5){
        var door = [document.querySelector('.divgauche'), document.querySelector('.divdroite')];

        for(i=0; i<door.length;i++){
          door[i].remove();
        }

        window.removeEventListener("wheel", goHodor);
      }
    };

    window.addEventListener("wheel", goHodor);
}

/***********************************************
 Fonction qui gére le blur de la page principale
 ************************************************
function preBlurOff(blurIndice, e){
  blurIndice = blurIndice - (e.deltaY/53)
  document.documentElement.style.setProperty("--blurIndice", `${blurIndice}px`);
  return blurIndice;
}


function blurOff(){
    var blurIndice=9;
    var goBlur = function(e){
        blurIndice= preBlurOff(blurIndice, e);

        if(blurIndice <= 0 ){
          window.removeEventListener("wheel", goBlur);
        }
  };
    window.addEventListener("wheel", goBlur);
}

  hodor(); blurOff();
})();
 */

/* ----------------------------------------------------------------------------
              FONCTION POUR LA NAVBAR BURGER
------------------------------------------------------------------------------*/
(function(){
  document.addEventListener('DOMContentLoaded', () => {

  // Get all "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach( el => {
      el.addEventListener('click', () => {

        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const $target = document.querySelector(".navbar-brand");

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
        $target.classList.toggle('is-inactive');

      });
    });
  }

});
})();

/* ----------------------------------------------------------------------------
              FONCTION QUI GERE LE MODAL
------------------------------------------------------------------------------*/

(function(){
  if (chemin == "http://localhost/portfolio/home.php"){
  var recruter = document.body.querySelector('.panier');
  var modalActive= document.body.querySelectorAll('.modal');
    if(screen.width < 992){
      /*mobile*/
      recruter.addEventListener('click',function(){
        var verif = recruter.querySelector('img');
        if (verif.classList.contains("active")){
          modalActive[0].classList.add("is-active");
      }
      });
      var close=modalActive[0].querySelector(".modal-close");
      close.addEventListener('click', function(){
        modalActive[0].classList.remove("is-active")
      });
    }else{
    /*bureau*/
    recruter.addEventListener('click',function(){
      var verif = recruter.querySelector('img');
      console.log(verif);
      if (verif.classList.contains("active")){
        modalActive[1].classList.add("is-active");
    }
    });

    var closeUn=modalActive[1].querySelector(".modal-close") || null;
    if(closeUn != null){
    closeUn.addEventListener('click', function(){
      modalActive[1].classList.remove("is-active")
    });}

}
}
})();

/*******************************************************************************
              FONCTION QUI GERE LE PANIER
*******************************************************************************/
(function(){
    var actCart=document.body.querySelectorAll('button');
    for(i=0;i<actCart.length;i++){
      actCart[i].addEventListener("click",function(){
        var cart=document.body.querySelector('.panier img');
        cart.classList.remove('inactive');
        cart.classList.add('active');
      });
    }

})();


/******************************************************************************
            FONCTION QUI GERE LA PAGE PROJET MOBILE
******************************************************************************/
(function(){
var divs = document.querySelectorAll('.projet');
        divs.forEach(function(div){
            div.addEventListener('click',function(){

                let divs = document.querySelectorAll('.projet');
                for(i = 0; i< divs.length; i++){
                    if(divs[i] != div){
                        divs[i].classList.toggle('inactive');
                        divs[i].querySelector('aside').classList.toggle('inactive')
                    }
                }
                div.classList.toggle('active');
                div.querySelector('aside').classList.toggle('active');
            });
        });
})();

/******************************************************************************
            FONCTION QUI GERE LA PAGE PROJET DESKTOP
******************************************************************************/
(function(){
  if(chemin == "http://localhost/portfolio/projet.php"){
  var divProjet = document.querySelectorAll(".projs");


  function addProperty(rotate, left, top){
    document.documentElement.style.setProperty("--rotate",`${rotate}deg`);
    document.documentElement.style.setProperty("--left",`${left}%`);
    document.documentElement.style.setProperty("--top",`${top}%`);
  }

  function addText(y){
    var textProjet= document.querySelector(".textprojet").querySelectorAll("div");
    for(i=0;i<textProjet.length;i++){
      if(y==i){
        textProjet[i].classList.add('active');
        textProjet[i].classList.remove('inactive');
      }else if(!textProjet[i].classList.contains("inactive")&& y!=i){
        textProjet[i].classList.add("inactive");
      }else{
        textProjet[i].classList.remove('active');
      }
  }
}


    divProjet[0].addEventListener("click",function(){
      addProperty(0,44.95,7);
      addText(0);
    });

    divProjet[2].addEventListener("click",function(){
      addProperty(90,80,41.5);
      addText(2);
    });

    divProjet[3].addEventListener("click",function(){
      addProperty(180,44.95,80.5);
      addText(3);
    });

    divProjet[1].addEventListener("click",function(){
      addProperty(270,8,43.5);
      addText(1);
    });
}
})();
