$(function () { // wait for document ready
    
  var bool=false
   

  // init
  // trigger animation only in big screens
  function resize() {
    if(window.innerWidth>767){
        if (!bool){
          createSchene()
          bool=!bool
        }
       
     }else{
       if (bool){
         console.log('reload')
        location.reload() 
        bool=!bool
       }
      
     }
}
  window.onresize = resize;
  var controller = new ScrollMagic.Controller({
    globalSceneOptions: {
      triggerHook: 'onLeave',
      duration: "100%" // this works just fine with duration 0 as well
      // However with large numbers (>20) of pinned sections display errors can occur so every section should be unpinned once it's covered by the next section.
      // Normally 100% would work for this, but here 200% is used, as Panel 3 is shown for more than 100% of scrollheight due to the pause.
    }
  });
  var slides = document.querySelectorAll("div.panel");
  resize();


  // get all slides
  
  // create scene for every slide
  function createSchene(){
    for (var i=0; i<slides.length; i++) {
      var scene = new ScrollMagic.Scene({
          triggerElement: slides[i]
        })
        .setPin(slides[i], {pushFollowers: false})
        // .addIndicators() // add indicators (requires plugin)
        .addTo(controller);
    }
  }
});

