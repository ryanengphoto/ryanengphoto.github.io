function recognize() {
    var myElement = document.getElementById('modal');

    // create a simple instance
    // by default, it only adds horizontal recognizers
    var mc = new Hammer(myElement);

    // listen to events...
    mc.on("swipeleft", function(ev) {
      plusSlides(1);
      });

      mc.on("swiperight", function(ev) {
        plusSlides(-1);
      });
    }