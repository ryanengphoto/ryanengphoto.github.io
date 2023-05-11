function openModal() {
    document.getElementById("myModal").style.opacity = "100";
    recognize();
    disableScroll();
    document.getElementById("myBtn").style.display="none";
    document.getElementById("myModal").style.pointerEvents = "all";
  }
  
  function closeModal() {
    document.getElementById("myModal").style.opacity="0";
    document.getElementById("myModal").style.pointerEvents = "none";
    enableScroll();
  }
  
  var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    recognize();
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.opacity = "0";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex-1].style.opacity = "1";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  }