let who=document.querySelector('.who'),
    what=document.querySelector('.what'),
    call=document.querySelector('.call');
    boutons=document.querySelector('.boutons');
    presentation=document.querySelector('.presentation');
    title=document.querySelector('.title');
    sarah=document.querySelector('.sarah');
    paragraphe1=document.querySelector('.paragraphe1');
    paragraphe2=document.querySelector('.paragraphe2');
    paragraphe3=document.querySelector('.paragraphe3');
    icones=document.querySelector('.icones');
    title2=document.querySelector('.title2');
    site1=document.querySelector('.site1');
    site2=document.querySelector('.site2');
    title3=document.querySelector('.title3');
    formulaire=document.querySelector('.formulaire');
    reseaux=document.querySelector('.liste_reseaux');
    part_two=document.querySelector('.part_two');
    part_three=document.querySelector('.part_three');
    part_four=document.querySelector('.part_four');
    confirmation=document.querySelector('.envoi');
    description1=document.querySelector('.description1');
    description2=document.querySelector('.description2');
    tl=document.querySelector('.tl');
    dm=document.querySelector('.dm');



//FONCTION QUI FAIT APPARAITRE OU DISPARAITRE LES SECTIONS AU SCROLL
//FONCTION

  function amountScrolled(pct) {
    const winHeight = window.innerHeight,
    docHeight = document.body.scrollHeight,
    scrollTop = window.pageYOffset,
    trackLength = docHeight - winHeight,
    pctScrolled = Math.floor(scrollTop/trackLength * 100);
    console.log(pctScrolled);
    if (pctScrolled > pct) {
      return true;
    }
}
document.addEventListener("onscroll", (e) => {
  amountScrolled(20);

});


window.onscroll = function () {
  if (amountScrolled (10)) {
    title.style.opacity="1";
    title.classList.add('bounce');
    paragraphe1.style.opacity="1";
    paragraphe1.classList.add('slit');
    paragraphe2.style.opacity="1";
    paragraphe2.classList.add('slit2');
    paragraphe3.style.opacity="1";
    paragraphe3.classList.add('slit3');
    sarah.style.opacity="1";
    sarah.classList.add("slit3")
    icones.style.opacity="1";
    icones.classList.add('slit3');
  }

  if (amountScrolled (50)) {
    title2.style.opacity="1";
    title2.classList.add('bounce');
    site1.style.opacity="1";
    site1.classList.add('slit')
    site2.style.opacity="1";
    site2.classList.add('slit2')

  if (amountScrolled(80)) {
    title3.style.opacity="1";
    title3.classList.add('bounce');
    formulaire.style.opacity="1";
    formulaire.classList.add("slit");
    reseaux.classList.add("slit2");
    reseaux.style.visibility="visible";
  }

    console.log(document.documentElement.scrollTop);
  }
}

$(".site1").hover(function(){
    tl.classList.add("jello-horizontal");
    description1.style.visibility="visible";
  },
	function () {
    tl.classList.remove("jello-horizontal");
    description1.style.visibility="hidden";
  }
  );

$(".site2").hover(function(){
  dm.classList.add("jello-horizontal");
  description2.style.visibility="visible";
  },
	function () {
    dm.classList.remove("jello-horizontal");
    description2.style.visibility="hidden";
  }
  );

  $(document).ready(function() {
    $('.who').click(function() {
      $('html, body').delay(500).animate({
        scrollTop: $($(this).attr('href')).offset().top
      }, 1000);
      return false;
    });

    $('.what').click(function() {
      $('html, body').delay(500).animate({
        scrollTop: $($(this).attr('href')).offset().top
      }, 1500);
      return false;
    });

    $('.call').click(function() {
      $('html, body').delay(500).animate({
        scrollTop: $($(this).attr('href')).offset().top
      }, 2000);
      return false;
    });


    if($(window).width() < 480){

    window.location = "mobile.sarahklewiec.000webhostapp.com"
    }
  });
