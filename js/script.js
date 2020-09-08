jQuery(($) => {
  const effectiveObjs = $('.effective');
  $(window).scroll(() => {
    effectiveObjs.each(function(){
      let elemPos = $(this).offset().top;
      let scroll = $(window).scrollTop();
      let windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight * 0.75 ){
        $(this).addClass('is-active');
      }
    });
　});
});

