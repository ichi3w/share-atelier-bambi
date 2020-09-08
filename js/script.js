jQuery(($) => {
  $(window).scroll(() => {
    $('.effect').each(function(){
      let elemPos = $(this).offset().top;
      let scroll = $(window).scrollTop();
      let windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight){
        $(this).addClass('is-active');
      }
    });
　});
});

