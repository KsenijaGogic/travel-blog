//load in jQuery plugin dependencies (eg. flexslider, smoothScroll etc.) in this file

var container = document.querySelector('#homeContainer');
var msnry;
// initialize Masonry after all images have loaded
imagesLoaded( container, function() {
  msnry = new Masonry( container, {
  	itemSelector: 'article.post'
  });
});