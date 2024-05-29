var slides = document.querySelectorAll(".slide");
var btns = document.querySelectorAll(".btn");
let currentSlide = 1;

var manualNav = function (manual) {
  slides.forEach((slide) => {
    slide.classList.remove("active");

    btns.forEach((btn) => {
      btn.classList.remove("active");
    });
  });
  slides[manual].classList.add("active");
  btns[manual].classList.add("active");
};

btns.forEach((btn, i) => {
  btn.addEventListener("click", () => {
    manualNav(i);
    currentSlide = i;
  });
});

var repeat = function (activeClass) {
  let active = document.getElementsByClassName("active");
  let i = 1;

  var repeater = () => {
    setTimeout(function () {
      [...active].forEach((activeSlide) => {
        activeSlide.classList.remove("active");
      });

      slides[i].classList.add("active");
      btns[i].classList.add("active");
      i++;

      if (slides.length == i) {
        i = 0;
      }
      if (i >= slides.length) {
        return;
      }
      repeater();
    }, 10000);
  };
  repeater();
};
repeat();

function App() {}

window.onload = function (event) {
  var app = new App();
  window.app = app;
};

App.prototype.processingButton = function (event) {
  const btn = event.currentTarget;
  const carruselList = event.currentTarget.parentNode;
  const track = event.currentTarget.parentNode.querySelector("#track");
  const carrusel = track.querySelectorAll(".carrusel");

  const carruselWidth = carrusel[0].offsetWidth;

  const trackWidth = track.offsetWidth;
  const listWidth = carruselList.offsetWidth;

  track.style.left == ""
    ? (leftPosition = track.style.left = 0)
    : (leftPosition = parseFloat(track.style.left.slice(0, -2) * -1));
  btn.dataset.button == "button-prev"
    ? prevAction(leftPosition, carruselWidth, track)
    : nextAction(leftPosition, trackWidth, listWidth, carruselWidth, track);
};

let prevAction = (leftPosition, carruselWidth, track) => {
  if (leftPosition > 0) {
    track.style.left = `${-1 * (leftPosition - carruselWidth)}px`;
  }
};

let nextAction = (
  leftPosition,
  trackWidth,
  listWidth,
  carruselWidth,
  track
) => {
  if (leftPosition < trackWidth - listWidth) {
    track.style.left = `${-1 * (leftPosition + carruselWidth)}px`;
  }
};

// selecionamos todos los elementos con la etiqueta "i" y almacenarlas en una lista de nodos llamada "stars"
//const stars = document.querySelectorAll(".stars i");
//let listNum=0;
//recorrer las estrallas ("stars") con la lista de nosdos
 //stars.forEach((star, index1) => {
  //añadir un evento en la lista donde se recorre una funcion donde el "click" cuando el evento se desencadena
  //star.addEventListener("click", () => {
    //stars.forEach((star, index2) => {
      //index1 >= index2
       
      //? star.classList.add("active")
        //: star.classList.remove("active");
        //listNum=index2;
    //});
  //});

//});
//console.log(listNum);

