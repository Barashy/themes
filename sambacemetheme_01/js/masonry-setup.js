/*
$('.masonry-style-area').masonry({
  // options
  itemSelector: '.masonry-item',
  columnWidth: 200
});
*/
$('.w-4/5').masonry({
  // set itemSelector so .grid-sizer is not used in layout
  itemSelector: '.masonry-grid-item',
  // use element for option
  columnWidth: '.w-1/3',
  percentPosition: true
})
