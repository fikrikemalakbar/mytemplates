// menu header close navigation menu mobile
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("mainoffcanvas").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("mainoffcanvas").style.marginLeft= "0";
}
// desktop nav
const nDest = document.querySelector(".nDesc");
nDest.addEventListener('click', function(e) {
	const targetnDest = e.target;
	if(targetnDest.classList.contains('navADesc')) {
		const menuLinkActive = document.querySelector("ul li a.active");
		if(menuLinkActive !== null && targetnDest.getAttribute('href') !== menuLinkActive.getAttribute('href')) {
			menuLinkActive.classList.remove('active');
		}
		targetnDest.classList.add('active');
	}
});

// slider
const slider = document.querySelector(".slider");
const nextBtn = document.querySelector(".next-btn");
const prevBtn = document.querySelector(".prev-btn");
const slides = document.querySelectorAll(".slide");
const slideIcons = document.querySelectorAll(".slide-icon");
const numberOfSlides = slides.length;
var slideNumber = 0;

//image slider next button
nextBtn.addEventListener("click", () => {
  slides.forEach((slide) => {
    slide.classList.remove("active");
  });
  slideIcons.forEach((slideIcon) => {
    slideIcon.classList.remove("active");
  });

  slideNumber++;

  if(slideNumber > (numberOfSlides - 1)){
    slideNumber = 0;
  }

  slides[slideNumber].classList.add("active");
  slideIcons[slideNumber].classList.add("active");
});

//image slider previous button
prevBtn.addEventListener("click", () => {
  slides.forEach((slide) => {
    slide.classList.remove("active");
  });
  slideIcons.forEach((slideIcon) => {
    slideIcon.classList.remove("active");
  });

  slideNumber--;

  if(slideNumber < 0){
    slideNumber = numberOfSlides - 1;
  }

  slides[slideNumber].classList.add("active");
  slideIcons[slideNumber].classList.add("active");
});

//image slider autoplay
var playSlider;

var repeater = () => {
  playSlider = setInterval(function(){
    slides.forEach((slide) => {
      slide.classList.remove("active");
    });
    slideIcons.forEach((slideIcon) => {
      slideIcon.classList.remove("active");
    });

    slideNumber++;

    if(slideNumber > (numberOfSlides - 1)){
      slideNumber = 0;
    }

    slides[slideNumber].classList.add("active");
    slideIcons[slideNumber].classList.add("active");
  }, 6000);
}
repeater();

//stop the image slider autoplay on mouseover
slider.addEventListener("mouseover", () => {
  clearInterval(playSlider);
});

//start the image slider autoplay again on mouseout
slider.addEventListener("mouseout", () => {
  repeater();
});


// service home
var slidersHomeService = document.querySelectorAll('.sliderHomeService');
for (let i = 0; <= slidersHomeService.length; i++){
  let slidesHomeService = slidersHomeService[0].querySelectorAll('.slideHomeService');
  let wrapperHomeService = slidersHomeService[0].querySelector('.wrapperHomeService');
  wrapperHomeService.style.width = (slidesHomeService.length * slidesHomeService[0].clientWidth) + 'px';
  
}
  