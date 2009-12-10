
var mySlide = new Fx.Slide($('about').getChildren('p')[0]);

$$('h3').addEvent('click', function(e){
      e = new Event(e);
      mySlide.toggle();
      e.stop();
});

