(function($){
  $(document).ready(function(){
    $('.main-carousel').flickity({
      cellAlign: '',
      contain: true,
      pageDots: false,
      autoPlay: 1500,
      pauseAutoPlayOnHover: true,
      lazyLoad: 1
    });
  });

})(jQuery)